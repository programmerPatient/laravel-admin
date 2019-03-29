<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\shoppingCar;
use App\Models\Warehouse;
use App\Models\carName;
use App\Models\carType;
use Auth;
class ShoppingCarController extends Controller
{
    public function __construct()
    {
    	$this->middleware('auth');//规定只有登陆过的用户才能访问该控制器
    }


    public function index()
    {
    	$user=Auth::user();
    	$all=shoppingCar::where(['users_id'=>$user->id])->get();
    	foreach($all as $key=>$value)
    	{
    		$value->warehouse=Warehouse::find($value->warehouses_id);
    		$value->carName=carName::find(Warehouse::find($value->warehouses_id)->carNames_id)->Name;
    		$value->carType=carType::find(Warehouse::find($value->warehouses_id)->carTypes_id)->carType;
    	}
    	return view('user.shoppingcar',['all'=>$all]);
    }



    public function delete(Request $request)
    {
    	shoppingCar::destroy($request->id);
    	return redirect('shoppingCar');

    }


    public function put(Request $request)
    {
    	$user=Auth::user();
    	shoppingCar::insert([
    		'users_id'=>$user->id,
    		'warehouses_id'=>$request->warehouse_id,
    		'number'=>$request->number
    	]);

    	return redirect('shoppingCar');
    }
}
