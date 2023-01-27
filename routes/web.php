<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactUsFormController;
use App\Http\Controllers\EmailSellerController;
use App\Http\Controllers\HomeController;
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
Route::get('/foo', function () {
    Artisan::call('storage:link');
});

Route::get('/', function () {
    return view('home');
});

Route::resource('listings', \App\Http\Controllers\ListingController::class);
Route::resource('categories', \App\Http\Controllers\CategoryController::class);
Route::resource('location', \App\Http\Controllers\LocationController::class);
Route::resource('profile', \App\Http\Controllers\ProfileController::class)middleware('auth');
Route::resource('application', \App\Http\Controllers\ApplicationController::class);
Route::resource('offer', \App\Http\Controllers\OfferController::class);

Route::post('listing/{email}', [EmailSellerController::class, 'email'])->name('email');

Route::get('/promote/{id}', [\App\Http\Controllers\PromoteController::class, 'create'])->name('promote.create')->middleware('auth');

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

Route::get('/', [HomeController::class, 'index'])->name('home');
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

Route::get('/terms', function () {
    return view('terms');
});

Route::get('/privacy', function () {
    return view('privacy');
});




