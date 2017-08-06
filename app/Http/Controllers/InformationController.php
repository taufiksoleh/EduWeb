<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Informations;
use Carbon\Carbon;
use Session;
use Auth;

class InformationController extends Controller
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
        //
        $this->validate($request,[
            'information_title'         => 'required',
            'information_description'   => 'required',
        ]);

        $info = new Informations();
        $info->information_title        = $request->input('information_title');
        $info->information_description  = $request->input('information_description');
        $info->information_date         = Carbon::now(); // Current Date
        $info->save();
        
        Session::flash('flash_message', 'Task successfully added!');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        Informations::where('information_id',$id)->delete();

        return redirect()->back();
    }

    public function formAdd()
    {
        return view('information.content-form');
    }

    public function informationList()
    {
        $datas = Informations::all();
        if(Auth::check())
        {
            return view('information.content-list')->with('datas',$datas);
        }
        else
        {
            return view('information-non-auth')->with('datas',$datas);
        }
    }

    public function detail($id)
    {
        $info = Informations::where('information_id',$id)->first();
        return view('information.content-detail')->with('info',$info);
    }
}
