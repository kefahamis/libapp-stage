<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/book', [App\Http\Controllers\HomeController::class, 'book'])->name('book');
Route::get('/explore', [App\Http\Controllers\HomeController::class, 'explore'])->name('explore');
Route::get('/start', [App\Http\Controllers\HomeController::class, 'start'])->name('start');
Route::get('/sign-in', [App\Http\Controllers\HomeController::class, 'signin'])->name('signin');
Route::get('/learn', [App\Http\Controllers\DashboardController::class, 'learn'])->name('learn');
Route::get('/downloads', [App\Http\Controllers\DashboardController::class, 'download'])->name('download');
Route::get('/learn', [App\Http\Controllers\LearnController::class, 'index'])->middleware('auth');
Route::get('/download', [App\Http\Controllers\LearnController::class, 'download'])->middleware('auth');
Route::get('/profile', [App\Http\Controllers\UserController::class, 'index'])->middleware('auth');
Route::get('/settings', [App\Http\Controllers\UserController::class, 'settings'])->middleware('auth');
Route::get('/achievements', [App\Http\Controllers\AchievementController::class, 'index'])->middleware('auth');
Route::get('/cpd', [App\Http\Controllers\CPDController::class, 'index'])->middleware('auth');
Route::get('/rate', [App\Http\Controllers\CPDController::class, 'rate'])->middleware('auth');
Route::get('/topic', [App\Http\Controllers\TopicController::class, 'index'])->middleware('auth');
Route::get('/programs', [App\Http\Controllers\ProgramController::class, 'index'])->middleware('auth');
Route::get('/certificate', [App\Http\Controllers\CPDController::class, 'earnCertificate'])->middleware('auth');
Route::get('training-programs', [App\Http\Controllers\HumanResource::class, 'index'])->middleware('auth');
Route::get('enroll', [App\Http\Controllers\HumanResource::class, 'enroll'])->middleware('auth');
Route::get('download', [App\Http\Controllers\HumanResource::class, 'download'])->middleware('auth');
Route::get('registered-programs', [App\Http\Controllers\HumanResource::class, 'program'])->middleware('auth');
Route::get('hr-profile', [App\Http\Controllers\HumanResource::class, 'profile'])->middleware('auth');
Route::get('onboard', [App\Http\Controllers\HumanResource::class, 'team'])->middleware('auth');
Route::get('team', [App\Http\Controllers\HumanResource::class, 'list'])->middleware('auth');

















