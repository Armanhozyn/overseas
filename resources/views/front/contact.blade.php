@extends('layouts.index')
@section('content')
<!-- contact-style-two -->
<section class="contact-style-two bg-color-1">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                <div class="content_block_five">
                    <div class="content-box">
                        <div class="sec-title">
                            <h6>Quick Contact</h6>
                            <h2>Have Questions? <br>Don't Hesitate to Contact Us</h2>
                            <p>Please feel free to get in touch with us using the contact form below. We'd love to hear for you welcomed and every pain avoided.</p>
                        </div>
                        <div class="inner-box">
                            <div class="row clearfix">
                                <div class="col-lg-12 col-md-12 col-sm-12 single-column">
                                    <div class="single-item">
                                        <div class="icon-box"><img src="public/assets/images/icons/icon-56.png" alt="wellup overseas"></div>
                                        <h4>Location</h4>
                                        <p>Saleh Villa ( 2nd Floor). House#14, Road No-01 O.R Nizam Road, Chattogram, Bangladesh.</p>
                                    </div>
                                </div>
                                <div class="col-md-12 single-column">
                                    <div class="single-item">
                                        <div class="icon-box"><img src="public/assets/images/icons/icon-57.png" alt="wellup overseas"></div>
                                        <h4>Quick Contact</h4>
                                        <ul class="info clearfix">
                                            <li>
                                                <h6>Phone:</h6>
                                                <p><a href="tel:+8801883403375">+880 1883 40 33 75</a></p>
                                            </li>
                                            <li>
                                                <h6>Email:</h6>
                                                <p><a href="mailto:info@wellupworld.com">info@wellupworld.com</a></p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 form-column">
                <div class="content_block_six">
                    <div class="content-box">
                        <div class="sec-title">
                            <h6>Let’s Connect</h6>
                            <h2>Send Your Message</h2>
                            <p>Please feel free to get in touch with us using the contact form below. Wed love to hear for you.</p>
                        </div>
                        <div class="form-inner">
                            <form method="post" action="{{ route('contact.store') }}" id="contact-form" class="default-form">
                                @csrf
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="username" placeholder="Your Name" required="" value="{{ old('username') }}">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="email" name="email" placeholder="Email Addres" required="" value="{{ old('email') }}">
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <input type="text" name="phone" required="" placeholder="Phone Number" value="{{ old('phone') }}">
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <textarea name="message" placeholder="Your Message...">{{ old('message') }}</textarea>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                                        <button class="theme-btn btn-two" type="submit" >Submit Now<i class="flaticon-next"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact-style-two end -->


<!-- contactinfo-section -->
<section class="contactinfo-section centred">
    <div class="auto-container">
        <div class="sec-title">
            <h6>Worlwide Offices</h6>
            <h2>Explore Our Office Worldwide</h2>
        </div>
        <div class="row clearfix">
            <div class="col-lg-3 col-md-6 col-sm-12 info-column">
                <div class="single-item wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="icon-box"><i class="flaticon-cn-tower"></i></div>
                    <h4>Canada</h4>
                    <div class="phone"><a href="tel:+8801883403375">+8801883403375</a></div>
                    <div class="email"><a href="mailto:info@wellupworld.com">info@wellupworld.com</a></div>
                    <div class="text">
                        <p>will reveal soon</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 info-column">
                <div class="single-item wow fadeInUp animated" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="icon-box"><i class="flaticon-sydney"></i></div>
                    <h4>Australia</h4>
                    <div class="phone"><a href="tel:+8801883403375">+8801883403375</a></div>
                    <div class="email"><a href="mailto:info@wellupworld.com">info@wellupworld.com</a></div>
                    <div class="text">
                        <p>will reveal soon</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 info-column">
                <div class="single-item wow fadeInUp animated" data-wow-delay="400ms" data-wow-duration="1500ms">
                    <div class="icon-box"><i class="flaticon-london"></i></div>
                    <h4>United Kingdom</h4>
                    <div class="phone"><a href="tel:+8801883403375">+8801883403375</a></div>
                    <div class="email"><a href="mailto:info@wellupworld.com">info@wellupworld.com</a></div>
                    <div class="text">
                        <p>will reveal soon</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 info-column">
                <div class="single-item wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                    <div class="icon-box"><i class="flaticon-taj-mahal"></i></div>
                    <h4>India</h4>
                    <div class="phone"><a href="tel:+8801883403375">+8801883403375</a></div>
                    <div class="email"><a href="mailto:info@wellupworld.com">info@wellupworld.com</a></div>
                    <div class="text">
                        <p>will reveal soon</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="map-inner">
            <div class="google-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14759.272652001351!2d91.8286275!3d22.3604938!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd89c76a8899d30c3!2sWell-UP%20BD!5e0!3m2!1sen!2sbd!4v1673891253892!5m2!1sen!2sbd" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</section>
<!-- contactinfo-section end -->
@endsection
