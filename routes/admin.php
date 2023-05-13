<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\AnnonceController;
use App\Http\controllers\ContactController;
use App\Http\controllers\AdminController;
use App\Http\controllers\AdminAuthController;

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


//Route::get('/Admin', [AdminController::class,'AdminSelect']);
Route::post('/CreateAgencity', [AdminController::class,'CreateAgencity']);

Route::get('/supprimerAdminAnnonce', [AdminController::class,'SupprimerAnnonce']);

Route::get('/supprimerAdminUtulisateur', [AdminController::class,'Supprimerutulisateur']);

Route::get('/supprimerAdminAgency', [AdminController::class, 'Supprimeragency']);

//ajouter des nouveaux modification
Route::get('/Admin.user.Profile/{id}', [AdminController::class, 'profileUser']);

Route::get('/annonces.user.profile', [AdminController::class, 'annoncesUser']);

Route::post('/updateProfile.user.profile/{id}', [AdminController::class, 'UpdateProfileUser']);
Route::get('/updateAgenece.user/{id}', [AdminController::class, 'UpdateAgence']);
Route::post('/updeateAgenceAdmin.user/{id}', [AdminController::class, 'updeateAgenceAdmin']);
Route::get('/updeateAnnoceAdmin/{id}', [AdminController::class, 'updeateAnnoceAdmin']);
Route::post('/UpdeateOperation/{id}', [AdminController::class, 'UpdeateOpet']);
Route::get('/ActiverAnnonce/{id}', [AdminController::class, 'ActiverAnnonce']);
////Details Anonce admin
Route::get('/annonncesDetailsAdmin/{id}', [AdminController::class, 'annonncesDetails']);




// route for authenticate admin and logout 
Route::get('/Admin', [AdminAuthController::class, 'showAdminLoginForm'])->name('admin.login-view');
Route::post('/Admin', [AdminAuthController::class, 'adminLogin'])->name('admin.login');
Route::get('/Admin/logout', [AdminAuthController::class, 'Logout'])->name('admin.logoutt');
Route::get('/Admin/dashboard', [AdminAuthController::class, 'dashboard'])->middleware('auth:admin');
