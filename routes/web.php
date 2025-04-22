<?php

use App\Http\Controllers\NinjaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ninjas', [NinjaController::class, 'index'])->name('ninja.index');
Route::get('/ninjas/create', [NinjaController::class, 'create'])->name('ninja.create');
Route::get('/ninja/{id}/edit', [NinjaController::class, 'edit'])->name('ninja.edit'); // ✅ Correct here
Route::get('/ninja/{id}', [NinjaController::class, 'show'])->name('ninja.show');
Route::post('/ninjas', [NinjaController::class, 'store'])->name('ninja.store');
Route::patch('/ninja/{id}', [NinjaController::class, 'update'])->name('ninja.update'); // ✅ PATCH here
Route::delete('/ninja/{id}', [NinjaController::class, 'destroy'])->name('ninja.destroy');
