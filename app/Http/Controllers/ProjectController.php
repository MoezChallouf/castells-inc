<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
  public function home()
{
    $featuredProjects = Project::with('category')
        ->where('is_featured', true)
        ->take(9) // Show 6 featured projects on home
        ->get();

    $featuredCategories = Category::where('is_featured', true)
        ->take(6) // Show 4 featured categories
        ->get();

    return view('pages.home', [
        'featuredProjects' => $featuredProjects,
        'featuredCategories' => $featuredCategories
    ]);
}

}
