<?php

namespace App\Http\Controllers;

use App\Models\Newuser;  
use Illuminate\Http\Request;
use Illuminate\View\View;


class NewuserController extends Controller
{
 
   
    public function index(): View
    {
       
        $newusers = Newuser::all();  
     
        // Return the view with newuser data
        return view('admin.admin_newuser', compact('newusers'));
    }

    // Store method to create a new user
    public function store(Request $request)
    {
        // Validate incoming request data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:newuser,email',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',  // File validation
            'description' => 'nullable|string',
        ]);

        // Handle the image upload
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
        } else {
            $imagePath = null;  // If no image is uploaded, set it to null
        }

        // Create a new Newuser instance and save to the database
        $newuser = Newuser::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'image' => $imagePath,  // Save the image path
            'description' => $validated['description'],
        ]);

        // Redirect back to the users list or any other page
        return redirect()->route('newuser.index')->with('success', 'User created successfully!');
    }

    // Show a single user (optional)
    public function show($id)
    {
        $newuser = Newuser::findOrFail($id);
        return view('admin.admin_newuser_show', compact('newuser'));
    }

    // Update method to edit user details
    public function update(Request $request, $id)
    {
        // Validate incoming request data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:newuser,email,' . $id,
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'nullable|string',
        ]);

        $newuser = Newuser::findOrFail($id);

        // Handle the image upload (only if a new image is uploaded)
        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if ($newuser->image) {
                \Storage::delete('public/' . $newuser->image);
            }
            $imagePath = $request->file('image')->store('images', 'public');
        } else {
            $imagePath = $newuser->image;  // Keep the old image if no new one is uploaded
        }

        // Update the user's data
        $newuser->update([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'image' => $imagePath,
            'description' => $validated['description'],
        ]);

        // Redirect back with success message
        return redirect()->route('newuser.index')->with('success', 'User updated successfully!');
    }

    // Delete method to remove a user
    public function destroy($id)
    {
        $newuser = Newuser::findOrFail($id);

        // Delete the user's image if it exists
        if ($newuser->image) {
            \Storage::delete('public/' . $newuser->image);
        }

        // Delete the user from the database
        $newuser->delete();

        return redirect()->route('newuser.index')->with('success', 'User deleted successfully!');
    }
}
