<?php

namespace App\Http\Controllers;

use App\AppUser;
use App\Category;
use App\Constant;
use App\Course;
use App\Helpers\MoodleClient;
use App\Mail\UserContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('app.index');
    }

    public function about()
    {
        $courseCount = Course::count();
        $studentCount = AppUser::count();
        return view('app.about', compact('courseCount', 'studentCount'));
    }

    public function contact()
    {
        return view('app.contact');
    }

    public function privacy()
    {
        return view('app.privacy');
    }

    public function terms()
    {
        return view('app.terms');
    }

    public function postContact(Request $request)
    {
        $Validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'message' => 'required|string|max:255',
        ]);

        if ($Validator->fails()) {
            return response()->json(["message" => $Validator->errors()->first()], 422);
        }

        Mail::to(config('mail.contact.address'))
            ->send(new UserContactFormMail($request->name, $request->email, $request->message));

        return response()->json(null);
    }

    public function category($categoryId)
    {
        $category = Category::with(['courses' => function ($query) {
            $query->where('price', '>', 0);
        }])->find($categoryId);
        return view('app.category', compact('category'));
    }

    public function renderCourseBuyModalForm($courseId)
    {
        $course = Course::find($courseId);
        return view('partials.app._course-buy-modal-form', compact('course'));
    }

    public function course(Course $course)
    {
        return view('app.course', compact('course'));
    }

    public function profile()
    {
        $user = AppUser::with('courses')->whereId(auth('app_users')->id())->first();

        return view('app.profile', compact('user'));
    }

    public function purchaseCourse(Course $course, Request $request)
    {
        $user = AppUser::with('courses')->whereId(auth('app_users')->id())->first();

        if ($user->courses->contains($course->id)) {
            return response()->json(["message" => "You already purchased this course"], 422);
        }

        $enrolments = [
            "enrolments" => [
                [
                    "roleid" => Constant::MOODLE_ROLE_STUDENT,
                    "userid" => $user->m_userid,
                    "courseid" => $course->m_courseid,
                ]
            ],
        ];

        try {
            MoodleClient::create()->assignMoodleCourse($enrolments);
            $user->courses()->attach($course->id);
            return response()->json(null);
        } catch (\Exception $e) {
            return response()->json(["message" => "Something went wrong"], 422);
        }
    }
}
