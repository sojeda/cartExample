<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class CartController extends Controller
{
    public function index()
    {
        $session_products = session('cart.products');
        $products = [];

        foreach ($session_products as $key => $value) {
            $product = Product::find($session_products[$key]['id']);
            $product->stock = $session_products[$key]['stock'];
            $products[] = $product; 
        }
   
        return view('cart')->with('products', $products);
    }
}
