<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $cart = session()->get('cart', []);
        return view('cart', ['cart' => $cart]);
    }

    public function addProduct(Request $request)
    {
        $newProduct = [
            'title' => $request->input('title'),
            'image' => $request->input('image'),
            'description' => $request->input('description'),
            'price' => $request->input('price')
        ];

        session()->push('cart', $newProduct);

        return redirect()->back()->with('success', 'Producto agregado al carrito');
    }

    public function removeProduct($index)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$index])) {
            unset($cart[$index]);
            session()->put('cart', array_values($cart));
            return redirect()->route('cart.index')->with('success', 'Producto eliminado del carrito');
        }

        return redirect()->route('cart.index')->with('error', 'No se pudo eliminar el producto del carrito');
    }


    public function checkout()
    {
        session()->forget('cart');
        return view('payment_confirmation');
    }
}

