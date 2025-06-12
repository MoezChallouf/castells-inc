<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\RecrutementController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [ProjectController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/service', action: [PageController::class, 'services'])->name('service');

// Route::view('/service', 'pages/service')->name('service');
Route::view('/project', 'pages/project')->name('project');
Route::view('/appointment', 'appointment')->name('appointment');
Route::view('/team', 'team')->name('team');
Route::view('/testimonial', 'testimonial')->name('testimonial');
Route::view('/work-detail', 'pages/work-detail')->name('work-detail');
Route::view('contact', 'pages/contact')->name('contact');

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::post('/newsletter', [NewsletterController::class, 'store'])->name('newsletter.store');
Route::get('/projects/{project}', [ProjectController::class, 'show'])->name('projects.show');
Route::post('/projects/{project}/comments', [CommentController::class, 'store'])
    ->name('comments.store');
Route::get('/projects/search-by-tags', [ProjectController::class, 'searchByTags'])->name('projects.search-by-tags');

Route::view('/recrutement', 'pages.recrutement')->name('recrutement');
Route::post('/recrutement', [RecrutementController::class, 'store'])->name('recrutement.store');