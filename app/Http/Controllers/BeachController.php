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

        // no admin check as this page is for all users 
        
        // beach fetcher
       $beaches = Beach::all();
        // show the beaches
        return view('beaches.index', compact('beaches')); 
    }

    // show the create form
    public function create()
    {
        // check if the user is an admin
        if (auth()->user()->role !== 'admin') {
            abort(403);
        }
        return view('beaches.create');
    }

    // save a new beach to the database
    public function store(Request $request)
    {
        // check if the user is an admin
        if (auth()->user()->role !== 'admin') {
            abort(403);
        }

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
        // no admin check as all users are allowed to view beaches
        return view ('beaches.show', compact('beach'));
    }

    //show the edit form
    public function edit(Beach $beach)
    {
        // check if the user is an admin
        if (auth()->user()->role !== 'admin') {
            abort(403);
        }

        return view ('beaches.edit', compact('beach'));
    }

    // update the beaches
    public function update(Request $request, Beach $beach)
    {
        // check if the user is an admin
        if (auth()->user()->role !== 'admin') {
            abort(403);
        }

        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
            'quality_results' => 'required|url'
        ]);

        // update this specific beach, not all beaches
        $beach->update($request->all());

        return redirect()->route('beaches.index')->with('success', 'Beach updated successfully!');
    }

    // delete any beach
    public function destroy(Beach $beach)
    {
        // check if the user is an admin
        if (auth()->user()->role !== 'admin') {
            abort(403);
        }

        $beach->delete();

        return redirect()->route('beaches.index')->with('success', 'Beach deleted successfully!');
    }
}
