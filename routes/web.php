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

Route::get('/blood-marrow', [\App\Http\Controllers\BoneMarrowController::class, 'home'])->name("blood_marrow.home");

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

/* Admin */
Route::get('/admin', [\App\Http\Controllers\AdminDashboardController::class, 'index'])->name('admin.index');

// Users
Route::get('/admin/users', [\App\Http\Controllers\UserController::class, 'index'])->name('admin.users.index');
Route::get('/admin/users/create', [\App\Http\Controllers\UserController::class, 'create'])->name('admin.users.create');
Route::post('/admin/users', [\App\Http\Controllers\UserController::class, 'store'])->name('admin.users.store');
Route::get('/admin/users/{user}/edit', [\App\Http\Controllers\UserController::class, 'edit'])->name('admin.users.edit');
Route::put('/admin/users/{user}', [\App\Http\Controllers\UserController::class, 'update'])->name('admin.users.update');
