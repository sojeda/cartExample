<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
    	return view('products', [
    		'products' => Product::paginate(10),
    	]);
    }

    public function addCart(Request $request)
    {    	    	
    	$request->session()->push('cart.products', [
    		'id' => $request->product_id,
    		'stock' => $request->stock,
    	]);

    	return redirect()->back();
    }
}
