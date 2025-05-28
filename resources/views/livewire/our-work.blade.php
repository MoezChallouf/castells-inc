<div>
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
</div>
