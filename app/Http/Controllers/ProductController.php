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

    public function addToCart($id){
        $product = Product::findOrFail($id);
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        }
        else{
            $cart[$id] = [
                'name' => $product->name,
                'quantity' => 1,
                'price' => $product->price,
                'slug' => $product->slug,
                'id' => $product->id
            ];
        }

        // dd(session('cart'));
        session()->put('cart', $cart);
        return redirect()->back()->with('added', 'Product added to the cart');

    }

    public function removeFromCart(Request $request, $id)
    {
        $cart = session()->get('cart', []);

        unset($cart[$id]);

        session()->put('cart', $cart);

        return redirect()->back();
    
    }

}
