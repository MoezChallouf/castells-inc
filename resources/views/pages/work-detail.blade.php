@extends('layouts.app')

@section('title', 'Work Detail')

@section('content')


<!-- Page Header Start -->
<div class="container-fluid bg-secondary py-5">
    <div class="container py-5">
        <div class="row align-items-center py-4">
            <div class="col-md-6 text-center text-md-left" data-aos="fade-right">
                <h1 class="mb-4 mb-md-0 text-primary text-uppercase">Work Detail</h1>
            </div>
            <div class="col-md-6 text-center text-md-right" data-aos="fade-left" data-aos-delay="200">
                <div class="d-inline-flex align-items-center">
                    <a class="btn btn-outline-primary" href="">Home</a>
                    <i class="fas fa-angle-double-right text-primary mx-2"></i>
                    <a class="btn btn-outline-primary disabled" href="">Work Detail</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- Detail Start -->
<div class="container py-5">
    <div class="row pt-5">
        <div class="col-lg-8">
            <div class="d-flex flex-column text-left mb-4" data-aos="fade-up">
                <h6 class="text-primary font-weight-normal text-uppercase mb-3">Work Detail Page</h6>
                <h1 class="mb-4 section-title">{{ $project->title }}</h1>
            </div>

            <!-- Before / After Section Start -->
            <div class="container-fluid py-2">
                <div class="container py-2">
                    <div class="row mx-1 portfolio-container">
                        <!-- Before Image -->
                        <div class="col-lg-6 col-md-6 col-sm-12 p-0 portfolio-item" data-aos="fade-right">
                            <div class="position-relative overflow-hidden">
                                <div class="portfolio-img d-flex align-items-center justify-content-center">
                                    <img class="img-fluid" src="{{ Storage::url($project->before_image) }}" alt="Before {{ $project->title }}">
                                </div>
                                <div class="portfolio-text bg-secondary d-flex flex-column align-items-center justify-content-center">
                                    <h5 class="text-white mb-2">Before</h5>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <a class="btn btn-outline-primary m-1" href="{{ Storage::url($project->before_image) }}" data-lightbox="portfolio">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- After Image -->
                        <div class="col-lg-6 col-md-6 col-sm-12 p-0 portfolio-item" data-aos="fade-left" data-aos-delay="200">
                            <div class="position-relative overflow-hidden">
                                <div class="portfolio-img d-flex align-items-center justify-content-center">
                                    <img class="img-fluid" src="{{ Storage::url($project->after_image) }}" alt="After {{ $project->title }}">
                                </div>
                                <div class="portfolio-text bg-secondary d-flex flex-column align-items-center justify-content-center">
                                    <h5 class="text-white mb-2">After</h5>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <a class="btn btn-outline-primary m-1" href="{{ Storage::url($project->after_image) }}" data-lightbox="portfolio">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- End .portfolio-container -->
                    <p class="mt-2" data-aos="fade-up" data-aos-delay="300">{{ $project->description }}</p>
                </div>
            </div>
            <!-- Before / After Section End -->

            <!-- Project Gallery Start -->
            <div class="row mb-4">
                <div class="col text-center" data-aos="fade-down">
                    <h2 class="text-primary fw-bold">Project Gallery</h2>
                    <p class="text-muted mb-0">Here are all the photos related to this project, showcasing the details and progress.</p>
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
                    </div> <!-- End .portfolio-container -->
                </div>
            </div>
            <!-- Project Gallery End -->
            
            <div class="w-100 clearfix"></div>
            
            <!-- Comments Section with Animation -->
            <div data-aos="fade-up" data-aos-delay="200">
                @livewire('comments-section', ['project' => $project])
            </div>

        </div> <!-- End .col-lg-8 -->

        <div class="col-lg-4 mt-5 mt-lg-0">
            <!-- Categories with Animation -->
            <div class="mb-1" data-aos="fade-left" data-aos-delay="100">
                <h3 class="mb-4 section-title">Categories</h3>
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

            <!-- Featured Image with Animation -->
            <div class="mb-5" data-aos="zoom-in" data-aos-delay="200">
                <img src="{{ $project->before_image_url }}" alt="" class="img-fluid">
            </div>

            <!-- Recent Projects with Animation -->
            <div class="mb-5" data-aos="fade-left" data-aos-delay="300">
                <h3 class="mb-4 section-title">Recent Projects</h3>
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
                                    <i class="fa fa-folder text-primary"></i> {{ $recent->category->name ?? 'Uncategorized' }}
                                </small>
                                <small class="mr-3">
                                    <i class="fa fa-comments text-primary"></i> {{ $recent->comments_count ?? 0 }}
                                </small>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Tag Cloud with Animation -->
            <div class="mb-5" data-aos="fade-left" data-aos-delay="400">
                <h3 class="mb-4 section-title">Tag Cloud</h3>
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
        </div> <!-- End .col-lg-4 -->

    </div> <!-- End .row -->
</div> <!-- End .container -->
<!-- Detail End -->

<!-- Initialize AOS -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true,
            mirror: false
        });
        
        // Add scroll animation for gallery images
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
        
        // Initial check
        checkGalleryItems();
        
        // Listen for scroll events
        window.addEventListener('scroll', checkGalleryItems);
    });
</script>

@endsection