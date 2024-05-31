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
    <section class="chooseus-section bg-color-1 centred mb-0 pb-0">
        <div class="auto-container">
            <div class="sec-title centred">
                <h6><span class="h3">Bangladesh at Glimpse</span></h6>
            </div>
            <div class="inner-content">
                <div class="row clearfix">
                    <div class="col-md-4">
                        <img src="{{ asset('assets/images/resource/bangladesh.jpg') }}" alt="wellupworld"
                            style="width: 100%; height: auto;">
                    </div>
                    <div class="col-md-7 offset-md-1 chooseus-block">
                        <div class="chooseus-block-one">
                            <div class="inner-box">
                                <p style="text-align: justify;">
                                    <strong>Political & Economical System</strong><br>
                                    Bangladesh having the parliamentary form of government it is pursuing the free Market
                                    Economic System
                                    the new Industrial policy aims at increasing the involvement of the private sector in
                                    all economic activities.
                                    <strong>Population & Religion</strong><br>
                                    The Population of Bangladesh is about 150 Million. About 86% of the population are
                                    Muslims. The Minority comprises mainly of
                                    Hindus, Christians and Buddhists. Islam entered in this part of the world in the 8th
                                    century and it plays a pivotal role in
                                    everyday life of majority of Bangladesh.
                                    <strong>Principle Crops</strong><br>
                                    Rice, Wheat, Jute, Cotton, Tea, Tobacco, Sugar, Cane, Pulses, Oil, Seeds, Spices,
                                    Potato, Green, Vegetable, Banana, Mango, Coconut etc.
                                    <strong>Comparative Advantage for Bangladesh Manpower</strong><br>
                                    Bangladesh offers a substantial manpower reserve skilled, educated and otherwise. The
                                    ability of youthful, inexpensive, training and easily trainable labor force
                                    permits production at a comparatively low cost. Owing to inadequate employment
                                    opportunity in the country, a large number of professional, technicians and
                                    other middle and low skilled workers trained from different universities, colleges, and
                                    technical training centers are readily available for employment in the
                                    industrial sectors. A notable characteristic of the new entrance to the labor market is
                                    that most of them are educated, at least up to the lower secondary level.
                                    They can, therefore, be easily trained in new techniques and skills.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-section -->
    <section class="about-section mt-1 pt-2 pb-4">
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
                                        <h2>5</h2>
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

    <!-- chooseus-section -->
    <section class="chooseus-section bg-color-1 centred pt-5">
        <div class="auto-container">
            <div class="sec-title centred">
                <h6><span class="h3">OUR MISSION</span></h6>
            </div>
            <div class="inner-content">
                <div class="row clearfix">
                    <div class="col-md-8 chooseus-block">
                        <div class="chooseus-block-one">
                            <div class="inner-box">
                                <p style="text-align: justify;">
                                    Our mission is to be the most reliable and trustworthy global recruitment partner to
                                    both our clients and candidates. By developing resilient relations with various business
                                    entities and studying their corporate culture, we apply the executive search process
                                    that outlines a candidate’s role in the organization. To fulfill our commitment, we
                                    integrate comprehensive recruitment service strategies which are embedded in our
                                    business principles. Our approach is to invest time and effort in enhancing the skills
                                    of the workforce and use our existing databases as a source to find valuable candidates.
                                    By fulfilling a number of projects for various multinational companies, we have garnered
                                    appreciation from the industry. Through our advertising and selection process,
                                    administrative and support services, post-selection synchronization, reference checks,
                                    and manpower outsourcing activities of selected candidates, we have placed some of the
                                    brightest professionals in a variety of positions for the firm’s longevity.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="{{ asset('assets/images/resource/mission.jpg') }}" alt="wellupworld"
                            style="width: 100%; height:100%;">
                    </div>
                </div>
            </div>
            <div class="sec-title centred">
                <h6><span class="h3">OUR VISSION</span></h6>
            </div>
            <div class="inner-content">
                <div class="row clearfix">
                    <div class="col-md-4">
                        <img src="{{ asset('assets/images/resource/vission.jpg') }}" alt="wellupworld"
                            style="width: 100%; height:100%;">
                    </div>
                    <div class="col-md-8 chooseus-block">
                        <div class="chooseus-block-one">
                            <div class="inner-box">
                                <p style="text-align: justify;">
                                    WELL-UP Recruitment Agency aspires to be the most trusted global recruitment partner. In
                                    order to improve performance and create progressive transformation in management,
                                    companies need to hire knowledgeable and well-trained professionals. We endeavor to be
                                    the platform through which clients can acquire their suitable match and candidates can
                                    pursue their careers with their ideal organization. To ensure the satisfaction of both
                                    parties, we work in close collaboration with diverse industries so that staffing needs
                                    are consistently met. With a qualified team of consultants, our goal is to provide
                                    excellent service to our customers who belong to the national and international arena.
                                    By providing exceptional customer service and competitive pricing, we believe that we
                                    have the ability to identify the right applicant and place them in an establishment that
                                    will further enhance their skill. We desire to be the best in the industry by helping
                                    the employer and employees achieve success through our recruitment.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sec-title centred">
                <h6><span class="h3">Who We Are</span></h6>
            </div>
            <div class="inner-content">
                <div class="row clearfix">
                    <div class="col-12 chooseus-block">
                        <div class="chooseus-block-one">
                            <div class="inner-box">
                                <p style="text-align: justify;">
                                    Well-up Recruitment is a boutique recruitment firm that specializes in matching the
                                    right
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
                <h6><span class="h3">Our flexibility Makes Us Different</span></h6>
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
            <div class="sec-title centred">
                <h6><span class="h3">Why Well-Up Overseas?</span></h6>
            </div>
            <div class="inner-content">
                <div class="row clearfix">
                    <div class="col-md-8 chooseus-block">
                        <div class="chooseus-block-one">
                            <div class="inner-box">
                                <ul class="text-left">
                                    <li style="list-style-type: circle;">Well-up is a dynamic overseas recruiting solutions
                                        company first of its kind based
                                        in
                                        Chittagong,Bangladesh.</li>
                                    <li style="list-style-type: circle;">We have highly qualified, trained, dedicated team
                                        with technologically advanced
                                        state of the
                                        art office facilities.</li>
                                    <li style="list-style-type: circle;">We also operate special support service team Based
                                        in Muscat, Dubai to serve GCC
                                        markets.</li>
                                    <li style="list-style-type: circle;">Well-up has its own training center to provide
                                        basic training & orientation to
                                        develop the
                                        skills of job seekers.</li>
                                    <li style="list-style-type: circle;">We do have our own job portal & CV bank to fulfil
                                        the demand of any kind of
                                        workforces
                                        within no time.</li>
                                    <li style="list-style-type: circle;">We don’t just provide manpower: we provide
                                        complete recruiting solutions to our
                                        respective
                                        clients.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="{{ asset('assets/images/resource/whyOverseas.jpg') }}" alt="wellupworld"
                            style="width: 100%; height:100%;">
                    </div>
                </div>
            </div>
            <div class="sec-title centred">
                <h6><span class="h3">HOW WELL-UP OVERSEAS HELP YOUR BUSINESS?</span></h6>
            </div>
            <div class="inner-content">
                <div class="row clearfix">
                    <div class="col-md-4">
                        <img src="{{ asset('assets/images/resource/helpbusiness.jpg') }}" alt="wellupworld"
                            style="width: 100%; height:100%;">
                    </div>
                    <div class="col-md-7 offset-md-1 chooseus-block">
                        <div class="chooseus-block-one">
                            <div class="inner-box">
                                <ul class="text-left">
                                    <li style="list-style-type: square;">Allocate the right person to the right job.</li>
                                    <li style="list-style-type: square;">Improve hiring quality.</li>
                                    <li style="list-style-type: square;">Improve recruitment performance.</li>
                                    <li style="list-style-type: square;">Minimize recruitment process costs.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sec-title centred">
                <h6><span class="h3">And Most Important</span></h6>
            </div>
            <div class="inner-content">
                <div class="row clearfix">
                    <div class="col-md-8 chooseus-block">
                        <div class="chooseus-block-one">
                            <div class="inner-box">
                                <ul class="text-left">
                                    <li style="list-style-type: circle;">We Provide aftercare.</li>
                                    <li style="list-style-type: circle;">We are with you to ensure a smooth onboarding
                                        orientation.</li>
                                    <li style="list-style-type: circle;">We walk with you, providing feedback from the new
                                        staff members and giving them feedback as well.</li>
                                </ul>
                                <p class="mt-3" style="text-align: justify;">
                                    So <a href="{{ route('contact') }}">Get in touch</a> and partner with us where we have
                                    higher standards as your hire impact</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="{{ asset('assets/images/resource/importance.jpg') }}" alt="wellupworld"
                            style="width: 100%; height:100%;">
                    </div>
                </div>
            </div>
            <div class="sec-title centred">
                <h6><span class="h3">Background Checks Services</span></h6>
            </div>
            <div class="inner-content">
                <div class="row clearfix">
                    <div class="col-md-4">
                        <img src="{{ asset('assets/images/resource/business.jpg') }}" alt="wellupworld"
                            style="width: 100%; height:100%;">
                    </div>
                    <div class="col-md-7 offset-md-1 chooseus-block">
                        <div class="chooseus-block-one">
                            <div class="inner-box">
                                <p style="text-align: justify;">
                                    We manage the existing contracts of our clients, whereby clients with contracted
                                    workers / staff approach us for the Management of these Contacts. Some of the
                                    benefits of utilizing this service include:

                                </p>
                                <ul class="text-left">
                                    <li style="list-style-type: circle;">Educational Certification.</li>
                                    <li style="list-style-type: circle;">Professional Certification.</li>
                                    <li style="list-style-type: circle;">Previous Employment.</li>
                                    <li style="list-style-type: circle;">Personal Reference.</li>
                                    <li style="list-style-type: circle;">Criminal Reference.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sec-title centred">
                <h6><span class="h3">And there is more, We value and practice</span></h6>
            </div>
            <div class="inner-content">
                <div class="row clearfix">
                    <div class="col-md-8 chooseus-block">
                        <div class="chooseus-block-one">
                            <div class="inner-box">
                                <ul class="text-left">
                                    <li style="list-style-type: circle;"><strong>Client Focus :</strong> We deliver WOW
                                        Service.</li>
                                    <li style="list-style-type: circle;"><strong>Courage :</strong> We embrace and drive
                                        change.</li>
                                    <li style="list-style-type: circle;"><strong>Excellance :</strong> We are passionate
                                        and determined and therefore give our all.</li>
                                    <li style="list-style-type: circle;"><strong>Integrity :</strong> We are open in our
                                        communication and provide constant feedback.</li>
                                </ul>
                                <p class="mt-3" style="text-align: justify;">So you can count on us for the following.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="{{ asset('assets/images/resource/moreimportance.jpg') }}" alt="wellupworld"
                            style="width: 100%; height:auto;">
                    </div>
                </div>
            </div>
            <div class="sec-title centred">
                <h6><span class="h3">Why you should be part of it?</span></h6>
            </div>
            <div class="inner-content">
                <div class="row clearfix">
                    <div class="col-md-4">
                        <img src="{{ asset('assets/images/resource/shouldpart.jpg') }}" alt="wellupworld"
                            style="width: 100%; height:100%;">
                    </div>
                    <div class="col-md-8 chooseus-block">
                        <div class="chooseus-block-one">
                            <div class="inner-box">
                                <p style="text-align: justify;">
                                    <strong>Just Like Well-Up, We stand out!</strong>
                                    This is due to our proactive recruitment of candidates who may not be seeking new
                                    employment and would not normally respond to routine advertising, or who may
                                    come from non-traditional sources. <br>
                                    When sourcing for and placing candidates, we firstly strive to understand our clients
                                    requirements, culture and business ensuring the placement of suitable people who
                                    are thoroughly screened and vetted for the required position. <br>
                                    We are the bridge that connects great talent to great brands everyday. <br> <br>
                                    <strong>Just Like Well-Up,We stand out.</strong>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sec-title centred">
                <h6><span class="h3">In Essence</span></h6>
            </div>
            <div class="inner-content">
                <div class="row clearfix">
                    <div class="col-md-8 chooseus-block">
                        <div class="chooseus-block-one">
                            <div class="inner-box">
                                <ul class="text-left">
                                    <li style="list-style-type: circle;">Well-Up Recruitment sources for highly skilled set
                                        of talents by use of a sophisticated
                                        screening/ interviewing system i.e. a structured behavioral interviewing system to
                                        accurately screen candidates, which is statistically far more predictive than any
                                        other
                                        system.
                                    </li>
                                    <li style="list-style-type: circle;">Our team is proactive in sourcing and have an
                                        ongoing candidate pipeline
                                        development.</li>
                                    <li style="list-style-type: circle;">We have an 85% fill ratio for every open position
                                        we partner for.</li>
                                    <li style="list-style-type: circle;">We have a region wide presence within Bangladesh.
                                    </li>
                                    <li style="list-style-type: circle;">High caliber candidates as we are always sourcing
                                        for candidates with the below
                                        qualities. </li>
                                    <li>
                                        <ul class="pl-5">
                                            <li style="list-style-type: square;">Consistently exceed expectations.</li>
                                            <li style="list-style-type: square;">Get things done on time without making
                                                excuses.</li>
                                            <li style="list-style-type: square;">Are great problem solvers.</li>
                                            <li style="list-style-type: square;">Fit with the culture, the team and the
                                                Hiring Manager.</li>
                                            <li style="list-style-type: square;">Are highly motivated to do the work that
                                                needs to be done.</li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="{{ asset('assets/images/resource/inessence.jpg') }}" alt="wellupworld"
                            style="width: 100%; height:100%;">
                    </div>
                </div>
            </div>
            <div class="lower-box mb-5">
                <h2>Guiding on preparing for <a href="{{ route('eligibility') }}">eligibility exams to visa</a>
                    assistance.</h2>
                <a href="{{ route('eligibility') }}" class="theme-btn btn-two">Get Assistance <i
                        class="flaticon-next"></i></a>
            </div>
            <div class="sec-title centred">
                <h6><span class="h3">Message of Owner</span></h6>
            </div>
            <div class="inner-content">
                <div class="row clearfix">
                    <div class="col-md-4">
                        <img src="{{ asset('assets/images/team/owner.jpeg') }}" alt="wellupworld"
                            style="width: 100%; height: auto;">
                    </div>
                    <div class="col-md-8 chooseus-block">
                        <div class="chooseus-block-one">
                            <div class="inner-box">
                                <p style="text-align: justify;">
                                    First of all, I would like to extend warmth and gratitude greetings to all concerned,
                                    especially to our client’s foreign employment seeker my business associates and well
                                    wisher’s. <br><br>
                                    It is indeed a great pleasure to me to introduce ourselves as one of the highly
                                    professional and
                                    leading global recruiting agencies in Bangladesh, those among the limited for their best
                                    performances in their field. My organization is an accredited by the ministry of welfare
                                    & overseas
                                    employment Government of Bangladesh. <br>
                                    We are confident of fulfilling every aspect of your manpower need, to you immense
                                    satisfaction. We
                                    hereby propose to enter into a strategic alliance with your organization, to provide for
                                    the most
                                    efficient, economic and responsible manpower. Whether it is for recruitment of technical
                                    staff or
                                    non-technical, we can be counted upon. <br><br>
                                    With our experience, tools and skills, we benefit our clients in receiving higher
                                    productivity, faster
                                    deployment and better manpower. Our industry and market specific focus coupled with our
                                    dedication to customer satisfaction, has made us one of the best and most reliable
                                    recruitment and
                                    staffing companies in Bangladesh . Our professionals are constantly active and I am
                                    proud of my
                                    team.
                                </p>
                                <p style="text-align: right;">
                                    <strong>
                                        Thank you, <br>
                                        Md. Budurus Maher <br>
                                        Owner <br>
                                        Well-Up Overseas, RL -2083 <br>
                                        maher117711@hotmail.com <br>
                                        +880 1883 403375 <br>
                                    </strong>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sec-title centred">
                <h6><span class="h3">Message of Manager</span></h6>
            </div>
            <div class="inner-content">
                <div class="row clearfix">
                    <div class="col-md-4">
                        <img src="{{ asset('assets/images/team/manager.jpeg') }}" alt="wellupworld"
                            style="width: 100%; height: auto;">
                    </div>
                    <div class="col-md-8 chooseus-block">
                        <div class="chooseus-block-one">
                            <div class="inner-box">
                                <p style="text-align: justify;">
                                    Well-up Overseas has a team of professionals who possess significant experience in the
                                    manpower
                                    recruitment industry. Every aspect of the recruitment process is focused on ensuring the
                                    provision of
                                    prompt, high quality and professional recruitment service. <br>
                                    With a population of 185 million, Bangladesh has a potentially rich manpower resource.
                                    Our company
                                    aims to harness this resource to its fullest extent. To add to that, overseas employment
                                    is fully
                                    ingrained in the national consciousness of Bangladeshis. Our company communicates
                                    regularly with
                                    clients to pay full attention to every detail and requirements provided by our clients.
                                    Every
                                    recruitment activity is designed to provide our client with a high level of confidence
                                    that recruitment
                                    targets are on track and success is within reach. <br>
                                    On an individual level, I have been involved in this field of work for the last 8 years,
                                    mainly
                                    collaborating with companies in Saudi Arabia, uae , Oman Malaysia and Singapore. I
                                    specialize in
                                    supplying qualified, experienced professionals , skilled and unskilled workers to
                                    various countries. Due
                                    to the long line of work I have done in this field, I have gained both vast experience
                                    and notable
                                    recognition at home and abroad. My sole aim is customer’s satisfaction. <br>
                                    Further, I can only say that no client or candidate will be disappointed in any
                                    collaboration with
                                    well-up. Overseas. We are ardently looking forward to serving you in the future.
                                <p style="text-align: right;">
                                    <strong>
                                        Thank you, <br>
                                        Mohammed Bakhtier Hossen <br>
                                        Manager <br>
                                        Well-Up Overseas, RL – 2083 <br>
                                    </strong>
                                </p>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- chooseus-section end -->


    <!-- team-section -->
    <section class="team-section centred mb-0 pb-0">
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
                                <h4><a href="#">Md Arshad Ullah</a></h4>
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
                                <h4><a href="#">Mohammad Zahed Parvez Chowdhury</a></h4>
                                <span class="designation">Managing Director(UAE)</span>
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
                                <h4><a href="#">Hamad Rashed Abdulla Khamis Alghaith</a></h4>
                                <span class="designation">Representative(uae)</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- team-section end -->
    <section class="team-section centred mb-0 pb-0">
        <div class="auto-container">
            <div class="row">
                <div class="col-12 mb-4 py-3">
                    <img src="{{ asset('assets/images/resource/licences.JPG') }}" alt="wellupworld" style="width: 100%; height: auto;">
                </div>
                <div class="col-12 my-4 py-3">
                    <img src="{{ asset('assets/images/resource/overseas-workwith.JPG') }}" alt="wellupworld" style="width: 100%; height: auto;">
                </div>
            </div>
        </div>
    </section>
    <!-- coaching-section -->
    <section class="coaching-section">
        <div class="auto-container">
            <div class="sec-title">
                <h6>Coaching Classes</h6>
                <h2>Our Training & Certification</h2>
            </div>
            <div class="row clearfix">
                <div class="col-lg-3 col-md-6 col-sm-12 coaching-block">
                    <div class="coaching-block-one wow fadeInUp animated" data-wow-delay="00ms"
                        data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image">
                                <img src="{{ asset('assets/images/resource/coaching-1.jpg') }}" alt="wellup overseas"
                                    style="height:420px;">
                            </figure>
                            <div class="content-box">
                                <div class="icon-box"><a href="#"><i class="flaticon-diagonal-arrow-1"></i></a>
                                </div>
                                <h5><a href="#">CIVIL</a></h5>
                            </div>
                            <div class="overlay-content">
                                <div class="icon-box"><a href="#"><i class="flaticon-diagonal-arrow-1"></i></a>
                                </div>
                                <h5><a href="#">CIVIL</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 coaching-block">
                    <div class="coaching-block-one wow fadeInUp animated" data-wow-delay="200ms"
                        data-wow-duration="1500ms">
                        <div class="inner-box">
                            <figure class="image">
                                <img src="{{ asset('assets/images/resource/coaching-2.jpg') }}" alt="wellup overseas"
                                    style="height:420px;">
                            </figure>
                            <div class="content-box">
                                <div class="icon-box"><a href="#"><i class="flaticon-diagonal-arrow-1"></i></a>
                                </div>
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
            <div class="sec-title centred mt-5">
                <h6><span class="h3">Importance of Training</span></h6>
            </div>
            <div class="inner-content mb-4">
                <div class="row clearfix">
                    <div class="col-12 chooseus-block">
                        <div class="chooseus-block-one">
                            <div class="inner-box">
                                <p style="text-align: justify;">
                                    We have own training center for all types of foreign travelers for work. Training is
                                    crucial for organizational development and success. It is fruitful
                                    to both employers and employees of an organization. An employee will become more
                                    efficient and productive if he is trained well.
                                    New candidates who join an organization are given training. This training familiarizes
                                    them with the organizational mission, vision, rules and
                                    regulations and the working conditions.Training is given so that employees are prepared
                                    to share the responsibilities of the higher level job.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sec-title centred">
                <h6><span class="h3">The benefits of training can be summed up as</span></h6>
            </div>
            <div class="inner-content">
                <div class="row clearfix">
                    <div class="col-12 chooseus-block">
                        <div class="chooseus-block-one">
                            <div class="inner-box">
                                <ul class="text-left">
                                    <li style="list-style-type: circle;">Improves morale of employees-</li>
                                    <li style="list-style-type: circle;">Less supervision.</li>
                                    <li style="list-style-type: circle;">Fewer accidents.</li>
                                    <li style="list-style-type: circle;">Chances of promotion.</li>
                                    <li style="list-style-type: circle;">Increased productivity.</li>
                                </ul>
                                <p style="text-align: justify;">
                                    On the job training methods are those which are given to the employees within the
                                    everyday working of a concern. It is a simple and
                                    cost-effective training method. The in proficient as well as semi- proficient employees
                                    can be well trained by using such training
                                    method. The employees are trained in actual working scenario. The motto of such training
                                    is “learning by doing.” Instances of such
                                    on-job training methods are job-rotation, coaching, temporary promotions, etc.
                                </p>
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
