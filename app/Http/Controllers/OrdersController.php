<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Mail\SendMail;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Stripe\Charge;
use Stripe\Stripe;

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
        $livraison_id=time();
      
        $order_info=  [ "nom" => $request->input('nom'),
        "prenom" => $request->input('prenom'),
        "adresse" => $request->input('adresse'),
        "zipcode" => $request->input('zipcode'),
        "complement" => $request->input('complement'),
        "telephone" => $request->input('telephone'),
        "ville" => $request->input('ville'),
        "email" => $request->input('email'),
        "pays" => $request->input('pays'),
        "panier" => serialize($cart),
        "livraison_id" => $livraison_id];
        session()->put('order_info',$order_info );
// dd(session()->get('order_info'));
        return view('paiement');
    }


    // ->with('status', "Votre commande à été effectuée avec succès")
    public function paiement(Request $request)
    {
        $oldCart = session()->has('cart') ? session()->get('cart') : null;
        $cart = new Cart($oldCart);
       Stripe::setApiKey('sk_test_51JUB8vE35riOwZsqkS6bkT3ndLJl5NV0FwWvvrZTOVRPEX2Nv2IYx822flmwYiLoVpKAWE3BmbMwCNhgPealDuO200nqTgrJ95');
       
       
       try{


                 $charge=Charge::create(array(
                    "amount" => $cart->totalPrice *100,
                    "currency"=>"usd",
                    "source"=>$request->input('stripeToken'), // obtained with Stripe.js
                    "description"=> "Test Charge"
                ));
    
        }catch(\Exception $e){
            session()->put('error',$e->getMessage());
            // (dd($e));
             return redirect()->route('paiement');
        }
        



        $order = new Order();
        $order_info=session()->get('order_info');
        $order->nom = $order_info['nom'];
        $order->prenom =$order_info['prenom'];
        $order->adresse = $order_info['adresse'];
        $order->zipcode = $order_info['zipcode'];
        $order->complement = $order_info['complement'];
        $order->telephone = $order_info['telephone'];
        $order->ville = $order_info['ville'];
        $order->email = $order_info['email'];
        $order->pays = $order_info['pays'];
        $order->panier = $order_info["panier"];
        $order->livraison_id =$order_info['livraison_id'] ;
        $order->save();
      
        session()->forget('cart');
        $orders = Order::where('livraison_id', $order->livraison_id)->get();
        $orders->transform(function ($order, $key) {
        $order->panier = unserialize($order->panier);
        return $order; });

        Mail::to($order->email)->send(new SendMail($orders));
        return redirect()->route('success')->with('status','votre paiement a bien été pris en compte');
    }
}



// $order = new Order();
// $livraison_id = time();

// $order->nom = $request->input('nom');
// $order->prenom = $request->input('prenom');
// $order->adresse = $request->input('adresse');
// $order->zipcode = $request->input('zipcode');
// $order->complement = $request->input('complement');
// $order->telephone = $request->input('telephone');
// $order->ville = $request->input('ville');
// $order->email = $request->input('email');
// $order->pays = $request->input('pays');
// $order->panier = serialize($cart);
// $order->livraison_id = $livraison_id;

// $order->save();
// session()->forget('cart');
// $orders = Order::where('livraison_id', $livraison_id)->get();
// $orders->transform(function ($order, $key) {
//     $order->panier = unserialize($order->panier);
//     return $order;
// });

// Mail::to($order->email)->send(new SendMail($orders));

// return redirect()->route('paiement');
// }


// $order_info=  [ "nom" => $request->input('nom'),
// "prenom" => $request->input('prenom'),
// "adresse" => $request->input('adresse'),
// "zipcode" => $request->input('zipcode'),
// "complement" => $request->input('complement'),
// "telephone" => $request->input('telephone'),
// "ville" => $request->input('ville'),
// "email" => $request->input('email'),
// "pays" => $request->input('pays'),
// "panier" => serialize($cart),
// "livraison_id" => $livraison_id];
// session()->put('order_info',$order_info );
 
