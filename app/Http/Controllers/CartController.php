<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;

class CartController extends Controller
{
    public function index()
    {
        // if(session()->has('cart')){
        //     return redirect()->route('cart');
        // }

        $oldCart = session()->has('cart') ? session()->get('cart') : null;
        $cart = new Cart($oldCart);
        return view('cart', ['products' => $cart->items ?? []]);
    }
}
