@extends('layouts.frontend')

@section('content')
    <div class="welcome-wrap">
        <div class="container" style="margin-top:10px">
            <div class="row">
                <div class="col-12 col-lg-6 order-2 order-lg-1">
                    <div class="welcome-content">
                        <header class="entry-header">
                            <h2 class="entry-title" style="color:#000;">Welcome to our TWBF</h2>
                        </header><!-- .entry-header -->

                        <div class="entry-content" style="color:#000;font-family:'Mukta Malar', sans-serif;font-size:16px;">
                        <!-- <div class="entry-content" style="color:#000;font-family:'Arima Madurai', sans-serif;font-size:15px;"> -->
                        <!-- <div class="entry-content" style="color:#000;font-family:'Pavanam', sans-serif;font-size:15px;"> -->
                        <!-- <div class="entry-content" style="color:#000;font-family:'Catamaran', sans-serif;font-size:15px;"> -->
                            <p>கல்யாணராமனின் நமஸ்காரங்கள்.</p>
                            <p>நமது குழுமம்மானது தி வேல்டு ப்ராம்மின் பவுண்டேஷன் என்கிற பெயரோடு பதிவு செய்யப்பட்டுள்ளது.</p>
                            <p>இதில் இதுவரை நமது வாழ்வாதாரத்திற்கு தேவையாணவைகளைமட்டுமே அதிகப்படியாக செய்து வந்தோம். ஆனால் இனிமேல் இதோடு மட்டுமல்லாமல் மருத்துவ முகாம், கல்வி உதவித்தொகை, நமது ஏழை பிராமண பெண் குழந்தைகளின் திருமண வைபவங்கள் ...</p>
                        </div><!-- .entry-content -->

                        <div class="entry-footer mt-5">
                            <a href="{{ url('/about_full') }}" class="btn gradient-bg mr-2">Read More</a>
                        </div><!-- .entry-footer -->
                    </div><!-- .welcome-content -->
                </div><!-- .col -->

                <div class="col-12 col-lg-6 order-1 order-lg-2">
                    <img src="{{ asset('vendor/thecharity/images/twbf_logo2.jpeg') }}" style="width:80%;margin-right: auto;margin-left:auto;display:block" alt="welcome">
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .home-page-icon-boxes -->

    <div class="about-stats">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="circular-progress-bar">
                        <div class="circle" id="loader_1">
                            <strong class="d-flex justify-content-center"></strong>
                        </div>

                        <h3 class="entry-title">Hard Work</h3>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="circular-progress-bar">
                        <div class="circle" id="loader_2">
                            <strong class="d-flex justify-content-center"></strong>
                        </div>

                        <h3 class="entry-title">Pure Love</h3>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="circular-progress-bar">
                        <div class="circle" id="loader_3">
                            <strong class="d-flex justify-content-center"></strong>
                        </div>

                        <h3 class="entry-title">Smart Ideas</h3>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="circular-progress-bar">
                        <div class="circle" id="loader_4">
                            <strong class="d-flex justify-content-center"></strong>
                        </div>

                        <h3 class="entry-title">Good Decisions</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="about-testimonial">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-5">
                    <div class="testimonial-cont">
                        <div class="entry-content">
                            <p>We love to help all people tat have problems in the world. After 15 years we have many goals achieved.</p>
                        </div>

                        <div class="entry-footer d-flex flex-wrap align-items-center mt-5">
                            <img src="{{ asset('vendor/thecharity/images/kalayanaraman.jpg') }}" alt="">

                            <h4>R. கல்யாணராமன், <span>Founder & Chairman</span></h4>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 offset-lg-2 col-lg-5">
                    <div class="testimonial-cont">
                        <div class="entry-content">
                            <p>We help all who is suffereing from health issues in the world.<br/><br/></p>
                        </div>

                        <div class="entry-footer d-flex flex-wrap align-items-center mt-5">
                            <img src="{{ asset('vendor/thecharity/images/vishwanath.jpg') }}" alt="">

                            <h4>Cristian James, <span>Volunteer</span></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="help-us">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex flex-wrap justify-content-between align-items-center">
                    <h2>Help us so we can help others</h2>

                    <a class="btn orange-border" href="#">Donate now</a>
                </div>
            </div>
        </div>
    </div>
@stop