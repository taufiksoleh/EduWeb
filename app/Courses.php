<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    //
    protected $fillable = [
    	'course_id', 
    	'course_name', 
    	'course_type',
    	'course_admin',
    	'course_date'
    ];
}
