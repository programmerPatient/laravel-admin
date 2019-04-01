@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <p>{{ Auth::user()->name }}的购物车</p>
                </div>

                <form mothod="POST" class="form-horizontal" action="{{ route('user.add.indent') }}" role="form">
                <div class="panel-body">

                    @foreach($all as $k=>$value)

                    <div class="col-md-3" style="border:1px solid #d1cfcf;padding:0;margin-top:30px;">
                        <div class="col-md-12"><img src="http://www.runoob.com/try/demo_source/cinqueterre.jpg" class="img-responsive center-block" alt="Cinque Terre"></div>
                        <div class="col-md-12" style="margin-top:20px;">价格：<span  style="color:red">￥{{ $value->warehouse->price }}</span></div>
                        <div class="col-md-12" style="margin-top:20px; margin-bottom:20px;overflow:hidden;white-space:nowrap;text-overflow:ellipsis;">
                            <p><strong>品牌：</strong>{{ $value->carName }}</p>
                            <p><strong>型号：</strong>{{ $value->carType }}</p>
                        </div>
                        <div class="col-md-12">
                            <p>数量：{{ $value->number }}</p>
                        </div>
                        <div class="col-md-12" style="margin-bottom:10px;">
                            <a href="{{ route('carDetail',['id'=>$value->id]) }}" class="btn btn-primary btn-add-to-cart">详情</a>
                            <a href="{{ route('shoppingCar.delete',['id'=>$value->id]) }}" class="btn btn-primary btn-add-to-cart">删除</a>
                        </div>
                        <div class="col-md-12">
                                <input type="checkbox" name="id[]" value="{{ $value->id }}" style="cursor: pointer;">选择是否购买该产品
                        </div>
                    </div>
                    @endforeach
                    <div class="col-md-8 col-md-offset-3">
                    {{ $all->links() }}
                    </div>
                    
                    <div class="col-md-12" style="margin-top:30px;">
                        <button class="btn btn-primary btn-add-to-cart col-md-4 col-md-offset-4">提交</button>
                    </div>
                </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection