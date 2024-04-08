<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route; 
 
Route::get('/', [BookController::class, 'index'])->name('books.index');
Route::get('/create', [BookController::class, 'create'])->name('books.create');
Route::post('/create', [BookController::class, 'store'])->name('books.store');

Route::get('/search', [BookController::class, 'search'])->name('books.search');