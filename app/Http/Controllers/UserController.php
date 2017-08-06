<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Users;
use Illuminate\Support\Facades\Auth;
use Session;
class UserController extends Controller
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
        $this->validate($request,[
            'username'      => 'required',
            'email'         => 'required|email',
            'password'      => 'required',
            'display_name'  => 'required'
        ]);

        $user = new Users();
        $user->email        = $request->input('email');
        $user->password     = bcrypt($request->input('password'));
        $user->username     = $request->input('username');
        $user->display_name = $request->input('display_name');
        $user->level        = 'lecturer';

        $imageName      = $request->input('username').'.'.$request->file('profile_picture')->getClientOriginalExtension();
        $request->file('profile_picture')->move(base_path().'/public/assets/users/images',$imageName);
        $user->profile_picture = $imageName;

        $user->save();
        
        Session::flash('flash_message', 'Task successfully added!');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id="")
    {
        //
        $user = new Users();
        $data = $user->all();

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
        Users::where('id',$id)->delete();
        return redirect()->back();
    }

    public function formAdd()
    {
        return view('user.content-form');
    }

    public function userList()
    {
        $user = new Users();
        $datas = $user->all();

        return view('user.content-list')->with('datas',$datas);
    }

    public function login()
    {
        return view('user.login');
    }

    public function authenticate(Request $request)
    {
        if (Auth::attempt(['email' => $request->input('username'), 'password' => $request->input('password')])) {
            return redirect()->intended('dashboard');
        } 
        else
        {
            return view('user.login');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->back();
    }
}
