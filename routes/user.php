<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\AnnonceController;
use App\Http\controllers\ContactController;
use App\Http\controllers\UserController;


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


Route::get('/profile', [UserController::class, 'profile'])->name('user.profile');

Route::get('/annonces', [UserController::class, 'annonces'])->name('user.annonces');

