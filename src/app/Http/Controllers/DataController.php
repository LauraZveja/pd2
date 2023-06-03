<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class DataController extends Controller
{


    // atgriež 3 nejauši izvēlētas grāmatas
    public function getTopBooks()
    {
        return Book::where('display', true)
            ->inRandomOrder()
            ->take(3)
            ->get();
    }

    // atgriež izvēlētās grāmatas datus
    public function getBook(Book $book)
    {
        return Book::where([
            'id' => $book->id,
            'display' => true,
        ])
            ->firstOrFail();
    }

    //atgriež līdzīgus ierakstus
    //papildus nosacījumu, ja nav atrasts ieraksts, lai rāda, ka šādu ierakstu nav. 
    public function getRelatedBooks(Book $book)
    {
        return Book::where('display', true)
            ->where('id', '<>', $book->id)
            //->where('author_id', $book->author_id)
            ->inRandomOrder()
            ->take(3)
            ->get();
    }
}
