@extends('layout')

@section('title', 'Visa Assistance')

@section('content')
<div class="breadcumb-wrapper" data-bg-src="/assets/img/breadcumb/breadcumb-bg.jpg">
    <div class="container z-index-common">
        <h1 class="breadcumb-title">Visa Assistance</h1>
        <ul class="breadcumb-menu">
            <li><a href="/">Home</a></li>
            <li>Visa Assistance</li>
        </ul>
    </div>
</div>

<section class="as-blog-wrapper blog-details space-top space-extra-bottom">
    <div class="container">
        <div class="row">
            <div class="as-blog blog-single">
                <div class="row">
                   
                    <div class="col-xxl-6 col-lg-6">
                        <h2 class="blog-title">Visa Assistance</h2>
                        <p>
                            
                            We boast of visa success rate that is unmatched in the industry. This feat is only achievable because of the high level of professionalism of our visa officers and understanding of the immigration policies of our destinations. Because we understand that obtaining a student visa can be a big challenge on the part of the student and a huge disappointment on the part of the university when students did not make it to the university, we are here to make sure that the hard work of the university and the students at issuing and getting an offer do not come to nothing.
                        </p>

                        <p>Our approach to visa matters are step-by-step adherence to the policies so that every single student has the highest chances of eligibility to obtain a visa and study abroad.
                        </p>
                        </p>
                    </div>
                    <div class="col-xxl-6 col-lg-6">
                        <img src="/assets/img/visa.jpg" alt="Blog Image" class="mt-10" />
                    </div>
                </div>

                <div class="blog-content">
                  
                    <h2 class="blog-title">Visa Guidance</h2>
                    <p>
                        Visa requirements - As an international student you will need to make sure you successfully apply for a visa before you move abroad to study. Each study destination will have its own requirements and each visa will carry its own rules and restrictions.</p>
                    <p>
                        {{ config('app.name')}} has expert staff to guide you through the whole process, whether you choose to study in the Uk, Canada, U.S , Australia , or the UAE. The process can be complicated and universities often encourage international students to seek professional guidance before and during the visa application stage. Contact us at our office today.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection