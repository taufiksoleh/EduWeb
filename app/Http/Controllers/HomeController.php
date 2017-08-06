<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Courses;
use App\Chapters;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $course = Courses::all();
        return view('index')->with('courses',$course);
    }

    public function chapterList($course_id)
    {
        $chapters = Chapters::where('course_id',$course_id)->get();
        $courses = Courses::where('course_id',$course_id)->first();

        return view('chapter-list')->with(['chapters'=>$chapters,'courses'=>$courses]);
    }
}
