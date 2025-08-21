<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ShopController;
use Illuminate\Http\Request;

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



/*
|--------------------------------------------------------------------------
| Site-wide Middleware (MetaTagsMiddleware)
|--------------------------------------------------------------------------
|
| Below is the middleware group `site-meta` added to the last section of the routes file.
| Please make sure to add any routes that need specific meta tags here.
|
| Example: Routes created via `cms:create-blade` command can be added here.
|
*/

// Pages Route
Route::middleware(['meta-tags'])->group(function () {
    Route::get('/', function () {
        return view('pages/home');
    })->name('home');
    Route::get('/about', function () {
        return view('pages/about');
    })->name('about');
    Route::get('/contact', function () {
        return view('pages/contact');
    })->name('contact');
    Route::get('/policy', function () {
        return view('pages/policy');
    })->name('policy');
    Route::get('/shop', [ ShopController::class , 'index'])->name('shop');
    Route::get('/shop/{slug}', function (){
        return view('pages.product');
    })->name('product');
    Route::get('/tracking', function () {
        return view('pages/online-track');
    })->name('tracking');
    Route::get('/blog', function () {
        return view('pages/blog');
    })->name('blog');
    Route::get('/blog/{slug}', function () {
        return view('pages/blog-post-detail');
    })->name('blog-post-detail');
    Route::get('/faq', function () {
        return view('pages/FAQ');
    })->name('faq');
    
    
});

Route::get('/test', function () {
    return view('pages/test');
})->name('test');
// Auth Route
Route::post('/login',[AuthController::class, 'login'] )->name('login');
Route::get('/login',[AuthController::class, 'loginPage'] )->name('login-page');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/getotp/{phone}', [AuthController::class, 'getOtpCode']);


// User Dashboard Route
Route::prefix('profile') 
    ->middleware('auth') 
    ->as('user.')   
    ->group(function () {

        Route::get('/', function(){
            return view('pages.dashboard.index');
        })->name('dashboard');
        Route::get('/orders', function(){
            return view('pages.dashboard.orders');
        })->name('orders');

});

Route::fallback(function () {
    return response()->view('errors.404', [], 404);
})->middleware('web');
