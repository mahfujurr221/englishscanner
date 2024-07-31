<!DOCTYPE html>
<html lang="en">

<head>
    <!--================= Meta tag =================-->
    <meta charset="utf-8" />

    <meta name="description" content="" />
    <!--================= Responsive Tag =================-->
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--================= Favicon =================-->
    <link rel="shortcut icon" href="{{ asset('frontend/images/favicon.ico') }} " type="image/x-icon" />

    <!--================= Bootstrap V5 css =================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/bootstrap.min.css') }} " />
    <!--================= Menus css =================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/menus.css') }} " />
    <!--================= Animate css =================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/animate.css') }} " />
    <!--================= Owl Carousel css =================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/owl.carousel.css') }} " />
    <!--================= Swipper Carousel css =================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/swiper.min.css') }} ">
    <!--================= Elegant icon css  =================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/fonts/elegant-icon.css') }} " />
    <!--================= Magnific Popup css =================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/magnific-popup.css') }} " />
    <!--================= Animations css =================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/animations.css') }} " />
    <!--================= style css =================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/style.css') }}" />
    <!--================= Custom Spacing css =================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/custom-spacing.css') }} " />
    <!--================= Responsive css =================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/responsive.css') }} " />
    <title>English Scanner</title>
</head>

<body id="page-top">
    <!--================= Preloader Section Start Here =================-->
    <div id="react__preloader">
        <div id="react__circle_loader"></div>
        <div class="react__loader_logo">
            <img src="{{ asset('frontend/images/preload.png') }} " alt="Preload" />
        </div>
    </div>
    <!--================= Preloader Section End Here =================-->

    @include('frontend.layouts.includes.header')


    <!--================= Wrapper Start Here =================-->
    <div class="react-wrapper">
        <div class="react-wrapper-inner">

            <!--================= Slider Section Start Here =================-->
            <div class="react-slider-part">
                <div class="home-sliders home2 owl-carousel">
                    <div class="single-slide">
                        <div class="slider-img">
                            <img class="desktop" src="{{ asset('frontend/images/slider/1.jpg') }} "
                                alt="Slider Image 1" />
                            <img class="mobile" src="{{ asset('frontend/images/slider/11.jpg') }} "
                                alt="Slider Image 1" />
                        </div>
                        <div class="container">
                            <div class="slider-content">
                                <div class="content-part">
                                    <span class="slider-pretitle">Great Quality of Learning...</span>
                                    <h2 class="slider-title">
                                        Your Ultimate Guide to<br />
                                        Fluent Communication
                                    </h2>
                                    <div class="slider-btn">
                                        <a href="about.html" class="react-btn-border">Admissions</a>
                                    </div>
                                </div>
                            </div>
                            <div class="event__video-btn--play">
                                <a href="https://www.youtube.com/watch?v=ERTsAbXA_08"
                                    class="event__video-btn--play-btn custom-popup">
                                    <i class="arrow_triangle-right"></i>
                                    <em>Watch Video <br />Intro</em>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="single-slide">
                        <div class="slider-img">
                            <img class="desktop" src="{{ asset('frontend/images/slider/2.jpg') }} "
                                alt="Slider Image 2" />
                            <img class="mobile" src="{{ asset('frontend/images/slider/12.jpg') }} "
                                alt="Slider Image 2" />
                        </div>
                        <div class="container">
                            <div class="slider-content">
                                <div class="content-part">
                                    <span class="slider-pretitle">Great Quality of Learning...</span>
                                    <h2 class="slider-title">
                                        Your Ultimate Guide to<br />
                                        Fluent Communication
                                    </h2>
                                    <div class="slider-btn">
                                        <a href="about.html" class="react-btn-border">Admissions</a>
                                    </div>
                                </div>
                            </div>
                            <div class="event__video-btn--play">
                                <a href="https://www.youtube.com/watch?v=QRDFMPmFLG0"
                                    class="event__video-btn--play-btn custom-popup">
                                    <i class="arrow_triangle-right"></i>
                                    <em>Watch Video <br />Intro</em>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--================= Slider Section End Here =================-->


            <!--================= About Section Start Here =================-->
            <div class="about-section-six pt---120 ">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="section-title-area-six">
                                <div class="section-pretitle">English Scanner Institute</div>
                                <div class="section-title">About Our Institute
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="about-contents">
                                <p class="fat-paragraph">English Scanner is a premier educational institution dedicated
                                    to helping students achieve their academic and professional goals. We specialise in
                                    teaching English language skills and preparing students for a variety of
                                    standardised tests, including the GRE, GMAT, TOEFL, IELTS, Duolingo, SAT, and PTE.
                                    Our experienced instructors use innovative teaching methods to ensure that every
                                    student can succeed. At English Scanner, we believe that learning is a lifelong
                                    journey, and we are committed to supporting our students every step of the way. We
                                    offer flexible class schedules to accommodate busy lifestyles and provide
                                    personalised attention to address individual learning needs. Our modern facilities
                                    and online resources create a conducive learning environment for students. Whether
                                    you are looking to improve your English proficiency or prepare for a specific exam,
                                    English Scanner is here to help. We are open to all learners, and our diverse
                                    community fosters a rich, inclusive educational experience. Join the English Scanner
                                    today and take the first step towards fulfilling your dreams.</p>


                                <p class="plain-paragraph">
                                    <li>2 free classes for everyone.</li>
                                    <li>50% off for the first 50 people!!</li>
                                    <li>Offline and in-person classes </li>
                                </p>

                                <div class="about-btn">
                                    <button class="home-six-btn"><a href="about.html">Read more</a></button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!--================= About Section End Here =================-->


            <!--=================  Academic Section Start Here ================= -->
            <div class="react_popular_topics pt---100">
                <div class="container">
                    <div class="react__title__section text-center">
                        <h2 class="react__tittle">Academics</h2>
                        <img src="{{ asset('frontend/images/line.png') }} " alt="image" />
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="item__inner">
                                <div class="icon">
                                    <img src="{{ asset('frontend/images/service/1.png') }} " alt="image" />
                                </div>
                                <div class="react-content">
                                    <h3 class="react-title">
                                        <a href="coureses-grid.html">Let’s Talk English</a>
                                    </h3>
                                    <a href="#" class="r__link">Learn More
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-arrow-right">
                                            <line x1="5" y1="12" x2="19" y2="12">
                                            </line>
                                            <polyline points="12 5 19 12 12 19"></polyline>
                                        </svg></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="item__inner">
                                <div class="icon">
                                    <img src="{{ asset('frontend/images/service/2.png') }}" alt="image" />
                                </div>
                                <div class="react-content">
                                    <h3 class="react-title">
                                        <a href="coureses-grid.html">Innovative Courses</a>
                                    </h3>
                                    <a href="#" class="r__link">Learn More
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-arrow-right">
                                            <line x1="5" y1="12" x2="19" y2="12">
                                            </line>
                                            <polyline points="12 5 19 12 12 19"></polyline>
                                        </svg></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="item__inner">
                                <div class="icon">
                                    <img src="{{ asset('frontend/images/service/3.png') }} " alt="image" />
                                </div>
                                <div class="react-content">
                                    <h3 class="react-title">
                                        <a href="coureses-grid.html">English Grammer</a>
                                    </h3>
                                    <a href="#" class="r__link">Learn More
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-arrow-right">
                                            <line x1="5" y1="12" x2="19" y2="12">
                                            </line>
                                            <polyline points="12 5 19 12 12 19"></polyline>
                                        </svg></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="item__inner">
                                <div class="icon">
                                    <img src="{{ asset('frontend/images/service/4.png') }} " alt="image" />
                                </div>
                                <div class="react-content">
                                    <h3 class="react-title">
                                        <a href="coureses-grid.html">Online Education</a>
                                    </h3>
                                    <a href="#" class="r__link">Learn More
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-arrow-right">
                                            <line x1="5" y1="12" x2="19" y2="12">
                                            </line>
                                            <polyline points="12 5 19 12 12 19"></polyline>
                                        </svg></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--=================  Academic Section End Here ================= -->


            <!--================= Popular Course Section Start Here =================-->
            <div class="popular__course__area pt---100 pb---100">
                <div class="container">
                    <div class="react__title__section text-center">
                        <h2 class="react__tittle">Popular Courses</h2>
                        <img src="{{ asset('frontend/images/line.png') }} " alt="image" />
                    </div>
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="course__item mb-30">
                                {{-- <div class="course__thumb">
                                    <a href="coureses-single.html"><img
                                            src="{{ asset('frontend/images/course/1.png') }} " alt="image" /></a>
                                </div> --}}
                                <div class="course__inner">
                                    <ul>
                                        <li>IELTS/TOEFL</li>
                                        <li>24 Lessons</li>
                                    </ul>
                                    <h3 class="react-course-title">
                                        <a href="coureses-single.html">This course prepares you for the IELTS/TOEFL
                                            exams...</a>
                                    </h3>
                                    <div class="course__card-icon d-flex align-items-center">
                                        <div class="course__card-icon--1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-users">
                                                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                                <circle cx="9" cy="7" r="4"></circle>
                                                <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                            </svg>
                                            <span>77 Students</span>
                                        </div>
                                        <div class="react__user">10000 BDT</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="course__item mb-30">
                                {{-- <div class="course__thumb">
                                    <a href="coureses-single.html"><img src="assets/images/course/2.png"
                                            alt="image" /></a>
                                </div> --}}
                                <div class="course__inner">
                                    <ul>
                                        <li>HSC/Alim English</li>
                                        <li>39 Lessons</li>
                                    </ul>
                                    <h3 class="react-course-title">
                                        <a href="coureses-single.html">English courses tailored for HSC/Alim
                                            students.</a>
                                    </h3>
                                    <div class="course__card-icon d-flex align-items-center">
                                        <div class="course__card-icon--1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-users">
                                                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                                <circle cx="9" cy="7" r="4"></circle>
                                                <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                            </svg>
                                            <span>99 Students</span>
                                        </div>
                                        <div class="react__user">4000 BDT</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="course__item mb-30">
                                {{-- <div class="course__thumb">
                                    <a href="coureses-single.html"><img src="assets/images/course/3.png"
                                            alt="image" /></a>
                                </div> --}}
                                <div class="course__inner">
                                    <ul>
                                        <li>GRE/GMAT/SAT</li>
                                        <li>20 Lessons</li>
                                    </ul>
                                    <h3 class="react-course-title">
                                        <a href="coureses-single.html">Intensive prep courses for GRE, GMAT, and SAT
                                            exams.</a>
                                    </h3>
                                    <div class="course__card-icon d-flex align-items-center">
                                        <div class="course__card-icon--1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-users">
                                                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                                <circle cx="9" cy="7" r="4"></circle>
                                                <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                            </svg>
                                            <span>68 Students</span>
                                        </div>
                                        <div class="react__user">15000 BDT</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="course__item mb-30">
                                {{-- <div class="course__thumb">
                                    <a href="coureses-single.html"><img src="assets/images/course/4.png"
                                            alt="image" /></a>
                                </div> --}}
                                <div class="course__inner">
                                    <ul>
                                        <li>Spoken English</li>
                                        <li>26 Lessons</li>
                                    </ul>
                                    <h3 class="react-course-title">
                                        <a href="coureses-single.html">Improve your spoken English skills with
                                            practical...</a>
                                    </h3>
                                    <div class="course__card-icon d-flex align-items-center">
                                        <div class="course__card-icon--1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-users">
                                                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                                <circle cx="9" cy="7" r="4"></circle>
                                                <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                            </svg>
                                            <span>84 Students</span>
                                        </div>
                                        <div class="react__user">4000 BDT</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <a href="#" class="view-courses">
                            View All Courses
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <polyline points="12 5 19 12 12 19"></polyline>
                            </svg></a>
                    </div>
                </div>
            </div>
            <!--================= Popular Course Section End Here =================-->

            <!--================= Counter Section Start Here =================-->
            <div class="count__area pb---110">
                <div class="container count__width">
                    <div class="row">
                        <div class="col-xxl-11 col-xl-11 col-lg-11 offset-lg-1">
                            <div class="row">
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6">
                                    <div class="count__content">
                                        <p class="count__content--paragraph">
                                            Successfully <br />Trained
                                        </p>
                                        <h3 class="count__content--title-1 counter">1478</h3>
                                        <p class="count__content--paragraph2">
                                            Enrolled Learners
                                        </p>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6">
                                    <div class="count__content">
                                        <p class="count__content--paragraph">
                                            Available <br />Courses
                                        </p>
                                        <h3 class="count__content--title-1 counter">1731</h3>
                                        <p class="count__content--paragraph2">
                                            Countrywide Awards
                                        </p>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6">
                                    <div class="count__content">
                                        <p class="count__content--paragraph">
                                            Scheduled <br />Events
                                        </p>
                                        <h3 class="count__content--title-1 counter">280</h3>
                                        <p class="count__content--paragraph2">Success Events</p>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6">
                                    <div class="count__content">
                                        <p class="count__content--paragraph">
                                            Getting <br />Featured on
                                        </p>
                                        <h3 class="count__content--title-1 counter">1045</h3>
                                        <p class="count__content--paragraph2">Online Courses</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--================= Counter Section End Here =================-->

            <!--================= Upcoming Event Section Start Here =================-->
            <div class="react-upcoming__event blog__area">
                <div class="container">
                    <div class="react__title__section text-center">
                        <h2 class="react__tittle">Upcoming Events</h2>
                        <img src="{{ asset('frontend/images/line.png') }} " alt="image" />
                    </div>
                    <div class="event-slider owl-carousel">
                        <div class="event__card">
                            <div class="event__card--content">
                                <div class="event__card--content-area">
                                    <div class="event__card--date"><em>10</em> September, 2024</div>
                                    <div class="event_time">10:30 AM - 12:30PM</div>
                                    <h3 class="event__card--title">
                                        <a href="#">A Better Alternative To <br />
                                            Grading Student Writing</a>
                                    </h3>
                                    <div class="event_location">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-map-pin">
                                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                            <circle cx="12" cy="10" r="3"></circle>
                                        </svg>
                                        Farmgate, Dhaka
                                    </div>
                                    <a class="event__card--link" href="#">
                                        Find Out More
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-arrow-right">
                                            <line x1="5" y1="12" x2="19" y2="12">
                                            </line>
                                            <polyline points="12 5 19 12 12 19"></polyline>
                                        </svg></a>
                                </div>
                            </div>
                        </div>
                        <div class="event__card">
                            <div class="event__card--content">
                                <div class="event__card--content-area">
                                    <div class="event__card--date">
                                        <em>14</em> October, 2024
                                    </div>
                                    <div class="event_time">12:00 AM - 01:30PM</div>
                                    <h3 class="event__card--title">
                                        <a href="#">12 Things Successful <br />
                                            Mompreneurs</a>
                                    </h3>
                                    <div class="event_location">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-map-pin">
                                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                            <circle cx="12" cy="10" r="3"></circle>
                                        </svg>
                                        Farmgate, Dhaka
                                    </div>
                                    <a class="event__card--link" href="#">
                                        Find Out More
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-arrow-right">
                                            <line x1="5" y1="12" x2="19" y2="12">
                                            </line>
                                            <polyline points="12 5 19 12 12 19"></polyline>
                                        </svg></a>
                                </div>
                            </div>
                        </div>
                        <div class="event__card">
                            <div class="event__card--content">
                                <div class="event__card--content-area">
                                    <div class="event__card--date"><em>26</em> October, 2024</div>
                                    <div class="event_time">01:30 AM - 02:00PM</div>
                                    <h3 class="event__card--title">
                                        <a href="#">Ethics in AI Live Event<br />
                                            Machines Judging.</a>
                                    </h3>
                                    <div class="event_location">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-map-pin">
                                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                            <circle cx="12" cy="10" r="3"></circle>
                                        </svg>
                                        Farmgate, Dhaka
                                    </div>
                                    <a class="event__card--link" href="#">
                                        Find Out More
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-arrow-right">
                                            <line x1="5" y1="12" x2="19" y2="12">
                                            </line>
                                            <polyline points="12 5 19 12 12 19"></polyline>
                                        </svg></a>
                                </div>
                            </div>
                        </div>
                        <div class="event__card">
                            <div class="event__card--content">
                                <div class="event__card--content-area">
                                    <div class="event__card--date"><em>19</em> November, 2024</div>
                                    <div class="event_time">03:00 AM - 04:30PM</div>
                                    <h3 class="event__card--title">
                                        <a href="#">The Importance Of <br />
                                            Intrinsic Motivation.</a>
                                    </h3>
                                    <div class="event_location">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-map-pin">
                                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                            <circle cx="12" cy="10" r="3"></circle>
                                        </svg>
                                        Farmgate, Dhaka
                                    </div>
                                    <a class="event__card--link" href="#">
                                        Find Out More
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-arrow-right">
                                            <line x1="5" y1="12" x2="19" y2="12">
                                            </line>
                                            <polyline points="12 5 19 12 12 19"></polyline>
                                        </svg></a>
                                </div>
                            </div>
                        </div>
                        <div class="event__card">
                            <div class="event__card--content">
                                <div class="event__card--content-area">
                                    <div class="event__card--date"><em>10</em> December, 2024</div>
                                    <div class="event_time">10:30 AM - 12:30PM</div>
                                    <h3 class="event__card--title">
                                        <a href="#">A Better Alternative To <br />
                                            Grading Student Writing</a>
                                    </h3>
                                    <div class="event_location">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-map-pin">
                                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                            <circle cx="12" cy="10" r="3"></circle>
                                        </svg>
                                        Web Seminar
                                    </div>
                                    <a class="event__card--link" href="#">
                                        Find Out More
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-arrow-right">
                                            <line x1="5" y1="12" x2="19" y2="12">
                                            </line>
                                            <polyline points="12 5 19 12 12 19"></polyline>
                                        </svg></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--================= Upcoming Event Section End Here =================-->

            <!--================= Blog Section Start Here =================-->

            <div class="courses-section-six  pt---100 pb---100">
                <div class="container">
                    <div class="section-title-area-six text-center mb---70">
                        <div class="section-title">Our Video Blogs
                        </div>
                        <img src="{{ asset('frontend/images/line.png') }} " alt="image" />
                    </div>
                    <div class="slider-area">
                        <div class="swiper coursesSlider-6">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="ratio ratio-16x9">
                                        <iframe src="https://www.youtube.com/embed/7_l-y7aAJtw?si=pJT4NkCp29SYezfN"
                                            title="YouTube video player" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="ratio ratio-16x9">
                                        <iframe src="https://www.youtube.com/embed/QRDFMPmFLG0?si=qGx2zLXzmj1_p0jH"
                                            title="YouTube video player" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="ratio ratio-16x9">
                                        <iframe src="https://www.youtube.com/embed/ERTsAbXA_08?si=UkLGCBGz1USygpnA"
                                            title="YouTube video player" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="ratio ratio-16x9">
                                        <iframe src="https://www.youtube.com/embed/UmgkLnVQaZo?si=L-g0ijtM77Alsjtw"
                                            title="YouTube video player" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="btn-area">
                        <button class="browse-course-btn home-six-btn"><a href="coureses-list.html">Browse All Blogs
                            </a><i class="fa-solid fa-arrow-right-long"></i></button>
                    </div>
                </div>
            </div>
            <!--================= Blog Section End Here =================-->

            <!--================= About Course Section Start Here =================-->
            <div class="campus-section-six">
                <div class="section-title-area-six text-center mb----60">
                    <div class="section-title">About The Course
                    </div>
                    <img src="{{ asset('frontend/images/line.png') }} " alt="image" />
                </div>
                <div class="row">
                    <div class="col-sm-12 col-xl-6 col-lg-12 p---0">
                        <div class="campus-picture"><img
                                src="{{ asset('frontend/images/home6/campus/students-walking.jpg') }}"
                                alt="students-picture"></div>
                    </div>
                    <div class="col-sm-12 col-xl-6 p---0">
                        <div class="contents">

                            <p class="sm:text-justify sm:w-full sm:text-center">An online course designed to enhance
                                English competency among primary teachers focuses on
                                improving spoken English, children's English, grammar, and phonetics. Delivered via
                                Zoom, this innovative programme integrates syntax methods and the use of gestures to
                                foster engaging and effective teaching strategies. Participants engage in interactive
                                activities like role-playing and sentence construction exercises, enhancing both fluency
                                and grammatical understanding. Feedback from teachers highlights increased confidence
                                and proficiency in English, impacting their teaching methods positively. Challenges such
                                as adapting to virtual teaching methods were met with iterative adjustments, enriching
                                the learning experience. This course exemplifies the critical role of targeted
                                professional development in elevating educational standards and teacher performance in
                                primary education.</p>



                            <button class="home-six-btn mt---30 mb-3"><a href="signup.html">Enroll
                                    Now</a></button>
                        </div>
                    </div>
                </div>
            </div>
            <!--================= About Course Section End Here =================-->


            <!--================= Team Section Start Here =================-->
            <div class="react-clients react-clientso home-testimonial pt---90 pb---120">
                <div class="container">
                    <div class="react__title__section text-center">
                        <h2>Our Team Member</h2>
                        <img src="{{ asset('frontend/images/line.png') }} " alt="image" />
                    </div>
                    <div class="container">
                        <div class="client-slider owl-carousel">
                            <div class="single-client">
                                <div class="client-bottom">
                                    <span class="client-author"><img
                                            src="{{ asset('frontend/images/es/samser.jpeg') }} " alt="team img" />
                                    </span>
                                </div>
                                <div class="client-content">
                                    <span class="client-title">Shamser Sarder <em> Chairman</em></span>
                                    <p>
                                        BA in English(1st),MA in English, BEd(1st),
                                        MSS(1st),MEd(3.10-DU) Master Trainer in English (Trained
                                        by British council)
                                    </p>
                                    {{-- <div class="testimonial__ratings">
                                        <em class="icon_star"></em>
                                        <em class="icon_star"></em>
                                        <em class="icon_star"></em>
                                        <em class="icon_star"></em>
                                        <em class="icon_star_alt"></em>
                                        <span><em>4.9</em> (14 Reviews)</span>
                                    </div> --}}
                                    {{-- <img class="comma" src="assets/images/testimonial/coma.png" alt="image" /> --}}
                                </div>
                            </div>
                            <div class="single-client">
                                <div class="client-bottom">
                                    <span class="client-author"><img
                                            src="{{ asset('frontend/images/es/shams.jpeg') }} " alt="team img" />
                                    </span>
                                </div>
                                <div class="client-content">
                                    <span class="client-title">Shams Ishtiaque Rahman <em> Managing
                                            Director</em></span>
                                    <p>
                                        BSc and MSc in Computer Science from Stony Brook
                                        University, New York, USA O Levels, A Levels from
                                        Scholastica School (English Medium)
                                    </p>
                                    {{-- <div class="testimonial__ratings">
                                        <em class="icon_star"></em>
                                        <em class="icon_star"></em>
                                        <em class="icon_star"></em>
                                        <em class="icon_star"></em>
                                        <em class="icon_star_alt"></em>
                                        <span><em>4.9</em> (14 Reviews)</span>
                                    </div>
                                    <img class="comma" src="assets/images/testimonial/coma.png" alt="image" /> --}}
                                </div>
                            </div>

                            <div class="single-client">
                                <div class="client-bottom">
                                    <span class="client-author"><img
                                            src="{{ asset('frontend/images/es/ceo.jpeg') }} " alt="team img" />
                                    </span>
                                </div>
                                <div class="client-content">
                                    <span class="client-title">Md. Abdur Razzak Khan <em> Chief Executive
                                            Officer</em></span>
                                    <p>
                                        MBA, BBA in Tourism and Hospitality Management University
                                        of Dhaka
                                    </p>
                                    {{-- <div class="testimonial__ratings">
                                        <em class="icon_star"></em>
                                        <em class="icon_star"></em>
                                        <em class="icon_star"></em>
                                        <em class="icon_star"></em>
                                        <em class="icon_star_alt"></em>
                                        <span><em>4.9</em> (14 Reviews)</span>
                                    </div>
                                    <img class="comma" src="assets/images/testimonial/coma.png" alt="image" /> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--================= Team Section End Here =================-->

            @include('frontend.layouts.includes.footer')


        </div>
    </div>
    <!--================= Wrapper End Here =================-->






    <!--================= Jquery latest version =================-->
    <script src="{{ asset('frontend/js/jquery.min.js') }}  "></script>
    <!--================= Modernizr js =================-->
    <script src="{{ asset('frontend/js/modernizr-2.8.3.min.js') }} "></script>
    <!--================= Bootstrap js =================-->
    <script src="{{ asset('frontend/js/bootstrap.min.js') }} "></script>
    <!--================= Owl Carousel js =================-->
    <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
    <!--================= Swiper Slider js =================-->
    <script src="{{ asset('frontend/js/swiper-bundle.min.js') }}"></script>
    <!--================= Magnific Popup =================-->
    <script src="{{ asset('frontend/js/jquery.magnific-popup.min.js') }} "></script>
    <!--================= Counter up js =================-->
    <script src="{{ asset('frontend/js/jquery.counterup.min.js') }} "></script>
    <script src="{{ asset('frontend/js/waypoints.min.js') }} "></script>
    <!--================= Wow js =================-->
    <script src="{{ asset('frontend/js/wow.min.js') }} "></script>
    <!--================= menus js =================-->
    <script src="{{ asset('frontend/js/menus.js') }} "></script>
    <!--================= Plugins js =================-->
    <script src="{{ asset('frontend/js/plugins.js') }} "></script>
    <!--================= Main js =================-->
    <script src="{{ asset('frontend/js/main.js') }}"></script>
</body>

</html>
