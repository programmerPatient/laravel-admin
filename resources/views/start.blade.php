@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
            	<div class="panel-heading">
            		<form class="form-inline" role="form">
                        <div class="form-group">
                            <label class="sr-only" for="name">名称</label>
                            <input type="text" class="form-control" id="name" placeholder="请输入名称">
                        </div>
                        <button type="submit" class="btn btn-primary">搜索</button>
                    </form>
            	</div>

                <div class="panel-body">
                	@foreach($carAll as $k=>$value)

                	<div class="col-md-3" style="border:1px solid #d1cfcf;padding:0;margin-top:30px;">
                		<div class="col-md-12"><img src="http://www.runoob.com/try/demo_source/cinqueterre.jpg" class="img-responsive center-block" alt="Cinque Terre"></div>
                		<div class="col-md-12" style="margin-top:20px;">价格：<span  style="color:red">￥{{ $value->price }}</span></div>
                		<div class="col-md-12" style="margin-top:20px; margin-bottom:20px;overflow:hidden;white-space:nowrap;text-overflow:ellipsis;">
                            <p><strong>品牌：</strong>{{ $value->carName }}</p>
                            <p><strong>型号：</strong>{{ $value->carType }}</p>
                        </div>
                		<div class="col-md-12" style="margin-bottom:10px;">
                	        <form class="form-inline col-md-8" role="form" method="POST" action="{{ route('shoppingCar',['warehouse_id'=>$value->id,'number'=>1]) }}" style="float:left;">
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-success">加入购物车</button>
                            </form>
                            <button type="submit" class="btn btn-info col-md-4" style="float:left;"><a href="{{ route('carDetail',['id'=>$value->id]) }}">详情</a></button>
                        </div>
                	    <div class="col-md-6" style="border-right:1px solid #d1cfcf;border-top:1px solid #d1cfcf;">销量</div>
                		<div class="col-md-6" style="border-top:1px solid #d1cfcf;">评价</div>
                	</div>
                	@endforeach
                	<div class="col-md-8 col-md-offset-3">
                    {{ $carAll->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection