<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;

class AlbumsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $albums = Album::all();

        return view('albums.index', compact('albums'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('albums.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'year' => 'nullable|integer|digits:4',
            'times_sold' => 'nullable|integer',
        ]);


        Album::create($validatedData);

        return redirect()->route('albums.index')->with('success', 'Album created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $album = Album::find($id);
        return view("albums.show", compact('album'));
    }

    public function edit($id)
    {
        $album = Album::find($id);

        if (!$album) {
            return redirect()->route('albums.index')->with('error', 'Album not found');
        }

        return view('albums.edit', compact('album'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'year' => 'nullable|integer|digits:4',
            'times_sold' => 'nullable|integer',
        ]);

        $album = Album::find($id);

        if (!$album) {
            return redirect()->route('albums.index')->with('error', 'Album not found');
        }

        $album->update($validatedData);

        return redirect()->route('albums.index')->with('success', 'Album updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $album = Album::find($id);

        if (!$album) {
            return redirect()->route('albums.index')->with('error', 'Album not found');
        }

        $album->delete();

        return redirect()->route('albums.index')->with('success', 'Album deleted successfully');
    }
}

