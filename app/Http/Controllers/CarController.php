<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WareHouse;
use App\Models\carName;
use DB;
use App\Models\carType;
use App\Http\Controllers\Controller;

class CarController extends Controller
{
    public function __construct()
    {
        //指定动作只有登陆后的用户可以使用
        $this->middleware('auth', [            
            'except' => ['index']
        ]);
    }

    public function index(Request $request)
    {
    	$carDetail=WareHouse::findOrFail($request->id);
    	$carDetail->carNames=carName::find($carDetail->carNames_id)->Name;
    	$carDetail->carTypes=carType::find($carDetail->carTypes_id)->carType;
    	return view('user.homePage',['carDetail'=>$carDetail]);
    }



    public function all()
    {
    	$carAll=WareHouse::paginate(20);
        foreach($carAll as $key=>$val)
        {
            $val->carName = carName::find($val->carNames_id)->Name;
            $val->carType = carType::find($val->carTypes_id)->carType;
        }
        //$carAll=DB::select("select * from warehouses");
    	return view('start',['carAll'=>$carAll]);
    }

    public function select(Request $request)
    {
        switch($request->type)
        {
            case "价格":
                $data=Warehouse::where([
                    'price'=>$request->input
                ])->paginate();
                foreach($data as $key=>$val)
                {
                    $val->carName = carName::find($val->carNames_id)->Name;
                    $val->carType = carType::find($val->carTypes_id)->carType;
                }
                if(!$data)
                    return view('start',['carAll'=>$data])->with('select','对不起，未找到该价格的车型！！！');
                return view('start',['carAll'=>$data])->with('select','查找成功');
            break;
            case "车品牌":
                $carname=carName::where([
                    'Name'=>$request->input
                ])->get()->first();
                $data=Warehouse::where([
                    'carNames_id'=>$carname->id
                ])->paginate();
                foreach($data as $key=>$val)
                {
                    $val->carName = carName::find($val->carNames_id)->Name;
                    $val->carType = carType::find($val->carTypes_id)->carType;
                }
                if(!$data)
                    return view('start',['carAll'=>$data])->with('select','对不起，未找到该价格的车型！！！');
                return view('start',['carAll'=>$data])->with('select','查找成功');
            break;
            case "车型号":
                $cartype=carType::where([
                    'carType'=>$request->input
                ])->get()->first();
                $data=Warehouse::where([
                    'carTypes_id'=>$cartype->id
                ])->paginate();
                foreach($data as $key=>$val)
                {
                    $val->carName = carName::find($val->carNames_id)->Name;
                    $val->carType = carType::find($val->carTypes_id)->carType;
                }
                if(!$data)
                    return view('start',['carAll'=>$data])->with('select','对不起，未找到该价格的车型！！！');
                return view('start',['carAll'=>$data])->with('select','查找成功');
            break;
        }
    }
}
