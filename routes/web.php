<?php

use App\Http\Controllers\BaoAdminController;
use App\Http\Controllers\BaoJournalController;
use App\Http\Controllers\BaoStudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/bao-website', function () {
    return view('welcome_bao');
});

Route::post('/bao/students', [BaoStudentController::class, 'store'])->name('bao.students.store');

Route::get('/bao/journals', [BaoJournalController::class, 'index'])->name('bao.journals.index');
Route::post('/bao/journals', [BaoJournalController::class, 'store'])->name('bao.journals.store');
Route::get('/bao/journals/{journal}/pdf', [BaoJournalController::class, 'pdf'])->name('bao.journals.pdf');

Route::get('/bao/admin/session', [BaoAdminController::class, 'sessionStatus'])->name('bao.admin.session');
Route::post('/bao/admin/login', [BaoAdminController::class, 'login'])->name('bao.admin.login');
Route::post('/bao/admin/logout', [BaoAdminController::class, 'logout'])->name('bao.admin.logout');
Route::middleware('bao.admin')->group(function () {
    Route::get('/bao/admin/journals', [BaoAdminController::class, 'journals'])->name('bao.admin.journals');
    Route::post('/bao/admin/journals/publish', [BaoAdminController::class, 'updatePublished'])->name('bao.admin.journals.publish');
});
