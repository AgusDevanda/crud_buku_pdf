<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::resource('books', BookController::class);
Route::get('books/{id}/read', [BookController::class, 'read'])->name('books.read');

Route::get('/', function () {
    return view('home');
})->name('home');

