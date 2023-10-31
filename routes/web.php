<?php

use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\StatisticController;
use App\Http\Controllers\Admin\SurveyCoverageAreaController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\PublicController;
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



Route::get('/', [App\Http\Controllers\PublicController::class, 'index'])->name('welcome');
Route::get('/about-us', [App\Http\Controllers\PublicController::class, 'aboutus'])->name('aboutus');
Route::get('/contact', [App\Http\Controllers\PublicController::class, 'contact'])->name('contact');
Route::post('/contact', [App\Http\Controllers\PublicController::class, 'store'])->name('contactstore');

Route::get('/services', [App\Http\Controllers\PublicController::class, 'services'])->name('services');
Route::get('/service/{service:slug}', [App\Http\Controllers\PublicController::class, 'service'])->name('service');
Route::get('/blogs', [App\Http\Controllers\PublicController::class, 'blogs'])->name('blogs');
Route::get('/post/{post:slug}', [App\Http\Controllers\PublicController::class, 'show'])->name('post');

Route::get('/survey-coverage-areas', [App\Http\Controllers\PublicController::class, 'areas'])->name('areas');
Route::get('/search-coverage', [PublicController::class, 'searchCoverage']);


Route::get('/book-a-surveyor', [App\Http\Controllers\PublicController::class, 'booking'])->name('booking');
Route::post('/book-a-surveyor', [App\Http\Controllers\PublicController::class, 'bookingstore'])->name('bookingstore');

Route::get('/book-a-surveyor/book/{booking:slug}', [App\Http\Controllers\PublicController::class, 'bookingstep2'])->name('booking.step-2');
Route::post('/book-a-surveyor/book/{booking}', [App\Http\Controllers\PublicController::class, 'bookingstep2store'])->name('booking.step2store');

Route::get('/book-a-surveyor/booking-confirmed', [App\Http\Controllers\PublicController::class, 'bookingConfirmed'])->name('booking.confirmed');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function() {
    Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'is_admin'], function (){
        Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
        Route::get('/profile', [App\Http\Controllers\Admin\DashboardController::class, 'profile'])->name('profile');
        Route::get('/settings', [App\Http\Controllers\Admin\DashboardController::class, 'settings'])->name('settings');

        Route::get('/contacts', [App\Http\Controllers\Admin\ContactController::class, 'index'])->name('contacts');
        Route::get('/contacts/edit/{contact}', [App\Http\Controllers\Admin\ContactController::class, 'edit'])->name('contacts.edit');
        Route::put('/contacts/edit/{contact}', [App\Http\Controllers\Admin\ContactController::class, 'update']);
        Route::delete('/contacts/delete/{contact}', [App\Http\Controllers\Admin\ContactController::class, 'destroy'])->name('contact.destroy');
        Route::get('/bookings', [App\Http\Controllers\Admin\BookingController::class, 'index'])->name('booking');
        Route::delete('/bookings/delete/{booking}', [App\Http\Controllers\Admin\BookingController::class, 'destroy'])->name('booking.destroy');

        Route::get('/posts', [App\Http\Controllers\Admin\PostController::class, 'index'])->name('posts.index');
        Route::get('/posts/create', [App\Http\Controllers\Admin\PostController::class, 'create'])->name('posts.create');
        Route::post('/posts/store', [App\Http\Controllers\Admin\PostController::class, 'store'])->name('posts.store');
        Route::get('/posts/edit/{post:slug}', [App\Http\Controllers\Admin\PostController::class, 'edit'])->name('posts.edit');
        Route::put('/posts/update/{post:slug}', [App\Http\Controllers\Admin\PostController::class, 'update'])->name('posts.update');
        Route::delete('/posts/delete/{post:post}', [App\Http\Controllers\Admin\PostController::class, 'destroy'])->name('posts.destroy');

        Route::get('/metadata/post/{post:slug}', [App\Http\Controllers\Admin\MetadataController::class, 'postmetadata'])->name('post.metadata');
        Route::get('/metadata/service/{service:slug}', [App\Http\Controllers\Admin\MetadataController::class, 'servicemetadata'])->name('service.metadata');

        Route::resource('teams', TeamController::class);
        Route::resource('testimonials', TestimonialController::class);
        Route::resource('services', ServiceController::class);
        Route::resource('categories', CategoryController::class);
        Route::resource('coverage-areas', SurveyCoverageAreaController::class);
        Route::resource('stats', StatisticController::class);

        Route::resource('users', UserController::class);
        
    });
});