@extends('layouts.app')

{{-- @section('title', 'Accueil') --}}

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
        /* Améliorations des animations */
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

 <!-- Section Carrousel avec Animation -->
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

  <!-- Section À Propos avec Animation -->
<div class="container-fluid bg-light py-5 px-3">
    <div class="container">
        <div class="row align-items-center">
            
            <!-- Image Block -->
            <div class="col-lg-5 mb-4 mb-lg-0" data-aos="fade-right" data-aos-duration="800">
                <div class="d-flex justify-content-center">
                    <img src="{{ asset('img/castells-yellow.png') }}" alt="Castells Inc Logo"
                         class="img-fluid rounded" style="max-width: 100%; height: auto;">
                </div>
            </div>

            <!-- Text Content Block -->
            <div class="col-lg-7" data-aos="fade-left" data-aos-duration="800" data-aos-delay="200">
                <h6 class="text-primary text-uppercase font-weight-bold mb-2">À Propos de Castells Inc.</h6>
                <h2 class="mb-4 font-weight-bold">Constructeurs de Maisons de Luxe & Experts en Rénovation à Montréal</h2>

                <p class="mb-4">
                    Chez <strong>Castells Inc</strong>, nous transformons les maisons en demeures de rêve. Forts de nombreuses années d'expérience, nous nous spécialisons dans la construction de maisons de luxe sur mesure, conçues pour votre style de vie unique.
                </p>

                <!-- Services Icons -->
                <div class="row">
                    @php
                        $services = [
                            ['icon' => 'flaticon-house', 'label' => 'Rénovations Haut de Gamme'],
                            ['icon' => 'flaticon-stairs', 'label' => 'Savoir-Faire Intemporel'],
                            ['icon' => 'flaticon-office', 'label' => 'Processus Sans Stress'],
                            ['icon' => 'flaticon-living-room', 'label' => 'Entreprise Familiale à Montréal'],
                        ];
                    @endphp

                    @foreach($services as $index => $service)
                        <div class="col-sm-6 mb-4" data-aos="fade-up" data-aos-delay="{{ 300 + ($index * 100) }}">
                            <div class="d-flex align-items-center">
                                <i class="{{ $service['icon'] }} text-primary fa-2x mr-3"></i>
                                <h5 class="mb-0">{{ $service['label'] }}</h5>
                            </div>
                        </div>
                    @endforeach
                </div>

                <p class="mt-3 font-italic">Construisons ensemble quelque chose d'extraordinaire.</p>

                <div class="mt-4 small text-muted">
                    <p class="mb-1">
                        © 2025 Castells Inc — Constructeurs de Maisons de Luxe & Rénovations Haut de Gamme à Montréal.
                    </p>
                    <p class="mb-1">
                        Création d'espaces de vie exceptionnels avec un design intemporel et une qualité irréprochable.
                    </p>
                    <p class="mb-0">
                        📞 <a href="tel:4384081100" class="text-dark font-weight-bold">438-408-1100</a> |
                        📧 <a href="mailto:contact@castells-inc.ca" class="text-dark font-weight-bold">contact@castells-inc.ca</a> |
                        📍 Montréal, QC
                    </p>
                </div>
            </div>

        </div>
    </div>
</div>


    <!-- Section Services avec Animation -->
    <div class="container-fluid py-5 px-3">
        <div class="container py-2">
            <div class="row">
                <div class="col-lg-6 pr-lg-5" data-aos="fade-right" data-aos-duration="800">
                    <h6 class="text-primary font-weight-normal text-uppercase mb-3">Nos Services</h6>
                    <h1 class="mb-4 section-title">Solutions de Construction et Rénovation de Haute Qualité</h1>
                    <p>Nous proposons des solutions expertes en construction, rénovation et aménagement intérieur adaptées à vos besoins. Du concept à la réalisation, notre équipe garantit précision, qualité et satisfaction sur chaque projet.</p>
                    <a href="" class="btn btn-primary mt-3 py-2 px-4" data-aos="fade-up" data-aos-delay="300">Découvrir Plus</a>
                </div>
                <div class="col-lg-6 p-0 pt-5 pt-lg-0">
                    <div class="owl-carousel service-carousel position-relative">
                        <div class="d-flex flex-column text-center bg-light mx-3 p-4" data-aos="fade-up" data-aos-delay="200">
                            <h3 class="flaticon-bedroom display-3 font-weight-normal text-primary mb-3"></h3>
                            <h5 class="mb-3">Construction Résidentielle</h5>
                            <p class="m-0">Nous nous spécialisons dans la construction de belles maisons durables et écoénergétiques avec des matériaux et un savoir-faire de la plus haute qualité.</p>
                        </div>
                        <div class="d-flex flex-column text-center bg-light mx-3 p-4" data-aos="fade-up" data-aos-delay="400">
                            <h3 class="flaticon-kitchen display-3 font-weight-normal text-primary mb-3"></h3>
                            <h5 class="mb-3">Rénovation Intérieure</h5>
                            <p class="m-0">Transformez votre espace avec un design moderne et fonctionnel - des cuisines et salles de bains aux rénovations complètes.</p>
                        </div>
                        <div class="d-flex flex-column text-center bg-light mx-3 p-4" data-aos="fade-up" data-aos-delay="600">
                            <h3 class="flaticon-bathroom display-3 font-weight-normal text-primary mb-3"></h3>
                            <h5 class="mb-3">Projets Commerciaux</h5>
                            <p class="m-0">Nous offrons des solutions de construction fiables et efficaces pour les bureaux, espaces commerciaux et bâtiments industriels.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Section Avantages avec Animation -->
    <div class="container-fluid bg-light px-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 mt-5 py-5 pr-lg-5" data-aos="fade-right" data-aos-duration="800">
                    <h6 class="text-primary font-weight-normal text-uppercase mb-3">Pourquoi Nous Choisir ?</h6>
                    <h1 class="mb-4 section-title">Maisons de Luxe sur Mesure & Rénovations à Montréal</h1>
                    <p class="mb-4">Avec plus de 10 ans d'expérience, Castells Inc. propose des constructions résidentielles haut de gamme, un savoir-faire exceptionnel et un service personnalisé adapté à votre vision. Des maisons sur mesure aux rénovations haut de gamme, nous transformons les rêves en espaces de vie intemporels.</p>
                    <ul class="list-inline">
                        <li data-aos="fade-left" data-aos-delay="200"><h5><i class="far fa-check-square text-primary mr-3"></i>10+ Ans d'Expérience</h5></li>
                        <li data-aos="fade-left" data-aos-delay="300"><h5><i class="far fa-check-square text-primary mr-3"></i>Construction de Maisons de Luxe sur Mesure</h5></li>
                        <li data-aos="fade-left" data-aos-delay="400"><h5><i class="far fa-check-square text-primary mr-3"></i>Services de Rénovation Centrés sur le Client</h5></li>
                    </ul>
                    <a href="" class="btn btn-primary mt-3 py-2 px-4" data-aos="fade-up" data-aos-delay="500">Découvrir Plus</a>
                </div>
                <div class="col-lg-5" data-aos="fade-left" data-aos-duration="800" data-aos-delay="300">
                     <div class="d-flex flex-column align-items-center justify-content-center bg-primary  h-100 py-3 px-3">
                        {{-- <i class="flaticon-brickwall display-1 font-weight-normal text-secondary mb-3"></i> --}}
                        <img class="mb-2" src="{{asset('img/university.png')}}" style="opacity: 75%" alt="img">
                        <h4 class="display-3 mb-3">10+ Ans</h4>
                        <h1 class="m-0">Entreprise Familiale</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Section Nos Réalisations avec Animation -->
    <div data-aos="zoom-in" data-aos-duration="1000" class="px-3">
        @livewire('our-work', ['onlyFeatured' => true])
    </div>
    

     <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        // Initialisation de AOS
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true,
            mirror: false
        });
        
        // Ajout d'animations simples au défilement pour les éléments sans AOS
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
            
            // Vérification initiale
            handleScrollAnimation();
            
            // Écoute des événements de défilement
            window.addEventListener('scroll', handleScrollAnimation);
        });
    </script>
@endsection