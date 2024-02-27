<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use App\Models\Transaction;
use DateTime;
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

    public function pickup(Request $request, $id)
    {
        $order = Order::find($id);
        $order->update([
            'status' => 'Dipick Up',
        ]);

        Alert::success('Order telah dipick up');
        return redirect()->route('admin.order.index');
    }

    public function edit($id)
    {
        $order = Order::find($id);

        $date1 = new DateTime($order->end_date);
        $date2 = new DateTime($order->start_date);
        $day = $date1->diff($date2)->format("%d");

        $date = date("Y-m-d", mktime(0, 0, 0, date("m"), date("d"), date("Y")));

        return view('admin.order.edit', compact('order', 'day', 'date'));
    }

    public function destroy($id)
    {
        $order = Order::find($id);

        foreach ($order->transactions as $transaction) {
            $product = Product::find($transaction->product_id);
            $product->update([
                'stock_available' => $product->stock_available + $transaction->amount,
            ]);
        }

        foreach ($order->transactions as $trash) {
            Product::destroy($trash);
        }
        Order::destroy($id);

        Alert::success('Order berhasil dihapus!');
        return redirect()->route('admin.order.index');
    }
}
