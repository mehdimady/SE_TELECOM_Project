<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Mail\SendMail;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class OrdersController extends Controller
{
    //
    public function orders()
    {
        $orders=Order::all();
        $orders->transform(function($order,$key)
        {
            $order->panier =unserialize($order->panier);
            return $order;
        });
        // dd($orders);
        return view('admin.orders')->with('orders',$orders);
    }


    public function cordonees()
    {
        return view('cordonees');
    }


    public function livraison(Request $request)
    {
        $oldCart = session()->has('cart') ? session()->get('cart') : null;
        $cart = new Cart($oldCart);

        $order = new Order();
        $livraison_id=time();
      
        $order->nom = $request->input('nom');
        $order->prenom = $request->input('prenom');
        $order->adresse = $request->input('adresse');
        $order->zipcode = $request->input('zipcode');
        $order->complement = $request->input('complement');
        $order->telephone = $request->input('telephone');
        $order->ville = $request->input('ville');
        $order->email = $request->input('email');
        $order->pays = $request->input('pays');
        $order->panier = serialize($cart);
        $order->livraison_id = $livraison_id;

        $order->save();
        session()->forget('cart');
        $orders=Order::where('livraison_id',$livraison_id)->get();
        $orders->transform(function($order,$key){
            $order->panier=unserialize($order->panier);
            return $order;
        });

        Mail::to($order->email)->send(new SendMail($orders));

        return redirect()->route('paiement');
    }

    // ->with('status', "Votre commande à été effectuée avec succès")

}
