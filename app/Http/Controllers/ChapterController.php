<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Chapters;
use App\Courses;
use Session;
use Roumen\Disqus\DisqusServiceProvider;
use Disqus;
use Auth;
class ChapterController extends Controller
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

    public function detail($id,$chapter_name){

        $object     = new Chapters();
        $chapter    = $object->where('chapter_id',$id)->first();
        $getAll     = $object->where('chapter_id','!=',$id);
        return view('chapter.content-detail')->with(['chapter'=>$chapter,'datas'=>$getAll]);
    }

    public function chapterList($course_id){

        $data = Chapters::where('course_id',$course_id)->orderBy('chapter_order','asc')->orderBy('chapter_date','asc')->get();
        $course = Courses::where('course_id',$course_id)->first();

        return view('chapter.content-list')->with(['chapters'=>$data,'course_name'=>$course->course_name]);
    }

    public function chapterAdd(){
        $courses = new Courses();

        return view('chapter.content-form')->with('courses',$courses->all());
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
        //
        $this->validate($request,[
            'course_id'       => 'required',
            'chapter_name'    => 'required',
        ]);

        $CHAP_ID = 'CHAP'.str_random(10);

        $chapters = new Chapters();
        $chapters->chapter_id               = $CHAP_ID;
        $chapters->course_id                = $request->input('course_id');
        $chapters->chapter_name             = $request->input('chapter_name');
        $chapters->chapter_order            = $request->input('chapter_order');
        $chapters->chapter_description      = $request->input('chapter_description');
        $chapters->chapter_video            = $request->input('chapter_video');
        $chapters->chapter_learning_method  = $request->input('chapter_learning_method');

        $imageName      = $CHAP_ID.'.'.$request->file('chapter_image')->getClientOriginalExtension();
        $attachmentName = $CHAP_ID.'.'.$request->file('chapter_attachment')->getClientOriginalExtension();

        $request->file('chapter_image')->move(base_path().'/public/assets/chapters/images',$imageName);
        $request->file('chapter_attachment')->move(base_path().'/public/assets/chapters/attachments',$attachmentName);   

        $chapters->chapter_image            = $imageName;
        $chapters->chapter_attachment       = $attachmentName;

        $result = $chapters->save();
        
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
        $chapters = new Chapters();
        $data = $chapters->all();
        if(Auth::check())
        {
            return view('chapter.content-list')->with('chapters',$data);
        } 
        else {
            return view('chapters-non-auth')->with('chapters',$data);  
        }
        
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
        Chapters::where('chapter_id',$id)->delete();

        return redirect()->back();
    }

    public function download_attachment($id){
        $data = Chapters::where('chapter_id',$id)->first();

        $file= public_path(). "/assets/chapters/attachments/".$data->chapter_attachment;

        $rename_file = $data->chapter_name.' - '.$data->chapter_attachment;

        $headers = array(
              'Content-Type: application/pdf',
            );

        return response()->download($file, $rename_file, $headers);
    }
}
