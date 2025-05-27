@extends('layouts.app')

@section('title', 'About')

@section('content')

<!-- Page Header Start -->
<div class="container-fluid bg-secondary py-5">
    <div class="container py-5">
        <div class="row align-items-center py-4">
            <div class="col-md-6 text-center text-md-left">
                <h1 class="mb-4 mb-md-0 text-primary text-uppercase">About Us</h1>
            </div>
            <div class="col-md-6 text-center text-md-right">
                <div class="d-inline-flex align-items-center">
                    <a class="btn btn-outline-primary" href="">Home</a>
                    <i class="fas fa-angle-double-right text-primary mx-2"></i>
                    <a class="btn btn-outline-primary disabled" href="">About Us</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- About Start -->
<div class="container-fluid bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="d-flex flex-column align-items-center justify-content-center bg-primary h-100 py-5 px-3">
                    <i class="flaticon-brickwall display-1 font-weight-normal text-secondary mb-3"></i>
                    <h4 class="display-3 mb-3">25+</h4>
                    <h1 class="m-0">Years Experience</h1>
                </div>
            </div>
            <div class="col-lg-7 m-0 my-lg-5 pt-5 pb-5 pb-lg-2 pl-lg-5">
                <h6 class="text-primary font-weight-normal text-uppercase mb-3">About Castells Inc.</h6>
                <h1 class="mb-4 section-title">Montreal’s Trusted Luxury Home Builders & Renovation Experts</h1>
                <p>At Castells Inc., we transform houses into dream homes. With decades of experience, we specialize in custom-built luxury homes designed to fit your unique lifestyle. Whether you're renovating a kitchen or building from the ground up, we bring timeless craftsmanship and unmatched dedication to every detail.</p>
                <div class="row py-2">
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center mb-4">
                            <h1 class="flaticon-house font-weight-normal text-primary m-0 mr-3"></h1>
                            <h5 class="text-truncate m-0">Custom-Built Homes</h5>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center mb-4">
                            <h1 class="flaticon-stairs font-weight-normal text-primary m-0 mr-3"></h1>
                            <h5 class="text-truncate m-0">High-End Renovations</h5>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center mb-4">
                            <h1 class="flaticon-office font-weight-normal text-primary m-0 mr-3"></h1>
                            <h5 class="text-truncate m-0">Timeless Craftsmanship</h5>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center mb-4">
                            <h1 class="flaticon-living-room font-weight-normal text-primary m-0 mr-3"></h1>
                            <h5 class="text-truncate m-0">Stress-Free Process</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Features Start -->
<div class="container-fluid bg-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 mt-5 py-5 pr-lg-5">
                <h6 class="text-primary font-weight-normal text-uppercase mb-3">Why Choose Us?</h6>
                <h1 class="mb-4 section-title">25+ Years of Luxury Building & Renovation Experience</h1>
                <p class="mb-4">Castells Inc. is a family-owned and operated company in Montreal committed to quality, transparency, and excellence. From design to final finishes, we handle every step with precision and care. Let us help you build something extraordinary.</p>
                <ul class="list-inline">
                    <li><h5><i class="far fa-check-square text-primary mr-3"></i>25+ Years Experience</h5></li>
                    <li><h5><i class="far fa-check-square text-primary mr-3"></i>Custom Luxury Builds</h5></li>
                    <li><h5><i class="far fa-check-square text-primary mr-3"></i>End-to-End Project Management</h5></li>
                </ul>
                <a href="" class="btn btn-primary mt-3 py-2 px-4">View More</a>
            </div>
            <div class="col-lg-5">
                <div class="d-flex flex-column align-items-center justify-content-center h-100 overflow-hidden">
                    <img class="h-100" src="img/feature.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Features End -->

<!-- Team Start -->
<div class="container-fluid bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="py-5 px-4 h-100 bg-primary d-flex flex-column align-items-center justify-content-center">
                    <h6 class="text-white font-weight-normal text-uppercase mb-3">Our Team</h6>
                    <h1 class="mb-0 text-center">Meet Our Team Members</h1>
                </div>
            </div>
            <div class="col-md-8 col-sm-6 p-0 py-sm-5">
                <div class="row py-sm-5 px-3">
                    <!-- Team Member 1 -->
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="team d-flex flex-column text-center h-100">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="{{asset('img/taylor.jpg')}}" alt="">
                                <div class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
                                    <a class="btn btn-outline-primary text-center mr-2 px-0" style="width: 38px; height: 38px;" href="https://www.facebook.com/taylor.martin.castells.TMC" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-outline-primary text-center px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="d-flex flex-column bg-secondary text-center py-3">
                                <h5 class="text-white">Taylor</h5>
                                <p class="m-0 p-2">Founder & Principal, Castells Inc.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Add more team members as needed -->

                     <div class="col-md-6 col-lg-4 mb-4">
                        <div class="team d-flex flex-column text-center h-100">
                            <div class="position-relative">
                                <img class="img-fluid w-100" src="{{asset('img/moez.jpg')}}" alt="">
                                <div class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
                                    <a class="btn btn-outline-primary text-center mr-2 px-0" style="width: 38px; height: 38px;" href="https://www.facebook.com/mohamed.challouf.37819" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-outline-primary text-center px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="d-flex flex-column bg-secondary text-center py-3">
                                <h5 class="text-white">Moez</h5>
                                <p class="m-0 p-2">Head of IT, Website & Social Media</p>
                            </div>
                        </div>
                    </div>
                    <!-- Add more team members as needed -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->

@endsection
