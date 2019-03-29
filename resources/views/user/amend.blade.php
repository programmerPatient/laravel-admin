@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <p><strong style="font-size:20px;">修改用户：{{ Auth::user()->name }}的个人信息</strong></p>
                </div>

                <div class="panel-body">
                    @if (!$success)
                    <div class="alert alert-danger">
                        <ul>
                            <li>两次输入的账号密码不一致，请重新输入！！</li>
                         </ul>
                    </div>
                    @endif
                	<form class="form-horizontal" role="form" method="POST" action="{{ route('user.information') }}">
                		{{ csrf_field() }}
	                    <div class="form-group">
		                    <label class="col-sm-1 col-md-offset-1 control-label">姓名</label>
		                    <div class="col-sm-8">
			                    <input class="form-control" id="focusedInput" type="text" name="name" value="{{ Auth::user()->name }}">
		                    </div>
	                    </div>
	                    <div class="form-group">
		                    <label class="col-sm-1 col-md-offset-1 control-label">邮箱</label>
		                    <div class="col-sm-8">
			                    <input class="form-control" id="focusedInput" type="text"  name="email" value="{{ Auth::user()->email }}">
		                    </div>
	                    </div>
	                    <div class="form-group">
		                    <label for="inputPassword" class="col-sm-1 col-md-offset-1 control-label">
		                    	密码
		                    </label>
		                    <div class="col-sm-8">
			                    <input class="form-control" id="disabledInput" type="password" name="password1" value="{{ old('password') }}" placeholder="">
		                    </div>
	                    </div>
	                    <div class="form-group">
		                    <label for="inputPassword" class="col-sm-1 col-md-offset-1 control-label">
		                    	确认密码
		                    </label>
		                    <div class="col-sm-8">
			                    <input class="form-control" id="disabledInput" type="password" name="password2" placeholder="">
		                    </div>
	                    </div>
	                    <button class="btn btn-primary btn-add-to-cart col-md-1 col-md-offset-8"><a href="">提交</a></button>
	                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection