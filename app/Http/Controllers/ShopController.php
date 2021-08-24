<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Marque;
use App\Models\Product;
use Illuminate\Http\Request;


class ShopController extends Controller
{
    public function index()
    {
        $products = Product::All()->where('status',1);
        $categories = Category::All();
        $marques = Marque::All();
        return view('shop')->with('products',$products)->with('categories',$categories)->with('marques',$marques);
    }

}
