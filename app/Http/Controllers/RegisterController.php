<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegisterController extends Controller
{
    public function index()
    {
    	return view('register');
    }


    public function create()
    {
    	// $user=User::create([
    	// 	'name'=>$data->name,
    	// 	'email'=>$data->email,
    	// 	'password'=>bcrypt($data->password)
    	// ]);

    	return redirect('/login');
    }
}
