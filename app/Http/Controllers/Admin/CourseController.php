<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Course;
use App\Helpers\ImageHelper;
use App\Helpers\MoodleClient;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::with('category')->get();
        return view('admin.courses.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        return view('admin.courses.edit', compact('course'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        $validated = $request->validate([
            'price' => ['required', 'numeric', 'min:1'],
            'instructor_name' => ['nullable', 'min:5', 'max:255'],
            'instructor_image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'about_instructor' => ['nullable', 'min: 50'],
        ]);

        $instructorImage = null;

        if ($request->hasFile('instructor_image')) {

            if ($course->instructor_image) {
                ImageHelper::instance()->deleteImage($course->instructor_image);
            }

            $instructorImage = ImageHelper::instance()->upload($request->file('instructor_image'), 'images');
        }

        $course->update(array_merge($validated, [
            'instructor_image' => $instructorImage,
        ]));

        return redirect()->route('admin.courses.index')->withSuccess('Your chnges has been saved');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        //
    }

    public function moodleCourses()
    {
        $categories = $this->getAllMoodleCategories();
        $courses = $this->getAllMoodleCourses();
        $view = view('partials.admin.courses-table', compact('courses'))->render();
        return response()->json(compact('view'));
    }

    public function cleanUpCourses()
    {
        // TODO We need to check if we have same course in our database as in moodle
        // because if our database has a category that is not in moodle, we need to delete it
        // and also if our database has a course that is not in moodle, we need to do the same

        $categories = Category::all();
        $courses = Course::all();
        $moodleCategories = MoodleClient::create()->fetchAllCategories();
        $moodleCourses = MoodleClient::create()->fetchAllCourses();

        // pluck all moodle category ids
        $moodleCategoryIds = [];

        foreach ($moodleCategories as $moodleCategory) {
            $moodleCategoryIds[] = $moodleCategory->id;
        }

        // compare categories and delete them if not found
        foreach ($categories as $category) {
            if (!in_array($category->m_category_id, $moodleCategoryIds)) {
                $category->delete();
            }
        }

        // pluck all moodle course ids
        $moodleCourseIds = [];

        foreach ($moodleCourses as $moodleCourse) {
            $moodleCourseIds[] = $moodleCourse->id;
        }

        // compare courses and delete them if not found
        foreach ($courses as $course) {
            if (!in_array($course->m_course_id, $moodleCourseIds)) {
                $course->delete();
            }
        }

        return response()->json(["message" => "Courses cleaned up"]);
    }

    private function getAllMoodleCategories()
    {
        try {
            $categories = MoodleClient::create()->fetchAllCategories();

            if ($categories && is_array($categories) && count($categories) > 0) {
                foreach ($categories as $category) {
                    Category::updateOrCreate([
                        'm_category_id' => $category->id
                    ], [
                        'name' => $category->name,
                        'idnumber' => $category->idnumber,
                        'description' => $category->description,
                        'descriptionformat' => $category->descriptionformat,
                        'parent' => $category->parent,
                        'coursecount' => $category->coursecount,
                        'visible' => $category->visible,
                        'visibleold' => $category->visibleold,
                        'timemodified' => Carbon::parse($category->timemodified),
                        'depth' => $category->depth,
                        'path' => $category->path,
                        'theme' => $category->theme,
                    ]);
                }
            }

            return Category::all();
        } catch (\Exception $ex) {
            Log::error($ex->getMessage());
            abort(500);
        }
    }

    protected function getAllMoodleCourses()
    {
        try {

            $courses = MoodleClient::create()->fetchAllCourses();

            if ($courses && is_array($courses) && count($courses) > 0) {
                foreach ($courses as $course) {
                    if ($course->categoryid > 0) {
                        Course::updateOrCreate([
                            'm_course_id' => $course->id
                        ], [
                            'category_id' => $course->categoryid,
                            'short_name' => $course->shortname,
                            'full_name' => $course->fullname,
                            'display_name' => $course->displayname,
                            'id_number' => $course->idnumber,
                            'summary' => $course->summary,
                            'm_created_at' => Carbon::parse($course->timecreated),
                            'm_modified_at' => Carbon::parse($course->timemodified),
                        ]);
                    }
                }
            }

            return Course::all();
        } catch (\Exception $ex) {
            Log::error($ex->getMessage());
            abort(500);
        }
    }
}
