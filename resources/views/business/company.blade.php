@extends('business.app')
@section('content')
@if(session()->has('messege'))
<!-- <strong>{{session()->get('messege')}}</strong> -->

<div class="alert alert-success">
    <!--  <strong>Success!</strong> Indicates a successful or positive action. -->
    <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
    <strong>{{session()->get('messege')}}</strong>
</div>


@endif
<div class="slider-area ">
    <div class="slider-active">
        <div class="slider-wrapper text-center pl-15 pr-15 pt-115 pb-120" style="background-image: url(business/img/banner/banner.jpg); background-size: cover;background-repeat: no-repeat;height: auto; background-position: center;">
            <h1>Consumer Affairs Business helps <br>
                grow your business using customer reviews </h1>
            <p class="pt-5 pb-20">Registration is free, easy and gives you the ability to promote your business on
                Consumer Affairs</p>
            <div class="sing-up-login-btn">
                <a class=" login-btn btn-animation" href="{{ route('business.login') }}">Log In</a>
                <a class=" sign-up-btn btn-animation" href="{{ route('business.register') }}">Free Sign Up </a>
            </div>
        </div>
    </div>
</div>
<div class="promo text-center">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="promo-head">
                    <h2 class="pt-55 pb-20">Why Consumer Affairs?</h2>
                    <p class="pb-25">Your customers are everywhere online sharing their experiences and opinions with
                        the world. They passionately recount every interaction
                        <br> with friends and family, as well as the farthest reaches of their social circles. With
                        consumer affairs Business, you now have the tools to
                        <br> help each one of your customers tell the best story possible about your business and share
                        it with the world.
                        <br>
                        If you’re ready to give it a try for your business, <a href="{{ route('business.register') }}">
                            register </a> today.

                    </p>
                </div>
            </div>
        </div>
        <div class="row pb-70">
            <div class="col-sm-4 col-12">
                <div class="promo-box">
                    <div class="promo-icon"><i class="icofont icofont-touch"></i></div>
                    <h3 class="pb-5 pt-15 "> Tools</h3>
                    <p> From your free profile to a dedicated team to help you along the way, we have the help to
                        increase your business exposure.</p>
                </div>
            </div>
            <div class="col-sm-4 col-12">
                <div class="promo-box">
                    <div class="promo-icon"><i class="icofont icofont-law-document"></i></div>
                    <h3 class="pb-5 pt-15 "> Reviews
                    </h3>
                    <p> Gain more feedback about customer satisfaction levels using our free and customized review
                        collection tools.</p>
                </div>
            </div>
            <div class="col-sm-4 col-12">
                <div class="promo-box">
                    <div class="promo-icon"><i class="icofont icofont-envelope-open"></i></div>
                    <h3 class="pb-5 pt-15 "> Message Center</h3>
                    <p>
                        Gain more feedback about customer satisfaction levels using our free and customized review
                        collection tools.</p>
                </div>
            </div>

        </div>
    </div>
</div>
<div class="quick text-center">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="quick-section pt-40 pb-40">
                    <h3>We've created a <b> powerful </b> customer engagement platform and partnership to help
                        <br> meet marketing and customer engagement needs <b> quickly.</b></h3>
                    <p>We’ve Helped Thousands Of Businesses Benefit From Customer Reviews</p>
                    <a href="#link" class="help-btn">LET US <b>HELP YOU</b> TOO</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="service text-center pt-55 pb-60">
    <div class="container">
        <h3 class="service-heading pb-40">Opportunity is waiting for you</h3>
        <div class="row">
            <div class="col-sm-4">
                <div class="service-box">
                    <div class="service-icon"><i class="icofont icofont-users-social"></i></div>
                    <h3> 5 MILLION
                    </h3>
                    <p>members</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="service-box">
                    <div class="service-icon"><i class="icofont icofont-envelope-open"></i></div>
                    <h3> $15 billion

                    </h3>
                    <p> in transactions</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="service-box">
                    <div class="service-icon"><i class="icofont icofont-envelope-open"></i></div>
                    <h3> $315 million</h3>
                    <p> in revenue</p>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="testimonial pt-85 pb-90">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="testimonial-heading text-center pb-75">See what businesses are saying about us</h2>
                <div class="client-testimonial  owl-carousel">
                    <div class="client-message align-items-center">
                        <div class="client-img">
                            <img src="/business/img/tes1.png" alt="testimonial">
                        </div>
                        <div class="client-msg">
                            <p>“We feel that the Consumer Cffairs customer is a qualified customer. They already know
                                that
                                they’re looking for flooring and they’re interested in quality service, so we feel it
                                is
                                a
                                better lead when the customer comes in to us from Consumer Affairs.”</p>
                            <h3>
                                Harry Tishler - Tish Flooring
                            </h3>
                        </div>
                    </div>
                    <div class="client-message align-items-center">
                        <div class="client-img">
                            <img src="/business/img/tes1.png" alt="testimonial">
                        </div>
                        <div class="client-msg">
                            <p>“We feel that the Consumer Cffairs customer is a qualified customer. They already know
                                that
                                they’re looking for flooring and they’re interested in quality service, so we feel it
                                is
                                a
                                better lead when the customer comes in to us from Consumer Affairs.”</p>
                            <h3>
                                Harry Tishler - Tish Flooring
                            </h3>
                        </div>
                    </div>
                    <div class="client-message align-items-center">
                        <div class="client-img">
                            <img src="/business/img/tes1.png" alt="testimonial">
                        </div>
                        <div class="client-msg">
                            <p>“We feel that the Consumer Cffairs customer is a qualified customer. They already know
                                that
                                they’re looking for flooring and they’re interested in quality service, so we feel it
                                is
                                a
                                better lead when the customer comes in to us from Consumer Affairs.”</p>
                            <h3>
                                Harry Tishler - Tish Flooring
                            </h3>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<div class="connect pt-40 pb-40 text-center">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="connect-section">
                    <h3 class="mb-25">Are you ready to connect with our consumers?</h3>
                    <a href="#link" class="get-start-btn btn-animation">Get Started </a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
