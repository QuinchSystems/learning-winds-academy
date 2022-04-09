<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        "m_category_id",
        "name",
        "idnumber",
        "description",
        "descriptionformat",
        "parent",
        "coursecount",
        "visible",
        "visibleold",
        "timemodified",
        "depth",
        "path",
        "theme",
    ];

    public function courses()
    {
        return $this->hasMany(Course::class, 'category_id', 'm_category_id');
    }

    public function parent() {
        return $this->belongsTo(Category::class, 'parent');
    }
}
