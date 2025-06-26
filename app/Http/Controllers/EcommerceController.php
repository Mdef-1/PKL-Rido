<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class EcommerceController extends Controller
{
    public function index()
    {
        $product = Product::latest()->get();
        $categories = Category::all();
        return view('user.welcome', compact('product', 'categories'));
    }

    public function createOrder(Request $request)
    {
          
    }

    public function myOrders()
    {
        
    }

    public function orderDetail($id)
    {

    }

    public function updateQuantity(Request $request)
    {

    }

    public function removeItem(Request $request)
    {

    }

    public function checkout()
    {
        
    }
}
