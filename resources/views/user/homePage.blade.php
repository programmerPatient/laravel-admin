@extends('layouts.app')

@section('content')
<div class="container" id="home_page">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-body">
                	<div class="col-md-5 container-fluid">
                		<div class="col-md-12"><img src="http://www.runoob.com/try/demo_source/cinqueterre.jpg" class="img-responsive center-block" alt="Cinque Terre"></div>
                	</div>
                	<div class="col-md-7 container-fluid">
                		<h2 style="font-size: 24px;font-weight: bold;margin-bottom: 10px;">汽车品牌：{{ $carDetail->carNames }}</h2>
                		<p style="font-size: 16px;margin-bottom: 10px;">汽车型号：{{ $carDetail->carTypes }}</p>
                		<p style="background-color:#e9e9e9;"><label>价格：</label><em style="font-family: Arial;color:red;font-size:18px;margin-left:40px;">￥</em><span style="color:red;font-family: Arial;font-size: 24px;font-weight: bolder;text-decoration: none;vertical-align: middle;">{{ $carDetail->price }}</span></p>
                		<div>
                			<div class="col-md-4" style="border-right:1px solid #d1cfcf;border-top:1px solid #d1cfcf;border-bottom:1px solid #d1cfcf;text-align:center;padding:5px 0px;font-size:8px;">
                				累计销量
                			</div>
                			<div class="col-md-4" style="border-right:1px solid #d1cfcf;border-top:1px solid #d1cfcf;border-bottom:1px solid #d1cfcf;text-align:center;padding:5px 0px;font-size:8px;">
                				累计评价
                			</div>
                			<div class="col-md-4" style="border-top:1px solid #d1cfcf;border-bottom:1px solid #d1cfcf;text-align:center;padding:5px 0px;font-size:8px;">
                				评分
                			</div>
                		</div>
                        <form class="form-horizontal col-md-12" role="form" method="POST" action="{{ route('shoppingCar',['warehouse_id'=>$carDetail->id]) }}">
                             {{ csrf_field() }}
                        	<div class="form-group">
                                <label class="control-label">数量：</label>
                                <input class="form-control" type="text" value="1" name="number" placeholder="">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-success btn-favor">❤ 收藏</button>
                                <button class="btn btn-primary btn-add-to-cart">加入购物车</button>
                            </div>
                        </form>
                	</div>
                </div>
                <div class="panel-body">
                	
                </div>
            </div>
        </div>
    </div>
</div>
@endsection