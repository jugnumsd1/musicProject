<?php

namespace App\Http\Controllers;

use App\Models\Writer; // Correctly referencing the Writer model
use Illuminate\Http\Request;

class WritersController extends Controller
{
    // Display a listing of the writers
    public function index()
    {
        // Fetch all writers from the database
        $writers = Writer::all();

        // Pass writers to the view
        return view('admin.admin_writer', compact('writers'));
    }

    // Store a newly created writer in the database
    public function store(Request $request)
    {
        // Validation
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:writers,email',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'date' => 'required|date',
            'description' => 'nullable|string',
        ]);

        // Handle image upload
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
        }

        // Create a new writer in the database
        Writer::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'image' => $imagePath,
            'date' => $request->input('date'),
            'description' => $request->input('description'),
        ]);

        // Redirect back to the writers page with a success message
        return redirect()->route('writers.index')->with('success', 'Writer added successfully!');
    }

    // Show a single writer's details
    public function show($id)
    {
        // Fetch the writer by ID
        $writer = Writer::findOrFail($id);

        // Pass the writer data to the view
        return view('admin.admin_writer_show', compact('writer'));
    }
public function update(Request $request ,$id){
    $validated=$request->validate([
      'name' => 'required|string|max:255',
      'email' => 'required|email|unique:writers,email,' . $id,
      'image' => 'nullable|image|mimes:png,jpg',
      'description' => 'nullable|string'
    ]);
    $writers = Writer::findOrFail($id);
  if($request->hasfile('image')){
    if ($writer->image) {
        \storage::delete('public/'.$wrtier->image);
    }
    $imagePath=$request->file('image')->store('images', 'public');
  }
  else {
    $imagePath = $writers->image; 
  }
  $writers->update([
    'name' => $validated['name'],
    'email' => $validated['email'],
    'image' => $imagePath,
    'description' => $validated['description'],
  ]);
  return redirect()->route('writers.index')->with('success', 'User updated successfully!');
}
    // Delete a writer
    public function destroy($id)
    {
        // Fetch the writer by ID
        $writer = Writer::findOrFail($id);

        // Delete the image if it exists
        if ($writer->image) {
            \Storage::delete('public/' . $writer->image);
        }

        // Delete the writer record
        $writer->delete();

        // Redirect back to the writers page with a success message
        return redirect()->route('writers.index')->with('success', 'Writer deleted successfully!');
    }
}
