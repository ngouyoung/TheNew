@extends('layouts.app')
{{--<link href="{{ asset('style/register.css') }}" rel="stylesheet">--}}


<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">
    .login-form {
        width: 340px;
        margin: 30px auto;
    }
    .login-form form {
        margin-bottom: 15px;
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
    .login-form h2 {
        margin: 0 0 15px;
    }
    .login-form .hint-text {
        color: #777;
        padding-bottom: 15px;
        text-align: center;
    }
    .form-control, .btn {
        min-height: 38px;
        border-radius: 2px;
    }
    .login-btn {
        font-size: 15px;
        font-weight: bold;
    }
    .or-seperator {
        margin: 20px 0 10px;
        text-align: center;
        border-top: 1px solid #ccc;
    }
    .or-seperator i {
        padding: 0 10px;
        background: #f7f7f7;
        position: relative;
        top: -11px;
        z-index: 1;
    }
    .social-btn .btn {
        margin: 10px 0;
        font-size: 15px;
        text-align: left;
        line-height: 24px;
    }
    .social-btn .btn i {
        float: left;
        margin: 4px 15px  0 5px;
        min-width: 15px;
    }
    .input-group-addon .fa{
        font-size: 18px;
    }
    .facebook{
        background: #32508E;
        color: white;
    }
    .google{
        background: rgb(66, 133, 244);
        color: white;
    }
    .text{}
</style>


@section('content')
    <div class="container">
        <div class="login-form">
            <form action="{{ route('login') }}" method="post">
                {{ csrf_field() }}

                <h2 class="text-center">Sign in</h2>


                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input  id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus   placeholder="Email">
                        @if ($errors->has('email'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                        <input id="password" type="password" class="form-control" name="password" required type="password"  placeholder="Password" >
                        @if ($errors->has('password'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success btn-block login-btn">Sign in</button>
                </div>
                <div class="clearfix">
                    <label class="pull-left checkbox-inline"><input type="checkbox" {{ old('remember') ? 'checked' : '' }}> Remember me</label>
                    <a href="{{ route('password.request') }}" class="pull-right text-success">Forgot Password?</a>
                </div>
                <div class="or-seperator"><i>or</i></div>

                <div class="text-center social-btn">
                    <a  href="{{URL::route('login/facebook')}}" class="btn facebook btn-block"><i class="fa fa-facebook text"></i> Sign in with <b>Facebook</b></a>
                    <a href="{{URL::route('login/google')}}" class="btn google btn-block"><i class="fa fa-google"></i> Sign in with <b>Google</b></a>
                </div>
            </form>
            <div class="hint-text small">Don't have an account? <a href="{{ route('register') }}" class="text-success">Sign Up Now!</a></div>
        </div>
    </div>
@endsection
