@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading col-md-12" style="">
                    <p class="col-md-6"><strong style="font-size:20px;">收货地址列表</strong></p>
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('user.addlocation',['type'=>false]) }}">
                    	{{ csrf_field() }}
                        <button class="btn btn-primary btn-add-to-cart col-md-2 col-md-offset-4">增加新地址</button>
                    </form>
                </div>

                <div class="panel-body" style="padding-top:60px;">
                	@if(Session::has('success'))
                	<div class="alert alert-success">
                        <ul>
                            <li>{{ Session::get('success') }}</li>
                         </ul>
                    </div>
                	@endif
                	@if(Session::has('delete'))
                	<div class="alert alert-success">
                        <ul>
                            <li>{{ Session::get('delete') }}</li>
                         </ul>
                    </div>
                	@endif
                	@if(Session::has('add'))
                	<div class="alert alert-success">
                        <ul>
                            <li>{{ Session::get('add') }}</li>
                         </ul>
                    </div>
                	@endif
                	@foreach($location as $key=>$value)
                	<div style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); margin-top:20px; background-color:rgba(76, 175, 94,0.8);padding-top:40px;">
                	<form class="form-horizontal" role="form" method="POST" action="{{ route('user.location.amend',['id'=>$value->id]) }}">
                		{{ csrf_field() }}
	                    <div class="form-group" style="">
		                    <label class="col-sm-2 col-md-offset-1 control-label">国家</label>
		                    <div class="col-sm-7">
			                    <input class="form-control" id="focusedInput" type="text" name="state" value="{{ $value->state }}">
		                    </div>
	                    </div>
	                    <div class="form-group">
		                    <label class="col-sm-2 col-md-offset-1 control-label">省份</label>
		                    <div class="col-sm-7">
			                    <input class="form-control" id="focusedInput" type="text"  name="province" value="{{ $value->province }}">
		                    </div>
	                    </div>
	                    <div class="form-group">
		                    <label for="inputPassword" class="col-sm-2 col-md-offset-1 control-label">
		                    	城市
		                    </label>
		                    <div class="col-sm-7">
			                    <input class="form-control" id="disabledInput" type="text" name="city" value="{{ $value->city }}" placeholder="">
		                    </div>
	                    </div>
	                    <div class="form-group">
		                    <label for="inputPassword" class="col-sm-2 col-md-offset-1 control-label">
		                    	县城
		                    </label>
		                    <div class="col-sm-7">
			                    <input class="form-control" id="disabledInput" type="text" name="county" placeholder="" value="{{ $value->county }}">
		                    </div>
	                    </div>
	                    <div class="form-group">
		                    <label for="inputPassword" class="col-sm-2 col-md-offset-1 control-label">
		                    	乡或镇
		                    </label>
		                    <div class="col-sm-7">
			                    <input class="form-control" id="disabledInput" type="text" name="village" placeholder="" value="{{ $value->village }}">
		                    </div>
	                    </div>
	                    <div class="form-group">
		                    <label for="inputPassword" class="col-sm-2 col-md-offset-1 control-label">
		                    	详细地址
		                    </label>
		                    <div class="col-sm-7">
			                    <input class="form-control" id="disabledInput" type="text" name="detail" placeholder="" value="{{ $value->detail }}">
		                    </div>
	                    </div>
	                    <div class="form-group">
	                        <button class="btn btn-primary btn-add-to-cart col-md-1 col-md-offset-3" style="margin-bottom:20px;">修改数据</button>
	                    </div>
	                </form>
	                <form class="form-horizontal" role="form" action="{{ route('user.location',['id'=>$value->id]) }}" method="POST">
	                    {{ csrf_field() }}
	                    {{  method_field('DELETE')  }}
	                    <button class="btn btn-primary col-md-1 col-md-offset-5" style="">删除地址</button>
	                </form>
	                </div>
	                @endforeach
	                <div class="col-md-8 col-md-offset-3">
                    {{ $location->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection