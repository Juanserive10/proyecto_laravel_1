<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author_book;
use App\Models\Author;
use App\Models\Book;

class AuthorBookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        $authors = Author::all();
        $books = Book::all();
        //$author_books = Author_book::all();
        $author_books = Author_book::with(["author", "book"])->get();
        return view("author_books", compact("author_books", "authors", "books"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){
        $author_books = new Author_book();
        $author_books->id_book = $request->book;
        $author_books->id_author = $request->author;
        $author_books->save();
        return redirect()->route("author_books.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id){
        $author_book = Author_book::find($id);
        $authors = Author::all();
        $books = Book::all();
        return view("author_books_edit", compact("author_book", "authors", "books"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id){
        $author_books = Author_book::find($id);
        $author_books->id_book = $request->book;
        $author_books->id_author = $request->author;
        $author_books->save();
        return redirect()->route("author_books.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id){
        $author_books = Author_book::find($id);
        $author_books->delete();
        return redirect()->route("author_books.index");
    }
}
