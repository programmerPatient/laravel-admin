@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading col-md-12" style="">
                    <p class="col-md-6"><strong style="font-size:20px;">添加收货地址</strong></p>
                </div>

                <div class="panel-body" style="padding-top:30px;">
                	<form class="form-horizontal" role="form" method="POST" action="{{ route('user.addlocation',['type'=>true]) }}" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); margin-top:20px; background-color:rgba(76, 175, 94,0.8);padding-top:40px;">
                		{{ csrf_field() }}
	                    <div class="form-group" style="">
		                    <label class="col-sm-2 col-md-offset-1 control-label">国家</label>
		                    <div class="col-sm-7">
			                    <input class="form-control" id="focusedInput" type="text" name="state" value="">
		                    </div>
	                    </div>
	                    <div class="form-group">
		                    <label class="col-sm-2 col-md-offset-1 control-label">省份</label>
		                    <div class="col-sm-7">
			                    <input class="form-control" id="focusedInput" type="text"  name="province" value="">
		                    </div>
	                    </div>
	                    <div class="form-group">
		                    <label for="inputPassword" class="col-sm-2 col-md-offset-1 control-label">
		                    	城市
		                    </label>
		                    <div class="col-sm-7">
			                    <input class="form-control" id="disabledInput" type="text" name="city" value="" placeholder="">
		                    </div>
	                    </div>
	                    <div class="form-group">
		                    <label for="inputPassword" class="col-sm-2 col-md-offset-1 control-label">
		                    	县城
		                    </label>
		                    <div class="col-sm-7">
			                    <input class="form-control" id="disabledInput" type="text" name="county" placeholder="" value="">
		                    </div>
	                    </div>
	                    <div class="form-group">
		                    <label for="inputPassword" class="col-sm-2 col-md-offset-1 control-label">
		                    	乡或镇
		                    </label>
		                    <div class="col-sm-7">
			                    <input class="form-control" id="disabledInput" type="text" name="village" placeholder="" value="">
		                    </div>
	                    </div>
	                    <div class="form-group">
		                    <label for="inputPassword" class="col-sm-2 col-md-offset-1 control-label">
		                    	详细地址
		                    </label>
		                    <div class="col-sm-7">
			                    <input class="form-control" id="disabledInput" type="text" name="detail" placeholder="" value="">
		                    </div>
	                    </div>
	                    <div class="form-group">
	                        <button class="btn btn-primary btn-add-to-cart col-md-1 col-md-offset-3" style="margin-bottom:20px;">提交</button>
	                    </div>
	                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection