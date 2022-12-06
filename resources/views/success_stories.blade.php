@extends('layout')

@section('title', 'Success Stories')

@section('content')
<div class="breadcumb-wrapper" data-bg-src="/assets/img/breadcumb/breadcumb-bg.jpg">
    <div class="container z-index-common">
        <h1 class="breadcumb-title">Success Stories</h1>
        <ul class="breadcumb-menu">
            <li><a href="/">Home</a></li>
            <li>Success Stories</li>
        </ul>
    </div>
</div>
<div class="space-bottom" data-bg-src="assets/img/bg/why_bg_1.png">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 mb-45 mb-xl-0 text-center text-xl-start">
                <div class="title-area mb-35">
                    <span class="sub-title">Why Choose Us</span>
                    <h2 class="sec-title fw-semibold">
                        Transform Your Life Through<br />
                        Educational Career
                    </h2>
                </div>
                <p class="mt-n2 mb-35">
                    {{ config('app.name')}} is an Education Consulting company with vast interest in helping students who have challenges with study abroad to achieve their dreams and ambition with less stress. We have well organised office space located in the heart of Enugu. Our study abroad Visa Consultant will also guide you through the key aspects of any interview that you may have with the High Commission or Embassy.
                </p>
                <a href="/about_us" class="as-btn">Learn More<i class="fas fa-arrow-right ms-2"></i></a>
            </div>
            <div class="col-xl-6">
                <div class="row gy-4">
                    <div class="col-md-6 feature-card-wrap">
                        <div class="feature-card">
                            <div class="feature-card_icon"><img src="assets/img/icon/feature_1_1.png" alt="icon" /></div>
                            <h3 class="feature-card_title">University Admissions Abroad</h3>
                            <p class="feature-card_text">We enable you to choose the most suitable course of study, and to gain admission into the appropriate university or college</p>
                        </div>
                    </div>
                    <div class="col-md-6 feature-card-wrap">
                        <div class="feature-card">
                            <div class="feature-card_icon"><img src="assets/img/icon/feature_1_2.png" alt="icon" /></div>
                            <h3 class="feature-card_title">Consultancy on Scholarship</h3>
                            <p class="feature-card_text">Overseas education comes with many benefits, but the fact remains that it is considered too expensive for the majority of people.</p>
                        </div>
                    </div>
                    <div class="col-md-6 feature-card-wrap">
                        <div class="feature-card">
                            <div class="feature-card_icon"><img src="assets/img/icon/feature_1_3.png" alt="icon" /></div>
                            <h3 class="feature-card_title">Visa Assistance</h3>
                            <p class="feature-card_text"> It is common knowledge that it is impossible to study in any university abroad without a relevant visa.</p>
                        </div>
                    </div>
                    <div class="col-md-6 feature-card-wrap">
                        <div class="feature-card">
                            <div class="feature-card_icon"><img src="assets/img/icon/feature_1_4.png" alt="icon" /></div>
                            <h3 class="feature-card_title">Interview Preparation</h3>
                            <p class="feature-card_text">  From years of experience our counselor know the kind of questions that may be ask and are therefore qualified to help candidates prepare.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="space overflow-hidden" data-bg-src="/assets/img/bg/testi_bg_2.jpg">
    <div class="container">
        <div class="title-area text-center">
            <h2 class="sec-title fw-semibold text-white">Student’s Testimonials</h2>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row gx-40" id="testiSlide1">
            <div class="col-lg-6">
                <div class="testi-grid">
                    <p class="testi-grid_text">
                        “The best  Education Agency hands down. Am very excited to be under their umbrella from day one. Am very humbled by the support”
                    </p>
                    <div class="testi-grid_bottom">
                        <div class="testi-grid_author">
                            <div>
                                <h3 class="testi-grid_name">David Esther</h3>
                                <span class="testi-grid_desig">Eng Student</span>
                            </div>
                        </div>
                        <div class="testi-grid_review">
                            <i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="testi-grid">
                    <p class="testi-grid_text">
                        “It was a pleasure to work with {{ config('app.name')}}. With their assistance, the daunting process of gaining admission to a foreign university was made simple and made seem effortless. I would strongly suggest {{ config('app.name')}} Limited to anyone who wants to pursue their studies abroad.”
                    </p>
                    <div class="testi-grid_bottom">
                        <div class="testi-grid_author">
                            <div>
                                <h3 class="testi-grid_name">Nelson Kalu</h3>
                                <span class="testi-grid_desig">CSE Student</span>
                            </div>
                        </div>
                        <div class="testi-grid_review">
                            <i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="testi-grid">
                    <p class="testi-grid_text">
                        “I applied for MSc International Business Management in Birmingham City University, UK through {{ config('app.name')}}. They were very helpful and took my studies as seriously as I was taking them. They guided me well in all aspects and I got the Visa in just two and a half months. I would definitely recommend {{ config('app.name')}} Limited.”
                    </p>
                    <div class="testi-grid_bottom">
                        <div class="testi-grid_author">
                          
                            <div>
                                <h3 class="testi-grid_name">Mohammed Yusuf</h3>
                                <span class="testi-grid_desig">Business Management Student</span>
                            </div>
                        </div>
                        <div class="testi-grid_review">
                            <i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="testi-grid">
                    <p class="testi-grid_text">
                        “I am absolutely satisfied with the exceptional education counselling provided to me at PIS and I am very thankful to my academic adviser ! ”
                    </p>
                    <div class="testi-grid_bottom">
                        <div class="testi-grid_author">
                          
                            <div>
                                <h3 class="testi-grid_name">Ogechi Chisom</h3>
                                <span class="testi-grid_desig">Nursing Student</span>
                            </div>
                        </div>
                        <div class="testi-grid_review">
                            <i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i><i class="fa-solid fa-star-sharp"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection