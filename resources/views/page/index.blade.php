<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Attention</title>
    <!-- css -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />

    <!-- Font google -->
    <link href="https://fonts.googleapis.com/css?family=Leckerli+One&display=swap" rel="stylesheet">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="css/swiper.min.css">

    <!-- Font Awesome Icon Library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- normalize  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

    <!-- rating style  -->
    <link rel="stylesheet" type="text/css" href="css/rating.css" />
</head>

<body>

    <!--Navbar Start-->
    <nav class="navbar navbar-expand-lg fixed-top navbar-custom sticky sticky-dark">
        <div class="container">
            <!-- LOGO -->
            <a class="navbar-brand logo" href="index.html">
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
                    <li class="nav-item">
                        <a href="#login" class="nav-link">Login or Register</a>
                    </li>
                    <li class="nav-item">
                        <a href="#counter" class="nav-link">Event List</a>
                    </li>
                    <li class="nav-item">
                        <a href="#tenant" class="nav-link">Tenant List</a>
                    </li>
                    <li class="nav-item">
                        <a href="#partners" class="nav-link">Partners</a>
                    </li>
                    <li class="nav-item">
                        <a href="#contact" class="nav-link">Contact</a>
                    </li>
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
    <section class="bg-light" id="login">
        <div class="row no-gutters">
            <div class="col-sm-6 col-md-6 col-lg-6">
                <div class="hovereffect">
                    <img class="img-responsive" src="image/loginevent.jpg" alt="">
                    <div class="overlay">
                        <h2>Login As Event</h2>
                        <a class="info mb-3" href="#">Login</a>
                        <h3>Or</h3>
                        <a class="info mt-3" href="#">Register</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6">
                <div class="hovereffect">
                    <img class="img-responsive" src="image/logintenant.jpg" alt="">
                    <div class="overlay">
                        <h2>Login As Tenant</h2>
                        <a class="info mb-3" href="#">Login</a>
                        <h3>Or</h3>
                        <a class="info mt-3" href="#">Register</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
                            <!-- Add Arrows -->
                            <span class="slider_arrow shop_left left_arrow">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="10px" height="20px">
                                    <path fill-rule="evenodd" fill="rgb(226, 226, 226)" d="M0.272,10.703 L8.434,19.703 C8.792,20.095 9.372,20.095 9.731,19.703 C10.089,19.308 10.089,18.668 9.731,18.274 L2.217,9.990 L9.730,1.706 C10.089,1.310 10.089,0.672 9.730,0.277 C9.372,-0.118 8.791,-0.118 8.433,0.277 L0.271,9.274 C-0.082,9.666 -0.082,10.315 0.272,10.703 Z" />
                                </svg>
                            </span>
                            <span class="slider_arrow shop_right right_arrow">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="10px" height="20px">
                                    <path fill-rule="evenodd" fill="rgb(226, 226, 226)" d="M9.728,10.703 L1.566,19.703 C1.208,20.095 0.627,20.095 0.268,19.703 C-0.090,19.308 -0.090,18.668 0.268,18.274 L7.783,9.990 L0.269,1.706 C-0.089,1.310 -0.089,0.672 0.269,0.277 C0.627,-0.118 1.209,-0.118 1.567,0.277 L9.729,9.274 C10.081,9.666 10.081,10.315 9.728,10.703 Z" />
                                </svg>
                            </span>
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
                            <!-- Add Arrows -->
                            <span class="slider_arrow shop_left left_arrow">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="10px" height="20px">
                                    <path fill-rule="evenodd" fill="rgb(226, 226, 226)" d="M0.272,10.703 L8.434,19.703 C8.792,20.095 9.372,20.095 9.731,19.703 C10.089,19.308 10.089,18.668 9.731,18.274 L2.217,9.990 L9.730,1.706 C10.089,1.310 10.089,0.672 9.730,0.277 C9.372,-0.118 8.791,-0.118 8.433,0.277 L0.271,9.274 C-0.082,9.666 -0.082,10.315 0.272,10.703 Z" />
                                </svg>
                            </span>
                            <span class="slider_arrow shop_right right_arrow">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="10px" height="20px">
                                    <path fill-rule="evenodd" fill="rgb(226, 226, 226)" d="M9.728,10.703 L1.566,19.703 C1.208,20.095 0.627,20.095 0.268,19.703 C-0.090,19.308 -0.090,18.668 0.268,18.274 L7.783,9.990 L0.269,1.706 C-0.089,1.310 -0.089,0.672 0.269,0.277 C0.627,-0.118 1.209,-0.118 1.567,0.277 L9.729,9.274 C10.081,9.666 10.081,10.315 9.728,10.703 Z" />
                                </svg>
                            </span>
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
                            <!-- Add Arrows -->
                            <span class="slider_arrow partner_left left_arrow">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="10px" height="15px">
                                    <path fill-rule="evenodd" fill="rgb(226, 226, 226)" d="M0.324,8.222 L7.117,14.685 C7.549,15.097 8.249,15.097 8.681,14.685 C9.113,14.273 9.113,13.608 8.681,13.197 L2.670,7.478 L8.681,1.760 C9.113,1.348 9.113,0.682 8.681,0.270 C8.249,-0.139 7.548,-0.139 7.116,0.270 L0.323,6.735 C0.107,6.940 -0.000,7.209 -0.000,7.478 C-0.000,7.747 0.108,8.017 0.324,8.222 Z" />
                                </svg>
                            </span>
                            <span class="slider_arrow partner_right right_arrow">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="19px" height="25px">
                                    <path fill-rule="evenodd" fill="rgb(226, 226, 226)" d="M13.676,13.222 L6.883,19.685 C6.451,20.097 5.751,20.097 5.319,19.685 C4.887,19.273 4.887,18.608 5.319,18.197 L11.329,12.478 L5.319,6.760 C4.887,6.348 4.887,5.682 5.319,5.270 C5.751,4.861 6.451,4.861 6.884,5.270 L13.676,11.735 C13.892,11.940 14.000,12.209 14.000,12.478 C14.000,12.747 13.892,13.017 13.676,13.222 Z" />
                                </svg>
                            </span>
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
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>

    <!-- Swiper JS -->
    <script src="js/swiper.min.js"></script>



    <!-- Magnific Popup -->
    <script src="js/appstyle.js"></script>
    <script src="js/custom.js"></script>



</body>

</html>