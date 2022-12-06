@extends('layout')
@section('title', 'Homepage')
@section('content')
<div class="as-hero-wrapper hero-6">
    <div class="hero-slider-6 as-carousel" id="heroSlide6" data-slide-show="1" data-md-slide-show="1" data-fade="true">
        <div class="as-hero-slide">
            <div class="as-hero-bg" data-bg-src="/assets/img/slide_1.jpg"><img src="/assets/img/hero/hero_overlay_6.png" alt="Hero Image" /></div>
            <div class="container">
                <div class="hero-style6">
                    <span class="hero-subtitle" data-ani="slideindown" data-ani-delay="0.7s">Welcome to {{ config('app.name')}}.</span>
                    <h1 class="hero-title" data-ani="slideindown" data-ani-delay="0.4s"> Do you want to gain work experience after your degree in the UK?</h1>
                   
                    <div class="checklist" data-ani="slideinup" data-ani-delay="0.1s">
                        <ul>
                            <li>Experts Advisors</li>
                            <li>238+ University Admissions</li>
                        </ul>
                    </div>

                    <div class="btn-group" data-ani="slideinup" data-ani-delay="0.5s">
                        <a href="/contact" class="as-btn style3">Contact Us<i class="fas fa-long-arrow-right ms-2"></i></a> 
                        <a href="/about_us" class="as-btn style6">Who We are<i class="fas fa-long-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="as-hero-slide">
            <div class="as-hero-bg" data-bg-src="/assets/img/slide_2.jpg"><img src="/assets/img/hero/hero_overlay_6.png" alt="Hero Image" /></div>
            <div class="container">
                <div class="hero-style6">
                    <span class="hero-subtitle" data-ani="slideindown" data-ani-delay="0.7s">Receive personalized academic advising throughout any program of choice study.</span>
                    <h1 class="hero-title" data-ani="slideindown" data-ani-delay="0.4s">Get First Class International</h1>
                    <h1 class="hero-title" data-ani="slideindown" data-ani-delay="0.1s">Education Counseling.</h1>
                    <div class="checklist" data-ani="slideinup" data-ani-delay="0.1s">
                        <ul>
                            <li>Experts Advisors</li>
                            <li>238+ University Admissions</li>
                        </ul>
                    </div>
                    <div class="btn-group" data-ani="slideinup" data-ani-delay="0.5s">
                        <a href="/contact" class="as-btn style3">Contact Us<i class="fas fa-long-arrow-right ms-2"></i></a> 
                        <a href="/about_us" class="as-btn style6">Who We are<i class="fas fa-long-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="as-hero-slide">
            <div class="as-hero-bg" data-bg-src="/assets/img/slide_3.jpg"><img src="/assets/img/hero/hero_overlay_6.png" alt="Hero Image" /></div>
            <div class="container">
                <div class="hero-style6">
                    <span class="hero-subtitle" data-ani="slideindown" data-ani-delay="0.7s">Our professional advisors are committed to supporting you all through the process.</span>
                    <h1 class="hero-title" data-ani="slideindown" data-ani-delay="0.4s">Realize Your Dream of </h1>
                    <h1 class="hero-title" data-ani="slideindown" data-ani-delay="0.1s">Studying Abroad</h1>
                    <div class="checklist" data-ani="slideinup" data-ani-delay="0.1s">
                        <ul>
                            <li>Experts Advisors</li>
                            <li>238+ University Admissions</li>
                        </ul>
                    </div>
                    <div class="btn-group" data-ani="slideinup" data-ani-delay="0.5s">
                        <a href="/contact" class="as-btn style3">Contact Us<i class="fas fa-long-arrow-right ms-2"></i></a> 
                        <a href="/about_us" class="as-btn style6">Who We are<i class="fas fa-long-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="icon-box">
        <button data-slick-prev="#heroSlide6" class="slick-arrow default"><i class="far fa-chevron-left"></i></button> <button data-slick-next="#heroSlide6" class="slick-arrow default"><i class="far fa-chevron-right"></i></button>
    </div>
</div>
<div class="space" id="about-sec">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6">
                <div class="img-box1">
                    <img class="w-100" src="/assets/img/why.jpg" alt="About" />
                    <img class="w-100" src="/assets/img/group.jpg" alt="About" />
                    
                </div>
            </div>
            <div class="col-xl-6">
                <div class="mb-35 mb-xl-5">
                    <h2 class="fs-40 text-theme fw-light mb-0">Welcome to</h2>
                    <h3 class="h1">{{ config('app.name')}}.</h3>
                </div>
                <p class="mt-n2 mb-35">
                    At {{ config('app.name')}}, we understand that our success is connected to the success of our students. We are proud of our unique, handcrafted approach, and are committed to providing our students with the best possible opportunities that Australia has to offer.
                </p>
                <div class="feature-box-wrap mb-45">
                    <div class="feature-box">
                        <div class="feature-box_icon"><img src="/assets/img/icon/about_1_1.png" alt="icon" /></div>
                        <div class="feature-box_content">
                            <h3 class="feature-box_title">Visa Assistance</h3>
                            <p class="feature-box_text">Dedicated visa application support</p>
                        </div>
                    </div>
                    <div class="feature-box">
                        <div class="feature-box_icon"><img src="/assets/img/icon/about_1_2.png" alt="icon" /></div>
                        <div class="feature-box_content">
                            <h3 class="feature-box_title">Career Counselling</h3>
                            <p class="feature-box_text">
                                1-1 pre-application advice and post-application support</p>
                        </div>
                    </div>
                </div>
                <p class="mt-n2 mb-35">
                    Our dedicated teams will assist you at all stages of the application process, to both on and off-shore students, and at all tertiary entry-levels. We understand the difficulty in studying away from home, therefore we make each student a priority. We will ensure that your student experience is as smooth and as rewarding as it should be.
                </p>
                <a href="/about_us" class="as-btn">Get More Info</a>
            </div>
        </div>
    </div>
    <div class="shape-mockup jump z-index3 d-none d-sm-block" data-top="30%" data-left="11%"><img src="/assets/img/shape/circle_1.png" alt="shapes" /></div>
    <div class="shape-mockup jump-reverse d-none d-xl-block" data-bottom="30%" data-left="4%"><img src="/assets/img/shape/circle_2.png" alt="shapes" /></div>
    <div class="shape-mockup" data-bottom="-9.5%" data-right="0"><img src="/assets/img/shape/line_1.png" alt="shapes" /></div>
</div>

<section class="space position-relative">
    <div class="bg-img" data-bg-src="/assets/img/bg/cta_bg_1.jpg"><img src="/assets/img/bg/bg_overlay_1.png" alt="overlay" /></div>
    <div class="container text-center">
        <div class="title-area text-center mb-40">
            <h2 class="sec-title text-white">
                We Make Your Application <br />
                <span class="fw-light">Process Seamless</span>
            </h2>
        </div>
        <div class="btn-group justify-content-center">
            <a href="/contact" class="as-btn shadow-none">Contact Us<i class="fas fa-arrow-right ms-2"></i></a> 
        </div>
    </div>
</section>
<div class="space">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6">
                <div class="img-box2">
                    <img class="w-100" src="/assets/img/normal/about_1_2.jpg" alt="About" />
    
                </div>
            </div>
            <div class="col-xl-6">
                <div class="mb-35 mb-xl-5">
                    <h2 class="fs-40 text-theme fw-light mb-0">Career Focused</h2>
                    <h3 class="h2">Realize Your Dream of Studying Abroad</h3>
                </div>

                <p class="mt-n2 mb-25">Our Team of Exceptional Study Abroad Experts are ready to help you realize your dream of studying abroad and help you determine the right University and Course for you!. International study is a rewarding experience. With some of the world’s top tertiary institutions, studying in Australia will allow you to meet and exceed your educational goals. It will further enrich your cultural understanding and provide you with excellent post-graduation opportunities.
                </p>
                <p class="mt-n2 mb-25">
                    At {{ config('app.name')}}, confidence is much more than just a word. It's the driving force behind the way we think of ourselves, the way we want the world to think of us, and the way we do business. We work with passion, dedication and teamwork, building new opportunities through relentless commitment to superb customer service and first-rate product quality and reliability. 
                </p>
                
            </div>
        </div>
    </div>
    <div class="shape-mockup jump d-none d-xxl-block" data-bottom="30%" data-right="0"><img src="/assets/img/shape/dot_shape_2.png" alt="shapes" /></div>
</div>

<section class="space-top feature-sec">
    <div class="container">
        <div class="row gy-4 justify-content-center">
            <div class="col-xl-3 col-md-6">
                <div class="feature-list">
                    <div class="feature-list_icon"><i class="fal fa-landmark"></i></div>
                    <h3 class="feature-list_title">Visa Assistance</h3>
                    <p class="feature-list_text">
                        We boast of visa success rate that is unmatched in the industry. This feat is only achievable because of the high level of professionalism of our visa officers and understanding of the immigration policies of our destinations. </p>
                    <div class="icon-btn"><i class="fas fa-arrow-right"></i></div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="feature-list">
                    <div class="feature-list_icon"><i class="fal fa-user-graduate"></i></div>
                    <h3 class="feature-list_title">Professional Counseling</h3>
                    <p class="feature-list_text">
                        At {{config('app.name')}} & New Generations, we provide quality advisory services that guarantees that students coming to us enjoy a total packaged service that takes care of their processing from beginning till the end.</p>
                    <div class="icon-btn"><i class="fas fa-arrow-right"></i></div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="feature-list">
                    <div class="feature-list_icon"><i class="fal fa-graduation-cap"></i></div>
                    <h3 class="feature-list_title">University Admission</h3>
                    <p class="feature-list_text">
                        Our focus is on activities that would provide student with information about study abroad.  This way our students are abreast of the offers from partner institutions such as scholarships, internships, and other benefits.</p>
                    <div class="icon-btn"><i class="fas fa-arrow-right"></i></div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="feature-list">
                    <div class="feature-list_icon"><i class="fal fa-book-open-cover"></i></div>
                    <h3 class="feature-list_title">Post Admission Services</h3>
                    <p class="feature-list_text">
                        This is the most important part of our job. The student has now obtained visa to study in a new environment. There is need to prepare them psychologically & physically for this environmental/ cultural change.</p>
                    <div class="icon-btn"><i class="fas fa-arrow-right"></i></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="space-top space-extra-bottom">
    <div class="container mb-n2">
        <div class="title-area text-center">
            <h2 class="sec-title">We Are Your Best Plug <br><span class="text-theme fw-light">For All Study Abroad Services!</span></h2>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-sm-6 col-lg-4 process-card-wrap">
                <div class="process-card">
                    <div class="process-card_img"><img src="/assets/img/experience.jpg" alt="process" /></div>
                    <h2 class="process-card_title">
                        Experience
                    </h2>
                    <p class="process-card_text">Our many years of experience speak for us in the number of students we have successfully placed in partner institutions abroad. Our staff have a good understanding of the industry.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 process-card-wrap">
                <div class="process-card">
                    <div class="process-card_img"><img src="/assets/img/process_1_2.jpg" alt="process" /></div>
                    <h2 class="process-card_title">
                        Credibility
                    </h2>
                    <p class="process-card_text">We are transparent enough to deserve your trust. The reputation that we have built over the years put us in better position to continue helping you fulfil your dreams.</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 process-card-wrap">
                <div class="process-card">
                    <div class="process-card_img"><img src="/assets/img/process_1_3.jpg" alt="process" /></div>
                    <h2 class="process-card_title">
                        Vision
                    </h2>
                    <p class="process-card_text">
                        Our vision has always been and will remain to be the best career organisation with the highest positive impacts on the academic destiny of our students and partners.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="shape-mockup spin" data-top="20%" data-left="5%"><img src="/assets/img/shape/plus_1.png" alt="shapes" /></div>
    <div class="shape-mockup jump d-none d-xl-block" data-bottom="10%" data-right="0%"><img src="/assets/img/shape/square_1.png" alt="shapes" /></div>
</section>

<div class="space-bottom about-sec bg-bottom-right" data-bg-src="/assets/img/bg/about_bg_1.jpg">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 mb-40 mb-xl-0">
                <div class="img-box3"><img class="w-100" src="/assets/img/young.jpg" alt="About" /></div>
            </div>
            <div class="col-xxl-7 col-xl-8 align-self-end">
                <div class="about-content">
                    <div class="title-area mb-40">
                        <span class="sub-title">Why us?</span>
                        <h2 class="fs-40 fw-medium mt-n2">
                            We Are Your Best Plug For All Study Abroad Services!
                            </h2>
                    </div>
                    <p class="mt-n2 mb-30 mb-xl-5">
                        We have a competent team of experienced counsellors with a substantial experience and background in the field of international education
                    </p>
                    <div class="counter-grid-wrap">
                        <div class="counter-grid">
                            <div class="counter-grid_icon"><img src="/assets/img/icon/counter_1_1.svg" alt="icon" /></div>
                            <div class="counter-grid_content">
                                <h3 class="counter-grid_number"><span class="counter-number">80</span>%</h3>
                                <span class="counter-grid_text">Service Delivery</span>
                            </div>
                        </div>
                        <div class="counter-grid">
                            <div class="counter-grid_icon"><img src="/assets/img/icon/counter_1_2.svg" alt="icon" /></div>
                            <div class="counter-grid_content">
                                <h3 class="counter-grid_number"><span class="counter-number">95</span>%</h3>
                                <span class="counter-grid_text">SATISFACTION RATE</span>
                            </div>
                        </div>
                        <div class="counter-grid">
                            <div class="counter-grid_icon"><img src="/assets/img/icon/counter_1_3.svg" alt="icon" /></div>
                            <div class="counter-grid_content">
                                <h3 class="counter-grid_number"><span class="counter-number">98</span>%</h3>
                                <span class="counter-grid_text">Efficiency</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection