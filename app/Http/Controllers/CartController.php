<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    public function index()
    {
        $cart = session()->get('cart', []);
        return view('cart', compact('cart'));

    }

    public function add(Request $request, $id)
{
    $product = Product::findOrFail($id);
    $size = $request->input('size');
    $quantity = (int) $request->input('quantity', 1);

    $cart = session()->get('cart', []);
    $key = $id . '_' . $size;

    if (isset($cart[$key])) {
        $cart[$key]['quantity'] += $quantity;
    } else {
        $cart[$key] = [
            "product_id" => $product->id,
            "product_name" => $product->product_name,
            "price" => $product->price,
            "image_url" => $product->image_url,
            "quantity" => $quantity,
            "size" => $size,
        ];
    }

    session()->put('cart', $cart);

    return redirect()->back()->with('success', 'Product added to cart!');
}


   public function remove($key)
{
    $cart = session()->get('cart', []);

    if (isset($cart[$key])) {
        unset($cart[$key]);
        session()->put('cart', $cart);
    }

    return redirect()->route('cart.index')->with('success', 'Product removed.');
}

}

