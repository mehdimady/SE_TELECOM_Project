<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Marque;
use App\Models\Product;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //
    public function article($product_name ){
        $product = Product::where('product_name',$product_name)->first();
        // $product = Product::where('product_marque',$product_marque)->first();
        // $categories = Category::All();
        // $product = Product::where('product_name',$product_name)->first();
        // $marques = Marque::All();
        return view('article')->with('product',$product);
    
}}
