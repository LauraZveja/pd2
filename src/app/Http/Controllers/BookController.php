<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Author;

class BookController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //display all books

     // display all books
     public function list()
     {
         $items = Book::orderBy('name', 'asc')->get();
 
         return view(
             'book.list',
             [
                 'title' => 'Grāmatas',
                 'items' => $items,
             ]
         );
     }

}
