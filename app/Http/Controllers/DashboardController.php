<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\User;


class DashboardController extends Controller
{
    public function index() {
    
        $data = [
            'totalProduct' => Product::count(),
            'totalCategory' => Category::count(),
            'totalUser' => User::count(),
            'totalOrder' => 100,
        ];

    return view('admin.index', compact('data'));
    }
}
