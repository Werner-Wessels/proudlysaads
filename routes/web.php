<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactUsFormController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('home');
});

Route::resource('listings', \App\Http\Controllers\ListingController::class);
Route::resource('categories', \App\Http\Controllers\CategoryController::class);
Route::resource('location', \App\Http\Controllers\LocationController::class);
Route::resource('profile', \App\Http\Controllers\ProfileController::class);
Route::resource('application', \App\Http\Controllers\ApplicationController::class)->middleware('auth');
Route::resource('offer', \App\Http\Controllers\OfferController::class);

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/apply', function () {
    return view('apply');
})->name('apply');

Route::get('/contact', [ContactUsFormController::class, 'createForm'])->name('contact.create');
Route::post('/contact', [ContactUsFormController::class, 'ContactUsForm'])->name('contact.store');

Route::get('/features', function () {
    return view('features');
});


Route::get('/', function () {
    return view('home');
});

Route::get('/shop', function () {
    return view('shop');
});

Route::get('/sell', function () {
    return view('sell');
})->middleware('auth');

Route::get('login', [AuthController::class, 'index'])->name('user_login')->middleware('guest');

Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post');

Route::get('registration', [AuthController::class, 'registration'])->name('register')->middleware('guest');

Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post');

Route::get('dashboard', [AuthController::class, 'dashboard']);

Route::get('logout', [AuthController::class, 'logout'])->name('logout');




