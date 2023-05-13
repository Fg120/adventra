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

    public function create(Product $products, Request $request)
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
        } else {
            $request->validate([
                'amount' => 'required|gte:1|lte:' . ($products->stock_available - $existing_cart->amount),
            ]);

            $existing_cart->update([
                'amount' => $existing_cart->amount + $request->amount,
            ]);
        }

        return Redirect::route('cart.show');
    }

    public function show()
    {
        $user_id = Auth::id();
        $carts = Cart::where('user_id', $user_id)->get();
        // dd($carts);

        $date = date("Y-m-d", mktime(0, 0, 0, date("m"), date("d") + 1, date("Y")));
        $date_max = date("Y-m-d", mktime(0, 0, 0, date("m"), date("d") + 14, date("Y")));

        return view('home.show_cart', compact('carts', 'date', 'date_max'));
    }

    public function update(Cart $cart, Request $request)
    {
        $request->validate([
            'amount' => 'required|gte:1|lte:' . $cart->product->stock_available
        ]);

        $cart->update([
            'amount' => $request->amount
        ]);

        return Redirect::route('cart.show');
    }

    public function destroy(Cart $cart)
    {
        $cart->delete();
        return Redirect::route('cart.show');
    }
}
