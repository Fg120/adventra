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
    public function checkout(Request $request)
    {
        $user_id = Auth::id();
        $carts = Cart::where('user_id', $user_id)->get();

        if ($carts == null) {
            return Redirect::back();
        }

        ///CREATE ORDER///
        $totals = 0;
        foreach ($carts as $cart) {
            $product = Product::find($cart->product_id);
            $totals += $product->price * $cart->amount;
        }
        $totals = $totals * $request->day;

        $date=date_create("$request->start_date");
        $end_date = date_add($date, date_interval_create_from_date_string("$request->day days"));

        $order = Order::create([
            'user_id' => $user_id,
            'day' => $request->day,
            'start_date' => $request->start_date,
            'end_date' => $end_date,
            'total' => $totals,
        ]);

        ///CREATE TRANSACTIONS///
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

        return Redirect::route('order.show', $order);
    }

    public function show(Order $order)
    {
        $user = Auth::user();
        $admin = $user->is_admin;

        if ($admin || $order->user_id == $user->id) {

            return view('home.show_order', compact('order'));
        }

        return Redirect::route('index_order');
    }


    public function pay(Order $order, Request $request)
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

    public function index()
    {
        $user = Auth::user();

        $orders = Order::where('user_id', $user->id)->get();

        return view('home.index_order', compact('orders'));
    }
}
