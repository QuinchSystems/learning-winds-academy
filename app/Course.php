<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'm_course_id',
        'category_id',
        'short_name',
        'full_name',
        'display_name',
        'id_number',
        'summary',
        'instructor_name',
        'instructor_image',
        'about_instructor',
        'price',
        'currency_code',
        'm_created_at',
        'm_modified_at',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'm_category_id');
    }

    public function app_users()
    {
        return $this->belongsToMany(AppUser::class, 'app_user_course', 'course_id', 'app_user_id');
    }

    public function getAboutInstructorHtmlAttribute() {
        $formattedAboutInstructor = nl2br($this->about_instructor);
        return preg_replace('@(https?://([-\w\.]+[-\w])+(:\d+)?(/([\w/_\.#-]*(\?\S+)?[^\.\s])?)?)@', '<a href="$1" target="_blank">$1</a>', $formattedAboutInstructor);
    }
}
