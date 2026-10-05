<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

// Homepage
Route::get('/', [ArticleController::class, 'homepage'])->name('homepage');

// Indice articoli
Route::get('/articoli', [ArticleController::class, 'index'])->name('articles.index');

// Dettaglio articolo
Route::get('/articolo/{id}', [ArticleController::class, 'show'])->name('articles.show');