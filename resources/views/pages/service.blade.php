@extends('layouts.app')

@section('title', 'Services')

@section('content')

    <!-- En-tête de Page Début -->
    <div class="container-fluid bg-secondary py-5">
        <div class="container py-5">
            <div class="row align-items-center py-4">
                <div class="col-md-6 text-center text-md-left">
                    <h1 class="mb-4 mb-md-0 text-primary text-uppercase">Nos Services</h1>
                </div>
                <div class="col-md-6 text-center text-md-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="btn btn-outline-primary" wire:navigate href="{{asset(route('home'))}}">Accueil</a>
                        <i class="fas fa-angle-double-right text-primary mx-2"></i>
                        <a class="btn btn-outline-primary disabled" href="">Services</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- En-tête de Page Fin -->

    <!-- Services Début -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6 pr-lg-5">
                    <h6 class="text-primary font-weight-normal text-uppercase mb-3">Services Signature</h6>
                    <h1 class="mb-4 section-title">Transformer les Espaces avec Élégance & Précision</h1>
                    <p>Chez Castells, nous créons des intérieurs qui allient sophistication intemporelle et vision contemporaine. Du concept à la réalisation, notre philosophie de design repose sur la personnalisation, la qualité et une expérience client immersive. Que ce soit pour votre résidence ou un espace commercial, chaque détail est traité avec soin et créativité.</p>
                    <a href="{{asset(route('project'))}}" class="btn btn-primary mt-3 py-2 px-4">Découvrez Nos Réalisations</a>
                </div>
                <div class="col-lg-6 p-0 pt-5 pt-lg-0">
                    <div class="owl-carousel service-carousel position-relative">
                        <div class="d-flex flex-column text-center bg-light mx-3 p-4">
                            <h3 class="flaticon-bedroom display-3 font-weight-normal text-primary mb-3"></h3>
                            <h5 class="mb-3">Concepts de Chambres Luxueuses</h5>
                            <p class="m-0">Nous concevons des sanctuaires personnalisés qui fusionnent confort et esthétique raffinée, adaptés à votre style de vie et vos goûts.</p>
                        </div>
                        <div class="d-flex flex-column text-center bg-light mx-3 p-4">
                            <h3 class="flaticon-kitchen display-3 font-weight-normal text-primary mb-3"></h3>
                            <h5 class="mb-3">Cuisines Sur Mesure</h5>
                            <p class="m-0">Fonctionnelles, élégantes et parfaitement réalisées — nos cuisines sont conçues autour de vos habitudes culinaires et de votre vision créative.</p>
                        </div>
                        <div class="d-flex flex-column text-center bg-light mx-3 p-4">
                            <h3 class="flaticon-bathroom display-3 font-weight-normal text-primary mb-3"></h3>
                            <h5 class="mb-3">Salles de Bain Inspirées des Spas</h5>
                            <p class="m-0">Des espaces zen minimalistes aux retraites opulentes, nos salles de bain allient innovation, design et tranquillité.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services Fin -->

    <!-- Caractéristiques Début -->
    <div class="container-fluid bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 mt-5 py-5 pr-lg-5">
                    <h6 class="text-primary font-weight-normal text-uppercase mb-3">Pourquoi Castells ?</h6>
                    <h1 class="mb-4 section-title">Expérience, Excellence et Design Élevé</h1>
                    <p class="mb-4">Depuis plus de deux décennies, Castells redéfinit les espaces intérieurs en intégrant harmonieusement design moderne et savoir-faire artisanal. Notre engagement envers l'innovation, la durabilité et le détail garantit que chaque projet est un chef-d'œuvre taillé sur mesure pour la vision de nos clients.</p>
                    <ul class="list-inline">
                        <li><h5><i class="far fa-check-square text-primary mr-3"></i>10+ Ans d'Excellence en Design</h5></li>
                        <li><h5><i class="far fa-check-square text-primary mr-3"></i>Intérieurs Haut de Gamme Personnalisés</h5></li>
                        <li><h5><i class="far fa-check-square text-primary mr-3"></i>Satisfaction Client Inégalée</h5></li>
                    </ul>
                    <a href="{{asset(route('contact'))}}" class="btn btn-primary mt-3 py-2 px-4">Contactez nous</a>
                </div>
                <div class="col-lg-5">
                    <div class="d-flex flex-column align-items-center justify-content-center h-100 overflow-hidden">
                        <img class="h-100" src="img/feature.jpg" alt="Caractéristique Intérieure Castells">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Caractéristiques Fin -->

      <!-- Section Régions Desservies avec Style Amélioré -->
<div class="container-fluid py-5 px-3 bg-white">
    <div class="container py-2">
        <div class="text-center mb-5" data-aos="fade-down" data-aos-duration="700">
            <h6 class="text-primary font-weight-normal text-uppercase mb-3">Zones d’intervention</h6>
            <h1 class="section-title">Régions Que Nous Desservons</h1>
            <p class="mt-3">Nous sommes fiers d'offrir nos services de rénovation dans les principales régions autour de Montréal, en assurant qualité et proximité.</p>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-3 mb-4" data-aos="zoom-in" data-aos-delay="100">
                <div class="bg-light text-center p-4 shadow-sm h-100 rounded">
                    <i class="fas fa-city fa-2x text-primary mb-3"></i>
                    <h5 class="mb-2">Montréal</h5>
                    <p class="mb-0">Service de rénovation résidentielle dans toute la région de Montréal.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4" data-aos="zoom-in" data-aos-delay="200">
                <div class="bg-light text-center p-4 shadow-sm h-100 rounded">
                    <i class="fas fa-home fa-2x text-primary mb-3"></i>
                    <h5 class="mb-2">Laval</h5>
                    <p class="mb-0">Expertise locale pour vos projets de rénovation à Laval.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4" data-aos="zoom-in" data-aos-delay="300">
                <div class="bg-light text-center p-4 shadow-sm h-100 rounded">
                    <i class="fas fa-mountain fa-2x text-primary mb-3"></i>
                    <h5 class="mb-2">Rive-Nord</h5>
                    <p class="mb-0">Services disponibles dans la région de la Rive-Nord de Montréal.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4" data-aos="zoom-in" data-aos-delay="400">
                <div class="bg-light text-center p-4 shadow-sm h-100 rounded">
                    <i class="fas fa-tree fa-2x text-primary mb-3"></i>
                    <h5 class="mb-2">Rive-Sud</h5>
                    <p class="mb-0">Rénovation résidentielle dans la Rive-Sud de Montréal.</p>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- Témoignages Début -->
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="d-flex flex-column align-items-center justify-content-center h-100 overflow-hidden">
                        <img class="h-100" src="img/testimonial.jpg" alt="Témoignage Client">
                    </div>
                </div>
                <div class="col-md-7 py-5 pl-md-5">
                    <h6 class="text-primary font-weight-normal text-uppercase mb-3 pt-5">Voix de Clients</h6>
                    <h1 class="mb-4 section-title">Ce Que Disent Nos Clients</h1>
                    <div class="owl-carousel testimonial-carousel position-relative pb-5 mb-md-5">
                        <div class="d-flex flex-column">
                            <div class="d-flex align-items-center mb-3">
                                <img class="img-fluid rounded-circle" src="img/testimonial-1.jpg" style="width: 60px; height: 60px;" alt="Client 1">
                                <div class="ml-3">
                                    <h5>Amira L.</h5>
                                    <i>Propriétaire</i>
                                </div>
                            </div>
                            <p>"Castells a transformé mon appartement en un espace de rêve. L'attention portée aux détails et l'exécution sans faille ont dépassé toutes mes attentes."</p>
                        </div>
                        <div class="d-flex flex-column">
                            <div class="d-flex align-items-center mb-3">
                                <img class="img-fluid rounded-circle" src="img/testimonial-2.jpg" style="width: 60px; height: 60px;" alt="Client 2">
                                <div class="ml-3">
                                    <h5>Karim B.</h5>
                                    <i>Architecte & Promoteur</i>
                                </div>
                            </div>
                            <p class="m-0">"Travailler avec Castells est toujours un plaisir. Leur vision, professionnalisme et fiabilité en font mon partenaire en design d'intérieur privilégié."</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Témoignages Fin -->
@endsection