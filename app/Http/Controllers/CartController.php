<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class CartController extends Controller
{
    //Method to view the contents of the cart
    public function viewCart(){
        $cartItems = auth()->user()->cartItems;

        return view('cart.index', compact('cartItems'));
    }

    // Method to add a product to the cart
    public function addToCart(Product $product){
        $user = auth()->user();

        $cartItem = $user->cartItems()->where('product_id', $product->id)->first();


    }
}
