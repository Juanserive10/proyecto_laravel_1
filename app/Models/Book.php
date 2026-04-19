<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Author_book;

class Book extends Model
{
     public function authorBooks(){
        return $this->hasMany(Author_book::class, "id_book");
    }
}
