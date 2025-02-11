<?php

use App\Http\Controllers\MikrotikController;
use App\Http\Controllers\SchoolClubController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landingpage');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/mikrotik', [MikrotikController::class, 'index'])->name('mikrotik.index');
Route::get('/mikrotik/create', [MikrotikController::class, 'create'])->name('mikrotik.create');
Route::post('/mikrotik', [MikrotikController::class, 'store'])->name('mikrotik.store');
Route::delete('/mikrotik/{id}', [MikrotikController::class, 'destroy'])->name('mikrotik.destroy');


Route::get('/school-clubs', [SchoolClubController::class, 'index'])->name('school-clubs.index');
Route::get('/school-clubs/create', [SchoolClubController::class, 'create'])->name('school-clubs.create');
Route::post('/school-clubs', [SchoolClubController::class, 'create'])->name('school-clubs.store');
