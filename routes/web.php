<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('doctors', App\Http\Controllers\DoctorController::class);
// Example for web.php
Route::get('/tests', [TestController::class, 'index'])->name('tests.index');

Route::resource('companies', App\Http\Controllers\CompanyController::class);
Route::resource('tests', App\Http\Controllers\TestController::class);
Route::resource('appointments', App\Http\Controllers\AppointmentController::class);
Route::resource('appointments', App\Http\Controllers\AppointmentController::class);
Route::resource('suppliers', App\Http\Controllers\SupplierController::class);
Route::resource('services', App\Http\Controllers\ServiceController::class);
Route::resource('services', App\Http\Controllers\ServiceController::class);
Route::resource('services', App\Http\Controllers\ServiceController::class);
Route::resource('products', App\Http\Controllers\ProductController::class);
Route::resource('products', App\Http\Controllers\ProductController::class);
Route::resource('posts', App\Http\Controllers\PostController::class);
Route::resource('posts', App\Http\Controllers\PostController::class);
Route::resource('posts', App\Http\Controllers\PostController::class);
Route::resource('doctors', App\Http\Controllers\DoctorController::class);
Route::resource('doctors', App\Http\Controllers\DoctorController::class);
Route::resource('doctors', App\Http\Controllers\DoctorController::class);
Route::resource('consultants', App\Http\Controllers\ConsultantController::class);
Route::resource('consultants', App\Http\Controllers\ConsultantController::class);
Route::resource('consultants', App\Http\Controllers\ConsultantController::class);