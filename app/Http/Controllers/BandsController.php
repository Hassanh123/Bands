<?php

namespace App\Http\Controllers;
use App\Models\Band;
use Illuminate\Http\Request;

class BandsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bands = Band::all();

        return view('bands.index', compact('bands'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('bands.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'genre' => 'required|max:100',
            'founded' => 'nullable|integer|digits:4',
            'active_till' => 'nullable|string|max:255',
        ]);

        Band::create($validatedData);

        return redirect()->route('bands.index')->with('success', 'Band created successfully!');
    }


    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $band = Band::find($id);
        return view("bands.show", compact('band'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $band = Band::find($id);

        if (!$band) {
            return redirect()->route('bands.show')->with('error', 'Band not found');
        }
        dd($band);
        return view('bands.edit', compact('band'));
    }

    public function update(Request $request, $id)
    {
        // Add this line to check if the method is being called


        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'genre' => 'required|max:100',
            'founded' => 'nullable|integer|digits:4',
            'active_till' => 'nullable|string|max:255',
        ]);

        $band = Band::find($id);

        if (!$band) {
            return redirect()->route('bands.index')->with('error', 'Band not found');
        }

        $band->update($validatedData);

        return redirect()->route('bands.index')->with('success', 'Band updated successfully');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $band = Band::find($id);

        if (!$band) {
            return redirect()->route('bands.index')->with('error', 'Band not found');
        }

        $band->delete();

        return redirect()->route('bands.index')->with('success', 'Band deleted successfully');
    }
}

