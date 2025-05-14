<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Payment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class CheckoutController extends Controller
{
    public function index()
    {
        $cart = session('cart', []);
        return view('checkout', compact('cart'));
    }

    public function store(Request $request)
    {
        $cart = session('cart');
        if (!$cart || count($cart) == 0) {
            return redirect()->back()->with('error', 'Cart is empty.');
        }

        DB::beginTransaction();

        try {
            // Hitung total
            $total = collect($cart)->sum(fn($item) => $item['price'] * $item['quantity']);

            // Simpan Order
            $order = Order::create([
                'user_id' => Auth::id(),
                'order_date' => now(),
                'total_amount' => $total,
                'status' => 'processing',
                'delivery_address' => $request->address,
            ]);

            // Simpan Order Items
            foreach ($cart as $item) {
    OrderItem::create([
        'order_id' => $order->id,
        'product_id' => $item['product_id'],
        'quantity' => $item['quantity'],
        'subtotal' => $item['price'] * $item['quantity'],
    ]);
}


            // Simpan Payment
            Payment::create([
                'order_id' => $order->id,
                'payment_method' => $request->payment_method,
                'amount' => $total,
                'payment_status' => 'paid',
                'address' => $request->address,
            ]);

            DB::commit();

            session()->forget('cart'); // kosongkan cart
            return redirect()->route('checkout.index')->with('success', 'Order placed successfully!');

        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error', 'Checkout failed: ' . $e->getMessage());
        }
    }
}
