@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <p><strong style="font-size:20px;">用户：{{ Auth::user()->name }}的个人信息</strong></p>
                </div>

                <div class="panel-body">
                	<form class="form-horizontal" role="form">
	                    <div class="form-group">
		                    <label class="col-sm-1 col-md-offset-1 control-label">姓名</label>
		                    <div class="col-sm-8">
			                    <input class="form-control" id="focusedInput" type="text"  value="{{ $user->name }}" disabled>
		                    </div>
	                    </div>
	                    <div class="form-group">
		                    <label class="col-sm-1 col-md-offset-1 control-label">邮箱</label>
		                    <div class="col-sm-8">
			                    <input class="form-control" id="focusedInput" type="text"  value="{{ $user->email }}" disabled>
		                    </div>
	                    </div>
	                    <div class="form-group">
		                    <label for="inputPassword" class="col-sm-1 col-md-offset-1 control-label">
		                    	密码
		                    </label>
		                    <div class="col-sm-8">
			                    <input class="form-control" id="disabledInput" value="password" type="password" placeholder="{{ $user->password }}" disabled>
		                    </div>
	                    </div>
	                </form>
	                <button class="btn btn-primary btn-add-to-cart col-md-1 col-md-offset-8"><a href="{{ route('user.amend') }}">修改</a></button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection