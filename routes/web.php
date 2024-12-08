<?php

use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
})->name('landing');

Route::get('/home', function () {
    return view('landing');
})->name('landing');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/curso/{curso}', [CursoController::class, 'show'])
->name('curso.show');

Route::post('/pago', [CursoController::class, 'inscripcion'])
        ->middleware(['auth'])
        ->name('pago');

Route::view('/welcome', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::post('verclase', [CursoController::class, 'verclase'])
    ->middleware(['auth'])
    ->name('verclase');

require __DIR__.'/auth.php';
