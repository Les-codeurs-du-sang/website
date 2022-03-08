<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BloodController;

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

Route::get('/', [\App\Http\Controllers\BloodController::class, 'index'])->name("blood.home");

Route::get('/blood-donation/create',  [\App\Http\Controllers\BloodController::class, 'create'])->name('blood.create');

Route::get('/HomeBoneMarrow', [\App\Http\Controllers\BoneMarrowController::class, 'home'])->name("HomeBoneMarrow");

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
