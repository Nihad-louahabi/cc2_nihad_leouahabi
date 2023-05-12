<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
<title>project laravel</title>
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta property="og:title" content="">
<meta property="og:type" content="">
<meta property="og:url" content="">
<meta property="og:image" content="">
<link rel="shortcut icon" type="image/x-icon" href="">
<link rel="stylesheet" href="{{  asset('assets/css/main.css') }}">
<link rel="stylesheet" href="{{  asset('assets/css/custom.css') }}">
@livewireStyles
</head>
<body>
    <header class="header-area header-style-1 header-height-2">
        <div class="header-middle header-middle-ptb-1 d-none d-lg-block">
            <div class="container">
                <div class="header-wrap">
                    <div class="header-right">
                        {{-- @livewire('header-search-component') --}}
                        <div class="header-action-right">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom header-bottom-bg-color sticky-bar">
            <div class="container">
                <div class="header-wrap header-space-between position-relative">
                    <div class="header-nav d-none d-lg-flex">
                        <div class="main-menu main-menu-padding-1 main-menu-lh-2 d-none d-lg-block">
                            <nav>
                                <ul>
                                    <li><a class="active" href="/">Home </a></li>
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="">Shop</a></li>
                                    <li><a href="">Contact us</a></li>
                                    <li><i class="fi-rs-key"></i><a href="">Log In </a>  / <a href="">Sign Up</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    {{ $s }}
    <footer class="main">
        <section class="section-padding footer-mid">
            <div class="container pt-15 pb-20">
                <div class="row">
                    <div class="col-lg-2 col-md-6">
                        <h5 class="widget-title wow fadeIn animated">About</h5>
                        <ul class="footer-list wow fadeIn animated mb-sm-5 mb-md-0">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Delivery Information</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms &amp; Conditions</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2  col-md-6">
                        <h5 class="widget-title wow fadeIn animated">My Account</h5>
                        <ul class="footer-list wow fadeIn animated">
                            <li><a href="my-account.html">My Account</a></li>
                            <li><a href="#">View Cart</a></li>
                            <li><a href="#">My Wishlist</a></li>
                            <li><a href="#">Track My Order</a></li>
                            <li><a href="#">Order</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4 mob-center">
                        <h5 class="widget-title wow fadeIn animated">Contact</h5>
                            <p class="wow fadeIn animated">
                                <strong>Address: </strong>562 Wellington Road
                            </p>
                            <p class="wow fadeIn animated">
                                <strong>Phone: </strong>+1 0000-000-000
                            </p>
                            <p class="wow fadeIn animated">
                                <strong>Email: </strong>contact@palomaTextile.com
                            </p>
                            <h5 class="mb-10 mt-30 fw-600 text-grey-4 wow fadeIn animated">Follow Us</h5>
                            <div class="mobile-social-icon wow fadeIn animated mb-sm-5 mb-md-0">
                                <a href="#"><img src="{{  asset('assets/imgs/theme/icons/icon-facebook.svg')}}" alt=""></a>
                                <a href="#"><img src="{{  asset('assets/imgs/theme/icons/icon-twitter.svg')}}" alt=""></a>
                                <a href="#"><img src="{{  asset('assets/imgs/theme/icons/icon-instagram.svg')}}" alt=""></a>
                                <a href="#"><img src="{{  asset('assets/imgs/theme/icons/icon-pinterest.svg')}}" alt=""></a>
                                <a href="#"><img src="{{  asset('assets/imgs/theme/icons/icon-youtube.svg')}}" alt=""></a>
                            </div>
                    </div>
                </div>
            </div>
        </section>
    </footer>

     <!-- Vendor JS-->
<script src="{{  asset('assets/js/vendor/modernizr-3.6.0.min.js') }}"></script>
<script src="{{  asset('assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
<script src="{{  asset('assets/js/vendor/jquery-migrate-3.3.0.min.js') }}"></script>
<script src="{{  asset('assets/js/vendor/bootstrap.bundle.min.js') }}"></script>
<script src="{{  asset('assets/js/plugins/slick.js') }}"></script>
<script src="{{  asset('assets/js/plugins/jquery.syotimer.min.js') }}"></script>
<script src="{{  asset('assets/js/plugins/wow.js') }}"></script>
<script src="{{  asset('assets/js/plugins/jquery-ui.js') }}"></script>
<script src="{{  asset('assets/js/plugins/perfect-scrollbar.js') }}"></script>
<script src="{{  asset('assets/js/plugins/magnific-popup.js') }}"></script>
<script src="{{  asset('assets/js/plugins/select2.min.js') }}"></script>
<script src="{{  asset('assets/js/plugins/waypoints.js') }}"></script>
<script src="{{  asset('assets/js/plugins/counterup.js') }}"></script>
<script src="{{  asset('assets/js/plugins/jquery.countdown.min.js') }}"></script>
<script src="{{  asset('assets/js/plugins/images-loaded.js') }}"></script>
<script src="{{  asset('assets/js/plugins/isotope.js') }}"></script>
<script src="{{  asset('assets/js/plugins/scrollup.js') }}"></script>
<script src="{{  asset('assets/js/plugins/jquery.vticker-min.js') }}"></script>
<script src="{{  asset('assets/js/plugins/jquery.theia.sticky.js') }}"></script>
<script src="{{  asset('assets/js/plugins/jquery.elevatezoom.js') }}"></script>
<!-- Template  JS -->
<script src="{{  asset('assets/js/main.js?v=3.3') }}"></script>
<script src="{{  asset('assets/js/shop.js?v=3.3') }}"></script>
@livewireScripts
@stack('scripts')
</body>
</html>

