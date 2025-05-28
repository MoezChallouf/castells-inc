<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\ProjectController;
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
Route::view('/about', 'pages/about')->name('about');
Route::view('/service', 'pages/service')->name('service');
Route::view('/project', 'pages/project')->name('project');
Route::view('/appointment', 'appointment')->name('appointment');
Route::view('/team', 'team')->name('team');
Route::view('/testimonial', 'testimonial')->name('testimonial');
Route::view('contact', 'pages/contact')->name('contact');

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::post('/newsletter', [NewsletterController::class, 'store'])->name('newsletter.store');
