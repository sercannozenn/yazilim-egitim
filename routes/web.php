<?php

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', function () {
    return view('pages.index');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/blogs', function () {
    return view('pages.blogs');
});

Route::get('/blog-details', function () {
    return view('pages.blog-details');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/social', function () {
    return view('pages.social');
});

Route::get('/admin', function () {
    return view('pages.admin');
});

Route::get('/admin', function () {
    return view('layouts.admin');
});
Route::prefix("/admin")->group(function () {
    Route::get("/create-category", [\App\Http\Controllers\CategoryController::class,"create"])->name("admin.create.category");
});


Route::get('/login', function () {
    return view('layouts.admin.login');
});

Route::get('/register', function () {
    return view('layouts.admin.register');
});

Route::get('/create-category', function () {
    return view('layouts.admin.category.create');
});
