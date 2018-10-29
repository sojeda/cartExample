<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $products = session('cart.products');
        
        return view('cart')->with('products', $products);

    }
}
