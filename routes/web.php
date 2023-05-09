<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\AnnonceController;

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

Route::get('/aboute', function () {
    return view('aboute_us');
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



Route::get('/propertySubmit', [AnnonceController::class, 'propertySubmit']);
Route::get('/', [AnnonceController::class, 'pageprincipale']);
Route::post('/create', [AnnonceController::class, 'CreateAnonnce']);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/property_list', [AnnonceController::class, 'propertlist']);
//////////itemse Categories
Route::get('property_list/{id}', [AnnonceController::class, 'propertylistID']);
///afficher details annonce 
Route::get('details/{name}/{id}', [AnnonceController::class,'details']);


