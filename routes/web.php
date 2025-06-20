<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PatientsController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/aboutUs', function () {
    return view('aboutUs');
});

Route::get('/list', function () {
    return view('patients.list');
});

//Patients

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

Route::get('/list', [PatientsController::class, 'list'])->name('patients.list');
Route::get('/patients/{id}', [PatientsController::class, 'edit'])->name('patients.edit');
Route::put('/patients/{id}', [PatientsController::class, 'update'])->name('patients.update');
Route::delete('/patients/{id}', [PatientsController::class, 'destroy'])->name('patients.destroy');

//Turns
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');