@extends('layouts.app')

@section('content')
{{-- <div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">{{ __('Login') }}</div>

            <div class="card-body">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-group row">
                        <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                name="email" value="{{ old('email') }}" required autofocus>

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

                    <div class="form-group row">
                        <div class="col-md-6 offset-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                    {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Login') }}
                            </button>

                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> --}}
{{-- <header class="inner-page">
    <div class="header-top">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-xl-2 col-lg-3 col-sm-3 col-12 ">
                    <div class="logo">
                        <a href="#link"><img src="img/inner-logo.png" alt="Logo"></a>
                    </div>
                </div>

                <div class="col-xl-2 col-lg-9 col-sm-9 col-12 order-xl-2">
                    <div class="top-link">
                        <a href="#link" class="top-link-design">Write a review</a>
                    </div>

                </div>
                <div class="col-xl-8  col-lg-12 col-12 order-xl-1">
                    <div class="mobile-nav"></div>
                    <div class="main-menu text-right">

                        <ul>
                            <li class="search-menu"><a href="#link"><i class="icofont icofont-ui-search"></i></a></li>
                            <li class="menu-item-has-children"><a href="#">Browse Categories</a>
                                <ul class="sub-menu">

                                    <li><a href="#">Home Style 1</a>
                                    <li><a href="#">Home Style 1</a>
                                    <li><a href="#">Home Style 1</a>
                                    <li><a href="#">Home Style 1</a>
                                    <li><a href="#">Home Style 1</a>
                                </ul>
                            </li>
                            <li><a href="#">News</a></li>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Log in</a></li>
                            <li class="current-menu-item"><a href="#">sign up</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="search-container inner-search">
                    <form action="#link">
                        <input type="text" placeholder="Search: company, service or category" name="search">
                        <button type="submit" class="search-banner">Search</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</header> --}}
@include('layouts.header');

<div class="login-sec pt-60 pb-60 ">
    <div class="container">
        <div class="row align-items-center sing-border">
            <div class="col-md-6 ">
                <div class="sign-form">
                    <h1 class="section-heading">Sign Up</h1>
                    <p>We won’t spam your account. Set your permissions durind Sing in or any time afterward.</p>
                    <div class="social-login">
                        <a href="#link" class="bg-fa"><i class="icofont icofont-social-facebook"></i>Sign In with
                            Facebook</a> <br>
                        <a href="#link" class="bg-gp"><i class="icofont icofont-social-google-plus"></i>Sign In
                            with
                            Google</a>
                    </div>
                    <p class="pt-10">-- OR Sign In with email --</p>

                    <form method="POST" action="{{ route('login') }}">
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
            <div class="col-md-5 offset-md-1 text-center sign-box-border-before">
                <div class="sign-text">
                    <p>Don't have an account?</p>

                    @if (Route::has('register'))
                    <a class="sign-btn" href="{{ route('register') }}">Sign Up Now</a>
                    @endif


                    <p class="pt-20">Access exclusive partner offers, special deals and
                        insights from our team of experts</p>
                </div>
            </div>


        </div>
    </div>
</div>




@endsection
