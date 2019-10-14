@extends('layouts.app')

@section('content')
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
                        <a class="info mb-3" href="{{ route('loginEo') }}">Login</a>
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
                        <a class="info mb-3" href="{{ route('loginTenant') }}">Login</a>
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
@endsection