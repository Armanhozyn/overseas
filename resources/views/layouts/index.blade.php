<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <title>Well-up OverSeas</title>

    <!-- Fav Icon -->
    <link rel="icon" href="public/assets/images/favicon.png" type="image/x-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@300;400;500;600;700;800;900&family=Manrope:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Stylesheets -->
    @include('include.front.css')
    @yield('css')
</head>

<body>
    <div class="print-error-msg" id="error-box" style="display:none; position: fixed; top: 100px; right: 25px; z-index:9999999999; width: 20%;">
        <div class="alert alert-danger" role="alert" style=" margin: 0 auto;">
            <ul></ul>
        </div>
    </div>
    @if ($errors->any())
    <div id="error-box" style="position: fixed; top: 100px; right: 25px; z-index:1000; width: 20%;">
        <div class="alert alert-danger" role="alert" style=" margin: 0 auto;">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </div>
    </div>
    @elseif (Session::has('success'))
    <div id="error-box" style="position: fixed; top: 100px; right: 25px; z-index:1000; width: 20%;">
        <div class="alert alert-success" role="alert" style=" margin: 0 auto;">
            {{ session('success') }}
        </div>
    </div>
    @endif
    <div class="boxed_wrapper">
        @include('include.front.navigation')
        @yield('content')
        <!-- main-footer -->
        <footer class="main-footer">
            <div class="footer-top">
                <div class="auto-container">
                    <div class="row clearfix">
                        <div class="col-lg-2 col-md-6 col-sm-12 footer-column">
                            <div class="links-widget footer-widget">
                                <div class="widget-title">
                                    <h4>Quick Links</h4>
                                </div>
                                <div class="widget-content">
                                    <ul class="links-list clearfix">
                                        <li><a href="{{ route('home') }}">Home</a></li>
                                        <li><a href="{{ route('faq') }}">FAQ</a></li>
                                        <li><a href="{{ route('eligibility') }}">Eligibility</a></li>
                                        <li><a href="{{ route('contact') }}">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-12 footer-column">
                            {{--  <div class="links-widget footer-widget">
                                <div class="widget-title">
                                    <h4>Our Services</h4>
                                </div>
                                <div class="widget-content">
                                    <ul class="links-list clearfix">
                                        <li><a href="#">Recruitment</a></li>
                                        <li><a href="#">Career Path</a></li>
                                        <li><a href="#">Hiring Process</a></li>
                                        <li><a href="#">Tours & Travels</a></li>
                                    </ul>
                                </div>
                            </div>  --}}
                        </div>
                        <div class="col-lg-8 col-md-12 col-sm-12 footer-column">
                            <div class="logo-widget footer-widget">
                                <figure class="footer-logo text-center"><a href="{{ route('home') }}">
                                        <img src="{{ asset('assets/images/footer-logo.png') }}" alt="wellup overseas"></a>
                                </figure>
                                <div class="text-justify">
                                    <p>Well-up overseas is one of the leading government approved Recruiting Agency in Bangladesh with License No.
                                        RL-2083. Registered under the Ministry of Expatriates’ Welfare & Overseas Employment which facilitates professionally
                                        managed outflow of workforce from Bangladesh to overseas destinations. Bangladesh Human Capital also a member of
                                        Bangladesh Association of International Recruiting Agencies (BAIRA).</p>
                                </div>
                                <div class="inner">
                                    <div class="icon"><i class="flaticon-email"></i></div>
                                    <h6><a href="#">Mail us</a></h6>
                                    <li><a class="text-white" href="mailto:info@wellupworld.com">info@wellupworld.com</a></li>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="auto-container">
                    <div class="bottom-inner clearfix">
                        <div class="copyright pull-left">
                            <p>&copy; 2022 <a href="#">Well-up Overseas</a>. All Rights Reserved.</p>
                        </div>
                        <div class="footer-nav pull-right clearfix">
                            <p>&reg; Design & Developed by <a href="http://ideacastit.com/" target="_blank">ideacast it</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- main-footer end -->


        <!-- scroll to top -->
        <button class="scroll-top scroll-to-target" data-target="html">
            <i class="flaticon-chevron"></i>
        </button>
    </div>
    @include('include.front.scripts')
    @yield('scripts')
</body>
</html>
