<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class UsersController extends Controller
{
    public function __construct()
    {
    	$this->middleware('auth');//规定只有登陆过的用户才能访问该控制器
    }

    public function index()
    {
    	$user=Auth::user();
    	return view('user.show',['user'=>$user]);
    }

    public function amend(Request $request)
    {
    	// $this->validate($request, [
     //        'name' => 'required|max:50',
     //        'password' => 'required|confirmed|min:6'
     //    ]);
    	$user=Auth::user();
    	if($request->password1!==$request->password2)
    		return view('user.amend',['user'=>$user,'success'=>null]);
    	$user->update([
    		'name'=>$request->name,
    		'email'=>$request->email,
    		'password'=>bcrypt($request->password)
    	]);
    	return view('user.show',['user'=>$user,'success'=>'1']);
    }
}
