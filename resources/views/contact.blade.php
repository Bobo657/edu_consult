@extends('layout')

@section('title', 'Contact Us')

@section('content')
<div class="breadcumb-wrapper" data-bg-src="/assets/img/breadcumb/breadcumb-bg.jpg">
    <div class="container z-index-common">
        <h1 class="breadcumb-title">Contact Us</h1>
        <ul class="breadcumb-menu">
            <li><a href="/">Home</a></li>
            <li>Contact Us</li>
        </ul>
    </div>
</div>
<div class="map-sec space">  
    <div class="map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3644.7310056272386!2d89.2286059153658!3d24.00527418490799!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fe9b97badc6151%3A0x30b048c9fb2129bc!2sAngfuzsoft!5e0!3m2!1sen!2sbd!4v1651028958211!5m2!1sen!2sbd"
            allowfullscreen=""
            loading="lazy"
        ></iframe>
    </div>
    <div class="container">
        <div class="map-contact">
            <h3 class="border-title">Get in Touch</h3>
            <p class="mt-n1 mb-30">
                Have a inquiry or some feedback for us? Fill out the form below to contact our team. Please contact us at {{ config('app.email') }}.
            </p>
            <div class="contact-info">
                <div class="contact-info_icon"><i class="fal fa-location-dot"></i></div>
                <div class="media-body">
                    <h4 class="contact-info_title">Our Address</h4>
                    <span class="contact-info_text">{{ config('app.address')}}</span>
                </div>
            </div>
            <div class="contact-info">
                <div class="contact-info_icon"><i class="fal fa-phone"></i></div>
                <div class="media-body">
                    <h4 class="contact-info_title">Phone Number</h4>
                    <span class="contact-info_text"  id="mobile">
                        <span>Mobile: <a href="tel:+{{ config('app.phone1')}}">{{ config('app.phone') }}</a></span>
                    </span>
                    <span class="contact-info_text"  id="mobile">
                        <span>Mobile2: <a href="tel:+{{ config('app.phone1')}}">{{ config('app.mobile') }}</a></span>
                    </span>
                </div>
            </div>
            <div class="contact-info">
                <div class="contact-info_icon"><i class="fal fa-clock"></i></div>
                <div class="media-body">
                    <h4 class="contact-info_title">Hours of Operation</h4>
                    <span class="contact-info_text"><span>Monday - Friday: 09:00 - 4:00</span> <span>Saturday: 9:30 - 2:00</span></span>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-7 col-sm-9"><div class="title-area text-center"></div></div>
        </div>
        <div class="contact-form-wrap" data-bg-src="/assets/img/bg/contact_bg_1.png">
            <span class="sub-title">Contact With Us!</span>
            <h2 class="border-title">Have Any Questions?</h2>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="/contact" method="POST" class="contact-form ">
                @if (Session::has('success'))

                    <div class="alert alert-success mt-2">{{ Session::get('success') }} 
                    </div>

                @endif
                @csrf
                @honeypot
                <div class="row">
                    <div class="form-group col-md-6"><input type="text" required class="form-control style3" name="name" id="name" placeholder="Enter Your Name" /> <i class="fal fa-user"></i></div>
                    <div class="form-group col-md-6"><input type="email" required class="form-control style3" name="email" id="email" placeholder="Email Address" /> <i class="fal fa-envelope"></i></div>
                    <div class="form-group col-md-6">
                        <select name="subject" required id="subject" class="form-select style3">
                            <option value="" disabled="disabled" selected="selected" hidden>Select Service</option>
                            <option value="Professional Advice">Professional Advice</option>
                            <option value="Visa Assisatnce">Visa Assisatnce</option>
                            <option value="University Admission">University Admission</option>
                            <option value="Post Admission Service">Post Admission Service</option>
                        </select>
                        <i class="fal fa-chevron-down"></i>
                    </div>
                    <div class="form-group col-md-6"><input type="tel" required class="form-control style3" name="number" id="number" placeholder="Phone Number" /> <i class="fal fa-phone"></i></div>
                    <div class="form-group col-12"><textarea required name="message" id="message" cols="30" rows="3" class="form-control style3" placeholder="Your Message"></textarea> <i class="fal fa-comment"></i></div>
                    <div class="form-btn col-12 mt-10">
                        <button class="as-btn">Send Message<i class="fas fa-long-arrow-right ms-2"></i></button>
                    </div>
                </div>
                <p class="form-messages mb-0 mt-3"></p>
            </form>
        </div>
    </div>
</section>

@endsection