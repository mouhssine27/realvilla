<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\AnnonceController;
use App\Http\controllers\ContactController;
use App\Http\controllers\AdminController;

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

Route::get('/Admin', [AdminController::class,'AdminSelect']);
Route::post('/CreateAgencity', [AdminController::class,'CreateAgencity']);
Route::get('/supprimerAdminAnnonce', [AdminController::class,'SupprimerAnnonce']);
Route::get('/supprimerAdminUtulisateur', [AdminController::class,'Supprimerutulisateur']);

Route::get('/supprimerAdminAgency', [AdminController::class,'Supprimeragency']);



