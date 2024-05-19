<?php

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

Route::get('/account', function () {
    return view('account', ['students' => Student::all()]);
});
