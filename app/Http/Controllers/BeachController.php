<?php

namespace App\Http\Controllers;

use App\Models\Beach;
use Illuminate\Http\Request;

class BeachController extends Controller

// the compact shortcut is the same as writing 
// return view('beaches.index', ['beaches' => $beaches]);

{
//   show all beaches
    public function index()
    {
        // beach fetcher
       $beaches = Beach::all();
        // show the beaches
        return view('beaches.index', compact('beaches')); 
    }

    // show the create form
    public function create()
    {
        return view('beaches.create');
    }

    // save a new beach to the database
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
            'quality_results' => 'required|url'
        ]);

        Beach::create($request->all());

        return redirect()->route('beaches.index')->with('success', 'Beach added successfully!');
    }

    // show each beach
    public function show(Beach $beach)
    {
        return view ('beaches.show', compact('beach'));
    }

    //show the edit form
    public function edit(Beach $beach)
    {
        return view ('beaches.edit', compact('beach'));
    }

    // update the beaches
    public function update(Request $request, Beach $beach)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
            'quality_results' => 'required|url'
        ]);

        Beach::update($request->all());

        return redirect()->route('beaches.index')->with('success', 'Beach updated successfully!');
    }

    // delete any beach
    public function destroy(Beach $beach)
    {
        $beach->delete();

        return redirect()->rotue('beaches.index')->with('success', 'Beach deleted successfully!');
    }
}
