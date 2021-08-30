<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Marque;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Cart;

class ShopController extends Controller
{
    public function index()
    {
        $products = Product::All()->where('status', 1);
        $categories = Category::All();
        $marques = Marque::All();
        return view('shop')->with('products', $products)->with('categories', $categories)->with('marques', $marques);
    }


    public function addtocart($id)
    {
        $product = Product::find($id);

        $oldCart = session()->has('cart') ? session()->get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $id);
        session()->put('cart', $cart);
        //   dd(session()->get('cart'));
        return redirect()->route('cart')->with('by_category', true);
    }


    public function shop($id)
    {
        $product = Product::find($id);

        $oldCart = session()->has('cart') ? session()->get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $id);
        session()->put('cart', $cart);
        //   dd(session()->get('cart'));
        return redirect()->route('shop')->with('by_category', true);
    }


    public function modify_quantity(Request $request, $id)
    {
        $oldCart = session()->has('cart') ? session()->get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->updateQty($id, $request->quantity);
        session()->put('cart', $cart);

        //dd(Session::get('cart'));
        return redirect()->route('cart');
    }


    public function removeItem($product_id)
    {
        $oldCart = session()->has('cart') ? session()->get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->removeItem($product_id);

        if (count($cart->items) > 0) {
            session()->put('cart', $cart);
        } else {
            session()->forget('cart');
        }

        //dd(Session::get('cart'));
        return redirect()->route('cart');
    }

    

}
