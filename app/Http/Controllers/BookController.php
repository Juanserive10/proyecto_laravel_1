<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        $books = Book::all();
        return view("books", compact("books"));
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
        $book = new Book();
        $book->name = $request->titulo;
        $book->price = $request->precio;
        $book->save();
        return redirect()->route("books.index");
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
    public function edit($id){
        $book = Book::find($id);
        return view("books_edit", compact("book"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id){
        $book = Book::find($id);
        $book->name = $request->titulo;
        $book->price = $request->precio;
        $book->save();
        return redirect()->route("books.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id){
        $book = Book::find($id);
        if($book->authorBooks()->exists()){
            return redirect()->route("books.index")->with("error", "No se puede eliminar el Libro porque tiene registros asociados en otras tablas");
        }
        $book->delete();
        return redirect()->route("books.index");
    }
}
