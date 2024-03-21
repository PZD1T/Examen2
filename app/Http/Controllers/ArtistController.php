<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class ArtistController extends Controller
{
    public function index()
    {
        $artists = Artist::all();
        return view('artists.index', compact('artists'));
    }

    public function create()
    {
        return view('artists.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'artist_name' => 'required|string|max:255',
        ]);

        Artist::create($request->all());

        return redirect()->route('artists.index')->with('success', 'Artist created successfully.');
    }

    public function show(Artist $artist)
    {
        return view('artists.show', compact('artist'));
    }

    public function edit(Artist $artist)
    {
        return view('artists.edit', compact('artist'));
    }

    public function update(Request $request, Artist $artist)
    {
        $request->validate([
            'artist_name' => 'required|string|max:255',
        ]);

        $artist->update($request->all());

        return redirect()->route('artists.index')->with('success', 'Artist updated successfully.');
    }

    public function destroy(Artist $artist)
    {
        $artist->delete();

        return redirect()->route('artists.index')->with('success', 'Artist deleted successfully.');
    }
}

