@extends('layouts.frontend')

@section('content')
    <div class="contact-page-wrap">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-5">
                    <div class="entry-content">
                        <h2>Get In touch with us</h2>

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestib ulum mauris. Lorem ipsum dolor sit amet, conse ctetur. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestib ulum mauris quis aliquam. Integer accu msan sodales odio, id tempus velit ullamc.</p>

                        <ul class="contact-social d-flex flex-wrap align-items-center">
                            <!-- <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li> -->
                            <li><a href="https://www.facebook.com/groups/2880342715524794/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
<!--                             <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
 -->                        </ul>

                        <ul class="contact-info p-0">
                            <li><i class="fa fa-phone"></i><span>+91 99440 55334</span></li>
                            <li><i class="fa fa-envelope"></i><span>twbf.in@gmail.com</span></li>
                            <li><i class="fa fa-map-marker"></i><span>Gummidipundi, Tiruvallur District, Tamil Nadu</span></li>
                        </ul>
                    </div>
                </div><!-- .col -->

                <div class="col-12 col-lg-7">
                    <form class="contact-form" method="post" action="{{ url('/contactemail') }}">
                        {{ csrf_field() }}
                        <input type="text" placeholder="Name" name="name">
                        <input type="email" placeholder="Email" name="email">
                        <textarea rows="15" cols="6" placeholder="Messages" name="message"></textarea>

                        <span>
                            <input class="btn gradient-bg" type="submit" value="Contact us">
                        </span>
                    </form><!-- .contact-form -->

                </div><!-- .col -->

<!--                 <div class="col-12">
                    <div class="contact-gmap">
                        <iframe width="600" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=usa&key=AIzaSyC2LvnNLzWxHgFm_XfpFG9wHUuyEj6rXSs" allowfullscreen></iframe>
                    </div>
                </div>
 -->            </div><!-- .row -->
        </div><!-- .container -->
    </div>
@stop