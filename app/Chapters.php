<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chapters extends Model
{
    //
     //
    protected $fillable = [
    	'chapter_id', 
    	'course_id', 
    	'chapter_name',
    	'chapter_order',
    	'chapter_description',
    	'chapter_image',
    	'chapter_learning_method',
    	'chapter_date'
    ];

}
