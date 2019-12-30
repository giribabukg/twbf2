<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- <title>{{ env('APP_NAME', 'Permissions Manager') }}</title> -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('vendor/thecharity/css/bootstrap.min.css') }}">

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="{{ asset('vendor/thecharity/css/font-awesome.min.css') }}">

    <!-- ElegantFonts CSS -->
    <link rel="stylesheet" href="{{ asset('vendor/thecharity/css/elegant-fonts.css') }}">

    <!-- themify-icons CSS -->
    <link rel="stylesheet" href="{{ asset('vendor/thecharity/css/themify-icons.css') }}">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="{{ asset('vendor/thecharity/css/swiper.min.css') }}">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('vendor/thecharity/style.css') }}">
   
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet" />
    @yield('styles')
</head>

<body>
    <header class="site-header">
        <div class="nav-bar">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex flex-wrap justify-content-between align-items-center">
                        <div class="site-branding d-flex align-items-center">
                           <!-- <a class="d-block" href="{{ url('/') }}" rel="home"><img class="d-block" src="{{ asset('vendor/thecharity/images/logo.png') }}" alt="logo"></a> -->
                           <!-- <a class="d-block" href="{{ url('/') }}" rel="home"><div style="color:#000;font-size:32px;font-weight: bold;text-decoration: none;">TWBF</div></a> -->
                           <a class="d-block" href="{{ url('/') }}" rel="home"><h2 style="color:#000;font-weight: bold;">TWBF</h2></a>
                        </div><!-- .site-branding -->

                        <nav class="site-navigation d-flex justify-content-end align-items-center">
                            <ul class="d-flex flex-column flex-lg-row justify-content-lg-end align-content-center">
                                <li class="current-menu-item"><a href="{{ url('/') }}">Home</a></li>
                                <li><a href="{{ url('/about') }}">About Us</a></li>
                                <li><a href="{{ url('/causes') }}">Causes</a></li>
                                <li><a href="{{ url('/gallery') }}">Gallery</a></li>
                                <li><a href="{{ url('/news') }}">News</a></li>
                                <li><a href="{{ url('/contact') }}">Contact</a></li>
                            </ul>
                        </nav><!-- .site-navigation -->

                        <div class="hamburger-menu d-lg-none">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div><!-- .hamburger-menu -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .nav-bar -->
    </header><!-- .site-header -->    

    @yield("content")

    <footer class="site-footer">
        <div class="footer-widgets">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="foot-about">
                            <!-- <h2><a class="foot-logo" href="#"><img src="{{ asset('vendor/thecharity/images/foot-logo.png') }}" alt=""></a></h2> -->
                            <h3 style="color:#fff;font-weight: bold;">TWBF</h3>

                            <p>Lorem ipsum dolor sit amet, con sectetur adipiscing elit. Mauris temp us vestib ulum mauris.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestib ulum mauris.Lorem ipsum dolo.</p>

                            <ul class="d-flex flex-wrap align-items-center">
                                <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div><!-- .foot-about -->
                    </div><!-- .col -->

                    <div class="col-12 col-md-6 col-lg-3 mt-5 mt-md-0">
                        <h2>Useful Links</h2>

                        <ul>
                            <li><a href="#">Privacy Polticy</a></li>
                            <li><a href="#">Become  a Volunteer</a></li>
                            <li><a href="#">Donate</a></li>
                            <li><a href="#">Testimonials</a></li>
                            <li><a href="#">Causes</a></li>
                            <li><a href="#">Portfolio</a></li>
                            <li><a href="#">News</a></li>
                        </ul>
                    </div><!-- .col -->

                    <div class="col-12 col-md-6 col-lg-3 mt-5 mt-md-0">
                        <div class="foot-latest-news">
                            <h2>Latest News</h2>

                            <ul>
                                <li>
                                    <h3><a href="#">A new cause to help</a></h3>
                                    <div class="posted-date">MArch 12, 2018</div>
                                </li>

                                <li>
                                    <h3><a href="#">We love to help people</a></h3>
                                    <div class="posted-date">MArch 12, 2018</div>
                                </li>

                                <li>
                                    <h3><a href="#">The new ideas for helping</a></h3>
                                    <div class="posted-date">MArch 12, 2018</div>
                                </li>
                            </ul>
                        </div><!-- .foot-latest-news -->
                    </div><!-- .col -->

                    <div class="col-12 col-md-6 col-lg-3 mt-5 mt-md-0">
                        <div class="foot-contact">
                            <h2>Contact</h2>

                            <ul>
                                <li><i class="fa fa-phone"></i><span>+45 677 8993000 223</span></li>
                                <li><i class="fa fa-envelope"></i><span>office@template.com</span></li>
                                <li><i class="fa fa-map-marker"></i><span>Main Str. no 45-46, b3, 56832, Los Angeles, CA</span></li>
                            </ul>
                        </div><!-- .foot-contact -->

                        <div class="subscribe-form">
                            <form class="d-flex flex-wrap align-items-center">
                                <input type="email" placeholder="Your email">
                                <input type="submit" value="send">
                            </form><!-- .flex -->
                        </div><!-- .search-widget -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .footer-widgets -->

        <div class="footer-bar">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p class="m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Powered by <a href="http://www.dikshainfotech.in" target="_blank">Diksha Infotech</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div><!-- .col-12 -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .footer-bar -->
    </footer><!-- .site-footer -->

    <script type='text/javascript' src="{{ asset('vendor/thecharity/js/jquery.js') }}"></script>
    <script type='text/javascript' src="{{ asset('vendor/thecharity/js/jquery.collapsible.min.js') }}"></script>
    <script type='text/javascript' src="{{ asset('vendor/thecharity/js/swiper.min.js') }}"></script>
    <script type='text/javascript' src="{{ asset('vendor/thecharity/js/jquery.countdown.min.js') }}"></script>
    <script type='text/javascript' src="{{ asset('vendor/thecharity/js/circle-progress.min.js') }}"></script>
    <script type='text/javascript' src="{{ asset('vendor/thecharity/js/jquery.countTo.min.js') }}"></script>
    <script type='text/javascript' src="{{ asset('vendor/thecharity/js/jquery.barfiller.js') }}"></script>
    <script type='text/javascript' src="{{ asset('vendor/thecharity/js/custom.js') }}"></script>

    @yield('scripts')
</body>

</html>