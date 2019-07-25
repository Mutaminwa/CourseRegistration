<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = ['title', 'body'];

    protected $primaryKey = 'CourseID';

    public function program()
    {
        return $this->belongsTo('App\Programs');
    }
    public function userCourses()
    {
        return $this->belongsToMany('App\User', 'UserCourses', 'UserID', 'CoursesID');
    }
}
