<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

Route::get('/', [PublicController::class, 'home'])->name('homepage');
Route::get('/articoli', [PublicController::class, 'index'])->name('articles.index');
Route::get('/articolo/{id}', [PublicController::class, 'show'])->name('articles.show');