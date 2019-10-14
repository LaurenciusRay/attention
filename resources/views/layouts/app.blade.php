<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Attention</title>
    <!-- css -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" />
    @yield('css_link')
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
    <style>
    .bg-home-4
    {
        padding-top: 0px;
        margin-bottom: 60px;
        margin-top: -29px;
    }
    </style>
    @yield('css_script')
</head>

<body>
    <!--Navbar Start-->
    <nav class="navbar navbar-expand-lg fixed-top navbar-custom sticky sticky-dark">
        <div class="container">
            <!-- LOGO -->
            <a class="navbar-brand logo" href="">
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
                        <a href="{{ route('events.create') }}" class="nav-link">Create Event</a>
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
        <div class="home-bg-overlay">

        </div>
    </section>
    <!-- END HOME -->
    
    <!-- Session -->
    @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif
    @if(session()->has('error'))
        <div class="alert alert-danger">
            {{ session()->get('error') }}
        </div>
    @endif
    <!-- EndSession -->

    <!-- Content -->
    @yield('content')
    <!-- End Content -->

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
    @yield('script')
</body>

</html>