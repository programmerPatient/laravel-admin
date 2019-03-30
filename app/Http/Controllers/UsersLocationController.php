<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;
use Auth;

class UsersLocationController extends Controller
{
    public function __construct()
    {
    	$this->middleware('auth');//规定只有登陆过的用户才能访问该控制器
    }


    public function index(Request $request)
    {
    	$user=Auth::user();
    	$data=Location::where([
    		'users_id'=>$user->id
    	])->paginate(8);
    	if($request->success)
    	    return view('user.location',['location'=>$data,'data'=>null])->with('success','更新成功');
        else
            return view('user.location',['location'=>$data,'data'=>null]);
    }

    public function put(Request $request)
    {
        if($request->type){
            $user=Auth::user();
            $data=[
                'users_id'=>$user->id,
                'state'=>$request->state,
                'province'=>$request->province,
                'city'=>$request->city,
                'county'=>$request->county,
                'village'=>$request->village,
                'detail'=>$request->detail
            ];
            Location::insert($data);
            return redirect()->route('user.location')->with('add','添加成功');
        }else{
            return view('user.addLocation');
        }

    }


    public function delete(Request $request)
    {
        $location=Location::find($request->id)->delete();
        return redirect()->route('user.location')->with('delete','删除成功');

    }

    public function amend(Request $request)
    {
    	$datas=Location::where(['id'=>$request->id])->get()->first();
    	$data=[
    		'state'=>$request->state,
    		'province'=>$request->province,
    		'city'=>$request->city,
    		'county'=>$request->county,
    		'village'=>$request->village,
    		'detail'=>$request->detail
    	];
    	$datas->update($data);
    	return redirect()->route('user.location',['success'=>true])->with('success','更新成功');
    }
}
