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

// Don du sang
Route::get('/', [BloodController::class, 'index'])->name('blood.home');
Route::get('/blood-donation/create', [BloodController::class, 'create'])->name('blood.create');
