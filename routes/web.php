<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;

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
    $urlCurrent = URL::current();
    $urlPrevious = URL::previous();
    return view('home', compact('urlCurrent', 'urlPrevious'));
});
Route::get('/about', function () {
    return view('frontend.pages.about');
})->name('about');
Route::get('/service', function () {
    return view('frontend.pages.service');
})->name('service');