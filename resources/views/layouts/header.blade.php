<header class="inner-page">
    <div class="header-top">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-xl-2 col-lg-3 col-sm-3 col-12 ">
                    <div class="logo">
                        <a href="{{ asset('/') }}"><img src="img/inner-logo.png" alt="Logo"></a>
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
                          @if (Route::has('login'))
                            <span class="links">
                                @auth
                                {{-- <a href="{{ url('/home') }}">Home</a> --}}
                                @else
                                <li><a href="{{ route('login') }}">Log in</a></li>


                                @if (Route::has('register'))
                                <li><a href="{{ route('register') }}">sign up</a></li>
                                @endif
                                @endauth
                            </span>
                           @endif
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

</header>