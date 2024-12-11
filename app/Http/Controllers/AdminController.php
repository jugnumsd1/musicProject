<?php

namespace App\Http\Controllers;

use App\Models\User; // Import the User model
use Illuminate\Contracts\View\View; // Import View for type hinting
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display the admin home page.
     */
    public function index(): View
    {
        return view('Admin.admin_home');
    }

    /**
     * Display the admin panel with user count.
     */
    public function panel(): View
    {
        $userCount = User::count(); // Get the user count
        return view('Admin.admin_panel', compact('userCount'));
    }

    /**
     * Display the release page.
     */
    public function release(): View
    {
        return view('Admin.admin_release');
    }

    /**
     * Display the album page.
     */
    public function album(): View
    {
        return view('Admin.admin_album');
    }

    /**
     * Display the category page.
     */
    public function category(): View
    {
        return view('Admin.admin_category');
    }

    /**
     * Display the writer page.
     */
    public function writer(): View
    {
        return view('Admin.admin_writer');
    }

    /**
     * Display the singer page.
     */
    public function singer(): View
    {
        return view('Admin.admin_singer');
    }

    /**
     * Display the music page.
     */
    public function music(): View
    {
        return view('Admin.admin_music');
    }

    /**
     * Display the new user page.
     */
    public function newuser(): View
    {
        return view('Admin.admin_newuser');
    }

    /**
     * Display the detail page.
     */
    public function detail(): View
    {
        return view('Admin.admin_detail');
    }
    public function newindex()
    {
        $artists = User::all();
        return view('Admin.admin_artist', compact('artists'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:artists,email',
            'image' => 'nullable|image|mimes:jpeg,png,jpg',
            'addsong' => 'required|mimes:mp3,wav',
        ]);

        $imagePath = $request->file('image') ? $request->file('image')->store('artists/images', 'public') : null;
        $songPath = $request->file('addsong')->store('artists/songs', 'public');

        Artist::create([
            'name' => $request->name,
            'email' => $request->email,
            'image' => $imagePath,
            'addsong' => $songPath,
        ]);

        return redirect()->back()->with('success', 'Artist added successfully.');
    }
}
