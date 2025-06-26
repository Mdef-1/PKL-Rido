<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\support\Str;
use Illuminate\support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Product::with('category')->orderBy('id', 'desc')->get();
        return view('admin.product.index', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.product.create', compact('categories'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255|unique:products',
            'deskripsi' => 'required|string',
            'harga' => 'required|numeric|min:0',
            'stok' => 'required|integer|min:0',
            'category_id' => 'required|exists:categories,id',
            'gambar' => 'nullable|image|mimes:jpg,png,gif,webp|max:2048'
        ]);
        $gambarPath = null;
        if ($request->hasFile('gambar')) {
            $gambarPath = $request->file('gambar')
                ->store('product', 'public');
        }

        $product = new Product();
        $product->nama = $request->nama;
        $product->slug = str::slug($request->nama);
        $product->deskripsi = $request->deskripsi;
        $product->harga = $request->harga;
        $product->stok = $request->stok;
        $product->category_id = $request->category_id;
        $product->gambar = $gambarPath;
        $product->save();
        return redirect()->route('admin.product.index');
        
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('admin.product.edit', compact('categories', 'product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'nama' => 'required|string|max:255|unique:products,nama,'. $product->id,
            'deskripsi' => 'required|string|max:255',
            'harga' => 'required|numeric|min:0',
            'stok' => 'required|integer|min:0',
            'category_id' => 'required|exists:categories,id',
            'gambar' => 'nullable|image|mimes:jpg,png,gif,webp|max:2048'
        ]);

        $gambarPath = $product->gambar;
        if ($request->hasFile('gambar')) {
            if($product->gambar) {
                Storage::disk('public')->delete($product->gambar);
            }
            $gambarPath = $request->file('gambar')->store('product', 'public');
        }
        
        $product->nama = $request->nama;
        $product->slug = str::slug($request->nama);
        $product->deskripsi = $request->deskripsi;
        $product->harga = $request->harga;
        $product->stok = $request->stok;
        $product->category_id = $request->category_id;
        $product->gambar = $gambarPath;
        $product->save();
        
        return redirect()->route('admin.product.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        if($product->gambar) {
                Storage::disk('public')->delete($product->gambar);
            }
            $product->delete();

        return redirect()->route('admin.product.index');
            
    }
}
