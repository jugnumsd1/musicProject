<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artist;
use Illuminate\Support\Facades\View;

use Illuminate\Support\Facades\Storage;

class ArtistController extends Controller
{
   public function index(){
    $artists = Artist::all();
    return view('artist.artist_add' , compact('artists'));

   }
   public function store(Request $request)
   {
      
       $request->validate([
           'name' => 'required|string|max:255',
           'email' => 'required|string|email',
           'image' => 'nullable|image|mimes:png,jpg,jpeg',
           'addsong' => 'nullable|file|mimes:mp3,wav,ogg',
       ]);
   
     
       $imagePath = null;
       if ($request->hasFile('image')) {
           $imagePath = $request->file('image')->store('images', 'public');
       }
   
    
       $audioPath = null;
       if ($request->hasFile('addsong')) {
           $audioPath = $request->file('addsong')->store('songs', 'public');
       }
   
   
       $artists= Artist::create([
           'name' => $request->input('name'),
           'email' => $request->input('email'),
           'image' => $imagePath,
           'addsong' => $audioPath,
       ]);
       $artist->save();
   
       return redirect()->route('artists.index')->with('success', 'Artist added successfully!');
   }
}