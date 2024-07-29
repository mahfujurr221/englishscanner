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


    <!--================= Header Section Start Here =================-->
    <header id="react-header" class="react-header">
        <div class="topbar-area style1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="topbar-contact">
                            <ul>
                                <li>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone">
                                        <path
                                            d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                                        </path>
                                    </svg>
                                    <a href="tel:(+88) 01757474700"> (+88) 01757 474700</a>
                                </li>
                                <li>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail">
                                        <path
                                            d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                                        </path>
                                        <polyline points="22,6 12,13 2,6"></polyline>
                                    </svg>
                                    <a href="mailto:info@englishscanner.com">info@englishscanner.com</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-5 text-right">
                        <div class="toolbar-sl-share">
                            <ul class="social-links">
                                <li>
                                    <a href="https://www.facebook.com/scanenglish" target="_blank"><span
                                            aria-hidden="true" class="social_facebook"></span></a>
                                </li>
                                <li>
                                    <a href="https://x.com/" target="_blank"><span aria-hidden="true"
                                            class="social_twitter"></span></a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/feed/" target="_blank"><span aria-hidden="true"
                                            class="social_linkedin"></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-part">
            <div class="container">
                <!--================= Menu Start Here =================-->
                <div class="react-main-menu">
                    <nav>
                        <!--================= Menu Toggle btn =================-->
                        <div class="menu-toggle">
                            <div class="logo">
                                <a href="{{ url('/') }}" class="logo-text">
                                    <img style="width: 5rem" src="{{ asset('frontend/images/logo.png') }} "
                                        alt="logo" />
                                </a>
                            </div>
                            <button type="button" id="menu-btn">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <!--================= Menu Structure =================-->
                        <div class="react-inner-menus">
                            <ul id="backmenu" class="react-menus home react-sub-shadow">
                                <li>
                                    <a href="{{ url('/') }}">Home</a>

                                </li>
                                <li>
                                    <a href="#">Let's Learn</a>

                                </li>
                                <li>
                                    <a href="#">Courses</a>

                                </li>
                                <li>
                                    <a href="#">Blog</a>

                                </li>
                                <li><a href="#">Contact</a></li>
                                <li><a href="#">About</a></li>
                            </ul>
                            <div class="searchbar-part">
                                <div class="react-login">
                                    <a href="login.html">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-user">
                                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="12" cy="7" r="4"></circle>
                                        </svg>
                                        Log In
                                    </a>
                                </div>
                                <form class="search-form">
                                    <input type="text" class="form-input" placeholder="Search Course" />
                                    <button type="submit" class="form-button">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-search">
                                            <circle cx="11" cy="11" r="8"></circle>
                                            <line x1="21" y1="21" x2="16.65" y2="16.65">
                                            </line>
                                        </svg>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </nav>
                </div>
                <!--=================  Menu End Here  =================-->
            </div>
        </div>
    </header>
    <!--================= Header Section End Here =================-->



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
                                    <span class="slider-pretitle">Great Quality Cocial life</span>
                                    <h2 class="slider-title">
                                        Discover the world of<br />
                                        possible university.
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
                                    <span class="slider-pretitle">Great Quality Cocial life</span>
                                    <h2 class="slider-title">
                                        Discover the world of<br />
                                        possible university.
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
            <div class="about-section-six pt---120 pb---120">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="section-title-area-six">
                                <div class="section-pretitle">Echooling Educational Institute</div>
                                <div class="section-title">About Our English Scanner
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


            <!--=================  Service Section Start Here ================= -->
            <div class="react_popular_topics pt---100 pb---70">
                <div class="container">
                    <div class="react__title__section text-left">
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
            <!--=================  Service Section End Here ================= -->



            <!--================= About Course Section Start Here =================-->
            <div class="campus-section-six">
                <div class="row">
                    <div class="col-xl-6 col-lg-12 p---0">
                        <div class="campus-picture"><img
                                src="{{ asset('frontend/images/home6/campus/students-walking.jpg') }}"
                                alt="students-picture"></div>
                    </div>
                    <div class="col-xl-6 p---0">
                        <div class="contents">
                            <h1 class="campus-title">About The Course</h1>
                            <p>An online course designed to enhance English competency among primary teachers focuses on
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

                            <div class="row justify-content-left">
                                <div class="col-lg-5 text-center ">
                                    <div class="table-responsive border border-2 border-white">
                                        <table class="table table-fixed text-white">
                                            <thead>
                                                <tr>
                                                    <th class="w-25 p-2">Course Duration</th>
                                                    <th class="w-25 p-2">No. of classes</th>
                                                    <th class="w-25 p-2">Class Duration</th>
                                                    <th class="w-25 p-2">No. of Exams</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="border p-2">2 months (8 weeks)</td>
                                                    <td class="border p-2">22</td>
                                                    <td class="border p-2">2 Hours (3 days a week)</td>
                                                    <td class="border p-2">02</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>


                            <button class="home-six-btn mt---30 mb-3"><a href="signup.html">Enroll
                                    Now</a></button>
                        </div>
                    </div>
                </div>
            </div>
            <!--================= Campus Section End Here =================-->


            <!--================= Popular Course Section Start Here =================-->
            <div class="popular__course__area pt---100 pb---100">
                <div class="container">
                    <div class="react__title__section text-center">
                        <h2 class="react__tittle">Popular Courses</h2>
                        <img src="assets/images/line.png" alt="image" />
                    </div>
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="course__item mb-30">
                                <div class="course__thumb">
                                    <a href="coureses-single.html"><img src="assets/images/course/1.png"
                                            alt="image" /></a>
                                </div>
                                <div class="course__inner">
                                    <ul>
                                        <li>UX Design</li>
                                        <li>24 Lessons</li>
                                    </ul>
                                    <h3 class="react-course-title">
                                        <a href="coureses-single.html">Dave conservatoire is the<br />
                                            Entirely free online.</a>
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
                                        <div class="react__user">$68.00</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="course__item mb-30">
                                <div class="course__thumb">
                                    <a href="coureses-single.html"><img src="assets/images/course/2.png"
                                            alt="image" /></a>
                                </div>
                                <div class="course__inner">
                                    <ul>
                                        <li>UX Design</li>
                                        <li>39 Lessons</li>
                                    </ul>
                                    <h3 class="react-course-title">
                                        <a href="coureses-single.html">Strategy law and <br />
                                            Organization foundation.</a>
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
                                        <div class="react__user">$99.00</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="course__item mb-30">
                                <div class="course__thumb">
                                    <a href="coureses-single.html"><img src="assets/images/course/3.png"
                                            alt="image" /></a>
                                </div>
                                <div class="course__inner">
                                    <ul>
                                        <li>UX Design</li>
                                        <li>20 Lessons</li>
                                    </ul>
                                    <h3 class="react-course-title">
                                        <a href="coureses-single.html">Python for Data Science & <br />
                                            Machine Learning</a>
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
                                        <div class="react__user">$79.00</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="course__item mb-30">
                                <div class="course__thumb">
                                    <a href="coureses-single.html"><img src="assets/images/course/4.png"
                                            alt="image" /></a>
                                </div>
                                <div class="course__inner">
                                    <ul>
                                        <li>UX Design</li>
                                        <li>26 Lessons</li>
                                    </ul>
                                    <h3 class="react-course-title">
                                        <a href="coureses-single.html">The complete web develop <br />Ment
                                            bootcamp.</a>
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
                                        <div class="react__user">$120.00</div>
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
                        <img src="assets/images/line.png" alt="image" />
                    </div>
                    <div class="event-slider owl-carousel">
                        <div class="event__card">
                            <div class="event__card--content">
                                <div class="event__card--content-area">
                                    <div class="event__card--date"><em>10</em> April, 2022</div>
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
                                        New York, USA
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
                                        <em>14</em> February, 2022
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
                                        New York, USA
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
                                    <div class="event__card--date"><em>26</em> March, 2022</div>
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
                                        New York, USA
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
                                    <div class="event__card--date"><em>19</em> April, 2022</div>
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
                                        New York, USA
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
                                    <div class="event__card--date"><em>10</em> April, 2022</div>
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
                                        New York, USA
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
            <!--================= Clients Section Start Here =================-->
            <div class="react-clients react-clientso home-testimonial pt---90 pb---120">
                <div class="container">
                    <div class="react__title__section text-center">
                        <h2>What our student saying</h2>
                        <img src="assets/images/line.png" alt="image" />
                    </div>
                    <div class="container">
                        <div class="client-slider owl-carousel">
                            <div class="single-client">
                                <div class="client-bottom">
                                    <span class="client-author"><img src="assets/images/testimonial/testimonial.png"
                                            alt="Testimonials" />
                                    </span>
                                </div>
                                <div class="client-content">
                                    <span class="client-title">Justin Case <em> Student</em></span>
                                    <p>
                                        Nulla porttitor accumsan tincidunt. vamus magna justo,
                                        lacinia eget consectetur sed, convallis at tellus.
                                        Curabitur non nulla sit amet nisl tempus convallis quis ac
                                        lectus. Quisque velit nisi, pretium ut lacinia in.
                                    </p>
                                    <div class="testimonial__ratings">
                                        <em class="icon_star"></em>
                                        <em class="icon_star"></em>
                                        <em class="icon_star"></em>
                                        <em class="icon_star"></em>
                                        <em class="icon_star_alt"></em>
                                        <span><em>4.9</em> (14 Reviews)</span>
                                    </div>
                                    <img class="comma" src="assets/images/testimonial/coma.png" alt="image" />
                                </div>
                            </div>
                            <div class="single-client">
                                <div class="client-bottom">
                                    <span class="client-author"><img src="assets/images/testimonial/testimonial.png"
                                            alt="Testimonials" />
                                    </span>
                                </div>
                                <div class="client-content">
                                    <span class="client-title">Justin Case <em> Student</em></span>
                                    <p>
                                        Nulla porttitor accumsan tincidunt. vamus magna justo,
                                        lacinia eget consectetur sed, convallis at tellus.
                                        Curabitur non nulla sit amet nisl tempus convallis quis ac
                                        lectus. Quisque velit nisi, pretium ut lacinia in.
                                    </p>
                                    <div class="testimonial__ratings">
                                        <em class="icon_star"></em>
                                        <em class="icon_star"></em>
                                        <em class="icon_star"></em>
                                        <em class="icon_star"></em>
                                        <em class="icon_star_alt"></em>
                                        <span><em>4.9</em> (14 Reviews)</span>
                                    </div>
                                    <img class="comma" src="assets/images/testimonial/coma.png" alt="image" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--================= Clients Section End Here =================-->

            <!--================= Blog Section Start Here =================-->
            <div class="react-blog__area blog__area pt---120 pb---120 graybg-home">
                <div class="container blog__width">
                    <div class="react__title__section text-center">
                        <h2 class="react__tittle">Echooling News and Blogs</h2>
                        <img src="assets/images/line.png" alt="image" />
                    </div>
                    <div class="row">
                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                            <div class="blog__card mb-50">
                                <div class="blog__thumb w-img p-relative">
                                    <a class="blog__thumb--image" href="blog-details.html">
                                        <img src="assets/images/blog/1.jpg" alt="This the first card image" />
                                    </a>
                                    <em class="b_date">April 12</em>
                                </div>
                                <div class="blog__card--content">
                                    <div class="blog__card--content-area mb-25">
                                        <span class="blog__card--date">Campaigns</span>
                                        <h3 class="blog__card--title">
                                            <a href="blog-details.html">Fostering future Schools <br />
                                                & social Innovation</a>
                                        </h3>
                                    </div>
                                    <div class="blog__card--icon">
                                        <div class="blog__card--icon-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-user">
                                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                                <circle cx="12" cy="7" r="4"></circle>
                                            </svg>
                                            <span>Nerte Gronw</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                            <div class="blog__card mb-50">
                                <div class="blog__thumb w-img p-relative">
                                    <a class="blog__thumb--image" href="blog-details.html">
                                        <img src="assets/images/blog/2.jpg" alt="This the first card image" />
                                    </a>
                                    <em class="b_date">April 18</em>
                                </div>
                                <div class="blog__card--content">
                                    <div class="blog__card--content-area mb-25">
                                        <span class="blog__card--date">Education</span>
                                        <h3 class="blog__card--title">
                                            <a href="blog-details.html">The Surprising Reason <br />
                                                CollegeTuition</a>
                                        </h3>
                                    </div>
                                    <div class="blog__card--icon d-flex align-items-center">
                                        <div class="blog__card--icon-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-user">
                                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                                <circle cx="12" cy="7" r="4"></circle>
                                            </svg>
                                            <span>Charlie Doyle</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                            <div class="blog__card mb-50">
                                <div class="blog__thumb w-img p-relative">
                                    <a class="blog__thumb--image" href="blog-details.html">
                                        <img src="assets/images/blog/3.jpg" alt="This the first card image" />
                                    </a>
                                    <em class="b_date">June 16</em>
                                </div>
                                <div class="blog__card--content">
                                    <div class="blog__card--content-area mb-25">
                                        <span class="blog__card--date">Students</span>
                                        <h3 class="blog__card--title">
                                            <a href="blog-details.html">Those other <br />
                                                College Expenses about</a>
                                        </h3>
                                    </div>
                                    <div class="blog__card--icon d-flex align-items-center">
                                        <div class="blog__card--icon-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-user">
                                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                                <circle cx="12" cy="7" r="4"></circle>
                                            </svg>
                                            <span>Owen Christ</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                            <div class="blog__card mb-50">
                                <div class="blog__thumb w-img p-relative">
                                    <a class="blog__thumb--image" href="blog-details.html">
                                        <img src="assets/images/blog/3.jpg" alt="This the first card image" />
                                    </a>
                                    <em class="b_date">May 22</em>
                                </div>
                                <div class="blog__card--content">
                                    <div class="blog__card--content-area mb-25">
                                        <span class="blog__card--date">Strategy</span>
                                        <h3 class="blog__card--title">
                                            <a href="blog-details.html">Those other <br />
                                                College Expenses about</a>
                                        </h3>
                                    </div>
                                    <div class="blog__card--icon d-flex align-items-center">
                                        <div class="blog__card--icon-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-user">
                                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                                <circle cx="12" cy="7" r="4"></circle>
                                            </svg>
                                            <span>Owen Christ</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--================= Blog Section End Here =================-->
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
