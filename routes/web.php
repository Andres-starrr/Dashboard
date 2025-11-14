<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('dashboard');
Route::resource('products', ProductsController::class);
Route::resource('students', StudentsController::class);
Route::resource('employees', EmployeesController::class);

