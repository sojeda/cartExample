<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class CartController extends Controller
{
    public function index()
    {
        $products = [];
        $session_products = session('cart.products', $products);

        foreach ($session_products as $key => $value) {
            $product = Product::find($session_products[$key]['id']);
            $product->stock = $session_products[$key]['stock'];
            $products[] = $product; 
        }
   
        return view('cart')->with('products', $products);
    }

    public function remove($id, Request $request)
    {   
        $products = collect($request->session()->get('cart.products'));

        $products->filter(function($value, $key) use ($id) {
            return $value['id'] == $id;
        })->keys()->each(function($item) use ($request) {
            $request->session()->forget("cart.products.$item");
        });
        
        return redirect()->back();
    }

    public function removeAll(Request $request){
        $request->session()->flush();
        return redirect()->back();
    }
}
