<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        $authors = Author::all();
        return view("authors", compact("authors"));
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
        $author = new Author();
        $author->name = $request->nombre;
        $author->save();
        return redirect()->route("authors.index");
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id){
        $author = Author::find($id);
        return view("authors_edit", compact("author"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id){
        $author = Author::find($id);
        $author->name = $request->nombre;
        $author->save();
        return redirect()->route("authors.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id){
        $author = Author::find($id);
        $author->authorBooks()->delete();
        $author->delete();
        return redirect()->route("authors.index");
    }
}
