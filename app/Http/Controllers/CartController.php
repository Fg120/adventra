<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class CartController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function add_to_cart(Product $products, Request $request)
    {
        $user_id = Auth::id();
        $product_id = $products->id;

        $existing_cart = Cart::where('product_id', $product_id)
            ->where('user_id', $user_id)
            ->first();

        if ($existing_cart == null) {
            $request->validate([
                'amount' => 'required|gte:1|lte:' . $products->stock_available,
            ]);
    
            Cart::create([
                'user_id' => $user_id,
                'product_id' => $product_id,
                'amount' => $request->amount,
            ]);
        }
        else {
            $request->validate([
                'amount' => 'required|gte:1|lte:' . ($products->stock_available - $existing_cart->amount),
            ]);

            $existing_cart->update([
                'amount' => $existing_cart->amount + $request->amount,
            ]);
        }

        return Redirect::route('show_cart');
    }

    public function show_cart()
    {
        $user_id = Auth::id();
        $carts = Cart::where('user_id', $user_id)->get();
        // return view('home.show_cart', [
        //     'carts' => $carts,
        // ]);
        return view('home.show_cart', compact('carts'));
    }

    public function update_cart(Cart $cart, Request $request)
    {
        $request->validate([
            'amount' => 'required|gte:1|lte:' . $cart->product->stock_available
        ]);

        $cart->update([
            'amount' => $request->amount
        ]);

        return Redirect::route('show_cart');
    }

    public function delete_cart(Cart $cart)
    {
        $cart->delete();
        return Redirect::route('show_cart');
    }
}
