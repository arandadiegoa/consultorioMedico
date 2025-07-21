<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PatientsController;
use App\Http\Controllers\TakeTurnController;
use App\Http\Controllers\TurnsController;

Route::get('/', function () {
    return view('patients.register');
});

Route::get('/aboutUs', function () {
    return view('aboutUs');
});

//Patients

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

Route::get('/list', [PatientsController::class, 'list'])->name('patients.list');
Route::get('/patients/{id}', [PatientsController::class, 'edit'])->name('patients.edit');
Route::put('/patients/{id}', [PatientsController::class, 'update'])->name('patients.update');
Route::delete('/patients/{id}', [PatientsController::class, 'destroy'])->name('patients.destroy');

//Dashboard
Route::get('/dashboard', [PatientsController::class, 'dashboard'])->name('dashboard');

//Turns
Route::get('/save', [TakeTurnController::class, 'index'])->name('save');
Route::post('/save', [TakeTurnController::class, 'store'])->name('save.store');

Route::get('/listTurns', [TurnsController::class, 'listTurns'])->name('turns.list');
Route::get('/turns/{id}', [TurnsController::class, 'edit'])->name('turns.edit');
Route::put('/turns/{id}', [TurnsController::class, 'update'])->name('turns.update');
Route::delete('/turns/{id}', [TurnsController::class, 'destroy'])->name('turns.destroy');
