<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Author;
use App\Models\Genre;
use App\Http\Requests\BookRequest;

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
        $items = Book::orderBy('id', 'asc')->get();

        return view(
            'book.list',
            [
                'title' => 'Grāmatas',
                'items' => $items,
            ]
        );
    }

    public function create()
    {
        $authors = Author::orderBy('name', 'asc')->get();
        $genres = Genre::orderBy('id', 'asc')->get();
        return view(
            'book.form',
            [
                'title' => 'Pievienot jaunu grāmatu',
                'book' => new Book(),
                'authors' => $authors,
                'genres' => $genres,
            ]
        );
    }

    public function delete(Book $book)
    {
        $book->delete();
        return redirect('/books');
    }

    // display book update form
    public function update(Book $book)
    {
        $authors = Author::orderBy('id', 'asc')->get();
        $genres = Genre::orderBy('id', 'asc')->get();

        return view(
            'book.form',
            [
                'title' => 'Rediģēt Grāmatu',
                'book' => $book,
                'authors' => $authors,
                'genres' => $genres,

            ]
        );
    }

    private function saveBookData(Book $book, BookRequest $request)
    {
        $validatedData = $request->validated();

        $book->fill($validatedData);
        $book->display = (bool) ($validatedData['display'] ?? false);
        if ($request->hasFile('image')) {
            $uploadedFile = $request->file('image');
            $extension = $uploadedFile->clientExtension();
            $name = uniqid();
            $book->image = $uploadedFile->storePubliclyAs(
                '/',
                $name . '.' . $extension,
                'uploads'
            );
        }
        $book->save();
    }

    public function put(BookRequest $request)
    {
        $book = new Book();
        $this->saveBookData($book, $request);
        return redirect('/books');
    }
    public function patch(Book $book, BookRequest $request)
    {
        $this->saveBookData($book, $request);
        return redirect('/books/update/' . $book->id);
    }
}

