<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Project;
use Livewire\Component;

class OurWork extends Component
{

    public $featuredCategories;
    public $featuredProjects;

    public function mount()
    {
        $this->featuredCategories = Category::where('is_featured', true)->get();
        $this->featuredProjects = Project::where('is_featured', true)->get();
    }
    public function render()
    {
        return view('livewire.our-work');
    }
}
