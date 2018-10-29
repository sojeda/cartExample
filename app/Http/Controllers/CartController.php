<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class CartController extends Controller
{
    public function index()
    {
        $products = session('cart.products');


        foreach ($products as $key => $value) {
            $products[$key]['product'] = Product::find($products[$key]['id']);
            unset($products[$key]['id']);
        }
   
        return view('cart')->with('products', $products);

    }
}
