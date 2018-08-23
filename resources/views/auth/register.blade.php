@extends('layouts.app')
<link href="{{ asset('style/register.css') }}" rel="stylesheet">
@section('content')
    <div class="container">
        <div class="row">
            <div id="login-box">
                <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}
                    <h1 class="Register">Register</h1>
                    <div class="login col-md-12">

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <div>
                                <input id="name" type="text" name="name"
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
                                <input id="email" type="text" name="email" value="{{ old('email') }}" required
                                       placeholder="E-mail Address"/>
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
                                <input id="password" type="password" name="password" required
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

                    </div>
                    <button type="submit" class="social-signin btn btn-primary">Register</button>
                    <div>
                        <p>OR</p>
                        <button class="social-signin facebook">
                            <a style="text-decoration:none;color: white" href="{{URL::route('login/facebook')}}">Continue
                                with facebook</a>
                        </button>
                        <button class="social-signin google">
                            <a style="text-decoration:none;color: white"
                               href="{{URL::route('login/google')}}">Continue with Google</a>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
