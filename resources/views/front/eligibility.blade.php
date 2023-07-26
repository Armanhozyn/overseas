@extends('layouts.index')
@section('content')
<!-- contact-section end -->
<section class="contact-section bg-color-1">
    <div class="pattern-layer" style="background-image: url(public/assets/images/shape/shape-8.png);"></div>
    <div class="bg-layer" style="background-image: url(public/assets/images/background/contact-bg.jpg);"></div>
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-xl-6 col-lg-12 offset-xl-6 content-column">
                <div class="content-box">
                    <div class="sec-title">
                        <h6>eligible to apply</h6>
                        <h2>Check Your Eligibility</h2>
                        <p>Please, fulfill the form to get a consultation. After processing the data, apersonal manager will contact you.</p>
                    </div>
                    <div class="form-inner">
                        @include('include.front.eligibility')
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact-section end -->
@endsection
