<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    public function getIndex()
    {
        $products = Product::all();
        return view('layouts.shop.index', ['products' => $products]);
    }

    public function getAddToCart(Request $request, $id)
    {
        $product = Product::find($id);
        $prevCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($prevCart);
        $cart->add($product, $product->id);

        $request->session()->put('cart', $cart);
        // dd($request->session()->get('cart'));
        return redirect()->route('product.index');
    }

    public function getCart()
    {
        if (!Session::has('cart')) {
            return view('layouts.shop.shopping-cart', [
                'products' => null
            ]);
        }
        $prevCart = Session::get('cart');
        $cart = new Cart($prevCart);
        return view('layouts.shop.shopping-cart', [
            'products' => $cart->items,
            'totalPrice' => $cart->totalPrice
        ]);
    }
}
