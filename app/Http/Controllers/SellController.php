<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class SellController extends Controller
{
    public function sell()
    {
        $products = Product::all();

        $categories = Category::with('products')->get();

        return view('sell.index', compact('products', 'categories'));
    }

}
