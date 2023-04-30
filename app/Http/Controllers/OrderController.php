<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class OrderController extends Controller
{
    public function checkout()
    {
        $user_id = Auth::id();
        $carts = Cart::where('user_id', $user_id)->get();

        if ($carts == null)
        {
            return Redirect::back();
        }

        $order = Order::create([
            'user_id' => $user_id
        ]);

        foreach ($carts as $cart) {
            $product = Product::find($cart->product_id);
            $product->update([
                'stock_available' => $product->stock_available - $cart->amount,
            ]);

            Transaction::create([
                'amount' => $cart->amount,
                'product_id' => $cart->product_id,
                'order_id' => $order->id,
            ]);

            $cart->delete();
        }

        return Redirect::route('show_order', $order);
    }

    public function show_order(Order $order)
    {
        $user = Auth::user();
        $admin = $user->is_admin;

        if ($admin || $order->user_id == $user->id) {
            return view('home.show_order', compact('order'));
        }
        
        return Redirect::route('index_order');
    }


    public function submit_payment_receipt(Order $order, Request $request)
    {
        $file = $request->file('payment_receipt');
        $path = time() . '_' . $order->id . '.' . $file->getClientOriginalExtension();

        Storage::disk('local')->put('public/' . $path, file_get_contents($file));

        $order->update([
            'payment_receipt' => $path,
            'status' => 'Menunggu Konfirmasi',
        ]);

        return Redirect::back();
    }
}
