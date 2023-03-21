<!DOCTYPE html>
<html dir="ltr" class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <title>{{ config('app.name')}} - @yield('title')</title>
        <meta name="author" content="Angfuzsoft" />
        <meta name="description" content="Acadu - Online Courses & Education HTML Template" />
        <meta name="keywords" content="Acadu - Online Courses & Education HTML Template" />
        <meta name="robots" content="INDEX,FOLLOW" />
        <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no" />
        <link rel="apple-touch-icon" sizes="57x57" href="/assets/img/favicons/apple-icon-57x57.png" />
        <link rel="apple-touch-icon" sizes="60x60" href="/assets/img/favicons/apple-icon-60x60.png" />
        <link rel="apple-touch-icon" sizes="72x72" href="/assets/img/favicons/apple-icon-72x72.png" />
        <link rel="apple-touch-icon" sizes="76x76" href="/assets/img/favicons/apple-icon-76x76.png" />
        <link rel="apple-touch-icon" sizes="114x114" href="/assets/img/favicons/apple-icon-114x114.png" />
        <link rel="apple-touch-icon" sizes="120x120" href="/assets/img/favicons/apple-icon-120x120.png" />
        <link rel="apple-touch-icon" sizes="144x144" href="/assets/img/favicons/apple-icon-144x144.png" />
        <link rel="apple-touch-icon" sizes="152x152" href="/assets/img/favicons/apple-icon-152x152.png" />
        <link rel="apple-touch-icon" sizes="180x180" href="/assets/img/favicons/apple-icon-180x180.png" />
        <link rel="icon" type="image/png" sizes="192x192" href="/assets/img/favicons/android-icon-192x192.png" />
        <link rel="icon" type="image/png" sizes="32x32" href="/assets/img/favicons/favicon-32x32.png" />
        <link rel="icon" type="image/png" sizes="96x96" href="/assets/img/favicons/favicon-96x96.png" />
        <link rel="icon" type="image/png" sizes="16x16" href="/assets/img/favicons/favicon-16x16.png" />
        <link rel="manifest" href="/assets/img/favicons/manifest.json" />
        <meta name="msapplication-TileColor" content="#ffffff" />
        <meta name="msapplication-TileImage" content="/assets/img/favicons/ms-icon-144x144.png" />
        <meta name="theme-color" content="#ffffff" />
        <link rel="preconnect" href="https://fonts.googleapis.com/" />
        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Jost:wght@100;200;300;400;500;600;700;800;900&amp;family=Roboto:wght@100;300;400;500;700&amp;display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="/assets/css/app.min.css" />
        <link rel="stylesheet" href="/assets/css/fontawesome.min.css" />
        <link rel="stylesheet" href="/assets/css/style.css" />
    </head>
    <body>
        <!-- <div class="preloader">
          
            <div class="preloader-inner"><span class="loader"></span></div>
        </div>
        -->
       
        <div class="as-menu-wrapper">
            <div class="as-menu-area text-center">
                <button class="as-menu-toggle"><i class="fal fa-times"></i></button>
                <div class="mobile-logo">
                    <a href="/"><img src="/assets/img/logo.png" alt="{{ config('app.name') }}" /></a>
                </div>
                <div class="as-mobile-menu">
                    <ul>
                        <li class="active"><a href="/">Home</a></li>
                        <li class="menu-item-has-children">
                            <a href="#">Services</a>
                            <ul class="sub-menu">
                                <li><a href="/professional_advice">Professional Advice</a></li>
                                <li><a href="/university_admission">University Admission</a></li>
                                <li><a href="/post_admission_services">Post Admission Services</a></li>
                                <li><a href="/visa_assistance">Visa Assistance</a></li>
                            </ul>
                        </li>
                        <li><a href="about_us">About Us</a></li>
                        <li><a href="/success_stories">Success Stories</a></li>
                        <li><a href="/contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <header class="as-header header-layout6">

            <div class="header-top">
                <div class="container">
                    <div class="row justify-content-center justify-content-md-between align-items-center gy-2">
                        <div class="col-auto d-none d-md-block">
                            <div class="header-links">
                                <ul>
                                    <li><i class="far fa-phone"></i>
                                        <a href="tel:+{{ config('app.mobile')}}">{{ config('app.phone')}}</a></li>
                                    <li class="d-none d-xl-inline-block">
                                        <i class="far fa-location-dot"></i>{{ config('app.address')}}
                                    </li>
                                    <li><i class="far fa-envelope"></i>
                                        <a href="mailto:{{config('app.email')}}">{{config('app.email')}}</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>

            <div class="sticky-wrapper">
                <div class="sticky-active">
                    <div class="menu-area" data-bg-src="assets/img/bg/pattern_bg_2.png">
                        <div class="container">
                            <div class="row align-items-center justify-content-between">
                                <div class="col-auto">
                                    <div class="header-logo">
                                        <a href="/"><img src="assets/img/logo.png" alt="Acadu" /></a>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <nav class="main-menu d-none d-lg-inline-block">
                                                <ul>
                                                    <li class="active"><a href="/">Home</a></li>
                                                    <li class="menu-item-has-children">
                                                        <a href="#">Services</a>
                                                        <ul class="sub-menu">
                                                            <li><a href="/professional_advice">Professional Career Advisory</a></li>
                                                            <li><a href="/university_admission">Admission Processing</a></li>
                                                            <li><a href="/post_admission_services">Pre-depature Briefing</a></li>
                                                            <li><a href="/visa_assistance">Visa Assistance & Counselling</a></li>
                                                            <li><a href="/accomodation_arrangement">Accomodation Arrangement</a></li>
                                                            <li><a href="/budgeting">Education Budgeting </a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="about_us">About Us</a></li>
                                                    <li><a href="/success_stories">Success Stories</a></li>
                                                    <li><a href="/contact">Contact</a></li>
                                                </ul>
                                            </nav>
                                            <button type="button" class="as-menu-toggle d-inline-block d-lg-none"><i class="far fa-bars"></i></button>
                                        </div>
                                        <div class="col-auto d-none d-xl-block">
                                            <div class="header-button">
                                                
                                                <a href="/contact#mobile" class="as-btn style3">Get In Touch Now<i class="fas fa-arrow-right ms-2"></i></a>
                                                <a href="#" class="simple-icon style2 ms-3 sideMenuToggler"><i class="fa-sharp fa-solid fa-grid"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="logo-shape"></div>
                    </div>
                </div>
            </div>
        </header>
       
        @yield('content')

        <footer class="footer-wrapper footer-layout1">
            <div class="widget-area">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-md-6 col-xxl-3 col-xl-4">
                            <div class="widget footer-widget">
                                <div class="as-widget-about">
                                    <div class="about-logo">
                                        <a href="/"><img src="/assets/img/logo_white.png" alt="logo" /></a>
                                    </div>
                                    <p class="about-text">{{ config('app.name')}} is an international education consultancy agency that offers a variety of educational services in Nigeria and abroad for student customers seeking higher education outside Nigeria.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-auto">
                            <div class="widget widget_nav_menu footer-widget">
                                <h3 class="widget_title">Quick link</h3>
                                <div class="menu-all-pages-container">
                                    <ul class="menu">
                                        <li><a href="about_us">About Us</a></li>
                                        <li><a href="/success_stories">Success Stories</a></li>
                                        <li><a href="/contact">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-auto">
                            <div class="widget widget_nav_menu footer-widget">
                                <h3 class="widget_title">Services</h3>
                                <div class="menu-all-pages-container">
                                    <ul class="menu">
                                        <li><a href="/professional_advice">Professional Advice</a></li>
                                        <li><a href="/university_admission">University Admission</a></li>
                                        <li><a href="/post_admission_services">Post Admission Services</a></li>
                                        <li><a href="/visa_assistance">Visa Assistance</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3">
                            <div class="widget footer-widget">
                                <h3 class="widget_title">Mission</h3>
                                <p class="about-text">Our mission is to provide quality services that would bridge the gap between students and institutions and destination of choice, so they receive a first-class education to equip themselves in an everchanging global market.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright-wrap">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-lg-6">
                            <p class="copyright-text">Copyright <i class="fal fa-copyright"></i> {{ date('Y')}} <a href="/">{{ config('app.name')}}</a>. All Rights Reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="shape-mockup jump d-none d-xl-block" data-top="24%" data-left="4%"><img src="/assets/img/shape/footer_shape_1.png" alt="shapes" /></div>
            <div class="shape-mockup jump-reverse d-none d-xl-block" data-bottom="20%" data-right="4%"><img src="/assets/img/shape/footer_shape_2.png" alt="shapes" /></div>
            <div class="shape-mockup" data-top="0" data-right="0"><img src="/assets/img/shape/footer_shape_3.png" alt="shapes" /></div>
        </footer>
        <a href="#" class="scrollToTop scroll-btn"><i class="far fa-arrow-up"></i></a>
        <script src="/assets/js/vendor/jquery-3.6.0.min.js"></script>
        <script src="/assets/js/app.min.js"></script>
        <script src="/assets/js/main.js"></script>
    </body>
</html>
