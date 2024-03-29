<!DOCTYPE html>
<html dir="ltr" class="no-js" lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>{{ config('app.name') }} - @yield('title')</title>
    <meta name="description"
        content=" At {{ config('app.name') }}, confidence is much more than just a word. It's the driving force behind the way we think of ourselves, the way we want the world to think of us, and the way we do business." />
    <meta name="keywords"
        content=" At {{ config('app.name') }}, confidence is much more than just a word. It's the driving force behind the way we think of ourselves, the way we want the world to think of us, and the way we do business." />
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no" />
    <link rel="shortcut icon" href="/assets/img/favicon.png" type="image/x-icon" />
    <link rel="icon" href="/assets/img/favicon.png" type="image/x-icon" />
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:wght@100;200;300;400;500;600;700;800;900&amp;family=Roboto:wght@100;300;400;500;700&amp;display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="/assets/css/app.min.css" />
    <link rel="stylesheet" href="/assets/css/fontawesome.min.css" />
    <link rel="stylesheet" href="/assets/css/style.css" />
    <style>
        /* Style the Google Translate button */
        .goog-te-combo {
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
            background-color: #fff !important;
            color: #333 !important;
            font-size: 14px;
        }

    </style>
    <script type="text/javascript">
        function googleTranslateElementInit() {
            var userAgent = navigator.userAgent.toLowerCase();
            if (userAgent.match(/android|webos|iphone|ipad|ipod|blackberry|iemobile|opera mini/i)) {
                new google.translate.TranslateElement({
                    pageLanguage: 'en'
                }, 'google_translate_element');
                // Add your mobile-specific code here
            } else {
                new google.translate.TranslateElement({
                    pageLanguage: 'en'
                }, 'google_translate');
                // Add your computer-specific code here
            }
            
        }

    </script>
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
            <div id="google_translate_element" class="mobile_only element-to-remove"></div>
            <div class="as-mobile-menu">
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
                                <li class="d-none d-xl-inline-block">
                                    <div id="google_translate"></div>

                                </li>
                                <li><i class="far fa-envelope"></i>
                                    <a
                                        href="mailto:{{ config('app.email') }}">{{ config('app.email') }}</a>
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
                                    <a href="/"><img width="180px" src="assets/img/logo.png"
                                            alt="{{ config('app.name') }}" /></a>
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
                                                        <li><a href="/professional_advice">Professional Career
                                                                Advisory</a></li>
                                                        <li><a href="/university_admission">Admission Processing</a>
                                                        </li>
                                                        <li><a href="/post_admission_services">Pre-depature Briefing</a>
                                                        </li>
                                                        <li><a href="/visa_assistance">Visa Assistance & Counselling</a>
                                                        </li>
                                                        <li><a href="/accomodation_arrangement">Accomodation
                                                                Arrangement</a></li>
                                                        <li><a href="/budgeting">Education Budgeting </a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="about_us">About Us</a></li>
                                                <li><a href="/success_stories">Success Stories</a></li>
                                                <li><a href="/contact">Contact</a></li>
                                            </ul>
                                        </nav>
                                        <button type="button" class="as-menu-toggle d-inline-block d-lg-none"><i
                                                class="far fa-bars"></i></button>
                                    </div>
                                    <div class="col-auto d-none d-xl-block">
                                        <div class="header-button">

                                            <a href="/contact#mobile" class="as-btn style3">Get In Touch Now<i
                                                    class="fas fa-arrow-right ms-2"></i></a>
                                            <a href="#" class="simple-icon style2 ms-3 sideMenuToggler"><i
                                                    class="fa-sharp fa-solid fa-grid"></i></a>
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
                                <p class="about-text">{{ config('app.name') }} is an international
                                    education consultancy agency that offers a variety of educational services in
                                    Nigeria and abroad for student customers seeking higher education outside Nigeria.
                                </p>
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
                                    <li><a href="/professional_advice">Professional Career Advisory</a></li>
                                    <li><a href="/university_admission">Admission Processing</a></li>
                                    <li><a href="/post_admission_services">Pre-depature Briefing</a></li>
                                    <li><a href="/visa_assistance">Visa Assistance & Counselling</a></li>
                                    <li><a href="/accomodation_arrangement">Accomodation Arrangement</a></li>
                                    <li><a href="/budgeting">Education Budgeting </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="widget footer-widget">
                            <h3 class="widget_title">Mission</h3>
                            <p class="about-text">Our mission is to provide quality services that would bridge the gap
                                between students and institutions and destination of choice, so they receive a
                                first-class education to equip themselves in an everchanging global market.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright-wrap">
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-6">
                        <p class="copyright-text">Copyright <i class="fal fa-copyright"></i>
                            {{ date('Y') }} <a
                                href="/">{{ config('app.name') }}</a>. All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-mockup jump d-none d-xl-block" data-top="24%" data-left="4%"><img
                src="/assets/img/shape/footer_shape_1.png" alt="shapes" /></div>
        <div class="shape-mockup jump-reverse d-none d-xl-block" data-bottom="20%" data-right="4%"><img
                src="/assets/img/shape/footer_shape_2.png" alt="shapes" /></div>
        <div class="shape-mockup" data-top="0" data-right="0"><img src="/assets/img/shape/footer_shape_3.png"
                alt="shapes" /></div>
    </footer>
    <a href="#" class="scrollToTop scroll-btn"><i class="far fa-arrow-up"></i></a>
    <script src="/assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="/assets/js/app.min.js"></script>
    <script src="/assets/js/main.js"></script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
    </script>


</body>

</html>
