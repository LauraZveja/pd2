<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;

class AuthorController extends Controller
{
    // display all authors
    public function list(){
        //
        $items = Author::orderBy('name', 'asc')->get();

        return view('author.list', 
        ['title' => 'Autori',
        'items' => $items,
        ]
    
    );

    }
}
