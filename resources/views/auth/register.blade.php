@extends('layouts.app')
<link href="{{ asset('style/register.css') }}" rel="stylesheet">
@section('content')
    <div class="container">
        <div class="row">
            <div id="login-box">

                <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}

                    <div class="left">
                        {{--Username--}}<h1 class="Register">Register</h1>
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <div>
                                {{--<input type="text" name="username" placeholder="Username" />--}}
                                <input id="name" type="text"  name="name"
                                       value="{{ old('name') }}" required autofocus placeholder="Username">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        {{--E-mail--}}
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div>
                                <input id="email" type="text" name="email" value="{{ old('email') }}" required placeholder="E-mail Address" />

                                {{--<input id="email" type="email" class="form-control" name="email"--}}
                                {{--">--}}

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        {{--Password--}}

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <div>
                                <input id="password" type="password"  name="password" required
                                       placeholder="Password">
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        {{--Confirm Password               --}}
                        <div class="form-group">
                            <div>
                                <input id="password-confirm" type="password"
                                       name="password_confirmation" required placeholder="Confirm Password">
                            </div>
                        </div>
                        {{--Register               --}}
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-2">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </div>
                    {{--Login With--}}
                    <div class="right">

                        <span class="loginwith">Sign in with<br />social network</span>
                        <button class="social-signin facebook"><a style="text-decoration:none" href="{{URL::route('login/facebook')}}">Log in with facebook</a></button>
                        <button class="social-signin twitter">Log in with​​​ Instagram</button>
                        <button class="social-signin google">Log in with Gmail</button>
                    </div>
                    <div class="or">OR</div>
                </form>
            </div>

            <div>
            </div>
        </div>

@endsection
