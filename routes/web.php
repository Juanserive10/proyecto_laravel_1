<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;

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
Route::get("/authors",[AuthorController::class, "index"])->name("authors.index");
Route::post("/authors",[AuthorController::class, "store"])->name("authors.store");
Route::get("/authors/{id}",[AuthorController::class, "edit"])->name("authors.edit");
Route::delete("/authors/{id}",[AuthorController::class, "destroy"])->name("authors.destroy");
Route::put("/authors/{id}",[AuthorController::class, "update"])->name("authors.update");