<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Orange Health Pharmaceuticals - Innovating Healthcare, Enhancing Lives. Discover our high-quality and affordable medicines, diagnostics, and healthcare solutions.">
    <title>Orange Health Pharmaceuticals</title>

    <!--=====FAB ICON=======-->
    <link rel="shortcut icon" href="{{ asset('assets/img/logo/title1.svg') }}" type="image/x-icon">

    <!--=====CSS=======-->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick-slider.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/mobile-menu.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/utility.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">

    <!--=====JQUERY=======-->
    <script src="{{ asset('assets/js/jquery-3-7-1.min.js') }}"></script>
  {{--  <style>
        @media (max-width: 768px) {
            .about2 .row {
                flex-direction: column;
                align-items: center;
            }

            .about2 .col-12 {
                text-align: center;
            }

            .about2-images .image {
                max-width: 90%;
                margin-bottom: 20px;
            }

            .heading2 {
                padding: 0 15px;
            }

            .about-check-list {
                text-align: left;
                padding-left: 0;
            }
        }

    </style>
--}}
</head>
<body class="body">
<div class="paginacontainer">

    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
        </svg>
    </div>

</div>

<!--=====progress END=======-->


<!--=====HEADER START=======-->
<header>
    <div class="header-area header-area2 header-area-all d-none d-lg-block" id="header" style="margin-top: 20px;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="header-elements">
                        <div class="site-logo">
                            <a href="{{ route('welcome') }}">
                                <img style="width:300px; height: 80px;" src="{{ asset('assets/img/logo/Logo-130x53.13-40.png') }}" alt="Orange Health Logo">
                            </a>
                        </div>

                        <div class="main-menu-ex main-menu-ex1">
                            <ul id="list-example">
                                <li><a class="list-group-item list-group-item-action" href="{{url('/')}}">About Us</a></li>
                                <li><a class="list-group-item list-group-item-action" href="{{url('/')}}">Our Services</a></li>
                                <li><a class="list-group-item list-group-item-action" href="{{route('products')}}">Products</a></li>
                                <li><a class="list-group-item list-group-item-action" href="{{url('/')}}">Contact Us</a></li>
                            </ul>
                        </div>

                        <div class="header1-buttons">
                            <a href="#contact" class="theme-btn4 btn_theme_active4 wow fadeInDown" data-wow-duration="0.8s">Get Expert Advice Today<span></span></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</header>


<!--=====HEADER END=======-->

<!--=====Mobile header start=======-->
<div class="mobile-header mobile-header-main d-block d-lg-none">
    <div class="container-fluid">
        <div class="col-12">
            <div class="mobile-header-elements">
                <div class="mobile-logo">
                    <a href="#home"><img src="{{ asset('assets/img/logo/Orange Health-17.png') }}" alt="Orange Health Logo"></a>
                </div>
                <div class="mobile-nav-icon">
                    <i class="fa-duotone fa-bars-staggered"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="mobile-sidebar d-block d-lg-none">
    <div class="logo-m">
        <a href="#home"><img src="{{ asset('assets/img/logo/Orange Health-17.png') }}" alt="Orange Health Logo"></a>
    </div>
    <div class="menu-close">
        <i class="fa-solid fa-xmark"></i>
    </div>
    <div class="mobile-nav">

        <ul>
            <li><a href="{{url('/')}}">About Us</a></li>
            <li><a href="{{url('/')}}">Our Services</a></li>
            <li><a href="{{route('products')}}">Products</a></li>
            <li><a href="{{url('/')}}">Contact Us</a></li>
        </ul>
        <div class="mobile-button">
            <a class="theme-btn3" href="#contact">Get Expert Advise Today <i class="fa-solid fa-arrow-right"></i></a>
        </div>

        <div class="footer-contact-area1 md:pl-0 pl-20 sm:pl-0 mt-30">
            <h3 class="text-24 leading-26 font-semibold title1 pb-10">Get in touch</h3>
            <div class="contact-box d-flex">
                <div class="icon">
                    <img src="assets/img/icons/footer1-icon1.svg" alt="">
                </div>
                <div class="text">
                    <a href="mailto:info@orangehealth.co.zw">info@orangehealth.co.zw</a>
                </div>
            </div>

            <div class="contact-box d-flex">
                <div class="icon">
                    <img src="assets/img/icons/footer1-icon2.svg" alt="">
                </div>
                <div class="text">
                    <a href="#">26 Kenmark Crescent,
                        Bluffhill Industrial Park,<br> Harare, Zimbabwe</a>
                </div>
            </div>

            <div class="contact-box d-flex">
                <div class="icon">
                    <img src="assets/img/icons/footer1-icon3.svg" alt="">
                </div>
                <div class="text">
                    <a href="tel:+263 24 2331356">+263 24 2331356</a>
                </div>
            </div>

        </div>

        <div class="contact-infos">
            <h3>Our Location</h3>
            <ul class="social-icon">
                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
            </ul>
        </div>

    </div>
</div>

<!--=====Mobile header end=======-->

    <div style="margin-top: 80px; margin-bottom: -50px;" class="blog2 sp">
        <div class="container">
            <div class="row mt-30">
                <div class="col-lg-3 col-md-3 col-sm-12 col-12 mb-4">
                    <div class="blog-page-box">
                        <div class="image image-anime overflow-hidden _relative">
                            <img style="width: 100%; height: 450px; object-fit: cover;" src="{{asset('assets/img/products/florepressure.jpg')}}" alt="">
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-12 col-12 mb-4">
                    <div class="blog-page-box">
                        <div class="image image-anime overflow-hidden _relative">
                            <img style="width: 100%; height: 450px; object-fit: cover;" src="{{asset('assets/img/products/forepen.jpg')}}" alt="">
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-12 col-12 mb-4">
                    <div class="blog-page-box">
                        <div class="image image-anime overflow-hidden _relative">
                            <img style="width: 100%; height: 450px; object-fit: cover;" src="{{asset('assets/img/products/waterpurificationsystem.jpg')}}" alt="">
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-12 col-12 mb-4">
                    <div class="blog-page-box">
                        <div class="image image-anime overflow-hidden _relative">
                            <img style="width: 100%; height: 450px; object-fit: cover;" src="{{asset('assets/img/products/waterpurificationtablets.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>

<div class="footer2 mt-80" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="logo-area">
                    <a href="#home">
                        <img src="{{ asset('assets/img/logo/Logo-130x53.13-40.png') }}" alt="Orange Health Logo">
                    </a>
                    <p class="mt-16 text-16 font-normal pera1 leading-26">At Orange Health, we are dedicated to providing advanced pharmaceutical services that meet the highest standards of quality and precision.</p>
                    <ul class="footer-social-area2 mt-20">
                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="footer-contact-area2 md:pl-0 pl-20 sm:pl-0 sm:mt-30 md:mt-30">
                    <h3 style="color: #133f68;" class="text-24 leading-26 font-semibold title1 pb-10">Get in touch</h3>
                    <div class="contact-box d-flex">
                        <div class="icon">
                            <img src="{{ asset('assets/img/icons/footer1-icon1.svg') }}" alt="">
                        </div>
                        <div class="text">
                            <a href="mailto:info@orangehealth.co.zw">info@orangehealth.co.zw</a>
                        </div>
                    </div>

                    <div class="contact-box d-flex">
                        <div class="icon">
                            <img src="{{ asset('assets/img/icons/footer1-icon2.svg') }}" alt="">
                        </div>
                        <div class="text">
                            <a href="#">26 Kenmark Crescent,<br> Bluffhill Industrial Park, Harare, Zimbabwe</a>
                        </div>
                    </div>

                    <div class="contact-box d-flex">
                        <div class="icon">
                            <img src="{{ asset('assets/img/icons/footer1-icon3.svg') }}" alt="">
                        </div>
                        <div class="text">
                            <a href="tel:+263242331356">+263 24 2331356</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="footer1-form-area sm:mt-30 md:mt-30">
                    <h3 style="color: #133f68;" class="text-24 leading-26 font-semibold title1 pb-20">Contact Us</h3>
                    <form action="#" method="post" class="_relative mt-10">
                        <div class="form-group">
                            <input type="email" name="email" placeholder="Your Email" required class="form-control mb-10">
                        </div>
                        <div class="form-group">
                            <input type="text" name="subject" placeholder="Subject" required class="form-control mb-10">
                        </div>
                        <div class="form-group">
                            <textarea name="message" placeholder="Your Message" required class="form-control mb-10"></textarea>
                        </div>
                        <div class="button">
                            <button type="submit" class="theme-btn4 btn_theme_active4 wow fadeInDown" data-wow-duration="0.8s">Send Message<span></span></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="row align-items-center coppy-right1">
            <div class="col-lg-6">
                <p class="text-16 font-normal pera1 leading-26">©2024 Orange Health Pharmaceuticals. All rights reserved.</p>
            </div>
            <div class="col-lg-6">
                <div class="conditons-area1">
                    <a href="#" class="text-16 font-normal pera1 leading-26">Terms & Conditions</a>
                    <a href="#" class="text-16 font-normal pera1 leading-26 after-add"> Privacy Policy</a>
                </div>
            </div>
        </div>
    </div>
</div>



<!--=== js === -->
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/fontawesome.js') }}"></script>
<script src="{{ asset('assets/js/mobile-menu.js') }}"></script>
<script src="{{ asset('assets/js/jquery.magnific-popup.js') }}"></script>
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.countup.js') }}"></script>
<script src="{{ asset('assets/js/slick-slider.js') }}"></script>
<script src="{{ asset('assets/js/circle-progress.js') }}"></script>
<script src="{{ asset('assets/js/jquery.nice-select.js') }}"></script>
<script src="{{ asset('assets/js/gsap.min.js') }}"></script>
<script src="{{ asset('assets/js/ScrollTrigger.min.js') }}"></script>
<script src="{{ asset('assets/js/swiper-bundle.js') }}"></script>
<script src="{{ asset('assets/js/Splitetext.js') }}"></script>
<script src="{{ asset('assets/js/text-animation.js') }}"></script>
<script src="{{ asset('assets/js/aos.js') }}"></script>
<script src="{{ asset('assets/js/SmoothScroll.js') }}"></script>
<script src="{{ asset('assets/js/jaquery-ripples.js') }}"></script>
<script src="{{ asset('assets/js/jquery.lineProgressbar.js') }}"></script>
<script src="{{ asset('assets/js/animation.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>

</body>
</html>
</body>
</html>
