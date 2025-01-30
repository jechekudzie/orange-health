@extends('layouts.website')

@section('content')
    <div class="hero2 _relative" style="background-image: url({{ asset('assets/img/bg/hero2-bg.jpg') }})">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="main-heading mt-70">
                        <h1 style="color: #133f68;" class="md:text-40 sm:text-40 text-60 font-semibold title1 text-anime-style-3">Innovating
                            Healthcare, Enhancing Lives</h1>
                        <p class="mt-24 text-16 pera1 leading-26 font-normal">Empowering global health with affordable,
                            high-quality solutions.</p>
                        <div class="buttons mt-20">
                            <a href="#services" class="theme-btn4 btn_theme_active4 wow fadeInDown"
                               data-wow-duration="0.8s">Explore Our Services<span></span></a>
                        </div>
                        <div class="buttons mt-20">
                            <a href="#contact" class="theme-btn4 btn_theme_active5 wow fadeInDown"
                               data-wow-duration="0.8s">Get Expert Advice Today<span></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="main-images">
                        <div class="image" data-aos="zoom-out" data-aos-duration="800">
                            <img src="{{ asset('assets/img/new/Hero-Section-564-x-626.jpg') }}" alt="Healthcare Image">
                        </div>
                        <div class="shape animate3">
                            <img src="{{ asset('assets/img/shnpes/hero2-shape4.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="absolute z-1 bottom-60 left-0">
            <img src="{{ asset('assets/img/shapes/hero2-shape1.png') }}" alt="" class="sec-shape1 animate2">
        </div>
        <div class="absolute z-1 top-90 left-0">
            <img src="{{ asset('assets/img/shapes/hero2-shape2.png') }}" alt="" class="sec-shape1 animate4">
        </div>
        <div class="absolute z-1 bottom-150 right-0">
            <img src="{{ asset('assets/img/shapes/hero2-shape3.png') }}" alt="" class="sec-shape1 animate3">
        </div>
    </div>

    <!--=====HERO AREA END=======-->

    <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-offset="0" class="scrollspy-example" tabindex="0">

        <!--=====ABOUT AREA START=======-->

        <div class="about2 sp" id="about">
            <div class="container">
                <div class="row">

                    <!-- Image Section -->
                    <div class="col-lg-6 col-12 order-1 order-lg-2">
                        <div class="about2-images _relative">
                            <div class="image mx-auto" data-aos="zoom-out" data-aos-duration="800">
                                <img src="{{ asset('assets/img/new/Orange-Health.png') }}" alt="About Us Image"
                                     class="img-fluid">
                            </div>
                        </div>
                    </div>

                    <!-- Text Section -->
                    <div class="col-lg-6 col-12 order-2 order-lg-1">
                        <div class="heading2">
                            <h2 style="color: #133f68;" class="text-44 sm:text-30 md:text-30 leading-56 font-semibold title1 text-anime-style-3">
                                About Us</h2>
                            <p style="text-align: justify;" class="mt-16 text-16 font-normal pera1 leading-26">
                                Founded in 2019, Orange Health is a global pharmaceutical leader dedicated to delivering
                                high-quality and affordable medicines to patients worldwide. With 70 passionate
                                employees across 18 offices in 4 countries, we are committed to advancing healthcare
                                through innovation and excellence.
                            </p>
                            <p style="text-align: justify;" class="mt-16 text-16 font-normal pera1 leading-26">
                                Our portfolio spans Manufacturing and Commercial Pharmaceuticals, featuring injectables,
                                prescription drugs, OTC medicines, and more. Operating with cutting-edge facilities
                                approved by FDA, TGA, and EDQM, we uphold the highest standards in pharmaceutical
                                production.
                            </p>
                            <div class="about2-features mt-30 flex items-start" data-aos="fade-left"
                                 data-aos-duration="1000">
                                <div class="smoll-image">
                                    <img src="{{ asset('assets/img/new/About-Us-200-x-120.jpg') }}" alt=""
                                         style="border-radius: 50%; width: 120px; height: 120px; object-fit: cover;">

                                </div>
                                <div class="about-check-list pl-20">
                                    <ul>
                                        <li style="color: #133f68;" class="title1 text-16 leading-16 font-semibold pb-16">
                                            <span style="color: white;background-color:#F47C22" class="check"><i class="fa-solid fa-check"></i></span> Health,
                                            Wellness and Insurance
                                        </li>
                                        <li style="color: #133f68;" class="title1 text-16 leading-16 font-semibold pb-16">
                                            <span style="color: white;background-color:#F47C22"  class="check"><i class="fa-solid fa-check"></i></span> 97% Customer
                                            Satisfaction
                                        </li>
                                        <li style="color: #133f68;" class="title1  leading-16 font-semibold">
                                            <span style="color: white;background-color:#F47C22"  class="check"><i class="fa-solid fa-check"></i></span> Family
                                            Scholarship Program
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="mt-30" data-aos="fade-left" data-aos-duration="1200">
                                <a href="research.html" class="theme-btn4 btn_theme_active4 wow fadeInDown"
                                   data-wow-duration="0.8s">Discover More<span></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Vision, Mission, and Values Section -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

        <div class="container mt-4">
            <div class="row">
                <!-- Vision Card -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card text-center border-0 shadow">
                        <div class="card-header text-white" style="background-color: #133f68;">
                            <i class="fas fa-eye fa-2x"></i>
                            <h5 class="mt-2">Vision</h5>
                        </div>
                        <div class="card-body d-flex align-items-center justify-content-center" style="height: 200px;">
                            <p class="card-text text-center">To deliver value to all our stakeholders by providing affordable, high-quality medicines globally.</p>
                        </div>
                    </div>
                </div>

                <!-- Mission Card -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card text-center border-0 shadow">
                        <div class="card-header text-white" style="background-color: #133f68;">
                            <i class="fas fa-bullseye fa-2x"></i>
                            <h5 class="mt-2">Mission</h5>
                        </div>
                        <div class="card-body d-flex align-items-center justify-content-center" style="height: 200px;">
                            <p class="card-text text-center">To improve the health and quality of life of patients through innovation and excellence.</p>
                        </div>
                    </div>
                </div>

                <!-- Values Card -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card text-center border-0 shadow">
                        <div class="card-header text-white" style="background-color: #133F68;">
                            <i class="fas fa-handshake fa-2x"></i>
                            <h5 class="mt-2">Values</h5>
                        </div>
                        <div class="card-body d-flex align-items-center justify-content-center" style="height: 200px;">
                            <p class="card-text text-center">Integrity, Innovation, Collaboration, and Excellence are the foundations of everything we do.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--=====ABOUT AREA END=======-->

        <!--=====SERVICE AREA START=======-->

        <div class="service2 sp" id="services"
             style="background-image: url({{ asset('assets/img/bg/hero2-bg.jpg') }});">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="heading2">
                            <h2 style="color:#133f68;" class="text-44 sm:text-30 md:text-30 leading-56 font-semibold title1 text-anime-style-3">
                                Our Services</h2>
                        </div>
                    </div>
                </div>
                <div class="row mt-60">
                    <div class="col-lg-12">
                        <div class="service2-slider" data-aos="fade-up" data-aos-duration="800">
                            <div class="service2-single-slider">
                                <div class="image">
                                    <img src="{{ asset('assets/img/new/Services--Diagnostics.jpg') }}"
                                         alt="Diagnostics">
                                </div>
                                <div style="background-color: #133f68;" class="heading-area">
                                    <h4 class="inline-block mb-10 text-18 leading-18 font-semibold text-white">
                                        Diagnostics</h4>
                                   {{-- <button type="button" class="btn_theme_active4" data-bs-toggle="modal"
                                            data-bs-target="#diagnosticsModal">
                                        Learn More
                                    </button>--}}
                                </div>
                            </div>
                            <div class="service2-single-slider">
                                <div class="image">
                                    <img src="{{ asset('assets/img/new/Services---Consultancy.jpg') }}"
                                         alt="Medical Consultation">
                                </div>
                                <div style="background-color: #133f68;" class="heading-area">
                                    <h4 class="inline-block mb-10 text-18 leading-18 font-semibold text-white">Medical
                                        Consultation</h4>
                                    {{--<button type="button" class="btn_theme_active4" data-bs-toggle="modal"
                                            data-bs-target="#medicalConsultationModal">
                                        Learn More
                                    </button>--}}
                                </div>
                            </div>
                            <div class="service2-single-slider">
                                <div class="image">
                                    <img src="{{ asset('assets/img/new/Services---Dossier-Information.jpg') }}"
                                         alt="Dossier Creation">
                                </div>
                                <div style="background-color: #133f68;" class="heading-area">
                                    <h4 class="inline-block mb-10 text-18 leading-18 font-semibold text-white">Dossier
                                        Creation</h4>
                                   {{-- <button type="button" class="btn_theme_active4" data-bs-toggle="modal"
                                            data-bs-target="#dossierCreationModal">
                                        Learn More
                                    </button>--}}
                                </div>
                            </div>
                            <div class="service2-single-slider">
                                <div class="image">
                                    <img src="{{ asset('assets/img/new/services---orthodox-medicines.jpg') }}"
                                         alt="Orthodox Medicines">
                                </div>
                                <div style="background-color: #133f68;" class="heading-area">
                                    <h4 class="inline-block mb-10 text-18 leading-18 font-semibold text-white">Orthodox
                                        Medicines</h4>
                                    {{--<button type="button" class="btn_theme_active4" data-bs-toggle="modal"
                                            data-bs-target="#orthodoxMedicinesModal">
                                        Learn More
                                    </button>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal for Diagnostics -->
        <div class="modal fade" id="diagnosticsModal" tabindex="-1" aria-labelledby="diagnosticsModalLabel"
             aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="diagnosticsModalLabel">Diagnostics</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Leveraging advanced imaging and laboratory technologies, we deliver precise and timely
                        diagnostic solutions to support accurate treatments and better health outcomes.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal for Medical Consultation -->
        <div class="modal fade" id="medicalConsultationModal" tabindex="-1"
             aria-labelledby="medicalConsultationModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="medicalConsultationModalLabel">Medical Consultation</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Our expert medical consultation services provide personalized care and guidance to help you
                        achieve optimal health outcomes.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal for Dossier Creation -->
        <div class="modal fade" id="dossierCreationModal" tabindex="-1" aria-labelledby="dossierCreationModalLabel"
             aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="dossierCreationModalLabel">Dossier Creation</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        We offer comprehensive dossier creation services to ensure compliance with regulatory standards
                        and facilitate market access.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal for Orthodox Medicines -->
        <div class="modal fade" id="orthodoxMedicinesModal" tabindex="-1" aria-labelledby="orthodoxMedicinesModalLabel"
             aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="orthodoxMedicinesModalLabel">Orthodox Medicines</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Our range of orthodox medicines is designed to meet the highest standards of quality and
                        efficacy, ensuring reliable treatment options.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <!--=====SERVICE AREA END=======-->

        <!--=====FACT AREA START=======-->

        <div class="facts sp" id="facts" style="background-color: #F6F8FA;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="heading2">
                           {{-- <span class="span1 mb-16 inline-block text-18 leading-18 title1 font-normal mb-16"
                                  data-aos="fade-left" data-aos-duration="700">
                                <img src="{{ asset('assets/img/icons/span1.svg') }}" alt=""> Why Choose Us?</span>--}}
                            <h2 style="color: #F47C22;" class="text-44 sm:text-30 md:text-30 leading-56 font-semibold title1 text-anime-style-3">
                                Why Choose Orange Health?</h2>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="text-end sm:text-start md:text-start sm:mt-20 md:mt-20" data-aos="fade-left"
                             data-aos-duration="800">
                            <a href="#contact" class="theme-btn4 btn_theme_active4 wow fadeInDown"
                               data-wow-duration="0.8s">Contact Us <span></span></a>
                        </div>
                    </div>
                </div>

                <div class="row mt-30">
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="700">
                        <div class="fact-box mt-30">
                            <div class="icon" style="text-align: center;">
                                <i class="fa-solid fa-hands-helping" style="color: #133f68; font-size: 30px;"></i>
                            </div>

                            <div class="heading2">
                                <h4 style="color: #133f68;" class="text-24 leading-24 font-semibold title1 inline-block mt-24">Trusted by Global
                                    Healthcare Providers</h4>
                                <p class="mt-10 text-16 font-normal pera1 leading-26">Our reputation for quality and
                                    reliability has made us a preferred partner for healthcare providers worldwide.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="900">
                        <div class="fact-box mt-30">
                            <div class="icon" style="text-align: center;">
                                <i class="fa-solid fa-flask" style="color: #133f68; font-size: 30px;"></i>
                            </div>
                            <div class="heading2">
                                <h4 style="color: #133f68;" class="text-24 leading-24 font-semibold title1 inline-block mt-24">State-of-the-Art
                                    Facilities</h4>
                                <p class="mt-10 text-16 font-normal pera1 leading-26">Equipped with cutting-edge
                                    technology and staffed by a dedicated team of experts, we ensure the highest
                                    standards in healthcare.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1100">
                        <div class="fact-box mt-30">
                            <div class="icon" style="text-align: center;">
                                <i class="fa-solid fa-heart" style="color: #133f68; font-size: 30px;"></i>
                            </div>
                            <div class="heading2">
                                <h4 style="color: #133f68;" class="text-24 leading-24 font-semibold title1 inline-block mt-24">Commitment to
                                    Ethical Practices</h4>
                                <p class="mt-10 text-16 font-normal pera1 leading-26">We are committed to ethical
                                    practices, innovation, and patient care, ensuring trust and integrity in all we
                                    do.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--=====FACT AREA END=======-->


        <!--=====CTA AREA START=======-->

        <div class="cta2 pt-60 pb-60" style="background-color: #133f68;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <h2 class="text-44 sm:text-30 md:text-30 leading-56 font-semibold white">Partner with Us for
                            Innovative Healthcare Solutions</h2>
                        <p class="mt-20 text-16 leading-26 white font-normal">At Orange Health, we are committed to
                            advancing healthcare through innovation and excellence. Join us in our mission to deliver
                            high-quality, affordable medicines and healthcare solutions worldwide.</p>
                       {{-- <div class="mt-30">
                            <a href="#contact" class="theme-btn6 btn_theme_active6 wow fadeInDown"
                               data-wow-duration="0.8s">Get in Touch<span></span></a>
                        </div>--}}
                    </div>
                    <div class="col-lg-5">
                        <div class="cta2-images">
                            <div class="image">
                                <img src="{{ asset('assets/img/new/Partner-with-us.jpg') }}" alt="Healthcare Solutions">
                            </div>
                            <div class="shape animate3">
                                <!--  <img src="{{ asset('assets/img/shapes/cta2-shape.png') }}" alt=""> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--=====CTA AREA END=======-->
@endsection
