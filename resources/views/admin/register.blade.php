@extends('layouts.app')

@section('content')

<div class="login-sec pt-60 pb-60 ">
    <div class="container">
        <div class="row align-items-center sing-border">
            <div class="col-md-5 text-center sign-box-border-after">
                <div class="sign-text">
                    <p>Already a member?</p>
                    <a href="#" class="sign-btn">Log In</a>
                    <p class="pt-20">Access exclusive partner offers, special deals and
                        insights from our team of experts</p>
                </div>
            </div>
            <div class="col-md-6 offset-md-1 ">
                <div class="sign-form">
                    <h1 class="section-heading">Sign Up</h1>
                    <p>We won’t spam your account. Set your permissions durind Sing in or any time afterward.</p>
                    <div class="social-login">
                        <a href="#link" class="bg-fa"><i class="icofont icofont-social-facebook"></i>Sign Up with
                            Facebook</a> <br>
                        <a href="#link" class="bg-gp"><i class="icofont icofont-social-google-plus"></i>Sign Up with
                            Google</a>
                    </div>
                    hello
                    <p class="pt-10">-- OR Sign Up with email --</p>
                    <form method="POST" action="{{ route('admin.register') }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-12 col-12">
                                <div class="form-group">
                                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                        name="name" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                        name="email" value="{{ old('email') }}" required>

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
                                        name="password" required>

                                    @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif

                                </div>
                            </div>
                        </div>
                        <button type="submit" class="sign-btn theme-bg">Sign Up</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
