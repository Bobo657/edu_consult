@extends('layout')
@section('title', 'About Us')
@section('content')
<div class="breadcumb-wrapper" data-bg-src="/assets/img/breadcumb/breadcumb-bg.jpg">
    <div class="container z-index-common">
        <h1 class="breadcumb-title">About Us</h1>
        <ul class="breadcumb-menu">
            <li><a href="/">Home</a></li>
            <li>About Us</li>
        </ul>
    </div>
</div>
<div class="space">
    <div class="container">
        <div class="row flex-row-reverse align-items-center">
            <div class="col-xl-6 ps-xxl-5">
                <div class="img-box9">
                    <div class="img-group">
                        <div class="img2"><img src="/assets/img/about7.jpg" alt="about" /></div>
                        <div class="img3"><img src="/assets/img/why2.jpg" alt="about" /></div>
                    </div>
                    <div class="img1"><img src="/assets/img/about_4.jpg" alt="about" /></div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="title-area mb-35">
                    <span class="sub-title">Who We Are</span>
                    <h2 class="sec-title fw-semibold">About {{ config('app.name') }}</h2>
                </div>
                <p class="mt-n2 mb-35">
                    {{ config('app.name')}} is a leading Study Abroad Consultant in Nigeria with years of professional student placement and visa counseling service experience representing and placing students into A-Level, Foundation, Undergraduate, Postgraduate and PHD degree Programs at top and world ranked institutions around the world mainly in the United Kingdom, United States of America, Canada, Ireland, Singapore, Malaysia and the United Arab Emirates. 
                </p>
                <p class="mt-n2 mb-35">
                    In line with the vision of the company to provide an all- rounded educational service package, a list of top professionals with industry experience have been recruited. We understand that managing the career of education seekers can be quite delicate; therefore, we attach so much importance to details and utmost adherence to standards.
                </p>

                <p>If you have decided on your study plan already, it would be wise to seek expert consultation with one of our staff.</p>
               
            </div>
        </div>
    </div>
</div>
<section class="space" data-bg-src="/assets/img/bg/feature_bg_1.jpg">
    <div class="container">
        <div class="title-area text-center">
            <span class="sub-title">Our Specialities</span>
            <h2 class="sec-title fw-semibold text-white">Explore Featured Courses</h2>
        </div>
        <div class="row gy-4 justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="feature-grid">
                    <div class="feature-grid_icon"><img src="/assets/img/icon/feature_2_1.png" alt="icon" /></div>
                    <h3 class="feature-grid_title">
                        Our Values</h3>
                    <p class="feature-grid_text">We go over and beyond to offer personalised customer service, We foster collaboration. We are committed to credible and transparent process</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="feature-grid">
                    <div class="feature-grid_icon"><img src="/assets/img/icon/feature_2_2.png" alt="icon" /></div>
                    <h3 class="feature-grid_title">Vision</h3>
                    <p class="feature-grid_text">
                        Our vision has always been and will remain to be the best career organisation with the highest positive impacts on the academic destiny of our students and partners.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="feature-grid">
                    <div class="feature-grid_icon"><img src="/assets/img/icon/feature_2_3.png" alt="icon" /></div>
                    <h3 class="feature-grid_title">Mission</h3>
                    <p class="feature-grid_text">Our mission is to provide quality services that would bridge the gap between students and institutions and destination of choice, so they receive a first-class education to equip themselves in an everchanging global market.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="space">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 mb-35 mb-xl-0">
                <div class="as-video">
                    <img src="/assets/img/student.jpg" alt="image" /> 
                </div>
            </div>
            <div class="col-xl-6 ps-xxl-5">
                <div class="title-area mb-30">
                    <h2 class="sec-title fw-semibold">We are an international educational consulting agency in Nigeria</h2>
                </div>
                <p class="mb-35">
                    We help students achieve their dreams of being globally competitive professionals by guiding and assisting them in admissions into reputable universities and colleges abroad. This mission is intended to shoulder the burden and take care of all obstacles that might hinder the attainment of international Education as desired by you.
                </p>
                <div class="checklist style4 mb-45">
                    <ul>
                        <li>Counseling services for students who want to study abroad.</li>
                        <li>Our experienced consultants will provide you with guidance every step of the way on how to handle your application on the best choice of university and the course you're applying for.</li>
                        <li>Discovery while our creative curriculum which combines</li>
                        <li>As an international student you will need to make sure you successfully apply for a visa before you move abroad to study. We give you best guidance in securing your student visa.</li>
                    </ul>
                </div>
                
            </div>
        </div>
    </div>
</section>

<section class="" data-pos-for=".footer-wrapper" data-sec-pos="bottom-half">
    <div class="container">
        <div class="cta-wrap">
            <div class="row flex-row-reverse justify-content-between">
                <div class="col-lg-6">
                    <div class="cta-img"><img src="/assets/img/content.jpg" alt="Image" /></div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="cta-content">
                        <h2 class="fs-40 fw-light text-theme mb-10">Learn From Our Platform</h2>
                        <h2 class="mb-25">That Take You Next Level</h2>
                        <a href="/contact" class="as-btn">Contact Us Now<i class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="shape-mockup movingX z-index-n1" data-bottom="0%" data-left="44%"><img src="/assets/img/shape/dot_shape_1.png" alt="shapes" /></div>
        </div>
    </div>
</section>

@endsection