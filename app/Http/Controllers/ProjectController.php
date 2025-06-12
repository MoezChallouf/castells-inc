<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Project;
use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOTools as SEO;

class ProjectController extends Controller
{
  public function home()
{
    SEO::setTitle('Luxury Custom Home Builders in Montreal | Castells Inc');
    SEO::setDescription('Premium custom home builders & renovation experts in Montreal. Crafting luxury living spaces with uncompromising quality since 2015.');
    
    SEO::metatags()->addKeyword([
        'luxury home builders montreal','castells','castells-inc',
        'premium renovations',
        'custom dream home',
        'high-end home transformations',
        'architectural design montreal',
        'west island luxury builders',
        'laval home renovation experts'
    ]);
    
    SEO::opengraph()->setUrl(url()->current());
    SEO::twitter()->setSite('@Castells-Inc');
    SEO::jsonLd()->addImage(asset('img/og-image.jpg'));

    $featuredProjects = Project::with('category')
        ->where('is_featured', true)
        ->take(9) // Show 6 featured projects on home
        ->get();

   $featuredCategories = Category::where('is_featured', true)
    ->has('projects')  
    ->take(6)          // Limit to 6 categories
    ->get();


    return view('pages.home', [
        'featuredProjects' => $featuredProjects,
        'featuredCategories' => $featuredCategories
    ]);
}

public function show(Request $request, Project $project)
{
    $recentProjects = Project::latest()->take(5)->with('category')->withCount('comments')->get();

   
    $keyword = $request->input('keyword');
    $categories = Category::withCount('projects')->has('projects')->get();

    $project->load('images', 'tags');

    // Prepare related projects query
    $relatedProjectsQuery = Project::where('category_id', $project->category_id)
        ->where('id', '!=', $project->id);

    if ($keyword) {
        $relatedProjectsQuery->where(function ($query) use ($keyword) {
            $query->where('title', 'like', "%{$keyword}%")
                  ->orWhere('description', 'like', "%{$keyword}%");
        });
    }

    $relatedProjects = $relatedProjectsQuery->get();

    if ($request->ajax()) {
        return response()->json([
            'relatedProjects' => $relatedProjects->map(function($proj) {
                return ['id' => $proj->id, 'title' => $proj->title];
            }),
        ]);
    }

    

    return view('pages.work-detail', compact('project', 'categories', 'relatedProjects','recentProjects'));
}




}
