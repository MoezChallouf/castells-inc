@extends('layouts.app')

@section('title', 'Home')

@section('content')

@php
    $carousels = \App\Models\Carousel::orderBy('order')->get();
@endphp

<!-- Carousel Start -->
<div class="container-fluid p-0">
    <div id="header-carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            @foreach ($carousels as $index => $carousel)
                <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                    <img class="w-100" src="{{ asset('storage/' . $carousel->image) }}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 800px;">
                            @if ($carousel->subtitle)
                                <h4 class="text-primary text-uppercase font-weight-normal mb-md-3">
                                    {{ $carousel->subtitle }}
                                </h4>
                            @endif
                            <h3 class="display-3 text-white mb-md-4">{{ $carousel->title }}</h3>
                            @if ($carousel->button_text && $carousel->button_link)
                                <a href="{{ $carousel->button_link }}" class="btn btn-primary py-md-3 px-md-5 mt-2 mt-md-4">
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
<!-- Carousel End -->




    <!-- About Start -->
    <div class="container-fluid bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="d-flex flex-column align-items-center justify-content-center bg-primary h-100 py-5 px-3">
                        <i class="flaticon-brickwall display-1 font-weight-normal text-secondary mb-3"></i>
                        <h4 class="display-3 mb-3">25 Years</h4>
                        <h1 class="m-0">Family Business</h1>
                    </div>
                </div>
                <div class="col-lg-7 m-0 my-lg-5 pt-5 pb-5 pb-lg-2 pl-lg-5">
                    <h6 class="text-primary font-weight-normal text-uppercase mb-3">About Castells Inc.</h6>
                    <h1 class="mb-4 section-title">Montreal's Trusted Luxury Home Builders & Renovation Experts</h1>
                    <p>At Castells Inc, we transform houses into dream homes. With years of experience, we specialize in custom-built luxury homes designed for your unique lifestyle.</p>
                    <div class="row py-2">
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center mb-4">
                                <h1 class="flaticon-house font-weight-normal text-primary m-0 mr-3"></h1>
                                <h5 class="text-truncate m-0">High-End Renovations</h5>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center mb-4">
                                <h1 class="flaticon-stairs font-weight-normal text-primary m-0 mr-3"></h1>
                                <h5 class="text-truncate m-0">Timeless Craftsmanship</h5>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center mb-4">
                                <h1 class="flaticon-office font-weight-normal text-primary m-0 mr-3"></h1>
                                <h5 class="text-truncate m-0">Stress-Free Process</h5>
                            </div>
                        </div>
                        <div class="col-sm-6">
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
    <!-- About End -->


<!-- Services Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-6 pr-lg-5">
                <h6 class="text-primary font-weight-normal text-uppercase mb-3">Our Services</h6>
                <h1 class="mb-4 section-title">High-Quality Construction & Renovation Solutions</h1>
                <p>We provide expert construction, remodeling, and interior solutions tailored to your needs. From concept to completion, our team ensures precision, quality, and satisfaction on every project.</p>
                <a href="" class="btn btn-primary mt-3 py-2 px-4">Discover More</a>
            </div>
            <div class="col-lg-6 p-0 pt-5 pt-lg-0">
                <div class="owl-carousel service-carousel position-relative">
                    <div class="d-flex flex-column text-center bg-light mx-3 p-4">
                        <h3 class="flaticon-bedroom display-3 font-weight-normal text-primary mb-3"></h3>
                        <h5 class="mb-3">Residential Construction</h5>
                        <p class="m-0">We specialize in building beautiful, durable, and energy-efficient homes with the highest quality materials and craftsmanship.</p>
                    </div>
                    <div class="d-flex flex-column text-center bg-light mx-3 p-4">
                        <h3 class="flaticon-kitchen display-3 font-weight-normal text-primary mb-3"></h3>
                        <h5 class="mb-3">Interior Renovation</h5>
                        <p class="m-0">Transform your space with modern design and functionality—from kitchens and bathrooms to full home makeovers.</p>
                    </div>
                    <div class="d-flex flex-column text-center bg-light mx-3 p-4">
                        <h3 class="flaticon-bathroom display-3 font-weight-normal text-primary mb-3"></h3>
                        <h5 class="mb-3">Commercial Projects</h5>
                        <p class="m-0">Delivering reliable and efficient construction solutions for offices, retail spaces, and industrial buildings.</p>
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
                <h6 class="text-primary font-weight-normal text-uppercase mb-3">Why Choose Us?</h6>
                <h1 class="mb-4 section-title">Luxury Custom Homes & Renovations in Montreal</h1>
                <p class="mb-4">With over 25 years of experience, Castells Inc. delivers high-end residential construction, exceptional craftsmanship, and personalized service tailored to your vision. From custom homes to upscale renovations, we turn dreams into timeless living spaces.</p>
                <ul class="list-inline">
                    <li><h5><i class="far fa-check-square text-primary mr-3"></i>25+ Years of Expertise</h5></li>
                    <li><h5><i class="far fa-check-square text-primary mr-3"></i>Luxury Custom Home Building</h5></li>
                    <li><h5><i class="far fa-check-square text-primary mr-3"></i>Client-Focused Renovation Services</h5></li>
                </ul>
                <a href="" class="btn btn-primary mt-3 py-2 px-4">Discover More</a>
            </div>
            <div class="col-lg-5">
                <div class="d-flex flex-column align-items-center justify-content-center h-100 overflow-hidden">
                    <img class="h-100" src="img/feature.jpg" alt="Castells Inc. Luxury Homes">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Features End -->


<div class="our-works">
  <div class="header-text text-center mb-5">
    <h6 class="text-primary text-uppercase mb-3">Our Expertise</h6>
    <h1 class="mb-4">Transformation Projects Showcase</h1>
  </div>

  @if($featuredCategories->isNotEmpty())
  <div class="row justify-content-center">
    <div class="col-12 text-center mb-4">
      <div class="btn-group filter-buttons">
        <button class="btn btn-outline-primary active" data-filter="*">All</button>
        @foreach($featuredCategories as $category)
          <button class="btn btn-outline-primary" data-filter="{{ $category->id }}">
            {{ $category->name }}
          </button>
        @endforeach
      </div>
    </div>
  </div>
  @endif

  <div class="slider-grid">
    @forelse($featuredProjects as $project)
      <div class="slider-card" data-category="{{ $project->category_id }}">
        <div class="comparison-slider">
          <div class="comparison-before">
            <img src="{{ Storage::url($project->before_image) }}" alt="Before {{ $project->title }}" loading="lazy">
          </div>
          <div class="comparison-after">
            <img src="{{ Storage::url($project->after_image) }}" alt="After {{ $project->title }}" loading="lazy">
          </div>
          <div class="comparison-handle"><div class="handle-arrow"></div><div class="handle-circle"></div></div>
          <div class="comparison-label before">Before</div>
          <div class="comparison-label after">After</div>
        </div>
        <div class="project-info">
          <h3>{{ $project->title }}</h3>
          <p>{{ $project->description }}</p>
        </div>
      </div>
    @empty
      <div class="col-12 text-center">
        <p class="text-muted">No featured projects available</p>
      </div>
    @endforelse
  </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', () => {
  const sliders = document.querySelectorAll('.comparison-slider');

  sliders.forEach(slider => {
    let isDragging = false;
    const handle = slider.querySelector('.comparison-handle');
    const after = slider.querySelector('.comparison-after');
    const sliderRect = slider.getBoundingClientRect();
    
    const updateSlider = (clientX) => {
      const rect = slider.getBoundingClientRect();
      let position = ((clientX - rect.left) / rect.width) * 100;
      position = Math.max(0, Math.min(position, 100));
      
      handle.style.left = `${position}%`;
      after.style.width = `${position}%`;
    };

    const startDrag = (e) => {
      e.preventDefault();
      isDragging = true;
      slider.classList.add('active');
      updateSlider(e.clientX || e.touches[0].clientX);
    };

    const stopDrag = () => {
      isDragging = false;
      slider.classList.remove('active');
    };

    // Mouse events
    slider.addEventListener('mousedown', startDrag);
    window.addEventListener('mousemove', (e) => {
      if (isDragging) updateSlider(e.clientX);
    });
    window.addEventListener('mouseup', stopDrag);

    // Touch events
    slider.addEventListener('touchstart', startDrag);
    window.addEventListener('touchmove', (e) => {
      if (isDragging) updateSlider(e.touches[0].clientX);
    });
    window.addEventListener('touchend', stopDrag);

    // Keyboard accessibility
    handle.addEventListener('keydown', (e) => {
      const step = e.shiftKey ? 10 : 1;
      if (e.key === 'ArrowLeft') updateSliderPosition(-step);
      if (e.key === 'ArrowRight') updateSliderPosition(step);
    });
  });
});

document.addEventListener('DOMContentLoaded', () => {
  const filterButtons = document.querySelectorAll('.filter-buttons button');
  const projects = document.querySelectorAll('.slider-card');
  const grid = document.querySelector('.slider-grid');

  filterButtons.forEach(button => {
    button.addEventListener('click', () => {
      filterButtons.forEach(btn => btn.classList.remove('active'));
      button.classList.add('active');
      const filter = button.dataset.filter;

      // First hide elements with transition
      projects.forEach(project => {
        const category = project.dataset.category;
        const shouldShow = filter === '*' || category.includes(filter);
        
        if (!shouldShow) {
          project.classList.add('hide');
        }
      });

      // Wait for hide transition then show remaining elements
      setTimeout(() => {
        projects.forEach(project => {
          const category = project.dataset.category;
          const shouldShow = filter === '*' || category.includes(filter);
          
          if (shouldShow) {
            project.classList.remove('hide');
          } else {
            // Force reflow after hiding
            void grid.offsetHeight;
          }
        });
      }, 300);
    });
  });
});
</script>


<style>

.filter-buttons {
  flex-wrap: wrap;
  gap: 0.5rem;
}

.btn-outline-primary {
  border-radius: 2rem;
  padding: 0.5rem 1.5rem;
  transition: all 0.3s ease;
}

.btn-outline-primary.active {
  background: #3b82f6;
  color: white;
  border-color: #3b82f6;
}

.slider-card {
  transition: all 0.4s ease;
}

/* Hide filtered items */
.slider-card.hide {
  opacity: 0;
  visibility: hidden;
  height: 0;
  margin: 0;
  transform: scale(0.9);
}

.slider-grid {
  position: relative;
  min-height: 500px; /* Prevent layout jump */
}
.our-works {
  padding: 4rem 1.5rem;
  background: #f9fafb;
}

.section-title {
  font-size: 2.5rem;
  margin-bottom: 3rem;
  color: #1f2937;
  text-align: center;
}

.slider-grid {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
  gap: 2rem;
  transition: grid-template-rows 0.3s ease;
}

.slider-card {
  transition: 
    opacity 0.3s ease,
    transform 0.3s ease,
    visibility 0.3s ease;
}

.slider-card.hide {
  opacity: 0;
  visibility: hidden;
  transform: scale(0.95);
  height: 0;
  margin: 0;
  padding: 0;
  border: none;
  overflow: hidden;
  pointer-events: none;
  position: absolute;
  width: 0;
}

.slider-card {
  flex: 0 0 calc(33.33% - 1.5rem);
  min-width: 300px;
  background: white;
  border-radius: 1rem;
  overflow: hidden;
  box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
  transition: transform 0.2s;
}

.slider-card:hover {
  transform: translateY(-4px);
}

.comparison-slider {
  position: relative;
  aspect-ratio: 4/3;
  overflow: hidden;
}

.comparison-before,
.comparison-after {
  position: absolute;
  top: 0;
  height: 100%;
}

.comparison-before {
  width: 100%;
}

.comparison-after {
  right: 0;
  width: 50%;
  overflow: hidden;
  transition: width 0.3s ease;
}

.comparison-slider img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  pointer-events: none;
}

.comparison-handle {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 50%;
  width: 4px;
  background: rgba(255, 255, 255, 0.9);
  cursor: ew-resize;
  transform: translateX(-50%);
  z-index: 2;
}

.handle-circle {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 40px;
  height: 40px;
  background: white;
  border-radius: 50%;
  transform: translate(-50%, -50%);
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
}

.handle-arrow {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: #3b82f6;
  font-size: 1.25rem;
  pointer-events: none;
}

.comparison-label {
  position: absolute;
  bottom: 1rem;
  padding: 0.5rem 1rem;
  background: rgba(0, 0, 0, 0.7);
  color: white;
  border-radius: 0.5rem;
  font-size: 0.875rem;
  z-index: 1;
}

.comparison-label.before { left: 1rem; }
.comparison-label.after { right: 1rem; }

.project-info {
  padding: 1.5rem;
}

.project-title {
  font-size: 1.25rem;
  margin-bottom: 0.5rem;
  color: #1f2937;
}

.project-details {
  color: #6b7280;
  font-size: 0.875rem;
  line-height: 1.5;
}

/* Responsive Breakpoints */
@media (max-width: 1024px) {
  .slider-card {
    flex: 0 0 calc(50% - 1rem); /* 2 items per row */
  }
}

@media (max-width: 768px) {
  .slider-grid {
    flex-direction: column;
    align-items: center;
  }
  
  .slider-card {
    flex: 0 0 100%;
    max-width: 400px;
  }
  
  .section-title {
    font-size: 2rem;
  }
}

@media (max-width: 480px) {
  .our-works {
    padding: 2rem 1rem;
  }
  
  .slider-card {
    min-width: auto;
    width: 100%;
  }
}
</style>
    
@endsection
