<?php

use App\Http\Controllers\BaoStudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/bao-website', function () {
    return view('welcome_bao');
});

Route::post('/bao/students', [BaoStudentController::class, 'store'])->name('bao.students.store');
