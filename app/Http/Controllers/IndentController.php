<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Indent;
use App\Models\carName;
use App\Models\carType;
use App\Models\Warehouse;
use App\Models\shoppingCar;
use Auth;

class IndentController extends Controller
{
    public function __construct()
    {
    	$this->middleware('auth');//规定只有登陆过的用户才能访问该控制器
    }

    public function index()
    {
    	$user=Auth::user();
    	$indent=Indent::where([
    		'users_id'=>$user->id
    	])->get();

    	foreach($indent as $key=>$value)
    	{
    		$warehouse=Warehouse::find($value->warehouses_id);
    		$value->carName=carName::find($warehouse->carNames_id)->Name;
    		$value->carType=carType::find($warehouse->carTypes_id)->carType;
    	}

    	return view('user.indexIndent',['indent'=>$indent]);
    }


    public function add(Request $request)
    {
    	$id=$request->id;
    	$length=count($id);
    	for($i=0;$i<$length;$i++)
    	{
    		$shoppingcar=shoppingCar::find($id[$i]);
    		$price=Warehouse::find($shoppingcar->warehouses_id)->price;
    		Indent::insert([
    			'users_id'=>$shoppingcar->users_id,
    			'warehouses_id'=>$shoppingcar->warehouses_id,
    			'number'=>$shoppingcar->number,
    		    'price'=>$price*$shoppingcar->number/100000
    		]);

    		shoppingCar::destroy($id[$i]);

    	}

    	//重定向到之前的界面
    	return redirect()->back()->withInput();
    }
}
