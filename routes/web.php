<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BooksController;


Route::get('/', function () {
    return view('index');
});

# Books Panel (Rabbi)
Route::get('/manage/books', [BooksController::class, 'manage'])->name('manage.books.index');
Route::get('/books/create', [BooksController::class, 'create'])->name('manage.books.create');
Route::post('/books', [BooksController::class, 'store'])->name('manage.books.store');
Route::get('/manage/books/{id}/edit', [BooksController::class, 'edit'])->name('manage.books.edit');
Route::put('/books/{id}', [BooksController::class, 'update'])->name('manage.books.update');
Route::delete('/books/{id}', [BooksController::class, 'destroy'])->name('manage.books.destroy');

# Book Trash
Route::get('/books/trashed', [BooksController::class, 'trashed'])->name('books.trashed');
Route::post('/books/trashed/{id}/restore', [BooksController::class, 'trashedRestore'])->name('books.trashed.restore');
Route::post('/books/trashed/{id}/delete', [BooksController::class, 'trashedDestroy'])->name('books.trashed.destroy');


# Books Panel Frontend (Rabbi)
Route::get('/books', [BooksController::class, 'index'])->name('books.index');
Route::get('/books/{id}', [BooksController::class, 'show'])->name('books.show');

# User register/login/logout

// Show Register/Create Form
Route::get('/register', [UserController::class, 'create']);
// Create/Register User
Route::post('/users', [UserController::class, 'store']);
// Logout User
Route::post('/logout', [UserController::class, 'logout']);

// Show Login Form
Route::get('/login', [UserController::class, 'login']);