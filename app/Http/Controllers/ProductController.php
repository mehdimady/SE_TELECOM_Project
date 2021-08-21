<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    $values =  $request->validate([
        'name'=>[ 'distinct:strict', 'distinct:strict'],
    'email'=>[]]);
    Product::create()
}
