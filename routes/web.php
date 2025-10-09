<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BorrowerController;

Route::get('/', function () {
    return redirect()->route('login');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');






//moverments
Route::get('/authors', [AuthorController::class, 'index'])->name('authors.index');
Route::get('/authors/indexs', [AuthorController::class, 'indexs'])->name('authors.indexs');
Route::get('/authors/create', [AuthorController::class, 'create'])->name('authors.create');
Route::post('/authors', [AuthorController::class, 'store'])->name('authors.store');
Route::get('/authors/{author}', [AuthorController::class, 'show'])->name('authors.show');
Route::get('/authors/{author}/edit', [AuthorController::class, 'edit'])->name('authors.edit');
Route::put('/authors/{author}', [AuthorController::class, 'update'])->name('authors.update');
Route::delete('/authors/{author}', [AuthorController::class, 'destroy'])->name('authors.destroy');





//books
Route::get('/books', [AuthorController::class, 'index'])->name('books.index');
Route::get('/books/indexs', [AuthorController::class, 'indexs'])->name('books.indexs');
Route::get('/books/create', [AuthorController::class, 'create'])->name('books.create');
Route::post('/books', [AuthorController::class, 'store'])->name('books.store');
Route::get('/books/{book}', [AuthorController::class, 'show'])->name('books.show');
Route::get('/books/{book}/edit', [AuthorController::class, 'edit'])->name('books.edit');
Route::put('/books/{book}', [AuthorController::class, 'update'])->name('books.update');
Route::delete('/books/{book}', [AuthorController::class, 'destroy'])->name('books.destroy');


//books
Route::get('/boborrowersoks', [AuthorController::class, 'index'])->name('borrowers.index');
Route::get('/borrowers/indexs', [AuthorController::class, 'indexs'])->name('borrowers.indexs');
Route::get('/borrowers/create', [AuthorController::class, 'create'])->name('borrowers.create');
Route::post('/borrowers', [AuthorController::class, 'store'])->name('borrowers.store');
Route::get('/borrowers/{borrower}', [AuthorController::class, 'show'])->name('borrowers.show');
Route::get('/borrowers/{borrower}/edit', [AuthorController::class, 'edit'])->name('borrowers.edit');
Route::put('/borrowers/{borrower}', [AuthorController::class, 'update'])->name('borrowers.update');
Route::delete('/borrowers/{borrower}', [AuthorController::class, 'destroy'])->name('borrowers.destroy');
