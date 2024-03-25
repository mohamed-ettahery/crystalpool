<!DOCTYPE html>
<html class="no-js" lang="fr">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>@yield('title', 'Crystalpool')</title>
    <meta name="author" content="crystalpool" />
    @yield('meta')
    <meta name="keywords" content="" />
    <meta name="robots" content="INDEX,FOLLOW" />
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no" />
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('assets/img/favicons/apple-icon-57x57.png') }}" />
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('assets/img/favicons/apple-icon-60x60.png') }}" />
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/img/favicons/apple-icon-72x72.png') }}" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/favicons/apple-icon-76x76.png') }}" />
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/img/favicons/apple-icon-114x114.png') }}" />
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('assets/img/favicons/apple-icon-120x120.png') }}" />
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('assets/img/favicons/apple-icon-144x144.png') }}" />
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('assets/img/favicons/apple-icon-152x152.png') }}" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/favicons/apple-icon-180x180.png') }}" />
    <link rel="icon" type="image/png" sizes="192x192"
        href="{{ asset('assets/img/favicons/android-icon-192x192.png') }}" />
    <link rel="icon" type="image/png" sizes="144x144"
        href="{{ asset('assets/img/favicons/android-icon-144x144.png') }}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/favicons/favicon-32x32.png') }}" />
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('assets/img/favicons/favicon-96x96.png') }}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/favicons/favicon-16x16.png') }}" />
    <link rel="manifest" href="{{ asset('assets/img/favicons/manifest.js') }}on')}}" />
    <meta name="msapplication-TileColor" content="#ffffff" />
    <meta name="msapplication-TileImage" content="{{ asset('assets/img/favicons/ms-icon-144x144.png') }}" />
    <meta name="theme-color" content="#ffffff" />
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,300;9..40,400;9..40,500;9..40,600;9..40,700;9..40,800;9..40,900&amp;family=Outfit:wght@300;400;500;600;700;900&amp;display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/slick.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
</head>

<body>
    <div class="preloader">
        <button class="th-btn preloaderCls">Cancel Preloader</button>
        <div class="preloader-inner"><span class="loader"></span></div>
    </div>
    <div class="th-menu-wrapper">
        <div class="th-menu-area">
            <div class="mobile-logo">
                <a href="#"><img src="{{ asset('assets/img/logo-white.svg') }}" alt="Crystalpool" /></a>
                <div class="close-menu">
                    <button class="th-menu-toggle"><i class="fal fa-times"></i></button>
                </div>
            </div>
            <div class="th-mobile-menu">
                <ul>
                    <li><a href="#">ACCUEIL</a></li>
                    <li><a href="#">À PROPOS DE NOUS</a></li>
                    <li><a href="#">PRODUITS</a></li>
                    <li><a href="#">SERVICES</a></li>
                    <li><a href="#">CONTACT</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="sidemenu-wrapper d-none d-lg-block">
        <div class="sidemenu-content bg-black2">
            <button class="closeButton sideMenuCls">
                <i class="far fa-times"></i>
            </button>
            <div class="widget footer-widget">
                <div class="th-widget-about">
                    <div class="about-logo">
                        <a href="#"><img src="{{ asset('assets/img/logo-white.svg') }}"
                                alt="Crystalpool" /></a>
                    </div>
                    <p class="about-text">
                        We provide specialized winterization services to safeguard your
                        pool during the off-season, and when spring arrives, we handle the
                        thorough opening process.
                    </p>
                    <div class="th-social footer-social">
                        <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                        <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.behance.net/"><i class="fa-brands fa-behance"></i></a>
                    </div>
                </div>
            </div>
            <div class="widget footer-widget">
                <h3 class="widget_title">Recent Posts</h3>
                <div class="recent-post-wrap">
                    <div class="recent-post">
                        <div class="media-img">
                            <a href="#"><img src="{{ asset('assets/img/blog/recent-post-2-1.jpg') }}"
                                    alt="Blog Image" /></a>
                        </div>
                        <div class="media-body">
                            <h4 class="post-title">
                                <a class="text-inherit" href="#">Installation of new Equipment</a>
                            </h4>
                            <div class="recent-post-meta">
                                <a href="#"><i class="fal fa-calendar-days"></i>25 Mars, 2024</a>
                            </div>
                        </div>
                    </div>
                    <div class="recent-post">
                        <div class="media-img">
                            <a href="#"><img src="{{ asset('assets/img/blog/recent-post-2-2.jpg') }}"
                                    alt="Blog Image" /></a>
                        </div>
                        <div class="media-body">
                            <h4 class="post-title">
                                <a class="text-inherit" href="#">Installation of new Equipment</a>
                            </h4>
                            <div class="recent-post-meta">
                                <a href="#"><i class="fal fa-calendar-days"></i>22 Oct, 2024</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="widget footer-widget">
                <h4 class="widget_title">Newsletter</h4>
                <div class="newsletter-widget">
                    <p class="md-10">
                        Sign Up to get updates & news about us . Get Latest Deals from
                        Walker's Inbox to our mail address.
                    </p>
                    <div class="footer-search-contact mt-25">
                        <form>
                            <input class="form-control" type="email" placeholder="Enter your email" />
                        </form>
                        <div class="footer-btn mt-10">
                            <button type="submit" class="th-btn style4 fw-btn">
                                Subscribe Now
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="popup-search-box d-none d-lg-block">
        <button class="searchClose"><i class="fal fa-times"></i></button>
        <form action="#">
            <input type="text" placeholder="What are you looking for?" />
            <button type="submit"><i class="fal fa-search"></i></button>
        </form>
    </div>
    <header class="th-header header-layout5">
        <div class="header-top">
            <div class="container th-container">
                <div class="row justify-content-center justify-content-md-between align-items-center gy-2">
                    <div class="col-auto">
                        <p class="header-notice">
                            Welcome to Our
                            <span class="text-th-border-color">Crystalpool</span> Pool Cleaning &
                            Services Company
                        </p>
                    </div>
                    <div class="col-auto">
                        <div class="header-links">
                            <ul>
                                <li class="d-none d-lg-inline-block">
                                    <div class="langauge">
                                        <select class="form-select nice-select">
                                            <option selected="">Francais</option>
                                            <option>English</option>
                                        </select>
                                    </div>
                                </li>
                                <li>
                                    <div class="header-social">
                                        <span class="social-title">Follow Us On:</span>
                                        <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                        <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                                        <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                        <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                                        <a href="https://www.behance.net/"><i class="fa-brands fa-behance"></i></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sticky-wrapper">
            <div class="menu-area">
                <div class="container th-container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-auto">
                            <div class="header-logo">
                                <a href="#"><img src="{{ asset('assets/img/logo.svg') }}"
                                        alt="Crystalpool" /></a>
                            </div>
                        </div>
                        <div class="col-auto">
                            <nav class="main-menu d-none d-lg-inline-block">
                                <ul>
                                    <li><a href="#">ACCUEIL</a></li>
                                    <li><a href="#">À PROPOS DE NOUS</a></li>
                                    <li><a href="#">PRODUITS</a></li>
                                    <li><a href="#">SERVICES</a></li>
                                    <li><a href="#">CONTACT</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="col-auto ml-20">
                            <div class="header-button">
                                <div class="info-card">
                                    <div class="info-card_icon">
                                        <i class="fal fa-phone"></i>
                                    </div>
                                    <div class="info-card_content">
                                        <p class="info-card_text">Phone Number:</p>
                                        <a href="tel:+46825476243" class="info-card_link">(+468) 254 76243</a>
                                    </div>
                                </div>
                                <a href="#" class="th-btn">Request a quote</a>
                                <a href="#" class="icon-btn sideMenuToggler d-none d-lg-block"><i
                                        class="fa-regular fa-bars-staggered"></i></a>
                                <button class="icon-btn th-menu-toggle d-inline-block d-lg-none">
                                    <i class="far fa-bars"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="th-hero-wrapper hero-1">
        <div class="hero-slider-1 th-carousel" id="heroSlide1" data-slide-show="1" data-md-slide-show="1"
            data-fade="true">
            <div class="th-hero-slide">
                <div class="th-hero-bg" data-bg-src="{{ asset('assets/img/hero/hero_bg_1_1.jpg') }}">
                    <img src="{{ asset('assets/img/hero/hero_overlay_1_1.png') }}" alt="Hero Image" />
                    <div class="hero-animated-bubble">
                        <div class="bubbles">
                            <img src="{{ asset('assets/img/shape/bubble_1.png') }}" alt="" />
                        </div>
                        <div class="bubbles">
                            <img src="{{ asset('assets/img/shape/bubble_2.png') }}" alt="" />
                        </div>
                        <div class="bubbles">
                            <img src="{{ asset('assets/img/shape/bubble_3.png') }}" alt="" />
                        </div>
                        <div class="bubbles">
                            <img src="{{ asset('assets/img/shape/bubble_4.png') }}" alt="" />
                        </div>
                        <div class="bubbles">
                            <img src="{{ asset('assets/img/shape/bubble_5.png') }}" alt="" />
                        </div>
                        <div class="bubbles">
                            <img src="{{ asset('assets/img/shape/bubble_6.png') }}" alt="" />
                        </div>
                        <div class="bubbles">
                            <img src="{{ asset('assets/img/shape/bubble_7.png') }}" alt="" />
                        </div>
                        <div class="bubbles">
                            <img src="{{ asset('assets/img/shape/bubble_8.png') }}" alt="" />
                        </div>
                        <div class="bubbles">
                            <img src="{{ asset('assets/img/shape/bubble_9.png') }}" alt="" />
                        </div>
                        <div class="bubbles">
                            <img src="{{ asset('assets/img/shape/bubble_10.png') }}" alt="" />
                        </div>
                        <div class="bubbles">
                            <img src="{{ asset('assets/img/shape/bubble_11.png') }}" alt="" />
                        </div>
                        <div class="bubbles">
                            <img src="{{ asset('assets/img/shape/bubble_12.png') }}" alt="" />
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="hero-style1">
                        <span class="hero-subtitle" data-ani="slideindown" data-ani-delay="0.7s">Refresh, Relax,
                            Rejuvenate</span>
                        <h1 class="hero-title" data-ani="slideindown" data-ani-delay="0.4s">
                            Pool Perfection Starts Here
                        </h1>
                        <p class="hero-text" data-ani="slideinup" data-ani-delay="0.1s">
                            Certainly! Here are some suggestions for a banner title for a
                            swimming pool cleaning and services website
                        </p>
                        <div class="btn-group" data-ani="slideinup" data-ani-delay="0.5s">
                            <a href="#" class="th-btn style4">Discover More</a>
                            <a href="#" class="th-btn th-border">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="th-hero-slide">
                <div class="th-hero-bg" data-bg-src="{{ asset('assets/img/hero/hero_bg_1_2.jpg') }}">
                    <img src="{{ asset('assets/img/hero/hero_overlay_1_1.png') }}" alt="Hero Image" />
                    <div class="hero-animated-bubble">
                        <div class="bubbles">
                            <img src="{{ asset('assets/img/shape/bubble_1.png') }}" alt="" />
                        </div>
                        <div class="bubbles">
                            <img src="{{ asset('assets/img/shape/bubble_2.png') }}" alt="" />
                        </div>
                        <div class="bubbles">
                            <img src="{{ asset('assets/img/shape/bubble_3.png') }}" alt="" />
                        </div>
                        <div class="bubbles">
                            <img src="{{ asset('assets/img/shape/bubble_4.png') }}" alt="" />
                        </div>
                        <div class="bubbles">
                            <img src="{{ asset('assets/img/shape/bubble_5.png') }}" alt="" />
                        </div>
                        <div class="bubbles">
                            <img src="{{ asset('assets/img/shape/bubble_6.png') }}" alt="" />
                        </div>
                        <div class="bubbles">
                            <img src="{{ asset('assets/img/shape/bubble_7.png') }}" alt="" />
                        </div>
                        <div class="bubbles">
                            <img src="{{ asset('assets/img/shape/bubble_8.png') }}" alt="" />
                        </div>
                        <div class="bubbles">
                            <img src="{{ asset('assets/img/shape/bubble_9.png') }}" alt="" />
                        </div>
                        <div class="bubbles">
                            <img src="{{ asset('assets/img/shape/bubble_10.png') }}" alt="" />
                        </div>
                        <div class="bubbles">
                            <img src="{{ asset('assets/img/shape/bubble_11.png') }}" alt="" />
                        </div>
                        <div class="bubbles">
                            <img src="{{ asset('assets/img/shape/bubble_12.png') }}" alt="" />
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="hero-style1">
                        <span class="hero-subtitle" data-ani="slideindown" data-ani-delay="0.7s">Quality Service,
                            Clear Results</span>
                        <h1 class="hero-title" data-ani="slideindown" data-ani-delay="0.4s">
                            Blue Haven Pool Maintenance
                        </h1>
                        <p class="hero-text" data-ani="slideinup" data-ani-delay="0.1s">
                            Swimming Pool Cleaning" as the main name for your business, you
                            can consider adding a descriptive context
                        </p>
                        <div class="btn-group" data-ani="slideinup" data-ani-delay="0.5s">
                            <a href="#" class="th-btn style4">Discover More</a>
                            <a href="#" class="th-btn th-border">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="icon-box">
            <div data-slick-prev="#heroSlide1" class="slick-arrow default">
                <i class="fa-regular fa-arrow-right"></i>
            </div>
            <div data-slick-next="#heroSlide1" class="slick-arrow default">
                <i class="fa-regular fa-arrow-left"></i>
            </div>
        </div>
    </div>
    @yield('content')
    <div class="newsletter-area bg-theme">
        <div class="container">
            <div class="row gx-0 align-items-center">
                <div class="col-lg-6 col-xl-6">
                    <div class="newsletter-wrapper">
                        <h4 class="h4 newsletter-title text-white mb-0">
                            Sign Up to get updates & news about us.
                        </h4>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-6">
                    <div class="newsletter-form-wrapper">
                        <form class="newsletter-form">
                            <input class="form-control" type="email" placeholder="Enter your Email"
                                required="" />
                            <button type="submit" class="th-btn style3">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer-wrapper footer-layout1">
        <div class="widget-area">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-md-6 col-xl-4">
                        <div class="widget footer-widget">
                            <div class="th-widget-about">
                                <div class="about-logo">
                                    <a href="#"><img src="{{ asset('assets/img/logo-white.svg') }}"
                                            alt="Crystalpool" /></a>
                                </div>
                                <p class="about-text">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam tenetur doloribus
                                    quam minima
                                </p>
                                <div class="th-social footer-social">
                                    <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                    <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                                    <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                                    <a href="https://www.behance.net/"><i class="fa-brands fa-behance"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-2">
                        <div class="widget widget_nav_menu footer-widget">
                            <h3 class="widget_title">Quick link</h3>
                            <div class="menu-all-pages-container">
                                <ul class="menu">
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">gallery</a></li>
                                    <li><a href="#">Testimonials</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget widget_nav_menu footer-widget">
                            <h3 class="widget_title">Popular Services</h3>
                            <div class="menu-all-pages-container">
                                <ul class="menu">
                                    <li><a href="#">Maintenance</a></li>
                                    <li><a href="#">Cleaner</a></li>
                                    <li><a href="#">Equipment's</a></li>
                                    <li><a href="#">Pool Services</a></li>
                                    <li><a href="#">Drain & Clean</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="widget footer-widget">
                            <h3 class="widget_title">Contact Us</h3>
                            <div class="th-widget-about">
                                <p class="footer-info">
                                    <i class="fas fa-map-marker-alt"></i>445 S E St unit 12,
                                    Casablanca 95404, Maroc
                                </p>
                                <div class="footer-info">
                                    <i class="fa-solid fa-phone"></i>
                                    <p class="footer-info_text">
                                        <a href="tel:+21200000000" class="text-inherit">+(212)-0000-0000</a>
                                        <a href="tel:+21200000000" class="text-inherit">+(212)-0000-0000</a>
                                    </p>
                                </div>
                                <p class="footer-info">
                                    <i class="fas fa-envelope"></i><a class="text-inherit"
                                        href="mailto:help24/7@Crystalpool.com">help24/7@Crystalpool.com</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-wrap">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <p class="copyright-text text-white text-center">
                            Copyright © 2024
                            <a href="#">Crystalpool</a>. All
                            Rights Reserved.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-mockup" data-top="0%" data-left="0%">
            <img src="{{ asset('assets/img/shape/footer_shape_1.png') }}" alt="shape" />
        </div>
        <div class="shape-mockup d-none d-xl-block" data-bottom="12%" data-right="0%">
            <img src="{{ asset('assets/img/shape/footer_shape_2.png') }}" alt="shape" />
        </div>
    </footer>
    <div class="scroll-top">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                style="
              transition: stroke-dashoffset 10ms linear 0s;
              stroke-dasharray: 307.919, 307.919;
              stroke-dashoffset: 307.919;
            ">
            </path>
        </svg>
    </div>
    <script src="{{ asset('assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/odometer.js') }}"></script>
    <script src="{{ asset('assets/js/nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/js/circle-progress.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.ripples.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
