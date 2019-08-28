@extends('layouts.main')

@section('assets')

@endsection

@section('header')
@include('partials.nav')
@endsection
@section('content')

        <!-- start page title section -->
        <section class="p-0 one-third-screen position-relative wow fadeIn">
            <div class="opacity-medium bg-extra-dark-gray z-index-0"></div>
            <div class="container">
                <div class="row">
                    <div class="col-12 one-third-screen page-title-large d-flex flex-column justify-content-center text-center">
                        <!-- start sub title -->
                        <span class="d-block text-white-2 opacity6 margin-10px-bottom alt-font">We serve the needs of orphans and vulnerable children</span>
                        <!-- end sub title -->
                        <!-- start page title -->
                        <h1 class="alt-font text-white-2 font-weight-600 width-55 md-width-80 sm-width-100 mx-auto mb-0">Looking volunteer with us?</h1>
                        <!-- end page title -->
                    </div>
                    <div class="down-section text-center"><a href="#section-down" class="inner-link"><i class="ti-arrow-down icon-extra-small text-white-2 bg-deep-pink padding-15px-all sm-padding-10px-all rounded-circle"></i></a></div>
                </div>
            </div>
            <div class="swiper-auto-fade swiper-container z-index-minus2 position-absolute top-0 w-100 h-100">
                <div class="swiper-wrapper">
                    <!-- start slider item -->
                    <div class="swiper-slide cover-background one-third-screen" style="background-image:url('images/bennett-tobias-W4CPwaUlRtg-unsplash.jpg');"></div>
                    <!-- end slider item -->
                </div>
                <div class="swiper-pagination swiper-auto-pagination d-none"></div>
            </div>
        </section>
        <!-- end page title section -->
        <!-- start contact form section -->
        <section class="wow fadeIn big-section" id="section-down">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-6 md-margin-30px-bottom wow fadeInLeft">
                        <div class="padding-fifteen-all bg-light-gray border-radius-6 lg-padding-seven-all sm-padding-30px-all h-100">
                            <span class="text-extra-dark-gray alt-font text-large font-weight-600 margin-25px-bottom d-block">Ready to get started?</span>
                            <form id="contact-form" action="{{route('postContact')}}" method="post">

                                @foreach ($errors->all() as $error)
                                    <p class="alert alert-danger">{{ $error }}</p>
                                @endforeach
                                @if (session('status'))
                                    <div class="alert alert-success">
                                        {{ session('status') }}
                                    </div>
                                @endif

                                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                                <div>
                                    <div id="success-contact-form" class="mx-0"></div>
                                    <input type="text" name="name" id="name" placeholder="Name*" class="border-radius-4 bg-white medium-input">
                                    <input type="text" name="email" id="email" placeholder="E-mail*" class="border-radius-4 bg-white medium-input">
                                    <input type="text" name="subject" id="subject" placeholder="Subject" class="border-radius-4 bg-white medium-input">
                                    <textarea name="comment" id="comment" placeholder="Your Message" rows="5" class="border-radius-4 bg-white medium-textarea"></textarea>
                                    <button id="contact-us-button" type="submit" class="btn btn-small border-radius-4 btn-dark-gray">Send Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 last-paragraph-no-margin wow fadeInRight">
                        <div class="padding-ten-all bg-light-gray border-radius-6 lg-padding-seven-all sm-padding-30px-all h-100 text-center text-lg-left">
                            <img src="images/bailey-torres-JBoY-wEkpOs-unsplash.jpg" alt="Project Initiative" class="border-radius-6 margin-35px-bottom sm-margin-30px-bottom">
                            <span class="text-large font-weight-600 alt-font text-extra-dark-gray margin-5px-bottom d-block">Let's plan for a new project?</span>
                            <p> Love a Child Initiative is interested in projects that focus on bettering the lives of orphans and vulnerable children </p>
                        <a href="{{url('/#about')}}" class="btn btn-dark-gray btn-small text-extra-small border-radius-4 margin-25px-top">About Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end contact form section -->

        <!-- start call to action section -->
        <section class="wow fadeIn">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-xl-7 col-lg-8 col-md-10 text-center">
                        <h6 class="alt-font text-extra-dark-gray text-uppercase font-weight-500 width-80 mx-auto margin-35px-bottom lg-width-100 wow fadeInUp">Do you enjoy volunteer work?</h6>
                        <a href="#section-down" class="btn btn-medium btn-rounded btn-deep-pink wow fadeInUp" data-wow-delay="0.2s">Volunteer for a Project</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- end call to action section -->

@include('partials.contact-footer')
@endsection

@section('scripts')

@endsection


