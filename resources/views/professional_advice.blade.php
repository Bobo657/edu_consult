@extends('layout')

@section('title', 'Professional Advice')

@section('content')
<div class="breadcumb-wrapper" data-bg-src="/assets/img/breadcumb/breadcumb-bg.jpg">
    <div class="container z-index-common">
        <h1 class="breadcumb-title">Professional Advice</h1>
        <ul class="breadcumb-menu">
            <li><a href="/">Home</a></li>
            <li>Professional Advice</li>
        </ul>
    </div>
</div>

<section class="as-blog-wrapper blog-details space-top space-extra-bottom">
    <div class="container">
        <div class="row">
            <div class="as-blog blog-single">
                
                <div class="blog-content">
                  
                    <h2 class="blog-title">One to One Free Consultancy</h2>
                    <p>
                        Our skilled advice will help pave the student’s path to success, smoothing out any bumps along the way.
                    </p>
                    <p>
                        We are here to assist them in achieving their goals and objectives. We value business ethics, integrity, and pride ourselves on maintaining the highest professional standards.
                        Our experienced team can be relied upon in almost any circumstance, as quality service is what we strive for at {{ config('app.name') }}
                    </p>

                    <div class="blog-img text-center">
                        <img src="/assets/img/advice.jpg" alt=" Image" />
                    </div>
                  
                    <p>
                        In line with the vision of the company to provide an all- rounded educational service package, a list of top professionals with industry experience have been recruited. We understand that managing the career of education seekers can be quite delicate; therefore, we attach so much importance to details and utmost adherence to standards.
                    </p>
                    <p>
                        If you have decided on your study plan already, it would be wise to seek expert consultation with one of our staff.
                    </p>
                    
                </div>
            </div>
        </div>
    </div>
</section>
@endsection