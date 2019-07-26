@extends('layouts.main')

@section('assets')

@endsection

@section('header')
@include('partials.nav')
@endsection
@section('content')
<!-- start slider section -->
<section class="p-0 main-slider h-100 mobile-height wow fadeIn">
    <div class="swiper-full-screen swiper-container h-100 w-100 white-move">
        <div class="swiper-wrapper">
            <!-- start slider item -->
            <div class="swiper-slide cover-background"
                style="background-image:url('images/cole-keister-rPlYtGgoxho-unsplash.jpg');">
                <div class="opacity-extra-medium bg-black"></div>
                <div class="container position-relative full-screen">
                    <div class="slider-typography text-center">
                        <div class="slider-text-middle-main">
                            <div class="slider-text-middle">
                                <h6
                                    class="text-very-light-gray padding-ten-lr font-weight-300 margin-two-bottom md-margin-four-bottom sm-margin-15px-bottom">
                                    Non-profit humanitarian organization</h6>
                                <div
                                    class="alt-font text-white-2 text-uppercase font-weight-700 letter-spacing-minus-3 title-extra-large margin-two-bottom width-60 mx-auto lg-width-80 md-margin-four-bottom sm-width-90 sm-margin-25px-bottom sm-letter-spacing-0">
                                    love a child</div>
                                <div class="btn-dual">
                                    <a href="#about" class="btn btn-transparent-white btn-small sm-margin-two-all">About
                                        Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end slider item -->
        </div>
        <!-- start slider pagination -->
        {{-- <div class="swiper-pagination swiper-pagination-square swiper-pagination-white swiper-full-screen-pagination"></div>
                <div class="swiper-button-next swiper-button-black-highlight d-none"></div>
                <div class="swiper-button-prev swiper-button-black-highlight d-none"></div> --}}
        <!-- end slider pagination -->
    </div>
</section>
<!-- end slider section -->

<!-- start feature box section -->
<section class="padding-30px-bottom wow fadeIn" style="visibility: visible; animation-name: fadeIn;" id="mission_vision">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-7 text-center margin-100px-bottom sm-margin-40px-bottom">
                <div class="position-relative overflow-hidden w-100">
                    <span class="text-small text-outside-line-full alt-font font-weight-800 text-uppercase" style="font-size:18px;">Mission &
                        Vision</span>
                </div>
            </div>
        </div>
        <div class="row feature-box feature-box-17 m-0">
            <!-- start feature item -->
            <div class="col-12 col-lg-6 col-md-6 md-margin-30px-bottom sm-margin-5px-bottom wow fadeInLeft last-paragraph-no-margin"
                style="visibility: visible; animation-name: fadeInLeft;">
                <div class="box bg-extra-dark-gray text-extra-dark-gray text-white-2-hover">
                    <div class="content">
                        <figure>
                            <i class="ti-crown icon-extra-medium text-deep-pink margin-5px-bottom"></i>
                            <span class="text-large alt-font d-block margin-10px-bottom text-white-2">Mission</span>
                            <div class="details">
                                <p class="width-65 md-width-90 mx-auto text-white-2">A better world through love,
                                    kindness and care to orphans and vulnerable children.</p>
                            </div>
                        </figure>
                    </div>
                </div>
            </div>
            <!-- end feature item -->
            <!-- start feature item -->
            <div class="col-12 col-lg-6 col-md-6 md-margin-30px-bottom sm-margin-5px-bottom wow fadeInLeft last-paragraph-no-margin"
                style="visibility: visible; animation-name: fadeInLeft;">
                <div class="box bg-extra-dark-gray text-extra-dark-gray text-white-2-hover">
                    <div class="content">
                        <figure>
                            <i class="ti-cup icon-extra-medium text-deep-pink margin-5px-bottom"></i>
                            <span class="text-large alt-font d-block margin-10px-bottom text-white-2">Vision</span>
                            <div class="details">
                                <p class="width-65 md-width-90 mx-auto text-white-2">That people everywhere will share
                                    love and kindness to orphans and vulnerable children.</p>
                            </div>
                        </figure>
                    </div>
                </div>
            </div>
            <!-- end feature item -->


        </div>
    </div>
</section>
<!-- end feature box section -->
<!-- start section -->
<section class="p-0 wow fadeIn text-center text-md-left" id="about">
    <div class="container-fluid p-0">
        <div class="row no-gutters">
            <div class="col-12 col-xl-6 col-lg-4 cover-background"
                style="background-image: url('images/wadi-lissa-4U1x6459Q-s-unsplash.jpg')">
                <div class="md-height-500px sm-height-350px"></div>
            </div>
            <div class="col-12 col-xl-3 col-lg-4 bg-white last-paragraph-no-margin text-center text-lg-left">
                <div class="padding-80px-all lg-padding-40px-all md-padding-60px-all sm-padding-30px-all">
                    <h5 class="alt-font font-weight-700 text-extra-dark-gray text-uppercase" style="font-size: 28px;">We
                        are a humanitarian organization.</h5>
                    <div
                        class="separator-line-horrizontal-medium-thick bg-extra-dark-gray width-70 md-width-70 margin-25px-bottom md-margin-20px-bottom sm-width-50 mx-auto mx-lg-0 sm-margin-15px-bottom">
                    </div>
                    <p class="width-95 lg-width-100">Serving the needs of orphans and vulnerable children. We have two
                        main projects that focus on bettering the lives of orphans and vulnerable children</p>
                    <a href="#team"
                        class="btn btn-small btn-dark-gray margin-40px-top md-margin-30px-top sm-margin-15px-top">Meet
                        Our Team</a>
                </div>
            </div>
            <div class="col-12 col-xl-3 col-lg-4 cover-background"
                style="background-image: url('images/oladimeji-odunsi-e-TuK4z2LhY-unsplash.jpg')">
                <div class="md-height-500px sm-height-350px"></div>
            </div>
        </div>
    </div>
</section>
<!-- end section -->



<!-- start projects we handle -->
<section class="big-section bg-light-gray no-padding-bottom wow fadeIn" id
    style="visibility: visible; animation-name: fadeIn;">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-7 text-center margin-100px-bottom sm-margin-40px-bottom">
                <div class="position-relative overflow-hidden w-100">
                    <span class="text-small text-outside-line-full alt-font font-weight-800 text-uppercase" style="font-size:18px;">Projects we
                        handle</span>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- start feature item -->
            <div class="col-12 col-lg-6 p-0 info-banner-box-2 wow fadeInUp"
                style="visibility: visible; animation-name: fadeInUp;">
                <div
                    class="content-box bg-medium-light-gray d-flex align-items-center w-100 padding-50px-lr lg-padding-20px-lr md-padding-50px-lr sm-padding-15px-lr">
                    <div class="row m-0 width-100">
                        <div class="col-12 col-xl-2 col-lg-3 md-margin-10px-bottom"><i
                                class="icon-tools icon-extra-medium text-medium-gray"></i></div>
                        <div class="col-12 col-xl-10 col-lg-9">
                            <div class="alt-font text-medium font-weight-600 margin-5px-bottom text-extra-dark-gray">
                                Girl Smile Initiative </div>
                            <p class="m-0">Changing Kenya, one sanitary pad at a time thus Enhancing Humanity,
                                Sanitation and Dignity. Girl Smile Initiative - GSI was started on 31st January 2015 by
                                twenty one (21) members, fourteen (14) female and seven (7) male with the main aim being
                                to reach out to the less fortunate school-going girls and equipping them with Sanitary
                                towels.
                            </p>
                        </div>
                    </div>
                </div>
                <div
                    class="hover-box bg-deep-pink text-white-2 d-flex justify-content-center align-items-center w-100 padding-50px-lr lg-padding-20px-lr md-padding-50px-lr sm-padding-15px-lr">
                    <div class="row m-0 width-100">
                        <div class="col-12 col-xl-2 col-lg-3 md-margin-10px-bottom"><i
                                class="icon-tools icon-extra-medium text-white-2"></i></div>
                        <div class="col-12 col-xl-10 col-lg-9">
                            <div class="alt-font text-medium font-weight-600 margin-5px-bottom">Girl Smile Initiative
                            </div>
                            <p class="m-0">Changing Kenya, one sanitary pad at a time thus Enhancing Humanity,
                                Sanitation and Dignity. Girl Smile Initiative - GSI was started on 31st January 2015 by
                                twenty one (21) members, fourteen (14) female and seven (7) male with the main aim being
                                to reach out to the less fortunate school-going girls and equipping them with Sanitary
                                towels.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end feature item -->
            <!-- start feature item -->
            <div class="col-12 col-lg-6 info-banner-box-2 p-0 wow fadeInUp" data-wow-delay="0.2s"
                style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                <div
                    class="content-box bg-extra-light-gray d-flex align-items-center w-100 padding-50px-lr lg-padding-20px-lr md-padding-50px-lr sm-padding-15px-lr">
                    <div class="row m-0 width-100">
                        <div class="col-12 col-xl-2 col-lg-3 md-margin-10px-bottom"><i
                                class="icon-heart icon-extra-medium text-medium-gray"></i></div>
                        <div class="col-12 col-xl-10 col-lg-9">
                            <div class="alt-font text-medium font-weight-600 margin-15px-bottom text-extra-dark-gray">
                                Care 4 a Child </div>
                            <p class="m-0">Sharing prayer, love, care and happiness to sick children in hospitals.
                                This was founded in 2019 by Hamida Ahmed, Prisca Beyo and Faith Muthoka with the main
                                goal of showing love to kids.
                                .</p>
                        </div>
                    </div>
                </div>
                <div
                    class="hover-box bg-deep-pink text-white-2 d-flex justify-content-center align-items-center w-100 padding-50px-lr lg-padding-20px-lr md-padding-50px-lr sm-padding-15px-lr">
                    <div class="row m-0 width-100">
                        <div class="col-12 col-xl-2 col-lg-3 md-margin-10px-bottom"><i
                                class="icon-heart icon-extra-medium text-white-2"></i></div>
                        <div class="col-12 col-xl-10 col-lg-9">
                            <div class="alt-font text-medium font-weight-600 margin-15px-bottom">Care 4 a Child </div>
                            <p class="m-0">– Sharing prayer, love, care and happiness to sick children in hospitals.
                                This was founded in 2019 by Hamida Ahmed, Prisca Beyo and Faith Muthoka with the main
                                goal of showing love to kids.
                                .</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end feature item -->

        </div>
    </div>
</section>
<!-- end projects we handle -->
<!-- start information section -->
<section class="wow" style="visibility: visible; animation-name: fadeIn;" id="team">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-7 text-center margin-100px-bottom sm-margin-40px-bottom">
                <div class="position-relative overflow-hidden w-100">
                    <span class="text-small text-outside-line-full alt-font font-weight-800 text-uppercase" style="font-size:18px;">Team
                        Members</span>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- start team item -->
            <div class="col-12 col-lg-3 col-md-6 team-block text-left team-style-2 md-margin-seven-bottom sm-margin-40px-bottom wow slideInUp"
                style="visibility: visible; animation-name: slideInUp;">
                <figure>
                    <div class="team-image sm-width-100">
                        <img src="images/team/evance-team.jpg" alt="" data-no-retina="">
                        <div class="team-overlay bg-deep-pink"></div>
                        <div class="team-member-position text-center margin-25px-top">
                            <div class="text-extra-dark-gray font-weight-600 text-uppercase text-small alt-font">Paul
                                Evance </div>
                            <div class="text-extra-small text-uppercase text-medium-gray">Head of outreach and Special
                                Projects</div>
                        </div>
                    </div>
                    <figcaption>
                        <div class="overlay-content text-center icon-social-small">
                            <span class="text-small d-inline-block m-0">Evance is passionate about girl child education
                                and is the founder of Girl Smile Initiative. His goal in life is to ensure no girl in
                                Kenya misses school because of lack of sanitary protection. He mobilizes volunteers and
                                ensures the right kids get the right help..</span>
                            <div
                                class="separator-line-horrizontal-full bg-deep-pink margin-eleven-tb sm-margin-20px-tb">
                            </div>
                            <a href="http://www.facebbok.com/" class="text-extra-dark-gray" target="_blank"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a href="http://www.twitter.com/" class="text-extra-dark-gray" target="_blank"><i
                                    class="fab fa-twitter"></i></a>

                            <a href="http://www.instagram.com/" class="text-extra-dark-gray" target="_blank"><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                    </figcaption>
                </figure>
            </div>
            <!-- end team item -->
            <!-- start team item -->
            <div class="col-12 col-lg-3 col-md-6 team-block text-left team-style-2 md-margin-seven-bottom sm-margin-40px-bottom wow slideInUp"
                data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: slideInUp;">
                <figure>
                    <div class="team-image sm-width-100">
                        <img src="images/team/faith-team.jpg" alt="" data-no-retina="">
                        <div class="team-overlay bg-deep-pink"></div>
                        <div class="team-member-position text-center margin-25px-top">
                            <div class="text-extra-dark-gray font-weight-600 text-uppercase text-small alt-font">Mwikali
                                Muthoka </div>
                            <div class="text-extra-small text-uppercase text-medium-gray">Head of Internal
                                Communications</div>
                        </div>
                    </div>
                    <figcaption>
                        <div class="overlay-content text-center icon-social-small">
                            <span class="text-small d-inline-block m-0">Faith informs all volunteers of volunteer
                                projects, she ensures all social media accounts are up to date with the goals of the
                                organization.
                                She is passionate about children’s rights, child protection and mental health. She is a
                                member
                                of the Global Goodwill Ambassadors.</span>
                            <div
                                class="separator-line-horrizontal-full bg-deep-pink margin-eleven-tb sm-margin-20px-tb">
                            </div>
                            <a href="http://www.facebbok.com/" class="text-extra-dark-gray" target="_blank"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a href="http://www.twitter.com/" class="text-extra-dark-gray" target="_blank"><i
                                    class="fab fa-twitter"></i></a>

                            <a href="http://www.instagram.com/" class="text-extra-dark-gray" target="_blank"><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                    </figcaption>
                </figure>
            </div>
            <!-- end team item -->
            <!-- start team item -->
            <div class="col-12 col-lg-3 col-md-6 team-block text-left team-style-2 md-margin-seven-bottom sm-margin-40px-bottom wow slideInUp"
                data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: slideInUp;">
                <figure>
                    <div class="team-image sm-width-100">
                        <img src="images/team/prisca-team.jpg" alt="" data-no-retina="">
                        <div class="team-overlay bg-deep-pink"></div>
                        <div class="team-member-position text-center margin-25px-top">
                            <div class="text-extra-dark-gray font-weight-600 text-uppercase text-small alt-font">Khabayi
                                Beyo </div>
                            <div class="text-extra-small text-uppercase text-medium-gray">Head of corporate
                                communications.</div>
                        </div>
                    </div>
                    <figcaption>
                        <div class="overlay-content text-center icon-social-small">
                            <span class="text-small d-inline-block m-0">Donors, sponsors, corporates that just want to
                                work with us, go through Prisca. She is an avid communicator who is very passionate
                                about all things kids.
                                Child education is her charity of choice and strongly believes that an educated child is
                                an empowered child.
                            </span>
                            <div
                                class="separator-line-horrizontal-full bg-deep-pink margin-eleven-tb sm-margin-20px-tb">
                            </div>
                            <a href="http://www.facebbok.com/" class="text-extra-dark-gray" target="_blank"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a href="http://www.twitter.com/" class="text-extra-dark-gray" target="_blank"><i
                                    class="fab fa-twitter"></i></a>

                            <a href="http://www.instagram.com/" class="text-extra-dark-gray" target="_blank"><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                    </figcaption>
                </figure>
            </div>
            <!-- end team item -->
            <!-- start team item -->
            <div class="col-12 col-lg-3 col-md-6 team-block text-left team-style-2 wow slideInUp" data-wow-delay="0.6s"
                style="visibility: visible; animation-delay: 0.6s; animation-name: slideInUp;">
                <figure>
                    <div class="team-image sm-width-100">
                        <img src="images/team/hamida-team.jpg" alt="" data-no-retina="">
                        <div class="team-overlay bg-deep-pink"></div>
                        <div class="team-member-position text-center margin-25px-top">
                            <div class="text-extra-dark-gray font-weight-600 text-uppercase text-small alt-font">Hamida
                                Ahmed.</div>
                            <div class="text-extra-small text-uppercase text-medium-gray">Treasurer.</div>
                        </div>
                    </div>
                    <figcaption>
                        <div class="overlay-content text-center icon-social-small">
                            <span class="text-small d-inline-block m-0">Hamida handles all finance and donated items.
                                She ensures all the
                                donated items get to the orphanages, rescue centers and children’s homes. She is very
                                passionate about kids and volunteer work having volunteered for over 10 years. She is
                                also a
                                member of the Global Goodwill Ambassadors..</span>
                            <div
                                class="separator-line-horrizontal-full bg-deep-pink margin-eleven-tb sm-margin-20px-tb">
                            </div>
                            <a href="http://www.facebbok.com/" class="text-extra-dark-gray" target="_blank"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a href="http://www.twitter.com/" class="text-extra-dark-gray" target="_blank"><i
                                    class="fab fa-twitter"></i></a>

                            <a href="http://www.instagram.com/" class="text-extra-dark-gray" target="_blank">
                                <i class="fab fa-instagram"></i></a>
                        </div>
                    </figcaption>
                </figure>
            </div>
            <!-- end team item -->
        </div>
    </div>
</section>
<!-- end information section -->


<!-- start call to action -->
<section class="half-section wow fadeIn cover-background" id="volunteer" style="background-image: url('images/tetbirt-salim-4LunKr1gTd8-unsplash.jpg');">
    <div class="opacity-medium bg-extra-dark-gray"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 position-relative text-center">
                <span class="text-extra-large text-white-2 alt-font d-inline-block margin-5px-top margin-30px-right sm-no-margin-right sm-no-margin-top sm-margin-15px-bottom sm-width-100">
                    Do you enjoy volunteer work?
                </span>
                <a href="{{url('/contact')}}" class="btn btn-white btn-small align-top sm-no-margin-right">Volunteer for a Project</a>
            </div>
        </div>
    </div>
</section>
<!-- end call to action -->
@include('partials.footer')
@endsection

@section('scripts')

@endsection
