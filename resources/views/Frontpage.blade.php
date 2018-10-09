<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    {{--
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900" rel="stylesheet">
    --}}
    <link rel="stylesheet" href="/css/custom/meanmenu.min.css">
    <link rel="stylesheet" href="/css/custom/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
    <link rel="stylesheet" href="/css/custom/icofont.css">
    <link rel="stylesheet" href="/css/custom/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/custom/default.css">
    <link rel="stylesheet" href="/css/custom/jquery-ui.css">
    <link rel="stylesheet" href="/css/custom/style.css">
    <link rel="stylesheet" href="/css/custom/media.css">
    <!-- Styles -->
    {{-- <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

    </style>
    --}}
</head>

<body>
    <div class="flex-center position-ref full-height">

        <div class="content">
            <header style="background-image: url(img/banner.jpg); background-size: cover;background-repeat: no-repeat;height: auto; ">
                <div class="header-top">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col-xl-2 col-lg-3 col-sm-3 col-12 ">
                                <div class="logo">
                                    <a href="#link"><img src="img/Logo.png" alt="Logo"></a>
                                </div>
                            </div>

                            <div class="col-xl-4 col-lg-9 col-sm-9 col-12 order-xl-2">
                                <div class="top-link">
                                    <a href="#link" class="top-link-design">Write a review</a>
                                    <a href="#link" class="top-link-design">For Business</a>
                                </div>

                            </div>
                            <div class="col-xl-6  col-lg-12 col-12 order-xl-1">
                                <div class="mobile-nav"></div>
                                <div class="main-menu text-right">
                                    <ul>
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
                                        {{-- <li><a href="#">Log in</a></li>
                                        <li><a href="#">sign up</a></li> --}}
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider-area">
                    <div class="slider-active">
                        <div class="slider-wrapper text-center pl-15 pr-15 pt-190 pb-220">

                            <h3>Know better, choose better.</i>

                            </h3>
                            <p class="pb-25">Check ratings of businesses, read reviews & buy.</p>
                            <div class="search-container">
                                <form action="#link">
                                    <input type="text" placeholder="Search: company, service or category" name="search">
                                    <button type="submit" class="search-banner">Search</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </header>


            <div class="promo-sec text-center pt-40 pb-40">
                <div class="container ">
                    <div class="row bg-white shadow">
                        <div class="col-md-4">
                            <div class="promo  pt-40 pb-40">
                                <img src="img/promo1.png" alt="Promo">
                                <b> 90%</b>
                                <h5> Reduction in sourcing times</h5>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="promo pt-40 pb-40">
                                <img src="img/promo2.png" alt="Promo">
                                <b> 50%</b>
                                <h5> Reduction in procurement ​administration</h5>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="promo pt-40 pb-40">
                                <img src="img/promo3.png" alt="Promo">
                                <b> 3%</b>
                                <h5> Savings of total spend</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="category-section pt-30">
                <div class="container">
                    <div class="section-title text-center">
                        <h3>Top Searches</h3>
                    </div>
                    <div class="section-pra text-center">
                        <p> Make smarter, faster and more informed decisions by quickly understanding the reviews and
                            <br>accessing
                            the
                            information that matters most to you.</p>
                    </div>
                    <div class="row">
                        <div class="col-12 text-right pb-20">
                            <a href="#link" class="see-all ">
                                See all
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <a href="link" class="cat-sec align-items-center">
                                <img src="img/cat1.jpg" alt="Category">
                                <span> Moving Companies</span>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">

                            <a href="link" class="cat-sec align-items-center">
                                <img src="img/cat2.jpg" alt="Category">
                                <span> Personal Loans</span>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <a href="link" class="cat-sec align-items-center">
                                <img src="img/cat3.jpg" alt="Category">
                                <span> Medical Alerts</span>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <a href="link" class="cat-sec align-items-center">
                                <img src="img/cat4.jpg" alt="Category">
                                <span> Home Security</span>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <a href="link" class="cat-sec align-items-center">
                                <img src="img/cat5.jpg" alt="Category">
                                <span> Hearing Aids</span>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <a href="link" class="cat-sec align-items-center">
                                <img src="img/cat6.jpg" alt="Category">
                                <span> Furniture Stores</span>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <a href="link" class="cat-sec align-items-center">
                                <img src="img/cat7.jpg" alt="Category">
                                <span> Travel Insurance</span>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <a href="link" class="cat-sec align-items-center">
                                <img src="img/cat8.jpg" alt="Category">
                                <span> Dog Food</span>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <a href="link" class="cat-sec align-items-center">
                                <img src="img/cat9.jpg" alt="Category">
                                <span> Auto Insurance Companies</span>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <a href="link" class="cat-sec align-items-center">
                                <img src="img/cat10.jpg" alt="Category">
                                <span> Home Warranties</span>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <a href="link" class="cat-sec align-items-center">
                                <img src="img/cat11.jpg" alt="Category">
                                <span> Dental Insurance</span>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <a href="link" class="cat-sec align-items-center">
                                <img src="img/cat12.jpg" alt="Category">
                                <span> Credit Repair</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cat-angle">
                <img src="img/angle.png" alt="angle">
            </div>

            <div class="home-review">
                <div class="container">
                    <div class="smallTitle pb-20">
                        Review of the Day
                    </div>
                    <div class="row ">
                        <div class="col-xl-8 col-12">
                            <div class="recent-review d-flex align-items-center">
                                <div class="review-img">
                                    <img src="img/r1.png" alt="Recent">
                                </div>
                                <div class="recent-review-text">
                                    <img src="img/star.png" alt="Srat"> <span>2,344 Reviews</span> <br>
                                    <a href="#link">
                                        Furniture Tip-Overs: A Hidden Hazard in Your Home
                                    </a> <br>
                                    <p>Some makers do it right, but children still die from unstable dressers. And
                                        there are no
                                        laws
                                        to help prevent future tragedies.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-12">
                            <div class="viewAllcategory">
                                <h3>Research by category</h3>
                                <p>Some makers do it right, but children still die from unstable dressers. And there
                                    are no laws to
                                    help prevent future tragedies.</p>
                                <a href="#link">VIEW ALL CATEGORIES</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <hr>

            <div class="process-section pt-60 pb-100">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-7 col-12">
                            <div class="process-details">
                                <h3>Our Editorial Process</h3>
                                <ul class="pl-60 pr-100">
                                    <li>
                                        <h2>First</h2>
                                        <p>our editors research what we consider to be the most essential qualities of
                                            a product or
                                            service.</p>
                                    </li>
                                    <li>
                                        <h2>Second</h2>
                                        <p>we build out the consideration set. From household brands to new startups,
                                            we aim to be
                                            as thorough as we can.</p>
                                    </li>
                                    <li>
                                        <h2>Finally</h2>
                                        <p>our editors rank the top companies based on factors like price, quality &
                                            customer
                                            satisfaction.</p>
                                    </li>
                                </ul>


                            </div>
                            <a href="#link" class="write-review">Write a review</a>
                        </div>
                        <div class="col-lg-5 col-12">
                            <div class="process-img">
                                <img src="img/process.png" alt="Process">
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="service text-center pt-100 pb-70">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-12">
                            <div class="service-box">
                                <img src="img/s1.png" alt="Service">
                                <h3> One MILLION

                                </h3>
                                <p> REVIEWS</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-12">
                            <div class="service-box">
                                <img src="img/s2.png" alt="Service">

                                <h3>
                                    3,000 BRANDS

                                </h3>
                                <p> To Know better</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-12">
                            <div class="service-box">
                                <img src="img/s3.png" alt="Service">

                                <h3>300 CATEGORIES
                                </h3>
                                <p> To choose better.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="container pb-75 pt-75">
                <div class="row">
                    <div class="tab-category">
                        <ul>
                            <li class="tab-category-product-name active">
                                Product by Name
                            </li>
                            <li class="tab-category-product-brand">
                                Product by Brands
                            </li>
                        </ul>
                    </div>
                    <div class="cat-menu-tabs cat-menu-tabs-name active" class="mb-70">
                        <ul>
                            <li><a href="#tabs-n1">A - D</a></li>
                            <li><a href="#tabs-n2">E - H</a></li>
                            <li><a href="#tabs-n3">I - L</a></li>
                            <li><a href="#tabs-n4">M - P</a></li>
                            <li><a href="#tabs-n5">Q - T</a></li>
                            <li><a href="#tabs-n6">U - Z</a></li>
                        </ul>
                        <div id="tabs-n1">

                            <div class="cat-sub-menu">
                                <ul>
                                    <li>A</li>
                                    <li><a href="#link"> Air conditioners </a></li>
                                    <li><a href="#link">Air Filters </a></li>
                                    <li><a href="#link">Air Fryers </a></li>
                                    <li><a href="#link">Air purifiers </a></li>
                                    <li><a href="#link">Airline travel </a></li>
                                    <li><a href="#link">All-purpose cleaners </a></li>
                                    <li><a href="#link">Antivirus Software </a></li>
                                    <li><a href="#link">Appliance stores </a></li>
                                    <li><a href="#link">Athletic shoes </a></li>
                                </ul>
                                <ul>
                                    <li>B</li>
                                    <li><a href="#link">Baby bathtubs</a></li>
                                    <li><a href="#link">Baby food</a></li>
                                    <li><a href="#link">Baby formulas</a></li>
                                    <li><a href="#link">Baby monitors</a></li>
                                    <li><a href="#link">Backpack carriers</a></li>
                                    <li><a href="#link">Backpacks</a></li>
                                    <li><a href="#link">Bacon</a></li>
                                    <li><a href="#link">Banks & credit unions</a></li>
                                    <li><a href="#link"> Bassinets</a></li>
                                    <li><a href="#link"> Batteries</a></li>
                                    <li><a href="#link">Beer</a></li>

                                </ul>
                                <ul>
                                    <li>C</li>
                                    <li><a href="#link"> Camcorders</a></li>
                                    <li><a href="#link"> Cameras</a></li>
                                    <li><a href="#link"> Car batteries</a></li>
                                    <li><a href="#link"> Car insurance</a></li>
                                    <li><a href="#link"> Car repair shops</a></li>
                                    <li><a href="#link"> Car seats</a></li>
                                    <li><a href="#link"> Car wax</a></li>
                                    <li><a href="#link"> Carpet cleaners</a></li>
                                    <li><a href="#link">Carpet stain removers</a></li>
                                    <li><a href="#link"> Cars</a></li>
                                    <li><a href="#link"> Cell phones & services</a></li>


                                </ul>
                                <ul>
                                    <li>D</li>
                                    <li><a href="#link"> Decking</a></li>
                                    <li><a href="#link">Dehumidifiers</a></li>
                                    <li><a href="#link">Diaper bags</a></li>
                                    <li><a href="#link"> Diapers</a></li>
                                    <li><a href="#link"> Diet plans</a></li>
                                    <li><a href="#link">Dishwasher detergents</a></li>
                                    <li><a href="#link">Dishwashers</a></li>
                                    <li><a href="#link">Door locks</a></li>

                                </ul>
                            </div>
                        </div>
                        <div id="tabs-n2">
                            <div class="cat-sub-menu">
                                <ul>
                                    <li>E</li>
                                    <li><a href="#link"> Air conditioners </a></li>
                                    <li><a href="#link">Air Filters </a></li>
                                    <li><a href="#link">Air Fryers </a></li>
                                    <li><a href="#link">Air purifiers </a></li>
                                    <li><a href="#link">Airline travel </a></li>
                                    <li><a href="#link">All-purpose cleaners </a></li>
                                    <li><a href="#link">Antivirus Software </a></li>
                                    <li><a href="#link">Appliance stores </a></li>
                                    <li><a href="#link">Athletic shoes </a></li>
                                </ul>
                                <ul>
                                    <li>F</li>
                                    <li><a href="#link">Baby bathtubs</a></li>
                                    <li><a href="#link">Baby food</a></li>
                                    <li><a href="#link">Baby formulas</a></li>
                                    <li><a href="#link">Baby monitors</a></li>
                                    <li><a href="#link">Backpack carriers</a></li>
                                    <li><a href="#link">Backpacks</a></li>
                                    <li><a href="#link">Bacon</a></li>
                                    <li><a href="#link">Banks & credit unions</a></li>
                                    <li><a href="#link"> Bassinets</a></li>
                                    <li><a href="#link"> Batteries</a></li>
                                    <li><a href="#link">Beer</a></li>

                                </ul>
                                <ul>
                                    <li>C</li>
                                    <li><a href="#link"> Camcorders</a></li>
                                    <li><a href="#link"> Cameras</a></li>
                                    <li><a href="#link"> Car batteries</a></li>
                                    <li><a href="#link"> Car insurance</a></li>
                                    <li><a href="#link"> Car repair shops</a></li>
                                    <li><a href="#link"> Car seats</a></li>
                                    <li><a href="#link"> Car wax</a></li>
                                    <li><a href="#link"> Carpet cleaners</a></li>
                                    <li><a href="#link">Carpet stain removers</a></li>
                                    <li><a href="#link"> Cars</a></li>
                                    <li><a href="#link"> Cell phones & services</a></li>


                                </ul>
                                <ul>
                                    <li>G</li>
                                    <li><a href="#link"> Decking</a></li>
                                    <li><a href="#link">Dehumidifiers</a></li>
                                    <li><a href="#link">Diaper bags</a></li>
                                    <li><a href="#link"> Diapers</a></li>
                                    <li><a href="#link"> Diet plans</a></li>
                                    <li><a href="#link">Dishwasher detergents</a></li>
                                    <li><a href="#link">Dishwashers</a></li>
                                    <li><a href="#link">Door locks</a></li>

                                </ul>
                            </div>
                        </div>
                        <div id="tabs-n3">
                            <div class="cat-sub-menu">
                                <ul>
                                    <li>H</li>
                                    <li><a href="#link"> Air conditioners </a></li>
                                    <li><a href="#link">Air Filters </a></li>
                                    <li><a href="#link">Air Fryers </a></li>
                                    <li><a href="#link">Air purifiers </a></li>
                                    <li><a href="#link">Airline travel </a></li>
                                    <li><a href="#link">All-purpose cleaners </a></li>
                                    <li><a href="#link">Antivirus Software </a></li>
                                    <li><a href="#link">Appliance stores </a></li>
                                    <li><a href="#link">Athletic shoes </a></li>
                                </ul>
                                <ul>
                                    <li>I</li>
                                    <li><a href="#link">Baby bathtubs</a></li>
                                    <li><a href="#link">Baby food</a></li>
                                    <li><a href="#link">Baby formulas</a></li>
                                    <li><a href="#link">Baby monitors</a></li>
                                    <li><a href="#link">Backpack carriers</a></li>
                                    <li><a href="#link">Backpacks</a></li>
                                    <li><a href="#link">Bacon</a></li>
                                    <li><a href="#link">Banks & credit unions</a></li>
                                    <li><a href="#link"> Bassinets</a></li>
                                    <li><a href="#link"> Batteries</a></li>
                                    <li><a href="#link">Beer</a></li>

                                </ul>
                                <ul>
                                    <li>J</li>
                                    <li><a href="#link"> Camcorders</a></li>
                                    <li><a href="#link"> Cameras</a></li>
                                    <li><a href="#link"> Car batteries</a></li>
                                    <li><a href="#link"> Car insurance</a></li>
                                    <li><a href="#link"> Car repair shops</a></li>
                                    <li><a href="#link"> Car seats</a></li>
                                    <li><a href="#link"> Car wax</a></li>
                                    <li><a href="#link"> Carpet cleaners</a></li>
                                    <li><a href="#link">Carpet stain removers</a></li>
                                    <li><a href="#link"> Cars</a></li>
                                    <li><a href="#link"> Cell phones & services</a></li>


                                </ul>
                                <ul>
                                    <li>L</li>
                                    <li><a href="#link"> Decking</a></li>
                                    <li><a href="#link">Dehumidifiers</a></li>
                                    <li><a href="#link">Diaper bags</a></li>
                                    <li><a href="#link"> Diapers</a></li>
                                    <li><a href="#link"> Diet plans</a></li>
                                    <li><a href="#link">Dishwasher detergents</a></li>
                                    <li><a href="#link">Dishwashers</a></li>
                                    <li><a href="#link">Door locks</a></li>

                                </ul>
                            </div>
                        </div>
                        <div id="tabs-n4">
                            <div class="cat-sub-menu">
                                <ul>
                                    <li>A</li>
                                    <li><a href="#link"> Air conditioners </a></li>
                                    <li><a href="#link">Air Filters </a></li>
                                    <li><a href="#link">Air Fryers </a></li>
                                    <li><a href="#link">Air purifiers </a></li>
                                    <li><a href="#link">Airline travel </a></li>
                                    <li><a href="#link">All-purpose cleaners </a></li>
                                    <li><a href="#link">Antivirus Software </a></li>
                                    <li><a href="#link">Appliance stores </a></li>
                                    <li><a href="#link">Athletic shoes </a></li>
                                </ul>
                                <ul>
                                    <li>B</li>
                                    <li><a href="#link">Baby bathtubs</a></li>
                                    <li><a href="#link">Baby food</a></li>
                                    <li><a href="#link">Baby formulas</a></li>
                                    <li><a href="#link">Baby monitors</a></li>
                                    <li><a href="#link">Backpack carriers</a></li>
                                    <li><a href="#link">Backpacks</a></li>
                                    <li><a href="#link">Bacon</a></li>
                                    <li><a href="#link">Banks & credit unions</a></li>
                                    <li><a href="#link"> Bassinets</a></li>
                                    <li><a href="#link"> Batteries</a></li>
                                    <li><a href="#link">Beer</a></li>

                                </ul>
                                <ul>
                                    <li>C</li>
                                    <li><a href="#link"> Camcorders</a></li>
                                    <li><a href="#link"> Cameras</a></li>
                                    <li><a href="#link"> Car batteries</a></li>
                                    <li><a href="#link"> Car insurance</a></li>
                                    <li><a href="#link"> Car repair shops</a></li>
                                    <li><a href="#link"> Car seats</a></li>
                                    <li><a href="#link"> Car wax</a></li>
                                    <li><a href="#link"> Carpet cleaners</a></li>
                                    <li><a href="#link">Carpet stain removers</a></li>
                                    <li><a href="#link"> Cars</a></li>
                                    <li><a href="#link"> Cell phones & services</a></li>


                                </ul>
                                <ul>
                                    <li>D</li>
                                    <li><a href="#link"> Decking</a></li>
                                    <li><a href="#link">Dehumidifiers</a></li>
                                    <li><a href="#link">Diaper bags</a></li>
                                    <li><a href="#link"> Diapers</a></li>
                                    <li><a href="#link"> Diet plans</a></li>
                                    <li><a href="#link">Dishwasher detergents</a></li>
                                    <li><a href="#link">Dishwashers</a></li>
                                    <li><a href="#link">Door locks</a></li>

                                </ul>
                            </div>
                        </div>
                        <div id="tabs-n5">
                            <div class="cat-sub-menu">
                                <ul>
                                    <li>A</li>
                                    <li><a href="#link"> Air conditioners </a></li>
                                    <li><a href="#link">Air Filters </a></li>
                                    <li><a href="#link">Air Fryers </a></li>
                                    <li><a href="#link">Air purifiers </a></li>
                                    <li><a href="#link">Airline travel </a></li>
                                    <li><a href="#link">All-purpose cleaners </a></li>
                                    <li><a href="#link">Antivirus Software </a></li>
                                    <li><a href="#link">Appliance stores </a></li>
                                    <li><a href="#link">Athletic shoes </a></li>
                                </ul>
                                <ul>
                                    <li>B</li>
                                    <li><a href="#link">Baby bathtubs</a></li>
                                    <li><a href="#link">Baby food</a></li>
                                    <li><a href="#link">Baby formulas</a></li>
                                    <li><a href="#link">Baby monitors</a></li>
                                    <li><a href="#link">Backpack carriers</a></li>
                                    <li><a href="#link">Backpacks</a></li>
                                    <li><a href="#link">Bacon</a></li>
                                    <li><a href="#link">Banks & credit unions</a></li>
                                    <li><a href="#link"> Bassinets</a></li>
                                    <li><a href="#link"> Batteries</a></li>
                                    <li><a href="#link">Beer</a></li>

                                </ul>
                                <ul>
                                    <li>C</li>
                                    <li><a href="#link"> Camcorders</a></li>
                                    <li><a href="#link"> Cameras</a></li>
                                    <li><a href="#link"> Car batteries</a></li>
                                    <li><a href="#link"> Car insurance</a></li>
                                    <li><a href="#link"> Car repair shops</a></li>
                                    <li><a href="#link"> Car seats</a></li>
                                    <li><a href="#link"> Car wax</a></li>
                                    <li><a href="#link"> Carpet cleaners</a></li>
                                    <li><a href="#link">Carpet stain removers</a></li>
                                    <li><a href="#link"> Cars</a></li>
                                    <li><a href="#link"> Cell phones & services</a></li>


                                </ul>
                                <ul>
                                    <li>D</li>
                                    <li><a href="#link"> Decking</a></li>
                                    <li><a href="#link">Dehumidifiers</a></li>
                                    <li><a href="#link">Diaper bags</a></li>
                                    <li><a href="#link"> Diapers</a></li>
                                    <li><a href="#link"> Diet plans</a></li>
                                    <li><a href="#link">Dishwasher detergents</a></li>
                                    <li><a href="#link">Dishwashers</a></li>
                                    <li><a href="#link">Door locks</a></li>

                                </ul>
                            </div>
                        </div>
                        <div id="tabs-n6">
                            <div class="cat-sub-menu">
                                <ul>
                                    <li>A</li>
                                    <li><a href="#link"> Air conditioners </a></li>
                                    <li><a href="#link">Air Filters </a></li>
                                    <li><a href="#link">Air Fryers </a></li>
                                    <li><a href="#link">Air purifiers </a></li>
                                    <li><a href="#link">Airline travel </a></li>
                                    <li><a href="#link">All-purpose cleaners </a></li>
                                    <li><a href="#link">Antivirus Software </a></li>
                                    <li><a href="#link">Appliance stores </a></li>
                                    <li><a href="#link">Athletic shoes </a></li>
                                </ul>
                                <ul>
                                    <li>A</li>
                                    <li><a href="#link"> Air conditioners </a></li>
                                    <li><a href="#link">Air Filters </a></li>
                                    <li><a href="#link">Air Fryers </a></li>
                                    <li><a href="#link">Air purifiers </a></li>
                                    <li><a href="#link">Airline travel </a></li>
                                    <li><a href="#link">All-purpose cleaners </a></li>
                                    <li><a href="#link">Antivirus Software </a></li>
                                    <li><a href="#link">Appliance stores </a></li>
                                    <li><a href="#link">Athletic shoes </a></li>
                                </ul>
                                <ul>
                                    <li>A</li>
                                    <li><a href="#link"> Air conditioners </a></li>
                                    <li><a href="#link">Air Filters </a></li>
                                    <li><a href="#link">Air Fryers </a></li>
                                    <li><a href="#link">Air purifiers </a></li>
                                    <li><a href="#link">Airline travel </a></li>
                                    <li><a href="#link">All-purpose cleaners </a></li>
                                    <li><a href="#link">Antivirus Software </a></li>
                                    <li><a href="#link">Appliance stores </a></li>
                                    <li><a href="#link">Athletic shoes </a></li>
                                </ul>
                                <ul>
                                    <li>B</li>
                                    <li><a href="#link">Baby bathtubs</a></li>
                                    <li><a href="#link">Baby food</a></li>
                                    <li><a href="#link">Baby formulas</a></li>
                                    <li><a href="#link">Baby monitors</a></li>
                                    <li><a href="#link">Backpack carriers</a></li>
                                    <li><a href="#link">Backpacks</a></li>
                                    <li><a href="#link">Bacon</a></li>
                                    <li><a href="#link">Banks & credit unions</a></li>
                                    <li><a href="#link"> Bassinets</a></li>
                                    <li><a href="#link"> Batteries</a></li>
                                    <li><a href="#link">Beer</a></li>

                                </ul>
                                <ul>
                                    <li>C</li>
                                    <li><a href="#link"> Camcorders</a></li>
                                    <li><a href="#link"> Cameras</a></li>
                                    <li><a href="#link"> Car batteries</a></li>
                                    <li><a href="#link"> Car insurance</a></li>
                                    <li><a href="#link"> Car repair shops</a></li>
                                    <li><a href="#link"> Car seats</a></li>
                                    <li><a href="#link"> Car wax</a></li>
                                    <li><a href="#link"> Carpet cleaners</a></li>
                                    <li><a href="#link">Carpet stain removers</a></li>
                                    <li><a href="#link"> Cars</a></li>
                                    <li><a href="#link"> Cell phones & services</a></li>


                                </ul>
                                <ul>
                                    <li>D</li>
                                    <li><a href="#link"> Decking</a></li>
                                    <li><a href="#link">Dehumidifiers</a></li>
                                    <li><a href="#link">Diaper bags</a></li>
                                    <li><a href="#link"> Diapers</a></li>
                                    <li><a href="#link"> Diet plans</a></li>
                                    <li><a href="#link">Dishwasher detergents</a></li>
                                    <li><a href="#link">Dishwashers</a></li>
                                    <li><a href="#link">Door locks</a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="cat-menu-tabs cat-menu-tabs-brand" class="mb-70">
                        <ul>
                            <li><a href="#tabs-b1">Brand1</a></li>
                            <li><a href="#tabs-b2">Brand1</a></li>
                            <li><a href="#tabs-b3">Brand1</a></li>
                            <li><a href="#tabs-b4">Brand1</a></li>
                            <li><a href="#tabs-b5">Brand1</a></li>
                            <li><a href="#tabs-b6">Brand1</a></li>
                        </ul>
                        <div id="tabs-b1">

                            <div class="cat-sub-menu">
                                <ul>
                                    <li>A</li>
                                    <li><a href="#link"> Air conditioners </a></li>
                                    <li><a href="#link">Air Filters </a></li>
                                    <li><a href="#link">Air Fryers </a></li>
                                    <li><a href="#link">Air purifiers </a></li>
                                    <li><a href="#link">Airline travel </a></li>
                                    <li><a href="#link">All-purpose cleaners </a></li>
                                    <li><a href="#link">Antivirus Software </a></li>
                                    <li><a href="#link">Appliance stores </a></li>
                                    <li><a href="#link">Athletic shoes </a></li>
                                </ul>
                                <ul>
                                    <li>B</li>
                                    <li><a href="#link">Baby bathtubs</a></li>
                                    <li><a href="#link">Baby food</a></li>
                                    <li><a href="#link">Baby formulas</a></li>
                                    <li><a href="#link">Baby monitors</a></li>
                                    <li><a href="#link">Backpack carriers</a></li>
                                    <li><a href="#link">Backpacks</a></li>
                                    <li><a href="#link">Bacon</a></li>
                                    <li><a href="#link">Banks & credit unions</a></li>
                                    <li><a href="#link"> Bassinets</a></li>
                                    <li><a href="#link"> Batteries</a></li>
                                    <li><a href="#link">Beer</a></li>

                                </ul>
                                <ul>
                                    <li>C</li>
                                    <li><a href="#link"> Camcorders</a></li>
                                    <li><a href="#link"> Cameras</a></li>
                                    <li><a href="#link"> Car batteries</a></li>
                                    <li><a href="#link"> Car insurance</a></li>
                                    <li><a href="#link"> Car repair shops</a></li>
                                    <li><a href="#link"> Car seats</a></li>
                                    <li><a href="#link"> Car wax</a></li>
                                    <li><a href="#link"> Carpet cleaners</a></li>
                                    <li><a href="#link">Carpet stain removers</a></li>
                                    <li><a href="#link"> Cars</a></li>
                                    <li><a href="#link"> Cell phones & services</a></li>


                                </ul>
                                <ul>
                                    <li>D</li>
                                    <li><a href="#link"> Decking</a></li>
                                    <li><a href="#link">Dehumidifiers</a></li>
                                    <li><a href="#link">Diaper bags</a></li>
                                    <li><a href="#link"> Diapers</a></li>
                                    <li><a href="#link"> Diet plans</a></li>
                                    <li><a href="#link">Dishwasher detergents</a></li>
                                    <li><a href="#link">Dishwashers</a></li>
                                    <li><a href="#link">Door locks</a></li>

                                </ul>
                            </div>
                        </div>
                        <div id="tabs-b2">
                            <div class="cat-sub-menu">
                                <ul>
                                    <li>E</li>
                                    <li><a href="#link"> Air conditioners </a></li>
                                    <li><a href="#link">Air Filters </a></li>
                                    <li><a href="#link">Air Fryers </a></li>
                                    <li><a href="#link">Air purifiers </a></li>
                                    <li><a href="#link">Airline travel </a></li>
                                    <li><a href="#link">All-purpose cleaners </a></li>
                                    <li><a href="#link">Antivirus Software </a></li>
                                    <li><a href="#link">Appliance stores </a></li>
                                    <li><a href="#link">Athletic shoes </a></li>
                                </ul>
                                <ul>
                                    <li>F</li>
                                    <li><a href="#link">Baby bathtubs</a></li>
                                    <li><a href="#link">Baby food</a></li>
                                    <li><a href="#link">Baby formulas</a></li>
                                    <li><a href="#link">Baby monitors</a></li>
                                    <li><a href="#link">Backpack carriers</a></li>
                                    <li><a href="#link">Backpacks</a></li>
                                    <li><a href="#link">Bacon</a></li>
                                    <li><a href="#link">Banks & credit unions</a></li>
                                    <li><a href="#link"> Bassinets</a></li>
                                    <li><a href="#link"> Batteries</a></li>
                                    <li><a href="#link">Beer</a></li>

                                </ul>
                                <ul>
                                    <li>C</li>
                                    <li><a href="#link"> Camcorders</a></li>
                                    <li><a href="#link"> Cameras</a></li>
                                    <li><a href="#link"> Car batteries</a></li>
                                    <li><a href="#link"> Car insurance</a></li>
                                    <li><a href="#link"> Car repair shops</a></li>
                                    <li><a href="#link"> Car seats</a></li>
                                    <li><a href="#link"> Car wax</a></li>
                                    <li><a href="#link"> Carpet cleaners</a></li>
                                    <li><a href="#link">Carpet stain removers</a></li>
                                    <li><a href="#link"> Cars</a></li>
                                    <li><a href="#link"> Cell phones & services</a></li>


                                </ul>
                                <ul>
                                    <li>G</li>
                                    <li><a href="#link"> Decking</a></li>
                                    <li><a href="#link">Dehumidifiers</a></li>
                                    <li><a href="#link">Diaper bags</a></li>
                                    <li><a href="#link"> Diapers</a></li>
                                    <li><a href="#link"> Diet plans</a></li>
                                    <li><a href="#link">Dishwasher detergents</a></li>
                                    <li><a href="#link">Dishwashers</a></li>
                                    <li><a href="#link">Door locks</a></li>

                                </ul>
                            </div>
                        </div>
                        <div id="tabs-b3">
                            <div class="cat-sub-menu">
                                <ul>
                                    <li>H</li>
                                    <li><a href="#link"> Air conditioners </a></li>
                                    <li><a href="#link">Air Filters </a></li>
                                    <li><a href="#link">Air Fryers </a></li>
                                    <li><a href="#link">Air purifiers </a></li>
                                    <li><a href="#link">Airline travel </a></li>
                                    <li><a href="#link">All-purpose cleaners </a></li>
                                    <li><a href="#link">Antivirus Software </a></li>
                                    <li><a href="#link">Appliance stores </a></li>
                                    <li><a href="#link">Athletic shoes </a></li>
                                </ul>
                                <ul>
                                    <li>I</li>
                                    <li><a href="#link">Baby bathtubs</a></li>
                                    <li><a href="#link">Baby food</a></li>
                                    <li><a href="#link">Baby formulas</a></li>
                                    <li><a href="#link">Baby monitors</a></li>
                                    <li><a href="#link">Backpack carriers</a></li>
                                    <li><a href="#link">Backpacks</a></li>
                                    <li><a href="#link">Bacon</a></li>
                                    <li><a href="#link">Banks & credit unions</a></li>
                                    <li><a href="#link"> Bassinets</a></li>
                                    <li><a href="#link"> Batteries</a></li>
                                    <li><a href="#link">Beer</a></li>

                                </ul>
                                <ul>
                                    <li>J</li>
                                    <li><a href="#link"> Camcorders</a></li>
                                    <li><a href="#link"> Cameras</a></li>
                                    <li><a href="#link"> Car batteries</a></li>
                                    <li><a href="#link"> Car insurance</a></li>
                                    <li><a href="#link"> Car repair shops</a></li>
                                    <li><a href="#link"> Car seats</a></li>
                                    <li><a href="#link"> Car wax</a></li>
                                    <li><a href="#link"> Carpet cleaners</a></li>
                                    <li><a href="#link">Carpet stain removers</a></li>
                                    <li><a href="#link"> Cars</a></li>
                                    <li><a href="#link"> Cell phones & services</a></li>


                                </ul>
                                <ul>
                                    <li>L</li>
                                    <li><a href="#link"> Decking</a></li>
                                    <li><a href="#link">Dehumidifiers</a></li>
                                    <li><a href="#link">Diaper bags</a></li>
                                    <li><a href="#link"> Diapers</a></li>
                                    <li><a href="#link"> Diet plans</a></li>
                                    <li><a href="#link">Dishwasher detergents</a></li>
                                    <li><a href="#link">Dishwashers</a></li>
                                    <li><a href="#link">Door locks</a></li>

                                </ul>
                            </div>
                        </div>
                        <div id="tabs-b4">
                            <div class="cat-sub-menu">
                                <ul>
                                    <li>A</li>
                                    <li><a href="#link"> Air conditioners </a></li>
                                    <li><a href="#link">Air Filters </a></li>
                                    <li><a href="#link">Air Fryers </a></li>
                                    <li><a href="#link">Air purifiers </a></li>
                                    <li><a href="#link">Airline travel </a></li>
                                    <li><a href="#link">All-purpose cleaners </a></li>
                                    <li><a href="#link">Antivirus Software </a></li>
                                    <li><a href="#link">Appliance stores </a></li>
                                    <li><a href="#link">Athletic shoes </a></li>
                                </ul>
                                <ul>
                                    <li>B</li>
                                    <li><a href="#link">Baby bathtubs</a></li>
                                    <li><a href="#link">Baby food</a></li>
                                    <li><a href="#link">Baby formulas</a></li>
                                    <li><a href="#link">Baby monitors</a></li>
                                    <li><a href="#link">Backpack carriers</a></li>
                                    <li><a href="#link">Backpacks</a></li>
                                    <li><a href="#link">Bacon</a></li>
                                    <li><a href="#link">Banks & credit unions</a></li>
                                    <li><a href="#link"> Bassinets</a></li>
                                    <li><a href="#link"> Batteries</a></li>
                                    <li><a href="#link">Beer</a></li>

                                </ul>
                                <ul>
                                    <li>C</li>
                                    <li><a href="#link"> Camcorders</a></li>
                                    <li><a href="#link"> Cameras</a></li>
                                    <li><a href="#link"> Car batteries</a></li>
                                    <li><a href="#link"> Car insurance</a></li>
                                    <li><a href="#link"> Car repair shops</a></li>
                                    <li><a href="#link"> Car seats</a></li>
                                    <li><a href="#link"> Car wax</a></li>
                                    <li><a href="#link"> Carpet cleaners</a></li>
                                    <li><a href="#link">Carpet stain removers</a></li>
                                    <li><a href="#link"> Cars</a></li>
                                    <li><a href="#link"> Cell phones & services</a></li>


                                </ul>
                                <ul>
                                    <li>D</li>
                                    <li><a href="#link"> Decking</a></li>
                                    <li><a href="#link">Dehumidifiers</a></li>
                                    <li><a href="#link">Diaper bags</a></li>
                                    <li><a href="#link"> Diapers</a></li>
                                    <li><a href="#link"> Diet plans</a></li>
                                    <li><a href="#link">Dishwasher detergents</a></li>
                                    <li><a href="#link">Dishwashers</a></li>
                                    <li><a href="#link">Door locks</a></li>

                                </ul>
                            </div>
                        </div>
                        <div id="tabs-b5">
                            <div class="cat-sub-menu">
                                <ul>
                                    <li>A</li>
                                    <li><a href="#link"> Air conditioners </a></li>
                                    <li><a href="#link">Air Filters </a></li>
                                    <li><a href="#link">Air Fryers </a></li>
                                    <li><a href="#link">Air purifiers </a></li>
                                    <li><a href="#link">Airline travel </a></li>
                                    <li><a href="#link">All-purpose cleaners </a></li>
                                    <li><a href="#link">Antivirus Software </a></li>
                                    <li><a href="#link">Appliance stores </a></li>
                                    <li><a href="#link">Athletic shoes </a></li>
                                </ul>
                                <ul>
                                    <li>B</li>
                                    <li><a href="#link">Baby bathtubs</a></li>
                                    <li><a href="#link">Baby food</a></li>
                                    <li><a href="#link">Baby formulas</a></li>
                                    <li><a href="#link">Baby monitors</a></li>
                                    <li><a href="#link">Backpack carriers</a></li>
                                    <li><a href="#link">Backpacks</a></li>
                                    <li><a href="#link">Bacon</a></li>
                                    <li><a href="#link">Banks & credit unions</a></li>
                                    <li><a href="#link"> Bassinets</a></li>
                                    <li><a href="#link"> Batteries</a></li>
                                    <li><a href="#link">Beer</a></li>

                                </ul>
                                <ul>
                                    <li>C</li>
                                    <li><a href="#link"> Camcorders</a></li>
                                    <li><a href="#link"> Cameras</a></li>
                                    <li><a href="#link"> Car batteries</a></li>
                                    <li><a href="#link"> Car insurance</a></li>
                                    <li><a href="#link"> Car repair shops</a></li>
                                    <li><a href="#link"> Car seats</a></li>
                                    <li><a href="#link"> Car wax</a></li>
                                    <li><a href="#link"> Carpet cleaners</a></li>
                                    <li><a href="#link">Carpet stain removers</a></li>
                                    <li><a href="#link"> Cars</a></li>
                                    <li><a href="#link"> Cell phones & services</a></li>


                                </ul>
                                <ul>
                                    <li>D</li>
                                    <li><a href="#link"> Decking</a></li>
                                    <li><a href="#link">Dehumidifiers</a></li>
                                    <li><a href="#link">Diaper bags</a></li>
                                    <li><a href="#link"> Diapers</a></li>
                                    <li><a href="#link"> Diet plans</a></li>
                                    <li><a href="#link">Dishwasher detergents</a></li>
                                    <li><a href="#link">Dishwashers</a></li>
                                    <li><a href="#link">Door locks</a></li>

                                </ul>
                            </div>
                        </div>
                        <div id="tabs-b6">
                            <div class="cat-sub-menu">
                                <ul>
                                    <li>A</li>
                                    <li><a href="#link"> Air conditioners </a></li>
                                    <li><a href="#link">Air Filters </a></li>
                                    <li><a href="#link">Air Fryers </a></li>
                                    <li><a href="#link">Air purifiers </a></li>
                                    <li><a href="#link">Airline travel </a></li>
                                    <li><a href="#link">All-purpose cleaners </a></li>
                                    <li><a href="#link">Antivirus Software </a></li>
                                    <li><a href="#link">Appliance stores </a></li>
                                    <li><a href="#link">Athletic shoes </a></li>
                                </ul>
                                <ul>
                                    <li>A</li>
                                    <li><a href="#link"> Air conditioners </a></li>
                                    <li><a href="#link">Air Filters </a></li>
                                    <li><a href="#link">Air Fryers </a></li>
                                    <li><a href="#link">Air purifiers </a></li>
                                    <li><a href="#link">Airline travel </a></li>
                                    <li><a href="#link">All-purpose cleaners </a></li>
                                    <li><a href="#link">Antivirus Software </a></li>
                                    <li><a href="#link">Appliance stores </a></li>
                                    <li><a href="#link">Athletic shoes </a></li>
                                </ul>
                                <ul>
                                    <li>A</li>
                                    <li><a href="#link"> Air conditioners </a></li>
                                    <li><a href="#link">Air Filters </a></li>
                                    <li><a href="#link">Air Fryers </a></li>
                                    <li><a href="#link">Air purifiers </a></li>
                                    <li><a href="#link">Airline travel </a></li>
                                    <li><a href="#link">All-purpose cleaners </a></li>
                                    <li><a href="#link">Antivirus Software </a></li>
                                    <li><a href="#link">Appliance stores </a></li>
                                    <li><a href="#link">Athletic shoes </a></li>
                                </ul>
                                <ul>
                                    <li>B</li>
                                    <li><a href="#link">Baby bathtubs</a></li>
                                    <li><a href="#link">Baby food</a></li>
                                    <li><a href="#link">Baby formulas</a></li>
                                    <li><a href="#link">Baby monitors</a></li>
                                    <li><a href="#link">Backpack carriers</a></li>
                                    <li><a href="#link">Backpacks</a></li>
                                    <li><a href="#link">Bacon</a></li>
                                    <li><a href="#link">Banks & credit unions</a></li>
                                    <li><a href="#link"> Bassinets</a></li>
                                    <li><a href="#link"> Batteries</a></li>
                                    <li><a href="#link">Beer</a></li>

                                </ul>
                                <ul>
                                    <li>C</li>
                                    <li><a href="#link"> Camcorders</a></li>
                                    <li><a href="#link"> Cameras</a></li>
                                    <li><a href="#link"> Car batteries</a></li>
                                    <li><a href="#link"> Car insurance</a></li>
                                    <li><a href="#link"> Car repair shops</a></li>
                                    <li><a href="#link"> Car seats</a></li>
                                    <li><a href="#link"> Car wax</a></li>
                                    <li><a href="#link"> Carpet cleaners</a></li>
                                    <li><a href="#link">Carpet stain removers</a></li>
                                    <li><a href="#link"> Cars</a></li>
                                    <li><a href="#link"> Cell phones & services</a></li>


                                </ul>
                                <ul>
                                    <li>D</li>
                                    <li><a href="#link"> Decking</a></li>
                                    <li><a href="#link">Dehumidifiers</a></li>
                                    <li><a href="#link">Diaper bags</a></li>
                                    <li><a href="#link"> Diapers</a></li>
                                    <li><a href="#link"> Diet plans</a></li>
                                    <li><a href="#link">Dishwasher detergents</a></li>
                                    <li><a href="#link">Dishwashers</a></li>
                                    <li><a href="#link">Door locks</a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bbb-section">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-10">
                            <div class="bbb-text">
                                <p>At ConsumerAffairs we love to hear from both consumers and brands; please never
                                    hesitate to
                                    <a href="#link">Contact Us</a> . We take privacy seriously, please refer to our<a
                                        href="#link">
                                        Privacy Policy</a> to learn more about
                                    how we keep you protected. You’re responsible for yourself and please remember that
                                    your use of
                                    this site constitutes acceptance of our <a href="#link">Terms of Use</a>.</p>

                                <p> Advertisements on this site are placed and controlled by outside advertising
                                    networks.
                                    ConsumerAffairs.com does not evaluate or endorse the products and services
                                    advertised. See the
                                    <a href="#link">FAQ</a> for more information.</p>

                                <p>The information on our website is general in nature and is not intended as a
                                    substitute for
                                    competent legal advice. ConsumerAffairs.org makes no representation as to the
                                    accuracy of the
                                    information herein provided and assumes no liability for any damages or loss
                                    arising from the
                                    use thereof.</p>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="bbb-img">
                                <img src="img/bbb.png" alt="BBB">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer>
                <div class="footer-top pt-50 pb-50">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="cta-footer">
                                    <img class="logo-footer" src="img/logo-f.png" alt="Footer Logo">
                                    <p>Join Our Newsletter Subscribers.</p>
                                    <form>
                                        <input type="email" class="form-control" placeholder="Your Email*">
                                        <button type="button" value="Submit" class="btn-newsletter "> Subscribe Now</button>


                                    </form>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <h2 class="widgettitle">Top Categories</h2>
                                <ul>
                                    <li><a href="#link">Car Insurance</a></li>
                                    <li><a href="#link"> Home Security</a></li>
                                    <li><a href="#link"> Home Warranties</a></li>
                                    <li><a href="#link">Life Insurance</a></li>
                                    <li><a href="#link">Medical Alerts</a></li>
                                    <li><a href="#link">Mortgage Rates</a></li>

                                </ul>
                            </div>
                            <div class="col-md-3">

                                <ul class="pt-25">
                                    <li><a href="#link"> Mortgage Refinance</a></li>
                                    <li><a href="#link">Personal Loans</a></li>
                                    <li><a href="#link">Pet Insurance</a></li>
                                    <li><a href="#link">Reverse Mortgages</a></li>
                                    <li><a href="#link">Tax Relief</a></li>
                                    <li><a href="#link"> View All Categories</a></li>
                                </ul>
                            </div>
                            <div class="col-md-2">
                                <h2 class="widgettitle">May We Help You?</h2>
                                <ul>
                                    <li><a href="#link">Feature Stories</a></li>
                                    <li><a href="#link">Contact</a></li>
                                    <li><a href="#link">Privacy Policy</a></li>
                                    <li><a href="#link">Terms & Conditions</a></li>
                                    <li><a href="#link"> Sitemap</a></li>
                                </ul>
                            </div>

                            <div class="col-md-2">
                                <h2 class="widgettitle">Resources</h2>
                                <ul>
                                    <li><a href="#link"> Write a Review</a></li>
                                    <li><a href="#link"> A-Z Index</a></li>
                                    <li><a href="#link"> Consumer News</a></li>
                                    <li><a href="#link"> FAQ</a></li>
                                    <li><a href="#link">Consumer Support</a></li>
                                </ul>
                            </div>

                            <div class="footer-top-chat">
                                <ul>
                                    <li class="f-comment"><i class="fas fa-comments"></i></li>
                                    <li class="goTop"><i class="fas fa-chevron-circle-up"></i></li>
                                </ul>
                            </div>
                        </div>

                    </div>

                </div>

                <hr>
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="footer-bottom-left ">
                                <p>&copy; 2018 Consumeraffairs. All Rights Reserved.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="footer-bottom-right ">
                                <span>Follow Us</span>
                                <a href="#link"><i class="fab fa-facebook-f"></i></a>
                                <a href="#link"><i class="fab fa-twitter"></i></a>
                                <a href="#link"><i class="fab fa-google-plus-g"></i></a>
                                <a href="#link"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>

        </div>
    </div>
    <script src="/js/custom/modernizr-3.5.0.min.js"></script>
    <script src="/js/custom/jquery-3.2.1.min.js"></script>
    <script src="/js/custom/jquery-ui.js"></script>
    <script src="/js/custom/popper.min.js"></script>
    <script src="/js/custom/bootstrap.min.js"></script>
    <script src="/js/custom/owl.carousel.min.js"></script>
    <script src="/js/custom/plugins.js"></script>
    <script src="/js/custom/jquery.meanmenu.min.js"></script>
    <script src="/js/custom/site-script.js"></script>
</body>

</html>
