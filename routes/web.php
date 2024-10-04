<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\AdminController;



Route::get('/', function () {
    return view('Home');
});

Route::get('/admin', function(){
    return view('adminLogin');
})->name('adminLogin');



Route::get('/admin/login', [AdminController::class, 'login'])->name('AdminEntry');
Route::post('/admin/login', [AdminController::class, 'authenticate'])->name('admin.authenticate');
Route::get('/admin/register', [AdminController::class, 'register'])->name('admin.register');
Route::post('/admin/register', [AdminController::class, 'store'])->name('admin.store');


Route::get('/admin/register', [AdminController::class, 'register'])->name('adminRegister');
Route::post('/admin', [AdminController::class, 'store'])->name('admin.register.store');



Route::get('/trainer', function(){
    return view('trainer');
})->name('trainer.dashboard');

Route::get('/trainee', function(){
    return view('trainee');
})->name('trainee.dashboard');

