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
Route::middleware(['meta-tags'])->group(function () {
    Route::get('/', function () {
        return view('pages/home');
    })->name('home');
});
