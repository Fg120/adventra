<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        return view('admin.order.index', compact('orders'));
    }

    public function confirm(Request $request, $id)
    {
        $order = Order::find($id);
        $order->update([
            'status' => 'Terkonfirmasi',
        ]);

        Alert::success('Order berhasil dikonfirmasi');
        return redirect()->route('admin.order.index');
    }

    public function complete(Request $request, $id)
    {
        // $orders = Order::all();
        // $user_id = $orders->user_id;
        // $carts = Cart::where('user_id', $user_id)->get();

        // $order = Order::create([
        //     'user_id' => $user_id
        // ]);

        $order = Order::find($id);
        foreach ($order->transactions as $transaction) {
            $product = Product::find($transaction->product_id);
            $product->update([
                'stock_available' => $product->stock_available + $transaction->amount,
            ]);
        }
        $order->update([
            'status' => 'Selesai',
        ]);

        Alert::success('Order telah diselesaikan');
        return redirect()->route('admin.order.index');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $order = Order::find($id);
        // $total_price = $order->product->price * $order->amount;
        return view('admin.order.edit', compact('order'));
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
