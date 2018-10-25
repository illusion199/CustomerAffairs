@extends('business.app')
@section('content')
{{-- <div class="login-sec pt-60 pb-345 ">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-4 offset-md-1 text-center">
                <div class="sign-text">
                    <p>Don't have an account?</p>
                    <a href="#" class="sign-btn">Sign Up Now</a>
                    <p class="pt-20">Access exclusive partner offers, special deals and
                        insights from our team of experts</p>
                </div>
            </div>
            <div class="col-md-6 offset-md-1">
                <div class="sign-form">
                    <h1 class="section-heading pb-30">Business Sign In</h1>

                    <form>
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="firstName">First Name</label>
                                    <input type="text" class="form-control" id="firstName">
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="lastName">Last name</label>
                                    <input type="last" class="form-control" id="lastName">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="Email">Email</label>
                                    <input type="last" class="form-control" id="Email">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="password-heading">
                                    <h3>Create a Password</h3>
                                    <p>Your password should be at least 6 characters</p>
                                </div>
                            </div>
                            <div class="col-12">

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1">
                                </div>
                            </div>
                            <div class="col-12">

                                <div class="form-group">
                                    <label for="confirmPassword">Confirm Password</label>
                                    <input type="password" class="form-control" id="confirmPassword">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-check check-link pb-15">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox"> I agree to
                                        <a href="#link">Service Provider's User Agreement</a> and
                                        <a href="#link"> Privacy Policy</a>
                                    </label>
                                </div>
                                <div class="form-check check-link pb-15">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox"> I'd like to receive special email offers and discounts
                                    </label>
                                </div>
                            </div>

                        </div>

                        <button type="submit" class="sign-btn btn-cancel mr-30">Cancel</button>
                        <button type="submit" class="sign-btn theme-bg">Create Account</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div> --}}
<div class="login-sec pt-60 pb-345 ">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-4 offset-md-1 text-center">
                <div class="sign-text">
                    <p>Don't have an account?</p>
                    <a href="#" class="sign-btn">Sign Up Now</a>
                    <p class="pt-20">Access exclusive partner offers, special deals and
                        insights from our team of experts</p>
                </div>
            </div>
            <div class="col-md-6 offset-md-1">
                <div class="sign-form">
                    <h1 class="section-heading pb-30">Business Sign In</h1>
                    <form method="POST" action="/business-ac/@yield('editId')">
                         {{csrf_field()}}
       {{--  @section('editMethod')
        @sho --}}
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="firstName">First Name</label>
                                    <input type="text" class="form-control{{ $errors->has('firstName') ? ' is-invalid' : '' }}" name="firstName" value="{{ old('name') }}" placeholder="First Name">
                                     
                                    @if ($errors->has('firstName'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('firstName') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="lastName">Last name</label>
                                    <input type="text" class="form-control{{ $errors->has('lastName') ? ' is-invalid' : '' }}" name="lastName" value="{{ old('name') }}" placeholder="Last name">

                                    @if ($errors->has('lastName'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('lastName') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('name') }}" placeholder="Email">

                                    @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="password-heading">
                                    <h3>Create a Password</h3>
                                    <p>Your password should be at least 6 characters</p>
                                </div>
                            </div>
                            <div class="col-12">

                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" value="{{ old('name') }}" placeholder="Password">

                                     @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="confirmPassword">Confirm Password</label>
                                    <input type="password" class="form-control{{ $errors->has('confirmPassword') ? ' is-invalid' : '' }}" name="password_confirmation" placeholder="Confirm Password">

                                    @if ($errors->has('confirmPassword'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('confirmPassword') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-check check-link pb-15">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" name="agreed" value="checked"> I agree to
                                        <a href="#link">Service Provider's User Agreement</a> and
                                        <a href="#link"> Privacy Policy</a>
                                    </label>
                                </div>
                                <div class="form-check check-link pb-15">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" name="spEmail" value="checked"> I'd like to receive special email offers and discounts
                                    </label>
                                </div>
                            </div>

                        </div>

                        <button type="button" class="sign-btn btn-cancel mr-30">Cancel</button>
                        <button type="submit" class="sign-btn theme-bg">Create Account</button>
                    </form>
                    {{--  <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-12 col-12">
                                <div class="form-group">
                                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                        name="name" value="{{ old('name') }}" placeholder="Name" required autofocus>

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
                                        name="email" placeholder="Email" value="{{ old('email') }}" required>

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
                                        name="password" placeholder="Password" required>

                                    @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif

                                </div>
                            </div>
                        </div>
                        <button type="submit" class="sign-btn theme-bg">Sign Up</button>
                    </form> --}}
                </div>
            </div>

        </div>
    </div>
</div>
    
@endsection