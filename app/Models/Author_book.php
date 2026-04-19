<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Author;
use App\Models\Book;

class Author_book extends Model
{
    public function author(){
        return $this->belongsTo(Author::class, "id_author");
    }

     public function book(){
        return $this->belongsTo(Book::class, "id_book");
    }
}
