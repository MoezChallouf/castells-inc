@extends('layouts.app')

@section('title', 'Home')

@section('content')
 <style>
  
        .container-fluid {
            padding: 0;
        }
        .carousel-item {
            height: 500px;
            position: relative;
        }
        .carousel-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .carousel-caption {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }
  
        .section-title {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
        }
        .service-carousel .d-flex {
            height: 300px;
        }
        .flaticon {
            font-size: 3rem;
            margin-bottom: 1rem;
        }
        /* Animation enhancements */
        .animated-element {
            opacity: 0;
            transform: translateY(20px);
            transition: all 0.8s ease-out;
        }
        .animated-element.visible {
            opacity: 1;
            transform: translateY(0);
        }
    </style>

@php
    $carousels = \App\Models\Carousel::orderBy('order')->get();
@endphp

 <!-- Carousel Section with Animation -->
    <div class="container-fluid p-0 ">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                @foreach ($carousels as $index => $carousel)
                    <div class="carousel-item {{ $index === 0 ? 'active' : '' }}" data-aos="zoom-in" data-aos-duration="1000">
                        <img class="w-100 h-100" src="{{ asset('storage/' . $carousel->image) }}" alt="Image" style="object-fit: cover;">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 800px;">
                                @if ($carousel->subtitle)
                                    <h4 class="text-primary text-uppercase font-weight-normal mb-md-3" data-aos="fade-right" data-aos-delay="300">
                                        {{ $carousel->subtitle }}
                                    </h4>
                                @endif
                                <h3 class="display-3 text-white mb-md-4" data-aos="fade-right" data-aos-delay="500">{{ $carousel->title }}</h3>
                                @if ($carousel->button_text && $carousel->button_link)
                                    <a href="{{ $carousel->button_link }}" class="btn btn-primary py-md-3 px-md-5 mt-2 mt-md-4" data-aos="fade-up" data-aos-delay="700">
                                        {{ $carousel->button_text }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <div class="btn btn-primary" style="width: 45px; height: 45px;">
                    <span class="carousel-control-prev-icon mb-n2"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <div class="btn btn-primary" style="width: 45px; height: 45px;">
                    <span class="carousel-control-next-icon mb-n2"></span>
                </div>
            </a>
        </div>
    </div>

    <!-- About Section with Animation -->
    <div class="container-fluid bg-light">
        <div class="container">
            
            <div class="row">
                <div class="col-lg-5" data-aos="fade-right" data-aos-duration="800">
                    <div class="d-flex flex-column align-items-center justify-content-center  h-100 py-3 px-3">
                        <img src="{{ asset('img/castells-1.png') }}" alt="" class="img-fluid" style="border-radius: 10px; max-width: 100%; height: auto; margin-top: -20px;">
                        {{-- <i class="flaticon-brickwall display-1 font-weight-normal text-secondary mb-3"></i> --}}
                        {{-- <h4 class="display-3 mb-3">25+ Years</h4>
                        <h1 class="m-0">Family Business</h1> --}}
                    </div>
                </div>
                <div class="col-lg-7 m-0 my-lg-5 pt-5 pb-5 pb-lg-2 pl-lg-5" data-aos="fade-left" data-aos-duration="800" data-aos-delay="200">
                    <h6 class="text-primary font-weight-normal text-uppercase mb-3">About Castells Inc.</h6>
                    <h1 class="mb-4 section-title">Montreal's Trusted Luxury Home Builders & Renovation Experts</h1>
                    <p>At Castells Inc, we transform houses into dream homes. With years of experience, we specialize in custom-built luxury homes designed for your unique lifestyle.</p>
                    <div class="row py-2">
                        <div class="col-sm-6" data-aos="fade-up" data-aos-delay="300">
                            <div class="d-flex align-items-center mb-4">
                                <h1 class="flaticon-house font-weight-normal text-primary m-0 mr-3"></h1>
                                <h5 class="text-truncate m-0">High-End Renovations</h5>
                            </div>
                        </div>
                        <div class="col-sm-6" data-aos="fade-up" data-aos-delay="400">
                            <div class="d-flex align-items-center mb-4">
                                <h1 class="flaticon-stairs font-weight-normal text-primary m-0 mr-3"></h1>
                                <h5 class="text-truncate m-0">Timeless Craftsmanship</h5>
                            </div>
                        </div>
                        <div class="col-sm-6" data-aos="fade-up" data-aos-delay="500">
                            <div class="d-flex align-items-center mb-4">
                                <h1 class="flaticon-office font-weight-normal text-primary m-0 mr-3"></h1>
                                <h5 class="text-truncate m-0">Stress-Free Process</h5>
                            </div>
                        </div>
                        <div class="col-sm-6" data-aos="fade-up" data-aos-delay="600">
                            <div class="d-flex align-items-center mb-4">
                                <h1 class="flaticon-living-room font-weight-normal text-primary m-0 mr-3"></h1>
                                <h5 class="text-truncate m-0">Family-Owned in Montreal</h5>
                            </div>
                        </div>
                    </div>
                    <p class="mt-2">Let’s build something extraordinary together.</p>
                    <p class="mt-2 text-muted small">
                        © 2025. Castells Inc – Luxury Custom Home Builders & High-End Renovations in Montreal.<br>
                        Crafting exceptional living spaces with timeless design and uncompromising quality.<br>
                        <strong>438-408-1100</strong> | <a href="mailto:taylorcastells@gmail.com">taylorcastells@gmail.com</a> | Montreal, QC
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Services Section with Animation -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6 pr-lg-5" data-aos="fade-right" data-aos-duration="800">
                    <h6 class="text-primary font-weight-normal text-uppercase mb-3">Our Services</h6>
                    <h1 class="mb-4 section-title">High-Quality Construction & Renovation Solutions</h1>
                    <p>We provide expert construction, remodeling, and interior solutions tailored to your needs. From concept to completion, our team ensures precision, quality, and satisfaction on every project.</p>
                    <a href="" class="btn btn-primary mt-3 py-2 px-4" data-aos="fade-up" data-aos-delay="300">Discover More</a>
                </div>
                <div class="col-lg-6 p-0 pt-5 pt-lg-0">
                    <div class="owl-carousel service-carousel position-relative">
                        <div class="d-flex flex-column text-center bg-light mx-3 p-4" data-aos="fade-up" data-aos-delay="200">
                            <h3 class="flaticon-bedroom display-3 font-weight-normal text-primary mb-3"></h3>
                            <h5 class="mb-3">Residential Construction</h5>
                            <p class="m-0">We specialize in building beautiful, durable, and energy-efficient homes with the highest quality materials and craftsmanship.</p>
                        </div>
                        <div class="d-flex flex-column text-center bg-light mx-3 p-4" data-aos="fade-up" data-aos-delay="400">
                            <h3 class="flaticon-kitchen display-3 font-weight-normal text-primary mb-3"></h3>
                            <h5 class="mb-3">Interior Renovation</h5>
                            <p class="m-0">Transform your space with modern design and functionality—from kitchens and bathrooms to full home makeovers.</p>
                        </div>
                        <div class="d-flex flex-column text-center bg-light mx-3 p-4" data-aos="fade-up" data-aos-delay="600">
                            <h3 class="flaticon-bathroom display-3 font-weight-normal text-primary mb-3"></h3>
                            <h5 class="mb-3">Commercial Projects</h5>
                            <p class="m-0">Delivering reliable and efficient construction solutions for offices, retail spaces, and industrial buildings.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Features Section with Animation -->
    <div class="container-fluid bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 mt-5 py-5 pr-lg-5" data-aos="fade-right" data-aos-duration="800">
                    <h6 class="text-primary font-weight-normal text-uppercase mb-3">Why Choose Us?</h6>
                    <h1 class="mb-4 section-title">Luxury Custom Homes & Renovations in Montreal</h1>
                    <p class="mb-4">With over 25 years of experience, Castells Inc. delivers high-end residential construction, exceptional craftsmanship, and personalized service tailored to your vision. From custom homes to upscale renovations, we turn dreams into timeless living spaces.</p>
                    <ul class="list-inline">
                        <li data-aos="fade-left" data-aos-delay="200"><h5><i class="far fa-check-square text-primary mr-3"></i>25+ Years of Expertise</h5></li>
                        <li data-aos="fade-left" data-aos-delay="300"><h5><i class="far fa-check-square text-primary mr-3"></i>Luxury Custom Home Building</h5></li>
                        <li data-aos="fade-left" data-aos-delay="400"><h5><i class="far fa-check-square text-primary mr-3"></i>Client-Focused Renovation Services</h5></li>
                    </ul>
                    <a href="" class="btn btn-primary mt-3 py-2 px-4" data-aos="fade-up" data-aos-delay="500">Discover More</a>
                </div>
                <div class="col-lg-5" data-aos="fade-left" data-aos-duration="800" data-aos-delay="300">
                     <div class="d-flex flex-column align-items-center justify-content-center bg-primary  h-100 py-3 px-3">
                        {{-- <img src="{{ asset('img/castells-1.png') }}" alt="" class="img-fluid" style="border-radius: 10px; max-width: 100%; height: auto; margin-top: -20px;"> --}}
                        <i class="flaticon-brickwall display-1 font-weight-normal text-secondary mb-3"></i>
                        <h4 class="display-3 mb-3">25+ Years</h4>
                        <h1 class="m-0">Family Business</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Our Work Section with Animation -->
    <div data-aos="zoom-in" data-aos-duration="1000">
        @livewire('our-work', ['onlyFeatured' => true])
    </div>
    

     <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        // Initialize AOS
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true,
            mirror: false
        });
        
        // Add simple scroll animations for elements without AOS
        document.addEventListener('DOMContentLoaded', function() {
            function isInViewport(element) {
                const rect = element.getBoundingClientRect();
                return (
                    rect.top <= (window.innerHeight || document.documentElement.clientHeight) &&
                    rect.bottom >= 0
                );
            }
            
            function handleScrollAnimation() {
                const elements = document.querySelectorAll('.animated-element');
                elements.forEach(el => {
                    if (isInViewport(el)) {
                        el.classList.add('visible');
                    }
                });
            }
            
            // Initial check
            handleScrollAnimation();
            
            // Listen for scroll events
            window.addEventListener('scroll', handleScrollAnimation);
        });
    </script>
@endsection
