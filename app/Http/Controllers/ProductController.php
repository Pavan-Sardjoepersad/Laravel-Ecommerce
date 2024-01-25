<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('products.index', ['products' => $products]);
    }
 
    public function show($slug){
        $product = Product::where('slug', $slug)->firstOrFail();
        return view('products.show', ['product' => $product]);
    }
}
