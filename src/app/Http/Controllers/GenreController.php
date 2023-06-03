<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Http\Requests\GenreRequest;



class GenreController extends Controller
{
    // display all genres
    public function list()
    {
        $items = Genre::orderBy('id', 'asc')->get();
        return view(
            'genre.list',
            [
                'title' => 'Žanri',
                'items' => $items
            ]
        );
    }

    public function create()
    {
        return view(
            'genre.form',
            [
                'title' => 'Pievienot žanru',
                'genre' => new Genre()
            ]
        );
    }

    public function put(GenreRequest $request)
    {
        $genre = new Genre();
        $this->saveGenreData($genre, $request);
        return redirect('/genres');
    }

    public function update(Genre $genre)
    {
        return view(
            'genre.form',
            [
                'title' => 'Rediģēt žanru',
                'genre' => $genre
            ]
        );
    }

    public function patch(Genre $genre, GenreRequest $request)
    {
        $this->saveGenreData($genre, $request);
        return redirect('/genres');
    }

    public function delete(Genre $genre)
    {
        $genre->delete();
        return redirect('/genres');
    }

    private function saveGenreData(Genre $genre, GenreRequest $request)
    {
        $validatedData = $request->validated();
        $genre->fill($validatedData);
        $genre->save();
    }
}
