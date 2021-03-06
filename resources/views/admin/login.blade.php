@extends('layouts.app')

@section('content')


<div class="login-sec pt-60 pb-60 ">
    <div class="container">
       
        <div class="row">


            <div class="col-md-6 offset-md-3 align-items-center sing-border">
                <div class="sign-form">
                    <h5 class="p-3 text-center">Admin LogIn</h5>
                    @include('admin.includes.messages')

                    <form method="POST" action="{{ route('admin.login') }}">
                        @csrf
                        <div class="row">

                            <div class="col-12">
                                <div class="form-group">
                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                        name="email" value="{{ old('email') }}" placeholder="Email" required autofocus>

                                    @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-12">

                                <div class="form-group">
                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                        name="password" placeholder="password" required>

                                    @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-check check-link pb-15">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>

                                    </label>
                                    <span class="f-right">
                                        Forgot
                                        <a href="{{ route('password.request') }}">
                                            <b> {{ __('username') }}</b>
                                        </a>
                                        or

                                        <a href="{{ route('password.request') }}">
                                            <b> {{ __('password?') }}</b>
                                        </a>
                                    </span>
                                </div>

                            </div>
                        </div>

                        <button type="submit" class="sign-btn theme-bg">Log In</button>
                    </form>
                </div>
            </div>



        </div>
    </div>
</div>




@endsection
