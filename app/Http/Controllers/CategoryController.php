<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Request $request){
        $categorys = Category::all();
        return view('Admin.admin_category',compact('categorys'));

    }
    public function store(Request $request){
       
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);
        Category::create([
           'name' => $request->input('name'),
           'description' => $request->input('description'),
        ]);
        return redirect()->route('category.index');
    }
}
