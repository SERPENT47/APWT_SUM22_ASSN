<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;

Route::get('/',[PagesController::class,'welcome'])->name('welcome');
Route::get('/register',[PagesController::class,'register'])->name('register');
Route::get('/login',[PagesController::class,'login'])->name('login');

Route::post('/login',[LoginController::class,'login'])->name('login');

Route::get('/dashboard/student',[StudnetController::class,'dashboard'])->name('student.dashboard');

Route::get('/dashboard/admin',[AdminController::class,'dashboard'])->name('admin.dashboard');

