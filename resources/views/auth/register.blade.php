@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                    name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                    name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                    name="password" required>

                                @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        {{-- <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm
                                Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                                    required>
                            </div>
                        </div> --}}

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- @include('layouts.header');

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
                    <p class="pt-10">-- OR Sign Up with email --</p>
                    <form>
                        <div class="row">
                            <div class="col-md-12 col-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="Name" placeholder="Name">
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <input type="last" class="form-control" id="Email" placeholder="Email">
                                </div>
                            </div>

                            <div class="col-12">

                                <div class="form-group">
                                    <input type="password" class="form-control" id=Password" placeholder="Passwoed">
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="sign-btn theme-bg">Sign Up</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div> --}}
@endsection
