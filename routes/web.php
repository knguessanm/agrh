<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers;
use App\Http\Controllers\PostController;


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

/*Route::get('/', function () {
    return view('home');
});*/

Route::get('/', [PostController::class, 'index'])->name('home');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/job-details', function(){
    return view('pages.job-details');
})->name('job-details');

Route::get('/job-listing', function(){
    return view('pages.job-listing');
})->name('job-listing');

Route::get('/posts-single', function(){
    return view('pages.posts-single');
})->name('posts-id');

Route::get('/post', function(){
    return view('pages.posts');
})->name('posts');
