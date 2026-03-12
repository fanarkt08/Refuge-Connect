<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\IndexController;

Route::get('/', [IndexController::class, 'index'])->name('home');

Route::prefix('animaux')->name('animals.')->group(function () {

    Route::get('/creer', [AnimalController::class, 'create'])->name('create');
    Route::get('/modifier/{id}', [AnimalController::class, 'edit'])->name('edit');
    Route::get('/supprimer/{id}', [AnimalController::class, 'delete'])->name('delete');
    Route::get('/{id}', [AnimalController::class, 'display'])->name('details');

});

Route::fallback(function () {
    return view('error.not-found');
});