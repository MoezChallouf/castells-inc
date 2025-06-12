@extends('layouts.app')

@section('title', 'Détail du Projet')

@section('content')

<!-- En-tête de Page Début -->
<div class="container-fluid bg-secondary py-5">
    <div class="container py-5">
        <div class="row align-items-center py-4">
            <div class="col-md-6 text-center text-md-left" data-aos="fade-right">
                <h1 class="mb-4 mb-md-0 text-primary text-uppercase">Détail du Projet</h1>
            </div>
            <div class="col-md-6 text-center text-md-right" data-aos="fade-left" data-aos-delay="200">
                <div class="d-inline-flex align-items-center">
                    <a class="btn btn-outline-primary" href="">Accueil</a>
                    <i class="fas fa-angle-double-right text-primary mx-2"></i>
                    <a class="btn btn-outline-primary disabled" href="">Détail du Projet</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- En-tête de Page Fin -->

<!-- Détail Début -->
<div class="container py-5">
    <div class="row pt-5">
        <div class="col-lg-8">
            <div class="d-flex flex-column text-left mb-4" data-aos="fade-up">
                <h6 class="text-primary font-weight-normal text-uppercase mb-3">Page de Détail</h6>
                <h1 class="mb-4 section-title">{{ $project->title }}</h1>
            </div>

            <!-- Section Avant/Après Début -->
            <div class="container-fluid py-2">
                <div class="container py-2">
                    <div class="row mx-1 portfolio-container">
                        <!-- Image Avant -->
                        <div class="col-lg-6 col-md-6 col-sm-12 p-0 portfolio-item" data-aos="fade-right">
                            <div class="position-relative overflow-hidden">
                                <div class="portfolio-img d-flex align-items-center justify-content-center">
                                    <img class="img-fluid" src="{{ Storage::url($project->before_image) }}" alt="Avant {{ $project->title }}">
                                </div>
                                <div class="portfolio-text bg-secondary d-flex flex-column align-items-center justify-content-center">
                                    <h5 class="text-white mb-2">Avant</h5>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <a class="btn btn-outline-primary m-1" href="{{ Storage::url($project->before_image) }}" data-lightbox="portfolio">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Image Après -->
                        <div class="col-lg-6 col-md-6 col-sm-12 p-0 portfolio-item" data-aos="fade-left" data-aos-delay="200">
                            <div class="position-relative overflow-hidden">
                                <div class="portfolio-img d-flex align-items-center justify-content-center">
                                    <img class="img-fluid" src="{{ Storage::url($project->after_image) }}" alt="Après {{ $project->title }}">
                                </div>
                                <div class="portfolio-text bg-secondary d-flex flex-column align-items-center justify-content-center">
                                    <h5 class="text-white mb-2">Après</h5>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <a class="btn btn-outline-primary m-1" href="{{ Storage::url($project->after_image) }}" data-lightbox="portfolio">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- Fin .portfolio-container -->
                    <p class="mt-2" data-aos="fade-up" data-aos-delay="300">{{ $project->description }}</p>
                </div>
            </div>
            <!-- Section Avant/Après Fin -->

            <!-- Galerie du Projet Début -->
            <div class="row mb-4">
                <div class="col text-center" data-aos="fade-down">
                    <h2 class="text-primary fw-bold">Galerie du Projet</h2>
                    <p class="text-muted mb-0">Découvrez toutes les photos liées à ce projet, mettant en lumière les détails et l'évolution des travaux.</p>
                </div>
            </div>

            <div class="container-fluid py-2">
                <div class="container py-2">
                    <div class="row mx-1 portfolio-container">
                        @foreach ($project->images as $index => $image)
                            <div class="col-lg-4 col-md-6 col-sm-12 p-0 portfolio-item"
                                 data-aos="zoom-in-up"
                                 data-aos-delay="{{ ($index % 3) * 100 }}">
                                <div class="position-relative overflow-hidden">
                                    <div class="portfolio-img d-flex align-items-center justify-content-center">
                                        <img class="img-fluid" src="{{ asset('storage/' . $image->image_path) }}" alt="">
                                    </div>
                                    <div class="portfolio-text bg-secondary d-flex flex-column align-items-center justify-content-center">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <a class="btn btn-outline-primary m-1" href="{{ asset('storage/' . $image->image_path) }}" data-lightbox="portfolio">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div> <!-- Fin .portfolio-container -->
                </div>
            </div>
            <!-- Galerie du Projet Fin -->
            
            <div class="w-100 clearfix"></div>
            
            <!-- Section Commentaires avec Animation -->
            <div data-aos="fade-up" data-aos-delay="200">
                @livewire('comments-section', ['project' => $project])
            </div>

        </div> <!-- Fin .col-lg-8 -->

        <div class="col-lg-4 mt-5 mt-lg-0">
            <!-- Catégories avec Animation -->
            <div class="mb-1" data-aos="fade-left" data-aos-delay="100">
                <h3 class="mb-4 section-title">Catégories</h3>
                <ul class="list-group">
                    @foreach($categories as $category)
                       <a href="{{asset(route('project'))}}">
                         <li class="list-group-item d-flex justify-content-between align-items-center"
                             data-aos="fade-left" data-aos-delay="{{ $loop->index * 100 }}">
                            {{ $category->name }}
                            <span class="badge badge-primary badge-pill">{{ $category->projects_count }}</span>
                        </li>
                       </a>
                    @endforeach
                </ul>
            </div>

            <!-- Image Principale avec Animation -->
            <div class="mb-5" data-aos="zoom-in" data-aos-delay="200">
                <img src="{{ $project->before_image_url }}" alt="" class="img-fluid">
            </div>

            <!-- Projets Récents avec Animation -->
            <div class="mb-5" data-aos="fade-left" data-aos-delay="300">
                <h3 class="mb-4 section-title">Projets Récents</h3>
                @foreach($recentProjects as $index => $recent)
                    <div class="d-flex align-items-center border-bottom mb-3 pb-3"
                         data-aos="fade-left" data-aos-delay="{{ 300 + ($index * 100) }}">
                        <img class="img-fluid" src="{{ Storage::url($recent->before_image) }}" style="width: 80px; height: 80px; object-fit: cover;" alt="{{ $recent->title }}">
                        <div class="d-flex flex-column pl-3">
                            <a class="text-dark mb-2" href="{{ route('projects.show', $recent) }}">
                                {{ Str::limit($recent->title, 40) }}
                            </a>
                            <div class="d-flex">
                                <small class="mr-3">
                                    <i class="fa fa-folder text-primary"></i> {{ $recent->category->name ?? 'Non classé' }}
                                </small>
                                <small class="mr-3">
                                    <i class="fa fa-comments text-primary"></i> {{ $recent->comments_count ?? 0 }}
                                </small>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Nuage de Tags avec Animation -->
            <div class="mb-5" data-aos="fade-left" data-aos-delay="400">
                <h3 class="mb-4 section-title">Mots-clés</h3>
                <div class="d-flex flex-wrap m-n1">
                    @foreach($project->tags as $index => $tag)
                        <a href="{{asset(route('project'))}}" 
                           class="btn btn-outline-primary m-1"
                           data-aos="fade-up" 
                           data-aos-delay="{{ $index * 50 }}">
                            {{ $tag->name }}
                        </a>
                    @endforeach
                </div>
            </div>
        </div> <!-- Fin .col-lg-4 -->

    </div> <!-- Fin .row -->
</div> <!-- Fin .container -->
<!-- Détail Fin -->

<!-- Initialisation AOS -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true,
            mirror: false
        });
        
        // Animation au scroll pour les images de la galerie
        const galleryItems = document.querySelectorAll('.portfolio-item');
        
        function checkGalleryItems() {
            galleryItems.forEach(item => {
                const position = item.getBoundingClientRect();
                if(position.top < window.innerHeight * 0.9) {
                    item.style.opacity = 1;
                    item.style.transform = 'translateY(0)';
                }
            });
        }
        
        // Vérification initiale
        checkGalleryItems();
        
        // Écouteur d'événement scroll
        window.addEventListener('scroll', checkGalleryItems);
    });
</script>

@endsection