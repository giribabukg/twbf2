@extends('layouts.frontend')

@section('content')
    <div class="featured-cause">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="cause-wrap d-flex flex-wrap justify-content-between">
                        <figure class="m-0">
                            <img src="{{ asset('vendor/thecharity/images/children.jpg') }}" alt="">
                        </figure>

                        <div class="cause-content-wrap">
                            <header class="entry-header d-flex flex-wrap align-items-center">
                                <h3 class="entry-title w-100 m-0" style="font-family:'Mukta Malar', sans-serif;"><a href="#">குழந்தைகள் படிப்பு செலவு</a></h3>

                                <div class="posted-date">
                                    <a href="#">Jan 02, 2020 </a>
                                </div><!-- .posted-date -->

                                <div class="cats-links">
                                    <a href="#">Kids Education</a>
                                </div><!-- .cats-links -->
                            </header><!-- .entry-header -->

                            <div class="entry-content">
                                <!-- <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestib ulum mauris. Lorem ipsum dolor sit amet, consectetur.</p> -->
                            </div><!-- .entry-content -->

                            <div class="entry-footer mt-5">
                                <a href="{{ url('/donation') }}" class="btn gradient-bg mr-2">Donate Now</a>
                            </div><!-- .entry-footer -->
                        </div><!-- .cause-content-wrap -->

                        <div class="fund-raised w-100">
                            <div class="featured-fund-raised-bar barfiller">
                                <div class="tipWrap">
                                    <span class="tip"></span>
                                </div><!-- .tipWrap -->

                                <span class="fill" data-percentage="83"></span>
                            </div><!-- .fund-raised-bar -->

                            <div class="fund-raised-details d-flex flex-wrap justify-content-between align-items-center">
                                <div class="fund-raised-total mt-4">
                                    Raised: Rs. 56 880
                                </div><!-- .fund-raised-total -->

                                <div class="fund-raised-goal mt-4">
                                    Goal: Rs. 70 000
                                </div><!-- .fund-raised-goal -->
                            </div><!-- .fund-raised-details -->
                        </div><!-- .fund-raised -->
                    </div><!-- .cause-wrap -->
                </div><!-- .col -->

                <div class="col-12 col-lg-6">
                    <div class="cause-wrap d-flex flex-wrap justify-content-between">
                        <figure class="m-0">
                            <img src="{{ asset('vendor/thecharity/images/elder_help.jpg') }}" alt="">
                        </figure>

                        <div class="cause-content-wrap">
                            <header class="entry-header d-flex flex-wrap align-items-center">
                                <h3 class="entry-title w-100 m-0" style="font-family:'Mukta Malar', sans-serif;"><a href="#">முதியோர் மருத்துவ செலவு</a></h3>

                                <div class="posted-date">
                                    <a href="#">Jan 01, 2020 </a>
                                </div><!-- .posted-date -->

                                <div class="cats-links">
                                    <a href="#">Elderly Medical</a>
                                </div><!-- .cats-links -->
                            </header><!-- .entry-header -->

                            <div class="entry-content">
                                <!-- <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestib ulum mauris. Lorem ipsum dolor sit amet, consectetur.</p> -->
                            </div><!-- .entry-content -->

                            <div class="entry-footer mt-5">
                                <a href="{{ url('/donation') }}" class="btn gradient-bg mr-2">Donate Now</a>
                            </div><!-- .entry-footer -->
                        </div><!-- .cause-content-wrap -->

                        <div class="fund-raised w-100">
                            <div class="featured-fund-raised-bar barfiller">
                                <div class="tipWrap">
                                    <span class="tip"></span>
                                </div><!-- .tipWrap -->

                                <span class="fill" data-percentage="53"></span>
                            </div><!-- .fund-raised-bar -->

                            <div class="fund-raised-details d-flex flex-wrap justify-content-between align-items-center">
                                <div class="fund-raised-total mt-4">
                                    Raised: Rs. 36 880
                                </div><!-- .fund-raised-total -->

                                <div class="fund-raised-goal mt-4">
                                    Goal: Rs. 90 000
                                </div><!-- .fund-raised-goal -->
                            </div><!-- .fund-raised-details -->
                        </div><!-- .fund-raised -->
                    </div><!-- .cause-wrap -->
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .featured-cause -->

    <div class="our-causes pt-0">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="cause-wrap">
                        <figure class="m-0">
                            <img src="{{ asset('vendor/thecharity/images/cause-1.jpg') }}" alt="">

                            <div class="figure-overlay d-flex justify-content-center align-items-center position-absolute w-100 h-100">
                                <a href="{{ url('/donation') }}" class="btn gradient-bg mr-2">Donate Now</a>
                            </div><!-- .figure-overlay -->
                        </figure>

                        <div class="cause-content-wrap">
                            <header class="entry-header d-flex flex-wrap align-items-center">
                                <h3 class="entry-title w-100 m-0"><a href="#">Bring water to the childrens</a></h3>
                            </header><!-- .entry-header -->

                            <div class="entry-content">
                                <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestib ulum mauris.</p>
                            </div><!-- .entry-content -->

                            <div class="fund-raised w-100">
                                <div class="fund-raised-bar-1 barfiller">
                                    <div class="tipWrap">
                                        <span class="tip"></span>
                                    </div><!-- .tipWrap -->

                                    <span class="fill" data-percentage="83"></span>
                                </div><!-- .fund-raised-bar -->

                                <div class="fund-raised-details d-flex flex-wrap justify-content-between align-items-center">
                                    <div class="fund-raised-total mt-4">
                                        Raised: $56 880
                                    </div><!-- .fund-raised-total -->

                                    <div class="fund-raised-goal mt-4">
                                        Goal: $70 000
                                    </div><!-- .fund-raised-goal -->
                                </div><!-- .fund-raised-details -->
                            </div><!-- .fund-raised -->
                        </div><!-- .cause-content-wrap -->
                    </div><!-- .cause-wrap -->
                </div><!-- .col -->

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="cause-wrap">
                        <figure class="m-0">
                            <img src="{{ asset('vendor/thecharity/images/cause-2.jpg') }}" alt="">

                            <div class="figure-overlay d-flex justify-content-center align-items-center position-absolute w-100 h-100">
                                <a href="{{ url('/donation') }}" class="btn gradient-bg mr-2">Donate Now</a>
                            </div><!-- .figure-overlay -->
                        </figure>

                        <div class="cause-content-wrap">
                            <header class="entry-header d-flex flex-wrap align-items-center">
                                <h3 class="entry-title w-100 m-0"><a href="#">Education for all</a></h3>
                            </header><!-- .entry-header -->

                            <div class="entry-content">
                                <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestib ulum mauris.</p>
                            </div><!-- .entry-content -->

                            <div class="fund-raised w-100">
                                <div class="fund-raised-bar-2 barfiller">
                                    <div class="tipWrap">
                                        <span class="tip"></span>
                                    </div><!-- .tipWrap -->

                                    <span class="fill" data-percentage="70"></span>
                                </div><!-- .fund-raised-bar -->

                                <div class="fund-raised-details d-flex flex-wrap justify-content-between align-items-center">
                                    <div class="fund-raised-total mt-4">
                                        Raised: $56 880
                                    </div><!-- .fund-raised-total -->

                                    <div class="fund-raised-goal mt-4">
                                        Goal: $70 000
                                    </div><!-- .fund-raised-goal -->
                                </div><!-- .fund-raised-details -->
                            </div><!-- .fund-raised -->
                        </div><!-- .cause-content-wrap -->
                    </div><!-- .cause-wrap -->
                </div><!-- .col -->

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="cause-wrap">
                        <figure class="m-0">
                            <img src="{{ asset('vendor/thecharity/images/cause-3.jpg') }}" alt="">

                            <div class="figure-overlay d-flex justify-content-center align-items-center position-absolute w-100 h-100">
                                <a href="{{ url('/donation') }}" class="btn gradient-bg mr-2">Donate Now</a>
                            </div><!-- .figure-overlay -->
                        </figure>

                        <div class="cause-content-wrap">
                            <header class="entry-header d-flex flex-wrap align-items-center">
                                <h3 class="entry-title w-100 m-0"><a href="#">Bring water to the childrens</a></h3>
                            </header><!-- .entry-header -->

                            <div class="entry-content">
                                <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestib ulum mauris.</p>
                            </div><!-- .entry-content -->

                            <div class="fund-raised w-100">
                                <div class="fund-raised-bar-3 barfiller">
                                    <div class="tipWrap">
                                        <span class="tip"></span>
                                    </div><!-- .tipWrap -->

                                    <span class="fill" data-percentage="83"></span>
                                </div><!-- .fund-raised-bar -->

                                <div class="fund-raised-details d-flex flex-wrap justify-content-between align-items-center">
                                    <div class="fund-raised-total mt-4">
                                        Raised: $56 880
                                    </div><!-- .fund-raised-total -->

                                    <div class="fund-raised-goal mt-4">
                                        Goal: $70 000
                                    </div><!-- .fund-raised-goal -->
                                </div><!-- .fund-raised-details -->
                            </div><!-- .fund-raised -->
                        </div><!-- .cause-content-wrap -->
                    </div><!-- .cause-wrap -->
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .our-causes -->

    <div class="highlighted-cause">
        <div class="container">
            <div class="row" style="margin-top:8px;">
                <div class="col-12 col-lg-7 order-2 order-lg-1">
                    <div class="section-heading">
                        <h2 class="entry-title">We love to help all the children that have problems in the world. After 15 years we have many goals achieved.</h2>
                    </div><!-- .section-heading -->

                    <div class="entry-content">
                        <p>Dolor sit amet, consectetur adipiscing elit. Mauris tempus vestib ulum mauris quis aliquam. Lorem ipsum dolor sit amet.</p>
                    </div><!-- .entry-content -->

                    <div class="fund-raised w-100 mt-5">
                        <div class="featured-fund-raised-bar barfiller">
                            <div class="tipWrap">
                                <span class="tip"></span>
                            </div><!-- .tipWrap -->

                            <span class="fill" data-percentage="83"></span>
                        </div><!-- .fund-raised-bar -->

                        <div class="fund-raised-details d-flex flex-wrap justify-content-between align-items-center">
                            <div class="fund-raised-total mt-4">
                                Raised: $56 880
                            </div><!-- .fund-raised-total -->

                            <div class="fund-raised-goal mt-4">
                                Goal: $70 000
                            </div><!-- .fund-raised-goal -->
                        </div><!-- .fund-raised-details -->
                    </div><!-- .fund-raised -->

                    <div class="entry-footer mt-5">
                        <a href="{{ url('/donation') }}" class="btn gradient-bg">Donate Now</a>
                    </div><!-- .entry-footer -->
                </div><!-- .col -->

                <div class="col-12 col-lg-5 order-1 order-lg-2">
                    <img src="{{ asset('vendor/thecharity/images/oshomah.jpg') }}" alt="">
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .highlighted-cause -->

    <div class="our-causes">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="cause-wrap">
                        <figure class="m-0">
                            <img src="{{ asset('vendor/thecharity/images/cause-4.jpg') }}" alt="">

                            <div class="figure-overlay d-flex justify-content-center align-items-center position-absolute w-100 h-100">
                                <a href="{{ url('/donation') }}" class="btn gradient-bg mr-2">Donate Now</a>
                            </div><!-- .figure-overlay -->
                        </figure>

                        <div class="cause-content-wrap">
                            <header class="entry-header d-flex flex-wrap align-items-center">
                                <h3 class="entry-title w-100 m-0"><a href="#">Bring water to the childrens</a></h3>
                            </header><!-- .entry-header -->

                            <div class="entry-content">
                                <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestib ulum mauris.</p>
                            </div><!-- .entry-content -->

                            <div class="fund-raised w-100">
                                <div class="fund-raised-bar-1 barfiller">
                                    <div class="tipWrap">
                                        <span class="tip"></span>
                                    </div><!-- .tipWrap -->

                                    <span class="fill" data-percentage="83"></span>
                                </div><!-- .fund-raised-bar -->

                                <div class="fund-raised-details d-flex flex-wrap justify-content-between align-items-center">
                                    <div class="fund-raised-total mt-4">
                                        Raised: $56 880
                                    </div><!-- .fund-raised-total -->

                                    <div class="fund-raised-goal mt-4">
                                        Goal: $70 000
                                    </div><!-- .fund-raised-goal -->
                                </div><!-- .fund-raised-details -->
                            </div><!-- .fund-raised -->
                        </div><!-- .cause-content-wrap -->
                    </div><!-- .cause-wrap -->
                </div><!-- .col -->

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="cause-wrap">
                        <figure class="m-0">
                            <img src="{{ asset('vendor/thecharity/images/cause-5.jpg') }}" alt="">

                            <div class="figure-overlay d-flex justify-content-center align-items-center position-absolute w-100 h-100">
                                <a href="{{ url('/donation') }}" class="btn gradient-bg mr-2">Donate Now</a>
                            </div><!-- .figure-overlay -->
                        </figure>

                        <div class="cause-content-wrap">
                            <header class="entry-header d-flex flex-wrap align-items-center">
                                <h3 class="entry-title w-100 m-0"><a href="#">Education for all</a></h3>
                            </header><!-- .entry-header -->

                            <div class="entry-content">
                                <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestib ulum mauris.</p>
                            </div><!-- .entry-content -->

                            <div class="fund-raised w-100">
                                <div class="fund-raised-bar-2 barfiller">
                                    <div class="tipWrap">
                                        <span class="tip"></span>
                                    </div><!-- .tipWrap -->

                                    <span class="fill" data-percentage="70"></span>
                                </div><!-- .fund-raised-bar -->

                                <div class="fund-raised-details d-flex flex-wrap justify-content-between align-items-center">
                                    <div class="fund-raised-total mt-4">
                                        Raised: $56 880
                                    </div><!-- .fund-raised-total -->

                                    <div class="fund-raised-goal mt-4">
                                        Goal: $70 000
                                    </div><!-- .fund-raised-goal -->
                                </div><!-- .fund-raised-details -->
                            </div><!-- .fund-raised -->
                        </div><!-- .cause-content-wrap -->
                    </div><!-- .cause-wrap -->
                </div><!-- .col -->

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="cause-wrap">
                        <figure class="m-0">
                            <img src="{{ asset('vendor/thecharity/images/cause-6.jpg') }}" alt="">

                            <div class="figure-overlay d-flex justify-content-center align-items-center position-absolute w-100 h-100">
                                <a href="{{ url('/donation') }}" class="btn gradient-bg mr-2">Donate Now</a>
                            </div><!-- .figure-overlay -->
                        </figure>

                        <div class="cause-content-wrap">
                            <header class="entry-header d-flex flex-wrap align-items-center">
                                <h3 class="entry-title w-100 m-0"><a href="#">Bring water to the childrens</a></h3>
                            </header><!-- .entry-header -->

                            <div class="entry-content">
                                <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestib ulum mauris.</p>
                            </div><!-- .entry-content -->

                            <div class="fund-raised w-100">
                                <div class="fund-raised-bar-3 barfiller">
                                    <div class="tipWrap">
                                        <span class="tip"></span>
                                    </div><!-- .tipWrap -->

                                    <span class="fill" data-percentage="83"></span>
                                </div><!-- .fund-raised-bar -->

                                <div class="fund-raised-details d-flex flex-wrap justify-content-between align-items-center">
                                    <div class="fund-raised-total mt-4">
                                        Raised: $56 880
                                    </div><!-- .fund-raised-total -->

                                    <div class="fund-raised-goal mt-4">
                                        Goal: $70 000
                                    </div><!-- .fund-raised-goal -->
                                </div><!-- .fund-raised-details -->
                            </div><!-- .fund-raised -->
                        </div><!-- .cause-content-wrap -->
                    </div><!-- .cause-wrap -->
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .our-causes -->
@stop