{{--  {{ dd($menus) }}  --}}
<!-- main header -->
<header class="main-header header-style-one">
    <!-- header-top -->
    <div class="header-top">
        <div class="outer-container clearfix">
            <div class="left-column pull-left">
                <ul class="info clearfix">
                    <li><i class="flaticon-pin"></i>Saleh Villa ( 2nd Floor). House#14, Road No-01 O.R Nizam Road,
                        Chattogram, Bangladesh.</li>
                    <li><i class="flaticon-email"></i><a href="mailto:info@wellupworld.com">info@wellupworld.com</a></li>
                </ul>
            </div>
            <div class="right-column clearfix pull-right">
                <ul class="social-links clearfix pull-left">
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                </ul>
                <div class="btn-box pull-left">
                    <a href="{{ route('eligibility') }}">Appointment<i class="flaticon-arrow-pointing-to-right"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- header-lower -->
    <div class="" style="padding: 0px 40px;">
        <div class="outer-box clearfix">
            <div class="menu-area pull-left clearfix">
                <!--Mobile Navigation Toggler-->
                <div class="mobile-nav-toggler">
                    <i class="icon-bar"></i>
                    <i class="icon-bar"></i>
                    <i class="icon-bar"></i>
                </div>
                <nav class="main-menu navbar-expand-md navbar-light">
                    <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                        <ul class="navigation clearfix">
                            <li>
                                <div class="logo-box">
                                    <figure class="logo text-center mb-sm-3">
                                        <a href="{{ route('home') }}">
                                            <img src="{{ asset('assets/images/footer-logo.png') }}"
                                                alt="wellup overseas">
                                        </a>
                                    </figure>
                                </div>
                            </li>
                            <li class="current dropdown"><a href="{{ route('home') }}">Home</a></li>
                            @foreach ($menus as $item)
                                @if (count($item->submenus) >= 5)
                                    <li class="dropdown">
                                        <a
                                            href="@isset($item->route) {{ $item->route }} @endisset">{{ $item->name }}</a>
                                        <ul class="big-menu clearfix">
                                            @foreach ($item->submenus as $value)
                                                @isset($value->page)
                                                    @foreach ($pages as $pg)
                                                        @if ($pg->submenu_id == $value->id)
                                                            <li><a
                                                                    href="
                                            @if ($pg->submenu_id == $value->id) {{ route('loadPage', $value->name) }} @endif">{{ $value->name }}</a>
                                                            </li>
                                                        @else
                                                            @continue
                                                        @endif
                                                    @endforeach
                                                @endisset
                                            @endforeach
                                        </ul>
                                    </li>
                                @elseif (count($item->submenus) <= 4 && count($item->submenus) >= 1)
                                    <li class="dropdown">
                                        <a
                                            href="@isset($item->route) {{ $item->route }} @endisset">{{ $item->name }}</a>
                                        <ul>
                                            @foreach ($item->submenus as $value)
                                                @isset($value->page)
                                                    @foreach ($pages as $pg)
                                                        @if ($pg->submenu_id == $value->id)
                                                            <li><a
                                                                    href="
                                            @if ($pg->submenu_id == $value->id) {{ route('loadPage', $value->name) }} @endif">{{ $value->name }}</a>
                                                            </li>
                                                        @else
                                                            @continue
                                                        @endif
                                                    @endforeach
                                                @endisset
                                            @endforeach
                                        </ul>
                                    </li>
                                @elseif (count($item->submenus) <= 0)
                                    <li>
                                        <a href="{{ route($item->route) }}">{{ $item->name }}</a>
                                    </li>
                                @endif
                            @endforeach
                            <li><a href="{{ route('contact') }}">Contact</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="menu-right-content pull-right">
                <div class="support-box">
                    <div class="image">
                        <img src="{{ asset('assets/images/resource/support-1.jpg') }}" alt="wellup overseas">
                    </div>
                    <h6>Enquiries</h6>
                    <h5><a href="tel:+8801883403375">+880 1883 40 33 75</a></h5>
                </div>
            </div>
        </div>
    </div>

    <!--sticky Header-->
    <div class="sticky-header">
        <div class="outer-box clearfix">
            <div class="menu-area pull-left clearfix">
                <nav class="main-menu clearfix">
                    <!--Keep This Empty / Menu will come through Javascript-->
                </nav>
            </div>
            <div class="menu-right-content pull-right">
                <div class="support-box">
                    <div class="image"><img src="{{ asset('assets/images/resource/support-1.jpg') }}"
                            alt="wellup overseas"></div>
                    <h6>Enquiries</h6>
                    <h5><a href="tel:+8801883403375">+880 1883 40 33 75</a></h5>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- main-header end -->
<!-- Mobile Menu  -->
<div class="mobile-menu">
    <div class="menu-backdrop"></div>
    <div class="close-btn"><i class="fas fa-times"></i></div>
    <nav class="menu-box">
        <div class="menu-outer">
            <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
        </div>
        <div class="contact-info">
            <h4>Contact Info</h4>
            <ul>
                <li>Saleh Villa ( 2nd Floor). House#14, Road No-01 O.R Nizam Road, Chattogram, Bangladesh.</li>
                <li><a href="tel:+8801883403375">+880 1883 403375</a></li>
                <li><a href="mailto:info@wellupworld.com">info@wellupworld.com</a></li>
            </ul>
        </div>
        <div class="social-links">
            <ul class="clearfix">
                <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                <li><a href="#"><span class="fab fa-youtube"></span></a></li>
            </ul>
        </div>
    </nav>
</div>
<!-- End Mobile Menu -->
