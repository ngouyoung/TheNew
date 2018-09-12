@extends('layouts.app')
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link href="{{ asset('style/register.css') }}" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="{{asset('font-awesome/css/font-awesome.css')}}">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

@section('content')
    <div class="container">
        <div class="row">
            <div class="login-form">
                <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}
                    <p style="text-align: center; font-size: xx-large">Sign Up</p>
                    <div class="  form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <input style="width: 100%;height:35px;outline: none;border-radius: 5px"
                               class="form-control input-lg" placeholder="Username"
                               id="name" type="text" name="name"
                               value="{{ old('name') }}" required autofocus placeholder="Username">
                        @if ($errors->has('name'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                        @endif
                    </div>


                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                        <input style="width: 100%;height:35px;outline: none;border-radius: 5px" id="email"
                               class="form-control input-lg" type="text" name="email" value="{{ old('email') }}"
                               required
                               placeholder="E-mail Address"/>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                        {{--<input  type="password"  name="password" placeholder="Password" required="required">--}}
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <input id="password" type="password" name="password" required
                               placeholder="Password" style="width: 100%;height:35px;outline: none;border-radius: 5px"
                               class="form-control input-lg">
                        @if ($errors->has('password'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </div>


                    <div class="form-group">

                        <input class="form-control input-lg"
                               style="width: 100%;height:35px;outline: none;border-radius: 5px" id="password-confirm"
                               type="password"
                               name="password_confirmation" required placeholder="Confirm Password">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success  btn-block login-btn">Sign Up</button>
                    </div>
                    <div class="or-seperator"><b>or</b></div>
                    <div class="text-center social-btn row">
                        <a href="{{URL::route('login/facebook')}}" class="btn facebook btn-block"><i
                                    class="fa fa-facebook text"></i> Sign in with <b>Facebook</b></a>
                        <a href="{{URL::route('login/google')}}" class="btn google btn-block"><i
                                    class="fa fa-google"></i> Sign in with <b>Google</b></a>
                    </div>
                </form>
                <div class="text-center"><span class="text-muted">Don't have an account?</span> <a href="{{URL::route('login')}}">Sign In</a>
                </div>
            </div>
        </div>
    </div>

@endsection
