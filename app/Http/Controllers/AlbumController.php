<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Artist;
use App\Models\Genre;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    public function index()
    {
        $albums = Album::with('artist', 'genre')->get();
        return view('albums.index', compact('albums'));
    }

    public function create()
    {
        $artists = Artist::all();
        $genres = Genre::all();
        return view('albums.create', compact('artists', 'genres'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'album_name' => 'required|string|max:100',
            'date_released' => 'required|date',
            'artist_id' => 'required|exists:artists,id',
            'genre_id' => 'required|exists:genres,id',
        ]);

        Album::create($request->all());

        return redirect()->route('albums.index')->with('success', 'Album created successfully.');
    }

    public function show(Album $album)
    {
        $album->load('artist', 'genre');
        return view('albums.show', compact('album'));
    }

    public function edit(Album $album)
    {
        $artists = Artist::all();
        $genres = Genre::all();
        return view('albums.edit', compact('album', 'artists', 'genres'));
    }

    public function update(Request $request, Album $album)
    {
        $request->validate([
            'album_name' => 'required|string|max:100',
            'date_released' => 'required|date',
            'artist_id' => 'required|exists:artists,id',
            'genre_id' => 'required|exists:genres,id',
        ]);

        $album->update($request->all());

        return redirect()->route('albums.index')->with('success', 'Album updated successfully.');
    }

    public function destroy(Album $album)
    {
        $album->delete();

        return redirect()->route('albums.index')->with('success', 'Album deleted successfully.');
    }
}

