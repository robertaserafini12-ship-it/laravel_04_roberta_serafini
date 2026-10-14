<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;

// Rotta per La Homepage
Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

// Rotta per La Lista dei film
Route::get('/movies', [ArticleController::class, 'index'])->name('movie.index');

// Rotta per il dettaglio del singolo film
Route::get('/movies/{id}', [ArticleController::class, 'show'])->name('movie.show');