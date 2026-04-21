<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\AuthorBookController;

Route::get('/', function () {
    return view('welcome');
});

//Rutas de Book
Route::get("/books",[BookController::class, "index"])->name("books.index");
Route::post("/books",[BookController::class, "store"])->name("books.store");
Route::get("/books/{id}",[BookController::class, "edit"])->name("books.edit");
Route::delete("/books/{id}",[BookController::class, "destroy"])->name("books.destroy");
Route::put("/books/{id}",[BookController::class, "update"])->name("books.update");

//Rutas de Author
Route::get("/authors",[AuthorController::class, "index"])->name("authors.index")->middleware("auth","role:Estudiante");
Route::post("/authors",[AuthorController::class, "store"])->name("authors.store");
Route::get("/authors/{id}",[AuthorController::class, "edit"])->name("authors.edit");
Route::delete("/authors/{id}",[AuthorController::class, "destroy"])->name("authors.destroy");
Route::put("/authors/{id}",[AuthorController::class, "update"])->name("authors.update");

//Rutas de author_books
Route::get("/author_books",[AuthorBookController::class, "index"])->name("author_books.index");
Route::post("/author_books",[AuthorBookController::class, "store"])->name("author_books.store");
Route::get("/author_books/{id}",[AuthorBookController::class, "edit"])->name("author_books.edit");
Route::delete("/author_books/{id}",[AuthorBookController::class, "destroy"])->name("author_books.destroy");
Route::put("/author_books/{id}",[AuthorBookController::class, "update"])->name("author_books.update");

Route::get("/prueba",[AuthorController::class, "prueba"])->name("author_prueba.index")->middleware("example");
Route::get("/prueba2",[BookController::class, "prueba2"])->name("book_prueba2.index");

Route::get('/grafica', function () {
    return view('grafica');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
