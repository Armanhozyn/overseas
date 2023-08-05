@extends('layouts.index')
@section('content')
    @include('include.front.banner')
    {{--  @include('include.front.services')  --}}
    <!-- dream-section -->
    <section class="dream-section pt-5">
        <div class="bg-layer"></div>
        <div class="auto-container">
            <div class="inner-container">
                <div class="pattern-layer" style="background-image: url(public/assets/images/shape/shape-4.png);"></div>
                <div class="row align-items-center clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 left-column">
                        <div class="left-content">
                            <div class="sec-title light">
                                <h6>Reach Your Dream</h6>
                                <h2>Get the Right Help</h2>
                            </div>
                            <div class="text">
                                <p>Explain to you how all this mistaken idea of denouncing all <br>praising pain was born
                                    and completed.</p>
                                <a href="{{ route('contact') }}"><span>More Details</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 right-column">
                        <div class="right-content">
                            <ul class="list clearfix">
                                <li><i class="flaticon-star"></i><a href="{{ route('eligibility') }}">Entering & Leaving
                                        From Country</a></li>
                                <li><i class="flaticon-star"></i><a href="{{ route('eligibility') }}">Visas</a></li>
                                <li><i class="flaticon-star"></i><a href="{{ route('eligibility') }}">Country
                                        Citizenship</a></li>
                                <li><i class="flaticon-star"></i><a href="{{ route('eligibility') }}">Settling In
                                        Country</a></li>
                                <li><i class="flaticon-star"></i><a href="{{ route('eligibility') }}">Help & Support</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- dream-section end -->

    <!-- about-section -->
    <section class="about-section">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <div class="image-box">
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                <figure class="image"><img src="{{ asset('assets/images/resource/about-01.jpg') }}"
                                        alt="wellup overseas"></figure>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                <div class="text-inner">
                                    <div class="shape"
                                        style="background-image: url({{ asset('assets/images/shape/shape-5.png') }});">
                                    </div>
                                    <div class="text">
                                        <h2>14</h2>
                                        <h6>Years of <br>Experienced</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                <figure class="image"><img src="{{ asset('assets/images/resource/about-02.jpg') }}"
                                        alt="wellup overseas"></figure>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                <figure class="image"><img src="{{ asset('assets/images/resource/about-03.jpg') }}"
                                        alt="wellup overseas"></figure>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div class="content-box">
                        <div class="sec-title">
                            <h6>About Well-up Overseas</h6>
                            <h3><strong>OUR TALENT IS FINDING YOURS</strong></h3>
                        </div>
                        <div class="inner">
                            <div class="icon"><img src="{{ asset('assets/images/icons/icon-4.png') }}"
                                    alt="wellup overseas"></div>
                            <h6>BANGLADESH based</h6>
                            <h5>GOVT. APPROVED AGENCY. RL NO. : 2083</h5>
                        </div>
                        <div class="text-justify mb-5">
                            <p>Well-up overseas is one of the leading government approved Recruiting Agency in Bangladesh
                                with License No.
                                RL-2083. Registered under the Ministry of Expatriates’ Welfare & Overseas Employment which
                                facilitates professionally
                                managed outflow of workforce from Bangladesh to overseas destinations. Bangladesh Human
                                Capital also a member of
                                Bangladesh Association of International Recruiting Agencies (BAIRA).</p>
                        </div>
                        <div class="btn-box">
                            <a href="#" class="theme-btn btn-two">More Details <i class="flaticon-next"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-section end -->

    <!-- coaching-section -->
    <section class="coaching-section">
        <div class="auto-container">
            <div class="sec-title">
                <h6>Coaching Classes</h6>
                <h2>Our Training & Certification</h2>
            </div>
            <div class="row clearfix">
                <div class="col-lg-3 col-md-6 col-sm-12 coaching-block">
                    <div class="coaching-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image">
                                <img src="{{ asset('assets/images/resource/coaching-1.jpg') }}" alt="wellup overseas"
                                    style="height:420px;">
                            </figure>
                            <div class="content-box">
                                <div class="icon-box"><a href="#"><i class="flaticon-diagonal-arrow-1"></i></a></div>
                                <h5><a href="#">CIVIL</a></h5>
                            </div>
                            <div class="overlay-content">
                                <div class="icon-box"><a href="#"><i class="flaticon-diagonal-arrow-1"></i></a></div>
                                <h5><a href="#">CIVIL</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 coaching-block">
                    <div class="coaching-block-one wow fadeInUp animated" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image">
                                <img src="{{ asset('assets/images/resource/coaching-2.jpg') }}" alt="wellup overseas"
                                    style="height:420px;">
                            </figure>
                            <div class="content-box">
                                <div class="icon-box"><a href="#"><i class="flaticon-diagonal-arrow-1"></i></a></div>
                                <h5><a href="#">Electrical &</a></h5>
                                <h4><a href="#">Welding</a></h4>
                            </div>
                            <div class="overlay-content">
                                <div class="icon-box"><a href="#"><i class="flaticon-diagonal-arrow-1"></i></a>
                                </div>
                                <h5><a href="#">Electrical &</a></h5>
                                <h4><a href="#">Welding</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 coaching-block">
                    <div class="coaching-block-one wow fadeInUp animated" data-wow-delay="400ms"
                        data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image">
                                <img src="{{ asset('assets/images/resource/coaching-3.jpg') }}" alt="wellup overseas"
                                    style="height:420px;">
                            </figure>
                            <div class="content-box">
                                <div class="icon-box"><a href="#"><i class="flaticon-diagonal-arrow-1"></i></a>
                                </div>
                                <h5><a href="#">Hospitality &</a></h5>
                                <h4><a href="#">Nursing</a></h4>
                            </div>
                            <div class="overlay-content">
                                <div class="icon-box"><a href="#"><i class="flaticon-diagonal-arrow-1"></i></a>
                                </div>
                                <h5><a href="#">Hospitality &</a></h5>
                                <h4><a href="#">Nursing</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 coaching-block">
                    <div class="coaching-block-one wow fadeInUp animated" data-wow-delay="600ms"
                        data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image">
                                <img src="{{ asset('assets/images/resource/coaching-4.jpg') }}" alt="wellup overseas"
                                    style="height:420px;">
                            </figure>
                            <div class="content-box">
                                <div class="icon-box"><a href="#"><i class="flaticon-diagonal-arrow-1"></i></a>
                                </div>
                                <h5><a href="#">Ticket Reservation</a></h5>
                                <h4><a href="#">& IELTS</a></h4>
                            </div>
                            <div class="overlay-content">
                                <div class="icon-box"><a href="#"><i class="flaticon-diagonal-arrow-1"></i></a>
                                </div>
                                <h5><a href="#">Ticket Reservation</a></h5>
                                <h4><a href="#">& IELTS</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- coaching-section end -->


    <!-- destination-section -->
    <section class="destination-section">
        <div class="bg-layer bg-color-1"></div>
        <div class="auto-container">
            <div class="inner-container">
                <figure class="image"><img src="{{ asset('assets/images/resource/destination-1.jpg') }}"
                        alt="wellup overseas">
                </figure>
                <div class="content-box">
                    <div class="shape">
                        <div class="shape-1"
                            style="background-image: url({{ asset('assets/images/shape/shape-6.png') }});"></div>
                        <div class="shape-2"
                            style="background-image: url({{ asset('assets/images/shape/shape-7.png') }});"></div>
                    </div>
                    <h2>Fly Your Dream Destination</h2>
                    <p>Idea of denouncing pleasure & praising pain was born.</p>
                    <ul class="list clearfix">
                        <li><i class="flaticon-checkbox-mark"></i>Entering & Leaving From Country</li>
                        <li><i class="flaticon-checkbox-mark"></i>Visas</li>
                        <li><i class="flaticon-checkbox-mark"></i>Country Citizenship</li>
                    </ul>
                    <div class="btn-box">
                        <a href="{{ route('contact') }}" class="theme-btn btn-one">Contact Us<i
                                class="flaticon-next"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- destination-section end -->


    <!-- chooseus-section -->
    <section class="chooseus-section bg-color-1 centred">
        <div class="auto-container">
            <div class="sec-title centred">
                <h6>Who We Are</h6>
            </div>
            <div class="inner-content">
                <div class="row clearfix">
                    <div class="col-12 chooseus-block">
                        <div class="chooseus-block-one">
                            <div class="inner-box">
                                <p style="text-align: justify;">
                                    Well-up Recruitment is a boutique recruitment firm that specializes in matching the right
                                    talent to the right job. We are a preferred
                                    Recruitment Partner as we a have the knack of finding the well-up for your missing
                                    puzzle in your organization. We work on exclusive
                                    assignments as we are a Preferred Recruitment Business Partner for our clients. We
                                    understand that Talent drives your business strategy and
                                    we make it our business to find that Talent.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sec-title centred">
                <h6>Our flexibility Makes Us Different</h6>
            </div>
            <div class="inner-content">
                <div class="row clearfix">
                    <div class="col-12 chooseus-block">
                        <div class="chooseus-block-one">
                            <div class="inner-box">
                                <p style="text-align: justify;">
                                    A shortlist of candidates within two weeks (depending on the volume of the
                                    requirements): Interviewed and pre-qualified Shortlisted
                                    Candidates meet a minimum of 8 point out of 10 point as follows Well-Up CV form. The
                                    shortlisted candidates will be available for a face to face
                                    or webcam/phone interviews. Onc selected, the candidates will be available for a maximum
                                    period of 30-60 days The candidates will complete
                                    the medical examinations, police clearances, passport application/renewal (if any)
                                    within a maximum period of six weeks Upon receipt of the
                                    accreditation / registration documents (if they are in compliance to the format
                                    prescribed by Well-Up), Well-Up will complete the registration of
                                    the Clients at the Bangladesh Overseas Employment Administration within 2-3 working
                                    days. Upon receipt of the working visas and assuming
                                    that the Employer is already registered at the Vietnam Overseas Employment
                                    Administration, Well-Up will complete the Bangladesh Overseas
                                    Employment Administration processing of the selected candidates within 3-5 working days
                                    after which, flight reservations can be made for the
                                    candidates
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="lower-box">
                <h2>Guiding on preparing for <a href="{{ route('eligibility') }}">eligibility exams to visa</a>
                    assistance.</h2>
                <a href="{{ route('eligibility') }}" class="theme-btn btn-two">Get Assistance <i
                        class="flaticon-next"></i></a>
            </div>
        </div>
    </section>
    <!-- chooseus-section end -->


    <!-- team-section -->
    <section class="team-section centred">
        <div class="auto-container">
            <div class="sec-title centred">
                <h6>Expert Team Members</h6>
                <h2>Our Team at Your Service</h2>
            </div>
            <div class="row clearfix">
                <div class="col-md-4 col-sm-6 team-block">
                    <div class="team-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image">
                                    <img src="{{ asset('assets/images/team/owner.jpeg') }}" alt="wellup overseas"
                                        style="height:365px;">
                                </figure>
                            </div>
                            <div class="lower-content">
                                <h4><a href="#">Md. Budurus Maher.</a></h4>
                                <span class="designation">Owner</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 team-block">
                    <div class="team-block-one wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image">
                                    <img src="{{ asset('assets/images/team/manager.jpeg') }}" alt="wellup overseas"
                                        style="height:365px;">
                                </figure>
                            </div>
                            <div class="lower-content">
                                <h4><a href="#">Mohammad Bakhtier Hossen.</a></h4>
                                <span class="designation">Manager</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 team-block">
                    <div class="team-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image">
                                    <img src="{{ asset('assets/images/team/office-executive.jpeg') }}"
                                        alt="wellup overseas" style="height:365px;">
                                </figure>
                            </div>
                            <div class="lower-content">
                                <h4><a href="#">Mainul Hasan</a></h4>
                                <span class="designation">Office Executive</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 team-block">
                    <div class="team-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image">
                                    <img src="{{ asset('assets/images/team/embassy-representative.jpeg') }}"
                                        alt="wellup overseas" style="height:365px;">
                                </figure>
                            </div>
                            <div class="lower-content">
                                <h4><a href="#">Mohammed Monowar Hossain</a></h4>
                                <span class="designation">Embassy Representative</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 team-block">
                    <div class="team-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image">
                                    <img src="{{ asset('assets/images/team/accountant.jpeg') }}" alt="wellup overseas"
                                        style="height:365px;">
                                </figure>
                            </div>
                            <div class="lower-content">
                                <h4><a href="#">Tiblu Barua</a></h4>
                                <span class="designation">accountant</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 team-block">
                    <div class="team-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image">
                                    <img src="{{ asset('assets/images/team/office-assistant.jpeg') }}"
                                        alt="wellup overseas" style="height:365px;">
                                </figure>
                            </div>
                            <div class="lower-content">
                                <h4><a href="#">Kaiser Hamid</a></h4>
                                <span class="designation">Office Assistant</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 team-block">
                    <div class="team-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image">
                                    <img src="{{ asset('assets/images/team/managing-directot(oman).jpeg') }}"
                                        alt="wellup overseas" style="height:365px;">
                                </figure>
                            </div>
                            <div class="lower-content">
                                <h4><a href="#">Mohammed Monowar Hossain</a></h4>
                                <span class="designation">Managing Directot(Oman)</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 team-block">
                    <div class="team-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image">
                                    <img src="{{ asset('assets/images/team/managing-directot(uae).jpeg') }}"
                                        alt="wellup overseas" style="height:365px;">
                                </figure>
                            </div>
                            <div class="lower-content">
                                <h4><a href="#">Kaiser Hamid</a></h4>
                                <span class="designation">Managing Directot(UAE)</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 team-block">
                    <div class="team-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image">
                                    <img src="{{ asset('assets/images/team/representative(uae).jpeg') }}"
                                        alt="wellup overseas" style="height:365px;">
                                </figure>
                            </div>
                            <div class="lower-content">
                                <h4><a href="#">Tiblu Barua</a></h4>
                                <span class="designation">representative(uae)</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- team-section end -->


    <!-- testimonial-section
                                    <section class="testimonial-section" style="background-image: url(public/assets/images/background/testimonial-bg.jpg);">
                                        <div class="auto-container">
                                            <div class="sec-title light">
                                                <h6>Client Reviews</h6>
                                                <h2>Feedback From Our Clients</h2>
                                            </div>
                                            <div class="three-item-carousel owl-carousel owl-theme owl-dots-none">
                                                <div class="testimonial-block-one">
                                                    <div class="inner-box">
                                                        <div class="text">
                                                            <h4>Smooth & Efficient Service!...</h4>
                                                            <p>Well-up Overseas Consultancy is definitely a highly recommended canadian an migration agency. A big applause & very grateful to Mr.Richardson for efforts and assistance.</p>
                                                        </div>
                                                        <div class="lower-box">
                                                            <div class="quote"><img src="public/assets/images/icons/quote-1.png" alt="wellup overseas"></div>
                                                            <figure class="author-thumb"><img src="public/assets/images/resource/testimonial-1.jpg" alt="wellup overseas"></figure>
                                                            <ul class="rating clearfix">
                                                                <li><i class="flaticon-star"></i></li>
                                                                <li><i class="flaticon-star"></i></li>
                                                                <li><i class="flaticon-star"></i></li>
                                                                <li><i class="flaticon-star"></i></li>
                                                                <li><i class="flaticon-star"></i></li>
                                                            </ul>
                                                            <h4>Silverster Scott, <span>Netherland</span></h4>
                                                            <span class="date">October 10, 2021</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="testimonial-block-one">
                                                    <div class="inner-box">
                                                        <div class="text">
                                                            <h4>Thank You Well-up Overseas!...</h4>
                                                            <p>Well-up Overseas visa consultancy is the best we came across while doing market research & migrating to Canada. All informations conveyed were correct genuine and helpful.</p>
                                                        </div>
                                                        <div class="lower-box">
                                                            <div class="quote"><img src="public/assets/images/icons/quote-1.png" alt="wellup overseas"></div>
                                                            <figure class="author-thumb"><img src="public/assets/images/resource/testimonial-2.jpg" alt="wellup overseas"></figure>
                                                            <ul class="rating clearfix">
                                                                <li><i class="flaticon-star"></i></li>
                                                                <li><i class="flaticon-star"></i></li>
                                                                <li><i class="flaticon-star"></i></li>
                                                                <li><i class="flaticon-star"></i></li>
                                                                <li><i class="flaticon-star"></i></li>
                                                            </ul>
                                                            <h4>Nora Penelope, <span>Switcherland</span></h4>
                                                            <span class="date">October 09, 2021</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="testimonial-block-one">
                                                    <div class="inner-box">
                                                        <div class="text">
                                                            <h4>Highly Recommended!...</h4>
                                                            <p>Awesome customer service, they know what they are doing. Straight to the point, help with the forms if you need it. Amazing results always. We 100% recommend to others.</p>
                                                        </div>
                                                        <div class="lower-box">
                                                            <div class="quote"><img src="public/assets/images/icons/quote-1.png" alt="wellup overseas"></div>
                                                            <figure class="author-thumb"><img src="public/assets/images/resource/testimonial-3.jpg" alt="wellup overseas"></figure>
                                                            <ul class="rating clearfix">
                                                                <li><i class="flaticon-star"></i></li>
                                                                <li><i class="flaticon-star"></i></li>
                                                                <li><i class="flaticon-star"></i></li>
                                                                <li><i class="flaticon-star"></i></li>
                                                                <li><i class="flaticon-star"></i></li>
                                                            </ul>
                                                            <h4>Arlo Sebastian, <span>Australia</span></h4>
                                                            <span class="date">October 09, 2021</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                        testimonial-section end -->


    <!-- news-section
                                    <section class="news-section">
                                        <div class="auto-container">
                                            <div class="sec-title centred">
                                                <h6>News & Updates</h6>
                                                <h2>Read Our Latest Insights</h2>
                                            </div>
                                            <div class="row clearfix">
                                                <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                                                    <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                                        <div class="inner-box">
                                                            <div class="image-box">
                                                                <h2>14<span>Oct</span></h2>
                                                                <figure class="image"><a href="#"><img src="public/assets/images/news/news-1.jpg" alt="wellup overseas"></a></figure>
                                                            </div>
                                                            <div class="lower-content">
                                                                <div class="author-box">
                                                                    <figure class="author-thumb"><img src="public/assets/images/news/author-1.jpg" alt="wellup overseas"></figure>
                                                                    <h6><a href="#">Immigration</a></h6>
                                                                    <span>Post By: Colmin ONeill</span>
                                                                </div>
                                                                <h4><a href="#">Citizenship Concept on How to Become a UK Citizen</a></h4>
                                                                <p>Laborious physical exercise excepts obtain some advantage from...</p>
                                                                <div class="lower-box clearfix">
                                                                    <div class="link pull-left"><a href="#"><span>REad More</span></a></div>
                                                                    <ul class="info clearfix pull-right">
                                                                        <li><i class="far fa-heart"></i><a href="#">36</a></li>
                                                                        <li><i class="far fa-comment"></i><a href="#">08</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                                                    <div class="news-block-one wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                                                        <div class="inner-box">
                                                            <div class="image-box">
                                                                <h2>05<span>Oct</span></h2>
                                                                <figure class="image"><a href="#"><img src="public/assets/images/news/news-2.jpg" alt="wellup overseas"></a></figure>
                                                            </div>
                                                            <div class="lower-content">
                                                                <div class="author-box">
                                                                    <figure class="author-thumb"><img src="public/assets/images/news/author-2.jpg" alt="wellup overseas"></figure>
                                                                    <h6><a href="#">Resident Visa</a></h6>
                                                                    <span>Post By: Layla Madison</span>
                                                                </div>
                                                                <h4><a href="#">7 Benefits of Being a Permanent Resident in Canada</a></h4>
                                                                <p>Foresee the pain and trouble that are bound ensue equal blame belongs...</p>
                                                                <div class="lower-box clearfix">
                                                                    <div class="link pull-left"><a href="#"><span>REad More</span></a></div>
                                                                    <ul class="info clearfix pull-right">
                                                                        <li><i class="far fa-heart"></i><a href="#">12</a></li>
                                                                        <li><i class="far fa-comment"></i><a href="#">03</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                                                    <div class="news-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                                                        <div class="inner-box">
                                                            <div class="image-box">
                                                                <h2>26<span>Sep</span></h2>
                                                                <figure class="image"><a href="#"><img src="public/assets/images/news/news-3.jpg" alt="wellup overseas"></a></figure>
                                                            </div>
                                                            <div class="lower-content">
                                                                <div class="author-box">
                                                                    <figure class="author-thumb"><img src="public/assets/images/news/author-3.jpg" alt="wellup overseas"></figure>
                                                                    <h6><a href="#">News & Tips</a></h6>
                                                                    <span>Post By: Boone Gerardo</span>
                                                                </div>
                                                                <h4><a href="#">Three Common Mistakes in Visa Applications</a></h4>
                                                                <p>Laborious physical exercise excepts obtain some advantage from...</p>
                                                                <div class="lower-box clearfix">
                                                                    <div class="link pull-left"><a href="#"><span>REad More</span></a></div>
                                                                    <ul class="info clearfix pull-right">
                                                                        <li><i class="far fa-heart"></i><a href="#">06</a></li>
                                                                        <li><i class="far fa-comment"></i><a href="#">15</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    news-section end -->


    <!-- clients-section
                                    <section class="clients-section mb-5">
                                        <div class="outer-container">
                                            <div class="clients-carousel owl-carousel owl-theme owl-dots-none owl-nav-none">
                                                <figure class="clients-logo-box">
                                                    <a href="#"><img src="public/assets/images/clients/clients-logo-1.png" alt="wellup overseas"></a>
                                                    <span class="logo-title"><a href="#">Visit Website</a></span>
                                                </figure>
                                                <figure class="clients-logo-box">
                                                    <a href="#"><img src="public/assets/images/clients/clients-logo-2.png" alt="wellup overseas"></a>
                                                    <span class="logo-title"><a href="#">Visit Website</a></span>
                                                </figure>
                                                <figure class="clients-logo-box">
                                                    <a href="#"><img src="public/assets/images/clients/clients-logo-3.png" alt="wellup overseas"></a>
                                                    <span class="logo-title"><a href="#">Visit Website</a></span>
                                                </figure>
                                                <figure class="clients-logo-box">
                                                    <a href="#"><img src="public/assets/images/clients/clients-logo-4.png" alt="wellup overseas"></a>
                                                    <span class="logo-title"><a href="#">Visit Website</a></span>
                                                </figure>
                                                <figure class="clients-logo-box">
                                                    <a href="#"><img src="public/assets/images/clients/clients-logo-5.png" alt="wellup overseas"></a>
                                                    <span class="logo-title"><a href="#">Visit Website</a></span>
                                                </figure>
                                                <figure class="clients-logo-box">
                                                    <a href="#"><img src="public/assets/images/clients/clients-logo-6.png" alt="wellup overseas"></a>
                                                    <span class="logo-title"><a href="#">Visit Website</a></span>
                                                </figure>
                                            </div>
                                        </div>
                                    </section>
                                    clients-section end -->


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
                            <p>Please, fulfill the form to get a consultation. After processing the data, apersonal manager
                                will contact you.</p>
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
