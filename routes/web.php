<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';

Route::middleware(['auth'])->group(function () {
    Route::resource('cursos', CursoController::class)->except(['show']);
    Route::resource('asignaturas', AsignaturaController::class)->except(['show']);
});


Route::middleware(['auth'])->group(function () {
    Route::resource('tareas', TareaController::class)->except(['show']);
    Route::get('/dashboard', [StudentDashboardController::class, 'index'])->name('dashboard.index');
});

