@extends('layouts.app')

@section('title', 'Services')

@section('content')


    
    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary py-5">
        <div class="container py-5">
            <div class="row align-items-center py-4">
                <div class="col-md-6 text-center text-md-left">
                    <h1 class="mb-4 mb-md-0 text-primary text-uppercase">Our Services</h1>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="btn btn-outline-primary" wire:navigate href="{{asset(route('home'))}}">Home</a>
                        <i class="fas fa-angle-double-right text-primary mx-2"></i>
                        <a class="btn btn-outline-primary disabled" href="">Services</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header Start -->

    <!-- Services Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6 pr-lg-5">
                    <h6 class="text-primary font-weight-normal text-uppercase mb-3">Signature Services</h6>
                    <h1 class="mb-4 section-title">Transforming Spaces with Elegance & Precision</h1>
                    <p>At Castells, we craft interiors that blend timeless sophistication with contemporary vision. From concept to completion, our design philosophy revolves around customization, quality, and an immersive client experience. Whether for your residence or commercial space, every detail is handled with care and creativity.</p>
                    <a href="" class="btn btn-primary mt-3 py-2 px-4">Explore Our Work</a>
                </div>
                <div class="col-lg-6 p-0 pt-5 pt-lg-0">
                    <div class="owl-carousel service-carousel position-relative">
                        <div class="d-flex flex-column text-center bg-light mx-3 p-4">
                            <h3 class="flaticon-bedroom display-3 font-weight-normal text-primary mb-3"></h3>
                            <h5 class="mb-3">Luxury Bedroom Concepts</h5>
                            <p class="m-0">We design personalized sanctuaries that fuse comfort with refined aesthetics, tailored to your lifestyle and tastes.</p>
                        </div>
                        <div class="d-flex flex-column text-center bg-light mx-3 p-4">
                            <h3 class="flaticon-kitchen display-3 font-weight-normal text-primary mb-3"></h3>
                            <h5 class="mb-3">Bespoke Kitchen Designs</h5>
                            <p class="m-0">Functional, elegant, and crafted to perfection — our kitchens are built around your culinary routines and creative vision.</p>
                        </div>
                        <div class="d-flex flex-column text-center bg-light mx-3 p-4">
                            <h3 class="flaticon-bathroom display-3 font-weight-normal text-primary mb-3"></h3>
                            <h5 class="mb-3">Spa-Inspired Bathrooms</h5>
                            <p class="m-0">From minimalist zen spaces to opulent retreats, our bathrooms bring together innovation, design, and tranquility.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->

    <!-- Features Start -->
    <div class="container-fluid bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 mt-5 py-5 pr-lg-5">
                    <h6 class="text-primary font-weight-normal text-uppercase mb-3">Why Castells?</h6>
                    <h1 class="mb-4 section-title">Experience, Excellence, and Elevated Design</h1>
                    <p class="mb-4">For over two decades, Castells has redefined interior spaces by seamlessly integrating modern design with artisan craftsmanship. Our dedication to innovation, sustainability, and detail ensures that every project is a masterpiece tailored to our client's vision.</p>
                    <ul class="list-inline">
                        <li><h5><i class="far fa-check-square text-primary mr-3"></i>25+ Years of Design Excellence</h5></li>
                        <li><h5><i class="far fa-check-square text-primary mr-3"></i>Tailored, High-End Interiors</h5></li>
                        <li><h5><i class="far fa-check-square text-primary mr-3"></i>Unparalleled Client Satisfaction</h5></li>
                    </ul>
                    <a href="" class="btn btn-primary mt-3 py-2 px-4">Get Inspired</a>
                </div>
                <div class="col-lg-5">
                    <div class="d-flex flex-column align-items-center justify-content-center h-100 overflow-hidden">
                        <img class="h-100" src="img/feature.jpg" alt="Castells Interior Feature">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->

    <!-- Testimonial Start -->
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="d-flex flex-column align-items-center justify-content-center h-100 overflow-hidden">
                        <img class="h-100" src="img/testimonial.jpg" alt="Client Testimonial">
                    </div>
                </div>
                <div class="col-md-7 py-5 pl-md-5">
                    <h6 class="text-primary font-weight-normal text-uppercase mb-3 pt-5">Client Voices</h6>
                    <h1 class="mb-4 section-title">What Our Clients Are Saying</h1>
                    <div class="owl-carousel testimonial-carousel position-relative pb-5 mb-md-5">
                        <div class="d-flex flex-column">
                            <div class="d-flex align-items-center mb-3">
                                <img class="img-fluid rounded-circle" src="img/testimonial-1.jpg" style="width: 60px; height: 60px;" alt="Client 1">
                                <div class="ml-3">
                                    <h5>Amira L.</h5>
                                    <i>Homeowner</i>
                                </div>
                            </div>
                            <p>"Castells turned my apartment into a dream space. The attention to detail and the seamless execution truly exceeded expectations."</p>
                        </div>
                        <div class="d-flex flex-column">
                            <div class="d-flex align-items-center mb-3">
                                <img class="img-fluid rounded-circle" src="img/testimonial-2.jpg" style="width: 60px; height: 60px;" alt="Client 2">
                                <div class="ml-3">
                                    <h5>Karim B.</h5>
                                    <i>Architect & Developer</i>
                                </div>
                            </div>
                            <p class="m-0">"Working with Castells is always a pleasure. Their vision, professionalism, and reliability make them my go-to interior partner."</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
@endsection
