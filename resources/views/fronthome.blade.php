@extends('layouts.frontend')

@section('content')
    <div class="swiper-container hero-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide hero-content-wrap" style="background-color: #4DBCFF;">
                <img src="{{ asset('vendor/thecharity/images/twbf_logo_1.jpg') }}" alt="" style="width:63%;margin-left:auto;margin-right:auto;">

                <div class="hero-content-overlay position-absolute w-100 h-100">
                    <div class="container h-100">
                        <div class="row h-100">
                            <div class="col-12 col-lg-8 d-flex flex-column justify-content-center align-items-start">
                                <header class="entry-header">
                                    <!-- <h1>TWBF</h1> -->
                                    <h4>The World Brahmin Foundation</h4>
                                </header><!-- .entry-header -->

                                <div class="entry-content mt-4">
                                    <!-- <p style="font-family: 'Baloo Thambi', cursive;font-size:20px;">"உரக்கச் சொல்வோம் உலக பிராமணர்களுக்கு செய்வோம்"</p> -->
                                    <!-- <p style="font-family: 'Coiny', cursive;font-size:20px;">"உரக்கச் சொல்வோம் உலக பிராமணர்களுக்கு செய்வோம்"</p> -->
                                    <!-- <p style="font-family: 'Mukta Malar', sans-serif;font-size:20px;">"உரக்கச் சொல்வோம் உலக பிராமணர்களுக்கு செய்வோம்"</p> -->
                                    <h4 style="font-family: 'Baloo Thambi', cursive;">வேத ஆகம பிராமண சமூகம்</h4>
                                    <p style="font-family: 'Kavivanar', cursive;font-size:28px;">"உரக்கச் சொல்வோம் உலக பிராமணர்களுக்கு செய்வோம்"</p>
                                </div><!-- .entry-content -->

                                <footer class="entry-footer d-flex flex-wrap align-items-center mt-5">
                                    <a href="{{ url('/donation') }}" class="btn gradient-bg mr-2">Donate Now</a>
                                    <a href="{{ url('/about_full') }}" class="btn orange-border">Read More</a>
                                </footer><!-- .entry-footer -->
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div><!-- .container -->
                </div><!-- .hero-content-overlay -->
            </div><!-- .hero-content-wrap -->

            <div class="swiper-slide hero-content-wrap">
                <img src="{{ asset('vendor/thecharity/images/hero2.jpg') }}" alt="">

                <div class="hero-content-overlay position-absolute w-100 h-100">
                    <div class="container h-100">
                        <div class="row h-100">
                            <div class="col-12 col-lg-8 d-flex flex-column justify-content-center align-items-start">
                                <header class="entry-header">
                                    <!-- <h1>Donate</h1> -->
                                    <h4>The World Brahmin Foundation</h4>
                                </header><!-- .entry-header -->

                                <div class="entry-content mt-4">
                                    <p style="font-family: 'Kavivanar', cursive;font-size:28px;">சமூக அக்கறை கொண்ட பொதுவாழ்க்கையில் விருப்பத்துடன் செயல்படக்கூடிய நம் சமூகத்தினரை வரவேற்கிறோம்.</p>
                                </div><!-- .entry-content -->

                                <footer class="entry-footer d-flex flex-wrap align-items-center mt-5">
                                    <a href="{{ url('/donation') }}" class="btn gradient-bg mr-2">Donate Now</a>
                                    <a href="{{ url('/about_full') }}" class="btn orange-border">Read More</a>
                                </footer><!-- .entry-footer -->
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div><!-- .container -->
                </div><!-- .hero-content-overlay -->
            </div><!-- .hero-content-wrap -->

            <div class="swiper-slide hero-content-wrap">
                <img src="{{ asset('vendor/thecharity/images/hero3.jpg') }}" alt="">

                <div class="hero-content-overlay position-absolute w-100 h-100">
                    <div class="container h-100">
                        <div class="row h-100">
                            <div class="col-12 col-lg-8 d-flex flex-column justify-content-center align-items-start">
                                <header class="entry-header">
                                    <!-- <h1>Donate</h1> -->
                                    <h4>The World Brahmin Foundation</h4>
                                </header><!-- .entry-header -->

                                <div class="entry-content mt-4">
                                    <p style="font-family: 'Kavivanar', cursive;font-size:28px;">எங்களுடன் கைகோர்த்துக்கொண்டு பணியாற்றுவதற்கு சுயநலம் பாராமல் செயல்படக்கூடிய தன்னார்வமுள்ள உறுப்பினர்களை வரவேற்கிறோம்.</p>
                                </div><!-- .entry-content -->

                                <footer class="entry-footer d-flex flex-wrap align-items-center mt-5">
                                    <a href="{{ url('/donation') }}" class="btn gradient-bg mr-2">Donate Now</a>
                                    <a href="{{ url('/about_full') }}" class="btn orange-border">Read More</a>
                                </footer><!-- .entry-footer -->
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div><!-- .container -->
                </div><!-- .hero-content-overlay -->
            </div><!-- .hero-content-wrap -->
        </div><!-- .swiper-wrapper -->

        <div class="pagination-wrap position-absolute w-100">
            <div class="container">
                <div class="swiper-pagination"></div>
            </div><!-- .container -->
        </div><!-- .pagination-wrap -->

        <!-- Add Arrows -->
        <div class="swiper-button-next flex justify-content-center align-items-center">
            <span><svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1171 960q0 13-10 23l-466 466q-10 10-23 10t-23-10l-50-50q-10-10-10-23t10-23l393-393-393-393q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l466 466q10 10 10 23z"/></svg></span>
        </div>

        <div class="swiper-button-prev flex justify-content-center align-items-center">
            <span><svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1203 544q0 13-10 23l-393 393 393 393q10 10 10 23t-10 23l-50 50q-10 10-23 10t-23-10l-466-466q-10-10-10-23t10-23l466-466q10-10 23-10t23 10l50 50q10 10 10 23z"/></svg></span>
        </div>
    </div><!-- .hero-slider -->

    <div class="home-page-icon-boxes">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4 mt-4 mt-lg-0">
                    <div class="icon-box">
                        <figure class="d-flex justify-content-center">
                            <img src="{{ asset('vendor/thecharity/images/hands-gray.png') }}" alt="">
                            <img src="{{ asset('vendor/thecharity/images/hands-white.png') }}" alt="">
                        </figure>

                        <header class="entry-header">
                            <h3 class="entry-title">Become a Volunteer</h3>
                        </header>

                        <div class="entry-content">
                            <p style="font-family:'Mukta Malar', sans-serif;font-size:16px;">எங்களுடன் கைகோர்த்துக்கொண்டு பணியாற்றுவதற்கு சுயநலம் பாராமல் பொதுநலன் கருதி நமது சமூகத்திற்காக சமூக அக்கறை கொண்ட பொதுவாழ்க்கையில் விருப்பத்துடன் செயல்படக்கூடிய நம் சமூகத்தினரை வரவேற்கிறோம். </p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 mt-4 mt-lg-0">
                    <div class="icon-box">
                        <figure class="d-flex justify-content-center">
                            <img src="{{ asset('vendor/thecharity/images/donation-gray.png') }}" alt="">
                            <img src="{{ asset('vendor/thecharity/images/donation-white.png') }}" alt="">
                        </figure>

                        <header class="entry-header">
                            <h3 class="entry-title">Donation</h3>
                        </header>

                        <div class="entry-content">
                            <p>Play Your Part. Be part of a change you want to see in the world. Be part of a change you want to see in the world. Be a part of the breakthrough and make someone’s dream come true. You may feel like a drop in the bucket. But every drop counts! </p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4 mt-4 mt-lg-0">
                    <div class="icon-box">
                        <figure class="d-flex justify-content-center">
                            <img src="{{ asset('vendor/thecharity/images/charity-gray.png') }}" alt="">
                            <img src="{{ asset('vendor/thecharity/images/charity-white.png') }}" alt="">
                        </figure>

                        <header class="entry-header">
                            <h3 class="entry-title">Become a Volunteer</h3>
                        </header>

                        <div class="entry-content">
                            <p style="font-family:'Mukta Malar', sans-serif;font-size:16px;">எங்களுடன் கைகோர்த்துக்கொண்டு பணியாற்றுவதற்கு சுயநலம் பாராமல் பொதுநலன் கருதி நமது சமூகத்திற்காக சமூக அக்கறை கொண்ட பொதுவாழ்க்கையில் விருப்பத்துடன் செயல்படக்கூடிய நம் சமூகத்தினரை வரவேற்கிறோம். </p>
                        </div>
                    </div>
                </div>
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .home-page-icon-boxes -->

    <div class="home-page-welcome">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 order-2 order-lg-1">
                    <div class="welcome-content">
                        <header class="entry-header">
                            <h2 class="entry-title">Welcome to our TWBF</h2>
                            <h2 style="font-family: 'Baloo Thambi', cursive;color:#fff;">வேத ஆகம பிராமண சமூகம்</h2>
                        </header><!-- .entry-header -->

                        <div class="entry-content mt-5" style="font-family:'Mukta Malar', sans-serif;font-size:16px;">
                            <p>நமது சமூகத்திற்காக உள்ள பூர்வமாகவும், ஆக்கப்பூர்வமாகவும், களத்தில் இறங்கி பணி செய்யக் கூடியவராகவும், பொறுப்புகளை ஏற்று திறம்பட நிர்வாகம் செய்பவர்களாகவும், அவர்களுடைய சொந்த முயற்சியில் அதாவது (self-interested) இருக்கக்கூடிய நபர்களை இதில் தேர்ந்தெடுப்பதற்கு ஒரு தகுதியாக நாங்கள் கருதுகிறோம்.</p>
                        </div><!-- .entry-content -->

                        <div class="entry-footer mt-5">
                            <a href="{{ url('/about_full') }}" class="btn gradient-bg mr-2">Read More</a>
                        </div><!-- .entry-footer -->
                    </div><!-- .welcome-content -->
                </div><!-- .col -->

                <div class="col-12 col-lg-6 mt-4 order-1 order-lg-2">
                    <img src="{{ asset('vendor/thecharity/images/shiva_linga_4.jpg') }}" style="widht:90%;" alt="welcome">
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .home-page-icon-boxes -->

    <div class="home-page-events">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="upcoming-events">
                        <div class="section-heading">
                            <h2 class="entry-title">Events</h2>
                        </div><!-- .section-heading -->

                        <div class="event-wrap d-flex flex-wrap justify-content-between">
                            <figure class="m-0">
                                <img src="{{ asset('vendor/thecharity/images/event-1.png') }}" alt="">
                            </figure>

                            <div class="event-content-wrap">
                                <header class="entry-header d-flex flex-wrap align-items-center">
                                    <h3 class="entry-title w-100 m-0"><a href="#">Tiruvallur Meet</a></h3>

                                    <div class="posted-date">
                                        <a href="#">Jul 14, 2019 </a>
                                    </div><!-- .posted-date -->

                                    <div class="cats-links">
                                        <a href="#">Ball Room New York</a>
                                    </div><!-- .cats-links -->
                                </header><!-- .entry-header -->

                                <div class="entry-content">
                                    <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestib ulum mauris.</p>
                                </div><!-- .entry-content -->

                                <div class="entry-footer">
                                    <a href="#">Read More</a>
                                </div><!-- .entry-footer -->
                            </div><!-- .event-content-wrap -->
                        </div><!-- .event-wrap -->

                        <div class="event-wrap d-flex flex-wrap justify-content-between">
                            <figure class="m-0">
                                <img src="{{ asset('vendor/thecharity/images/event-2.png') }}" alt="">
                            </figure>

                            <div class="event-content-wrap">
                                <header class="entry-header d-flex flex-wrap align-items-center">
                                    <h3 class="entry-title w-100 m-0"><a href="#">TWBF Born Day</a></h3>

                                    <div class="posted-date">
                                        <a href="#">Aug 25, 2018 </a>
                                    </div><!-- .posted-date -->

                                    <div class="cats-links">
                                        <a href="#">Ball Room New York</a>
                                    </div><!-- .cats-links -->
                                </header><!-- .entry-header -->

                                <div class="entry-content">
                                    <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestib ulum mauris.</p>
                                </div><!-- .entry-content -->

                                <div class="entry-footer">
                                    <a href="#">Read More</a>
                                </div><!-- .entry-footer -->
                            </div><!-- .event-content-wrap -->
                        </div><!-- .event-wrap -->

                        <div class="event-wrap d-flex flex-wrap justify-content-between">
                            <figure class="m-0">
                                <img src="{{ asset('vendor/thecharity/images/event-3.png') }}" alt="">
                            </figure>

                            <div class="event-content-wrap">
                                <header class="entry-header d-flex flex-wrap align-items-center">
                                    <h3 class="entry-title w-100 m-0"><a href="#">Sakthi Samrat</a></h3>

                                    <div class="posted-date">
                                        <a href="#">Apr 16, 2018 </a>
                                    </div><!-- .posted-date -->

                                    <div class="cats-links">
                                        <a href="#">Ball Room New York</a>
                                    </div><!-- .cats-links -->
                                </header><!-- .entry-header -->

                                <div class="entry-content">
                                    <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestib ulum mauris.</p>
                                </div><!-- .entry-content -->

                                <div class="entry-footer">
                                    <a href="#">Read More</a>
                                </div><!-- .entry-footer -->
                            </div><!-- .event-content-wrap -->
                        </div><!-- .event-wrap -->
                    </div><!-- .upcoming-events -->
                </div><!-- .col -->

                <div class="col-12 col-lg-6">
                    <div class="featured-cause">
                        <div class="section-heading">
                            <h2 class="entry-title">Featured Mission</h2>
                        </div><!-- .section-heading -->

                        <div class="cause-wrap d-flex flex-wrap justify-content-between">
                            <figure class="m-0">
                                <img src="{{ asset('vendor/thecharity/images/children.jpg') }}" alt="">
                            </figure>

                            <div class="cause-content-wrap">
                                <header class="entry-header d-flex flex-wrap align-items-center">
                                    <h3 class="entry-title w-100 m-0"><a href="#">குழந்தைகள் படிப்பு செலவு</a></h3>

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
                                        Raised: Rs. 35 880
                                    </div><!-- .fund-raised-total -->

                                    <div class="fund-raised-goal mt-4">
                                        Goal: Rs. 90 000
                                    </div><!-- .fund-raised-goal -->
                                </div><!-- .fund-raised-details -->
                            </div><!-- .fund-raised -->
                        </div><!-- .cause-wrap -->
                    </div><!-- .featured-cause -->
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .home-page-events -->

    <div class="our-causes">
        <div class="container">
            <div class="row">
                <div class="coL-12">
                    <div class="section-heading">
                        <h2 class="entry-title">Our Trustees</h2>
                    </div><!-- .section-heading -->
                </div><!-- .col -->
            </div><!-- .row -->

            <div class="row">
                <div class="col-12">
                    <div class="swiper-container causes-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="cause-wrap">
                                    <figure class="m-0">
                                        <img src="{{ asset('vendor/thecharity/images/kalayanaraman_1.jpg') }}" alt="">
                                    </figure>

                                    <div class="cause-content-wrap" style="padding-top:0px;">
                                        <header class="entry-header d-flex flex-wrap align-items-center">
                                            <h3 class="entry-title w-100 m-0 board_mem">பிரம்மஸ்ரீ R. கல்யாணராமன்</h3>
                                        </header><!-- .entry-header -->

                                        <div class="entry-content">
                                            <p class="m-0 text-center">Founder & Chairman</p>
                                            <p class="m-0 text-center"><i class="fa fa-mobile trustee-mobico"></i><span class="trustee-mobno">7548815221</span></p>
                                        </div><!-- .entry-content -->
                                    </div><!-- .cause-content-wrap -->
                                </div><!-- .cause-wrap -->
                            </div><!-- .swiper-slide -->

                            <div class="swiper-slide">
                                <div class="cause-wrap">
                                    <figure class="m-0">
                                        <img src="{{ asset('vendor/thecharity/images/vishwanath_1.jpg') }}" alt="">
                                    </figure>

                                    <div class="cause-content-wrap" style="padding-top:0px;">
                                        <header class="entry-header d-flex flex-wrap align-items-center">
                                            <h3 class="entry-title w-100 m-0 board_mem">சிவஸ்ரீ V. S. விஸ்வநாத சிவாச்சார்யர்</h3>
                                        </header><!-- .entry-header -->

                                        <div class="entry-content">
                                            <p class="m-0 text-center">Senior Advisor</p>
                                            <p class="m-0 text-center"><i class="fa fa-mobile trustee-mobico"></i><span class="trustee-mobno">9094014100</span></p>                                            
                                        </div><!-- .entry-content -->
                                    </div><!-- .cause-content-wrap -->
                                </div><!-- .cause-wrap -->
                            </div><!-- .swiper-slide -->

                            <div class="swiper-slide">
                                <div class="cause-wrap">
                                    <figure class="m-0">
                                        <img src="{{ asset('vendor/thecharity/images/pichumani_1.jpg') }}" alt="">
                                    </figure>                                     
                                    <div class="cause-content-wrap" style="padding-top:0px;">
                                        <header class="entry-header d-flex flex-wrap align-items-center">
                                            <h3 class="entry-title w-100 m-0 board_mem">சிவஸ்ரீ B. R. G. பிச்சுமணி சிவாச்சார்யர்</h3>
                                        </header><!-- .entry-header -->

                                        <div class="entry-content">
                                            <p class="m-0 text-center">President</p>
                                            <p class="m-0 text-center"><i class="fa fa-mobile trustee-mobico"></i><span class="trustee-mobno">9962062021</span></p>                                            
                                        </div><!-- .entry-content -->
                                    </div><!-- .cause-content-wrap -->
                                </div><!-- .cause-wrap -->
                            </div><!-- .swiper-slide -->

                            <div class="swiper-slide">
                                <div class="cause-wrap">
                                    <figure class="m-0">
                                        <img src="{{ asset('vendor/thecharity/images/sankar_1.jpg') }}" alt="">
                                    </figure>                                    
                                    <div class="cause-content-wrap" style="padding-top:0px;">
                                        <header class="entry-header d-flex flex-wrap align-items-center">
                                            <h3 class="entry-title w-100 m-0 board_mem">சிவஸ்ரீ S. சங்கர் குருக்கள்</h3>
                                            <h3 class="entry-title w-100 m-0 board_mem">&nbsp;</h3>
                                        </header><!-- .entry-header -->

                                        <div class="entry-content">
                                            <p class="m-0 text-center">Chief Secretary</p>
                                            <p class="m-0 text-center"><i class="fa fa-mobile trustee-mobico"></i><span class="trustee-mobno">9944055334</span></p>
                                        </div><!-- .entry-content -->
                                    </div><!-- .cause-content-wrap -->
                                </div><!-- .cause-wrap -->
                            </div><!-- .swiper-slide -->

                            <div class="swiper-slide">
                                <div class="cause-wrap">
                                    <figure class="m-0">
                                        <img src="{{ asset('vendor/thecharity/images/rajan_1.jpg') }}" alt="">
                                    </figure>                                     
                                    <div class="cause-content-wrap" style="padding-top:0px;">
                                        <header class="entry-header d-flex flex-wrap align-items-center">
                                            <h3 class="entry-title w-100 m-0 board_mem">சிவஸ்ரீ R. P. ராஜன் சிவாச்சார்யர்</h3>
                                        </header><!-- .entry-header -->

                                        <div class="entry-content">
                                            <p class="m-0 text-center">Treasurer</p>
                                            <p class="m-0 text-center"><i class="fa fa-mobile trustee-mobico"></i><span class="trustee-mobno">9962982547</span></p>                                            
                                        </div><!-- .entry-content -->
                                    </div><!-- .cause-content-wrap -->
                                </div><!-- .cause-wrap -->
                            </div><!-- .swiper-slide -->

                            <div class="swiper-slide">
                                <div class="cause-wrap">
                                    <figure class="m-0">
                                        <img src="{{ asset('vendor/thecharity/images/ganapathy_1.jpg') }}" alt="">
                                    </figure>                                     
                                    <div class="cause-content-wrap" style="padding-top:0px;">
                                        <header class="entry-header d-flex flex-wrap align-items-center">
                                            <h3 class="entry-title w-100 m-0 board_mem">சிவஸ்ரீ R. கணபதி குருக்கள்</h3>
                                        </header><!-- .entry-header -->

                                        <div class="entry-content">
                                            <p class="m-0 text-center">Vice President</p>
                                            <p class="m-0 text-center"><i class="fa fa-mobile trustee-mobico"></i><span class="trustee-mobno">9443512592</span></p>                                            
                                        </div><!-- .entry-content -->
                                    </div><!-- .cause-content-wrap -->
                                </div><!-- .cause-wrap -->
                            </div><!-- .swiper-slide -->

                            <div class="swiper-slide">
                                <div class="cause-wrap">
                                    <figure class="m-0">
                                        <img src="{{ asset('vendor/thecharity/images/anandan_1.jpg') }}" alt="">
                                    </figure>                                     
                                    <div class="cause-content-wrap" style="padding-top:0px;">
                                        <header class="entry-header d-flex flex-wrap align-items-center">
                                            <h3 class="entry-title w-100 m-0 board_mem">சிவஸ்ரீ R. ஆனந்தன் பட்டாச்சார்யார்</h3>
                                        </header><!-- .entry-header -->

                                        <div class="entry-content">
                                            <p class="m-0 text-center">Joint Secretary</p>
                                            <p class="m-0 text-center"><i class="fa fa-mobile trustee-mobico"></i><span class="trustee-mobno">9940271451</span></p>                                            
                                        </div><!-- .entry-content -->
                                    </div><!-- .cause-content-wrap -->
                                </div><!-- .cause-wrap -->
                            </div><!-- .swiper-slide -->

                            <div class="swiper-slide">
                                <div class="cause-wrap">
                                    <figure class="m-0">
                                        <img src="{{ asset('vendor/thecharity/images/vasudevan_1.jpg') }}" alt="">
                                    </figure>                                     
                                    <div class="cause-content-wrap" style="padding-top:0px;">
                                        <header class="entry-header d-flex flex-wrap align-items-center">
                                            <h3 class="entry-title w-100 m-0 board_mem">சிவஸ்ரீ R. வாசுதேவன் குருக்கள்</h3>
                                        </header><!-- .entry-header -->

                                        <div class="entry-content">
                                            <p class="m-0 text-center">PRO</p>
                                            <p class="m-0 text-center"><i class="fa fa-mobile trustee-mobico"></i><span class="trustee-mobno">9597180623</span></p>                                            
                                        </div><!-- .entry-content -->
                                    </div><!-- .cause-content-wrap -->
                                </div><!-- .cause-wrap -->
                            </div><!-- .swiper-slide -->

                            <div class="swiper-slide">
                                <div class="cause-wrap">
                                    <figure class="m-0">
                                        <img src="{{ asset('vendor/thecharity/images/venkataram_1.jpg') }}" alt="">
                                    </figure>                                     
                                    <div class="cause-content-wrap" style="padding-top:0px;">
                                        <header class="entry-header d-flex flex-wrap align-items-center">
                                            <h3 class="entry-title w-100 m-0 board_mem">சிவஸ்ரீ G. வெங்கட்டராமன் ஐயர்</h3>
                                        </header><!-- .entry-header -->

                                        <div class="entry-content">
                                            <p class="m-0 text-center">AEO</p>
                                            <p class="m-0 text-center">&nbsp;</p>                                            
                                        </div><!-- .entry-content -->
                                    </div><!-- .cause-content-wrap -->
                                </div><!-- .cause-wrap -->
                            </div><!-- .swiper-slide -->                                                        
                        </div><!-- .swiper-wrapper -->

                    </div><!-- .swiper-container -->

                    <!-- Add Arrows -->
                    <div class="swiper-button-next flex justify-content-center align-items-center">
                        <span><svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1171 960q0 13-10 23l-466 466q-10 10-23 10t-23-10l-50-50q-10-10-10-23t10-23l393-393-393-393q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l466 466q10 10 10 23z"/></svg></span>
                    </div>

                    <div class="swiper-button-prev flex justify-content-center align-items-center">
                        <span><svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1203 544q0 13-10 23l-393 393 393 393q10 10 10 23t-10 23l-50 50q-10 10-23 10t-23-10l-466-466q-10-10-10-23t10-23l466-466q10-10 23-10t23 10l50 50q10 10 10 23z"/></svg></span>
                    </div>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .our-causes -->

    <div class="home-page-limestone">
        <div class="container">

        <div class="row">
            <div class="col-12">
                <header class="entry-header elements-heading">
                    <h2 class="entry-title">Milestones</h2>
                </header>

                <div class="milestones">
                    <div class="row flex flex-wrap justify-content-between">
                        <div class="col-12 col-sm-6 col-lg-3 mt-5 mt-lg-0">
                            <div class="counter-box">
                                <div class="d-flex justify-content-center align-items-center">
                                    <img src="vendor/thecharity/images/teamwork.png" alt="">
                                </div>

                                <div class="d-flex justify-content-center align-items-baseline">
                                    <div class="start-counter" data-to="120" data-speed="2000"></div>
                                    <div class="counter-k">K</div>
                                </div>

                                <h3 class="entry-title">Children helped</h3><!-- entry-title -->
                            </div><!-- counter-box -->
                        </div><!-- .col -->

                        <div class="col-12 col-sm-6 col-lg-3 mt-5 mt-lg-0">
                            <div class="counter-box">
                                <div class="d-flex justify-content-center align-items-center">
                                    <img src="vendor/thecharity/images/donation.png" alt="">
                                </div>

                                <div class="d-flex justify-content-center align-items-baseline">
                                    <div class="start-counter" data-to="79" data-speed="2000"></div>
                                </div>

                                <h3 class="entry-title">Water wells</h3><!-- entry-title -->
                            </div><!-- counter-box -->
                        </div><!-- .col -->

                        <div class="col-12 col-sm-6 col-lg-3 mt-5 mt-lg-0">
                            <div class="counter-box">
                                <div class="d-flex justify-content-center align-items-center">
                                    <img src="vendor/thecharity/images/dove.png" alt="">
                                </div>

                                <div class="d-flex justify-content-center align-items-baseline">
                                    <div class="start-counter" data-to="253" data-speed="2000"></div>
                                </div>

                                <h3 class="entry-title">Volunteeres</h3><!-- entry-title -->
                            </div><!-- counter-box -->
                        </div><!-- .col -->

                        <div class="col-12 col-sm-6 col-lg-3 mt-5 mt-lg-0">
                            <div class="counter-box">
                                <div class="d-flex justify-content-center align-items-center">
                                    <img src="vendor/thecharity/images/olive.png" alt="">
                                </div>

                                <div class="d-flex justify-content-center align-items-baseline">
                                    <div class="start-counter" data-to="174" data-speed="2000"></div>
                                </div>

                                <h3 class="entry-title">Causes Solved</h3><!-- entry-title -->
                            </div><!-- counter-box -->
                        </div><!-- .col -->
                    </div>
                </div>
            </div>
        </div>

        </div><!-- .container -->
    </div><!-- .our-causes -->
@stop