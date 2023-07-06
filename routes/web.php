<?php
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
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
    return view('auth.login');
});

Route::middleware(['auth'])->group(function () {
    // Route Home
    Route::get('home', [HomeController::class, 'index'])->name('home');
    // Route Profile
    Route::get('profile', ProfileController::class)->name('profile');
    // Employee
    Route::resource('employees', EmployeeController::class);
});

Auth::routes();