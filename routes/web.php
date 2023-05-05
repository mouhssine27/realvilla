<?php

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
    return view('welcome');
});

Route::get('/aboute', function () {
    return view('aboute_us');
});

Route::get('/property_list', function () {
    return view('property_list');
});

Route::get('/agency', function () {
    return view('agency-grid');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/propertySubmit', function () {
    return view('submit-property');
});