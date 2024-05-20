<?php

use App\Http\Controllers\StudentController;
use App\Models\Student;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/account', [StudentController::class, 'index'])->name('account');
Route::post('/account', [StudentController::class, 'store'])->name('account.post');
Route::put('/account/{id}', [StudentController::class, 'update']);
Route::delete('/account/{id}', [StudentController::class, 'destroy'])->name('account.delete');


