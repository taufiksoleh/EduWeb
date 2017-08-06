<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Courses;
use Auth;
use Session;
class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $this->validate($request,[
            'course_id'      => 'required',
            'course_name'    => 'required',
        ]);

        $courses = new Courses();
        $courses->course_id    = $request->input('course_id');
        $courses->course_name  = $request->input('course_name');
        $courses->course_type  = $request->input('course_type');
        $courses->course_admin = 'admnistrator';
        $courses->course_description = $request->input('course_description');

        $imageName             = $request->input('course_id').'.'.$request->file('course_image')->getClientOriginalExtension();

        $request->file('course_image')->move(base_path().'/public/assets/courses/images',$imageName);

        $courses->course_image = $imageName;

        $courses->save();
        
        Session::flash('flash_message', 'Task successfully added!');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
        $data = Courses::all();

        if(Auth::check())
        {
            return view('course.content-list')->with('courses',$data);
        }
        else
        {
            return view('courses-non-auth')->with('courses',$data);
        }
    }

    public function courseList($id){
        $course = new Courses();
        $data = $course->all();

        return view('')->with('users',$data);   
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Courses::where('course_id',$id)->delete();

        return redirect()->back();
    }
}
