<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\controllers\AnnonceController;
use App\Http\controllers\ContactController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;





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



Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');


Route::get('/property_list', [AnnonceController::class, 'propertlist']);
//////////itemse Categories
Route::get('property_list/{id}', [AnnonceController::class, 'propertylistID']);
///afficher details annonce 
Route::get('details/{name}/{id}', [AnnonceController::class, 'details']);

Route::post('/contact/store', [ContactController::class, 'store'])->name('contact.store');

Route::get('/admin', [LoginController::class, 'showAdminLoginForm'])->name('admin.login-view');
Route::post('/admin', [LoginController::class, 'adminLogin'])->name('admin.login');
Route::get('/admin/logout', [LoginController::class, 'Logout'])->name('admin.logoutt');
Route::get('/admin/dashboard', [LoginController::class, 'dashboard'])->middleware('auth:admin');
