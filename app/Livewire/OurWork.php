<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Project;
use Livewire\Component;

class OurWork extends Component
{

   public $featuredCategories;
    public $featuredProjects;

    public $onlyFeatured = true;  // default to true, can be overridden from Blade

    public function mount($onlyFeatured = true)
    {
        $this->onlyFeatured = $onlyFeatured;

        if ($this->onlyFeatured) {
            $this->featuredCategories = Category::where('is_featured', true)->has('projects')->get();
            $this->featuredProjects = Project::where('is_featured', true)->get();
        } else {
            $this->featuredCategories = Category::has('projects')->get();
            $this->featuredProjects = Project::all();
        }
    }

    public function render()
    {
        return view('livewire.our-work');
    }
}
