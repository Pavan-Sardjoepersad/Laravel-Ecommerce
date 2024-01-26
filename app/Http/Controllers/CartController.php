<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class CartController extends Controller
{
    //Method to view the contents of the cart
    public function index()
    {
        // get all products in cart
        $cartItems = session()->get('cart', collect());
        // dd($cartItems);
        return view('cart.index', compact('cartItems'));
    }

    // add a product to the card
    public function add(Product $product)
    {
        $cartItems = session()->get('cart', collect());

        // check if the product is already in the cart
        $existingItem = $cartItems->where('product_id', $product->id)->first();

        if ($existingItem) 
        {
            // increment the quantity if product is already in cart
            $existingItem['quantity']++; // Optioneel(Werkt allebei): $existingItem->quantity++; 
        }
        else
        {
            // add a new item to the cart
            $cartItems->push([
                'product_id' => $product->id,
                'quantity' => 1,
            ]);
        }

        // store cart items in cart
        session(['cart' => $cartItems]);

        return redirect()->route('cart.index')->with('success', 'Product added to cart.');
    }
    
    // update the quantity of a product in the cart
    public function update(Product $product, Request $request)
    {
        $cartItems = session()->get('cart', collect());

        // find the cart item for the specified product 
        $item = $cartItems->where('product_id', $product->id)->first();

        // validate the requested data
        if ($item) {
            $this->validate($request,[
                'quantity' => 'required|numeric|min:1',
            ]);

            // update the quantity of product
            $item['quantity'] = $request->quantity;
            
            session(['cart' => $cartItems]);

            return redirect()->route('cart.index')->with('Succes', 'Cart updated');
        }

        // Display error when no product is found 
        return redirect()->route('cart.index')->with('Error', 'Product not found in cart');
    }

    // remove product from cart
    public function remove(Product $product)
    {
        $cartItems = session()->get('cart', collect());
        // Remove the cart item for the specified product
        $cartItems = $cartItems->reject(function ($item) use ($product) {
            return $item['product_id'] == $product->id;
        });

        session(['cart' => $cartItems]);

        return redirect()->route('cart.index')->with('Succes', 'Product has been removed from cart');
    }
}
