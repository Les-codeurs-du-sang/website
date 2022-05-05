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

//Route::get('/blood-donation/register-blood', [\App\Http\Controllers\BloodController::class, 'subscribe'])->name("subscribeBlood");
Route::post('/blood-donation/create/end', [\App\Http\Controllers\BloodController::class, 'registerBlood'])->name('registerBlood');

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
Route::get('/admin/users/import', [\App\Http\Controllers\UserController::class, 'import'])->name('admin.users.import');
Route::post('/admin/users/import', [\App\Http\Controllers\UserController::class, 'saveCsv'])->name('admin.users.saveCsv');

// Promotions
Route::get('/admin/promotions', [\App\Http\Controllers\PromotionController::class, 'index'])->name('admin.promotion.index');
Route::get('/admin/promotions/create', [\App\Http\Controllers\PromotionController::class, 'create'])->name('admin.promotion.create');
Route::post('/admin/promotions', [\App\Http\Controllers\PromotionController::class, 'store'])->name('admin.promotion.store');
Route::get('/admin/promotions/{promotion}/edit', [\App\Http\Controllers\PromotionController::class, 'edit'])->name('admin.promotion.edit');
Route::patch('/admin/promotions/{promotion}', [\App\Http\Controllers\PromotionController::class, 'update'])->name('admin.promotion.update');

// Questions
Route::get('/admin/questions', [\App\Http\Controllers\QuestionController::class, 'index'])->name('admin.question.index');
Route::get('/admin/questions/{question}/show', [\App\Http\Controllers\QuestionController::class, 'show'])->name('admin.question.show');
Route::get('/admin/questions/create', [\App\Http\Controllers\QuestionController::class, 'create'])->name('admin.question.create');
Route::post('/admin/questions', [\App\Http\Controllers\QuestionController::class, 'store'])->name('admin.question.store');
Route::get('/admin/questions/{question}/edit', [\App\Http\Controllers\QuestionController::class, 'edit'])->name('admin.question.edit');
Route::patch('/admin/questions/{question}', [\App\Http\Controllers\QuestionController::class, 'update'])->name('admin.question.update');
Route::delete('/admin/questions/{question}/delete', [\App\Http\Controllers\QuestionController::class, 'delete'])->name('admin.question.delete');

// Journee
Route::get('/admin/journees', [\App\Http\Controllers\JourneeController::class, 'index'])->name('admin.journee.index');
Route::get('/admin/journees/{journee}/show', [\App\Http\Controllers\JourneeController::class, 'show'])->name('admin.journee.show');
Route::get('/admin/journees/create', [\App\Http\Controllers\JourneeController::class, 'create'])->name('admin.journee.create');
Route::post('/admin/journee', [\App\Http\Controllers\JourneeController::class, 'store'])->name('admin.journee.store');
Route::get('/admin/journee/{journee}/edit', [\App\Http\Controllers\JourneeController::class, 'edit'])->name('admin.journee.edit');
Route::patch('/admin/journee/{journee}', [\App\Http\Controllers\JourneeController::class, 'update'])->name('admin.journee.update');
