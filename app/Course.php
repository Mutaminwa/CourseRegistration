<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = ['title', 'body'];

    protected $primaryKey = 'CourseID';

}
