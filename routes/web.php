<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/authors",[AuthorController::class, "index"])->name("authors.index");
Route::post("/authors",[AuthorController::class, "store"])->name("authors.store");
Route::get("/authors/{id}",[AuthorController::class, "edit"])->name("authors.edit");
Route::delete("/authors/{id}",[AuthorController::class, "destroy"])->name("authors.destroy");
Route::put("/authors/{id}",[AuthorController::class, "update"])->name("authors.update");