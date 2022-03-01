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

Route::get('/HomeBlood', [\App\Http\Controllers\BloodController::class, 'home'])->name("HomeBlood");

Route::get('/HomeBoneMarrow', [\App\Http\Controllers\BoneMarrowController::class, 'home'])->name("HomeBoneMarrow");
