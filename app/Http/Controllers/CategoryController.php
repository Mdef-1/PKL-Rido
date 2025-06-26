<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use illuminate\support\str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category = category::latest()->get();
        return view('admin.category.index', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   
        $request->validate([
            'nama' => 'required|string|max:255|unique:categories',
        ]);

        $category = new Category();
        $category->nama = $request->nama;
        $category->slug = str::slug($request->nama);
        $category->save();

        return redirect()->route('admin.category.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('admin.category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'nama' => 'required|string|max:255|unique:categories,id,'. $category->id,
        ]);

        $category->nama = $request->nama;
        $category->slug = str::slug($request->nama);
        $category->save();
         return redirect()->route('admin.category.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('admin.category.index');

    }
}
