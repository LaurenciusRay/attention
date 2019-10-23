<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Attention</title>
    <!-- css -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" />

    <!-- Font google -->
    <link href="https://fonts.googleapis.com/css?family=Leckerli+One&display=swap" rel="stylesheet">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="{{ asset('css/swiper.min.css') }}">

    <!-- Font Awesome Icon Library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- normalize  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

    <!-- rating style  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/rating.css') }}" />
</head>

<body>
    <!--Navbar Start-->
    <nav class="navbar navbar-expand-lg fixed-top navbar-custom sticky sticky-dark">
        <div class="container">
            <!-- LOGO -->
            <a class="navbar-brand logo" href="/">
                <h1 class="logo-light">Attention</h1>
                <h1 class="logo-dark">Attention</h1>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ml-auto navbar-center" id="mySidenav">
                    <li class="nav-item active">
                        <a href="#home" class="nav-link">Home</a>
                    </li>
                    @auth('eouser')
                    <li class="nav-item">
                        <a href="{{ route('events.create') }}" class="nav-link">Create Event</a>
                    </li>
                    @endauth
                    <li class="nav-item">
                        <a href="{{ route('events.index') }}" class="nav-link">Event List</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('tenants.index') }}" class="nav-link">Tenant List</a>
                    </li>
                    <li class="nav-item">
                        <a href="#partners" class="nav-link">Partners</a>
                    </li>
                    <li class="nav-item">
                        <a href="#contact" class="nav-link">Contact</a>
                    </li>

                    @auth('eouser')
                    <li class="nav-item dropdown user-dropdown">
                        <a id="navbarDropdownUserEo" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::guard('eouser')->user()->name }}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownUserEo">
                            <a class="dropdown-item" href="#" onclick="event.preventDefault();document.querySelector('#logout-form').submit();">
                                Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endauth

                    @auth('tenantuser')
                    <li class="nav-item dropdown user-dropdown">
                        <a id="navbarDropdownUserTenant" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::guard('tenantuser')->user()->name }}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownUserTenant">
                            <a class="dropdown-item" href="#" onclick="event.preventDefault();document.querySelector('#logout-form').submit();">
                                Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endauth

                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- START HOME -->
    <section class="bg-home-4" id="home">
        <div class="home-bg-overlay"></div>
        <div class="home-center">
            <div class="home-desc-center">
                <div class="container">
                    <div class="row vertical-content">
                        <div class="col-lg-6">
                            <div class="mt-4 home-4">
                                <h2 class="home-title-4 mt-4 line-height_1_4">Let's Join With Us for your
                                    <span>Attention</span> </h2>
                                <p class="text-white-50 mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <div class="mt-5">
                                    <a href="#login" class="btn btn-warning btn-rounded">Get started <i class="fa fa-arrow-right"></i> </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="mt-4 text-right">
                                <div class="features-img">
                                    <img src="image/home.jpg" class="img-fluid" alt="">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END HOME -->

    <!-- START FEATURES -->
    @unless (Auth::guard('eouser')->check() || Auth::guard('tenantuser')->check())
    <section class="bg-light" id="login">
        <div class="row no-gutters">
            <div class="col-sm-6 col-md-6 col-lg-6">
                <div class="hovereffect">
                    <img class="img-responsive" src="image/loginevent.jpg" alt="">
                    <div class="overlay">
                        <h2>Login As Event</h2>
                        <a class="info mb-3" href="{{ route('login.eo-user-form') }}">Login</a>
                        <h3>Or</h3>
                        <a class="info mt-3" href="{{ route('regist.eo-user-form') }}">Register</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6">
                <div class="hovereffect">
                    <img class="img-responsive" src="image/logintenant.jpg" alt="">
                    <div class="overlay">
                        <h2>Login As Tenant</h2>
                        <a class="info mb-3" href="{{ route('login.tenant-user-form') }}">Login</a>
                        <h3>Or</h3>
                        <a class="info mt-3" href="{{ route('regist.tenant-user-form') }}">Register</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endunless
    <!-- END FEATURES -->

    <!-- START EVENT -->
    <section class="section" id="counter">
        <div class="clv_shop_wrapper clv_section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <h1 class="title-heading text-center">Most Popular Event</h1>
                        <p class="title-desc text-center text-muted mt-4">Find Our Most Popular Event Listing
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="shop_slider">
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="shop_slide">
                                            <div class="item_image">
                                                <img src="image/event/event.jpg" alt="image" class="img-fluid" />
                                            </div>
                                            <h5>Event Name</h5>
                                            <div class="rating">
                                                <input type="radio" id="rating-5" checked>
                                                <label></label>
                                                <input type="radio" id="rating-4">
                                                <label></label>
                                                <input type="radio" id="rating-3">
                                                <label></label>
                                                <input type="radio" id="rating-2">
                                                <label></label>
                                                <input type="radio" id="rating-1">
                                                <label></label>
                                                <!-- emoji wrapper here -->
                                                @include('page.emojiwrapper')
                                                <!-- end emoji wrapper  -->
                                            </div>
                                            <div class="item_overlay">
                                                <a href="" class="shop_btn">Detail</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="shop_slide">
                                            <div class="item_image">
                                                <img src="image/event/event.jpg" alt="image" class="img-fluid" />
                                            </div>
                                            <h5>Event Name</h5>
                                            <div class="rating">
                                                <input type="radio" id="rating-5">
                                                <label></label>
                                                <input type="radio" id="rating-4" checked>
                                                <label></label>
                                                <input type="radio" id="rating-3">
                                                <label></label>
                                                <input type="radio" id="rating-2">
                                                <label></label>
                                                <input type="radio" id="rating-1">
                                                <label></label>
                                                <!-- emoji wrapper here -->
                                                @include('page.emojiwrapper')
                                                <!-- end emoji wrapper  -->
                                            </div>
                                            <div class="item_overlay">
                                                <a href="" class="shop_btn">Detail</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="shop_slide">
                                            <div class="item_image">
                                                <img src="image/event/event.jpg" alt="image" class="img-fluid" />
                                            </div>
                                            <h5>Event Name</h5>
                                            <div class="rating">
                                                <input type="radio" id="rating-5">
                                                <label></label>
                                                <input type="radio" id="rating-4">
                                                <label></label>
                                                <input type="radio" id="rating-3" checked>
                                                <label></label>
                                                <input type="radio" id="rating-2">
                                                <label></label>
                                                <input type="radio" id="rating-1">
                                                <label></label>
                                                <!-- emoji wrapper here -->
                                                @include('page.emojiwrapper')
                                                <!-- end emoji wrapper  -->
                                            </div>
                                            <div class="item_overlay">
                                                <a href="" class="shop_btn">Detail</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="shop_slide">
                                            <div class="item_image">
                                                <img src="image/event/event.jpg" alt="image" class="img-fluid" />
                                            </div>
                                            <h5>Event Name</h5>
                                            <div class="rating">
                                                <input type="radio" id="rating-5">
                                                <label></label>
                                                <input type="radio" id="rating-4">
                                                <label></label>
                                                <input type="radio" id="rating-3">
                                                <label></label>
                                                <input type="radio" id="rating-2" checked>
                                                <label></label>
                                                <input type="radio" id="rating-1">
                                                <label></label>
                                                <!-- emoji wrapper here -->
                                                @include('page.emojiwrapper')
                                                <!-- end emoji wrapper  -->
                                            </div>
                                            <div class="item_overlay">
                                                <a href="" class="shop_btn">Detail</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="shop_slide">
                                            <div class="item_image">
                                                <img src="image/event/event.jpg" alt="image" class="img-fluid" />
                                            </div>
                                            <h5>Event Name</h5>
                                            <div class="rating">
                                                <input type="radio" id="rating-5">
                                                <label></label>
                                                <input type="radio" id="rating-4">
                                                <label></label>
                                                <input type="radio" id="rating-3">
                                                <label></label>
                                                <input type="radio" id="rating-2">
                                                <label></label>
                                                <input type="radio" id="rating-1" checked>
                                                <label></label>
                                                <!-- emoji wrapper here -->
                                                @include('page.emojiwrapper')
                                                <!-- end emoji wrapper  -->
                                            </div>
                                            <div class="item_overlay">
                                                <a href="" class="shop_btn">Detail</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="shop_slide">
                                            <div class="item_image">
                                                <img src="image/event/event.jpg" alt="image" class="img-fluid" />
                                            </div>
                                            <h5>Event Name</h5>
                                            <div class="rating">
                                                <input type="radio" id="rating-5">
                                                <label></label>
                                                <input type="radio" id="rating-4">
                                                <label></label>
                                                <input type="radio" id="rating-3">
                                                <label></label>
                                                <input type="radio" id="rating-2">
                                                <label></label>
                                                <input type="radio" id="rating-1">
                                                <label></label>
                                                <!-- emoji wrapper here -->
                                                @include('page.emojiwrapper')
                                                <!-- end emoji wrapper  -->
                                            </div>
                                            <div class="item_overlay">
                                                <a href="" class="shop_btn">Detail</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END EVENT -->

    <!-- START TENANT -->
    <section class="sectiontenant" id="tenant">
        <div class=" clv_shop_wrapper clv_section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <h1 class="title-heading text-center">Most Popular Tenant</h1>
                        <p class="title-desc text-center mt-4 text-white">Find Our Most Popular Tenant
                            Listing
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="shop_slider">
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="shop_slide">
                                            <div class="item_image">
                                                <img src="image/tenant/tenant.jpg" alt="image" class="img-fluid" />
                                            </div>
                                            <h5>Tenant Name</h5>
                                            <div class="rating">
                                                <input type="radio" id="rating-5" checked>
                                                <label></label>
                                                <input type="radio" id="rating-4">
                                                <label></label>
                                                <input type="radio" id="rating-3">
                                                <label></label>
                                                <input type="radio" id="rating-2">
                                                <label></label>
                                                <input type="radio" id="rating-1">
                                                <label></label>
                                                <!-- emoji wrapper here -->
                                                @include('page.emojiwrapper')
                                                <!-- end emoji wrapper  -->
                                            </div>
                                            <div class="item_overlay">
                                                <a href="" class="shop_btn">Detail</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="shop_slide">
                                            <div class="item_image">
                                                <img src="image/tenant/tenant.jpg" alt="image" class="img-fluid" />
                                            </div>
                                            <h5>Tenant Name</h5>
                                            <div class="rating">
                                                <input type="radio" id="rating-5">
                                                <label></label>
                                                <input type="radio" id="rating-4" checked>
                                                <label></label>
                                                <input type="radio" id="rating-3">
                                                <label></label>
                                                <input type="radio" id="rating-2">
                                                <label></label>
                                                <input type="radio" id="rating-1">
                                                <label></label>
                                                <!-- emoji wrapper here -->
                                                @include('page.emojiwrapper')
                                                <!-- end emoji wrapper  -->
                                            </div>
                                            <div class="item_overlay">
                                                <a href="" class="shop_btn">Detail</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="shop_slide">
                                            <div class="item_image">
                                                <img src="image/tenant/tenant.jpg" alt="image" class="img-fluid" />
                                            </div>
                                            <h5>Tenant Name</h5>
                                            <div class="rating">
                                                <input type="radio" id="rating-5">
                                                <label></label>
                                                <input type="radio" id="rating-4">
                                                <label></label>
                                                <input type="radio" id="rating-3" checked>
                                                <label></label>
                                                <input type="radio" id="rating-2">
                                                <label></label>
                                                <input type="radio" id="rating-1">
                                                <label></label>
                                                <!-- emoji wrapper here -->
                                                @include('page.emojiwrapper')
                                                <!-- end emoji wrapper  -->
                                            </div>
                                            <div class="item_overlay">
                                                <a href="" class="shop_btn">Detail</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="shop_slide">
                                            <div class="item_image">
                                                <img src="image/tenant/tenant.jpg" alt="image" class="img-fluid" />
                                            </div>
                                            <h5>Tenant Name</h5>
                                            <div class="rating">
                                                <input type="radio" id="rating-5">
                                                <label></label>
                                                <input type="radio" id="rating-4">
                                                <label></label>
                                                <input type="radio" id="rating-3">
                                                <label></label>
                                                <input type="radio" id="rating-2" checked>
                                                <label></label>
                                                <input type="radio" id="rating-1">
                                                <label></label>
                                                <!-- emoji wrapper here -->
                                                @include('page.emojiwrapper')
                                                <!-- end emoji wrapper  -->
                                            </div>
                                            <div class="item_overlay">
                                                <a href="" class="shop_btn">Detail</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="shop_slide">
                                            <div class="item_image">
                                                <img src="image/tenant/tenant.jpg" alt="image" class="img-fluid" />
                                            </div>
                                            <h5>Tenant Name</h5>
                                            <div class="rating">
                                                <input type="radio" id="rating-5">
                                                <label></label>
                                                <input type="radio" id="rating-4">
                                                <label></label>
                                                <input type="radio" id="rating-3">
                                                <label></label>
                                                <input type="radio" id="rating-2">
                                                <label></label>
                                                <input type="radio" id="rating-1" checked>
                                                <label></label>
                                                <!-- emoji wrapper here -->
                                                @include('page.emojiwrapper')
                                                <!-- end emoji wrapper  -->
                                            </div>
                                            <div class="item_overlay">
                                                <a href="" class="shop_btn">Detail</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="shop_slide">
                                            <div class="item_image">
                                                <img src="image/tenant/tenant.jpg" alt="image" class="img-fluid" />
                                            </div>
                                            <h5>Tenant Name</h5>
                                            <div class="rating">
                                                <input type="radio" id="rating-5">
                                                <label></label>
                                                <input type="radio" id="rating-4">
                                                <label></label>
                                                <input type="radio" id="rating-3">
                                                <label></label>
                                                <input type="radio" id="rating-2">
                                                <label></label>
                                                <input type="radio" id="rating-1">
                                                <label></label>
                                                <!-- emoji wrapper here -->
                                                @include('page.emojiwrapper')
                                                <!-- end emoji wrapper  -->
                                            </div>
                                            <div class="item_overlay">
                                                <a href="" class="shop_btn">Detail</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END TENANT -->

    <!-- Start partner  -->
    <section id="partners">
        <div class="clv_partner_wrapper clv_section">
            <div class="container pt-5 pb-5">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="title-heading text-center">Our Trusted Partners</h1>
                        <p class="title-desc text-center mt-4 mb-5 text-muted">Customer feedback examples to the success
                            of a
                            business
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="partner_slider">
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="partner_slide">
                                            <div class="partner_image">
                                                <span>
                                                    <img src="image/partner/importir.png" alt="image">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="partner_slide">
                                            <div class="partner_image">
                                                <span>
                                                    <img src="image/partner/edutech.png" alt="image">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="partner_slide">
                                            <div class="partner_image">
                                                <span>
                                                    <img src="image/partner/importir.png" alt="image">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="partner_slide">
                                            <div class="partner_image">
                                                <span>
                                                    <img src="image/partner/edutech.png" alt="image">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="partner_slide">
                                            <div class="partner_image">
                                                <span>
                                                    <img src="image/partner/importir.png" alt="image">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="partner_slide">
                                            <div class="partner_image">
                                                <span>
                                                    <img src="image/partner/edutech.png" alt="image">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="partner_slide">
                                            <div class="partner_image">
                                                <span>
                                                    <img src="image/partner/importir.png" alt="image">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="partner_slide">
                                            <div class="partner_image">
                                                <span>
                                                    <img src="image/partner/edutech.png" alt="image">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="partner_slide">
                                            <div class="partner_image">
                                                <span>
                                                    <img src="image/partner/importir.png" alt="image">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="partner_slide">
                                            <div class="partner_image">
                                                <span>
                                                    <img src="image/partner/edutech.png" alt="image">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Partner  -->

    <!-- START CONTACT -->
    <section class="section" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="title-heading text-center">Contact Us</h1>
                    <p class="title-desc text-center text-muted mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing
                        elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                </div>
            </div>

            <div class="row justify-content-center mt-5">
                <div class="col-lg-10">
                    <div class="custom-form mt-3">
                        <div id="message"></div>
                        <form method="post" action="php/contact.php" name="contact-form" id="contact-form">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group mt-2">
                                        <input name="name" id="name" class="form-control" placeholder="Name" type="text">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mt-2">
                                        <input name="email" id="email" class="form-control" placeholder="Email" type="email">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group mt-2">
                                        <input class="form-control" id="subject" placeholder="Subject" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group mt-2">
                                        <textarea name="comments" id="comments" rows="4" class="form-control" placeholder="Massage"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 mt-3 text-center">
                                    <input id="submit" name="send" class="submitBnt btn btn-custom btn-round" value="Send Message" type="submit">
                                    <div id="simple-msg"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END CONTACT -->

    <!-- START FOOTER -->
    <section class="footer">
        <div class="footer-bg-overlay"></div>
        <div class="container">

            <!-- START FOOTER -->
            <div class="row footer-content">
                <div class="col-lg-4">
                    <h3 class="footer-logo mb-5 text-center">Attention</h3>
                </div>

                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-3 col-6">
                            <h5 class="f-18 text-white">Home</h5>
                            <ul class="list-unstyled footer-link mt-3">
                                <li><a href="">About us</a></li>
                                <li><a href="">Careers</a></li>
                                <li><a href="">Contact us</a></li>
                            </ul>
                        </div>

                        <div class="col-lg-3 col-6">
                            <h5 class="f-18 text-white">Services</h5>
                            <ul class="list-unstyled footer-link mt-3">
                                <li><a href="">Terms & Condition</a></li>
                                <li><a href="">Jobs</a></li>
                            </ul>
                        </div>

                        <div class="col-lg-3 col-6">
                            <h5 class="f-18 text-white">Pricing</h5>
                            <ul class="list-unstyled footer-link mt-3">
                                <li><a href="">Business</a></li>
                                <li><a href="">Bookmarks</a></li>
                                <li><a href="">Contact</a></li>
                            </ul>
                        </div>

                        <div class="col-lg-3 col-6">
                            <h5 class="f-18 text-white">Contact</h5>
                            <ul class="list-unstyled footer-link mt-3">
                                <li><a href="">123-4556-789</a></li>
                                <li><a href="">admin@attention.id</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END FOOTER -->

            <!-- START FOOTER-AlT -->
            <div class="row mt-5">
                <div class="col-lg-12">
                    <p class="footer-alt text-center text-white mb-0">2019 © Attention</p>
                </div>
            </div>
            <!-- END FOOTER-ALT -->

        </div>

    </section>
    <!-- END FOOTER -->

    <!-- javascript -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/jquery.easing.min.js') }}"></script>

    <!-- Swiper JS -->
    <script src="{{ asset('js/swiper.min.js') }}"></script>

    <!-- Magnific Popup -->
    <script src="{{ asset('js/appstyle.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>

</body>

</html>