<?php

namespace App\Http\Controllers;

use App\Models\Detail_Order;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    function index (Request $request) {

        $carts = Product::where($request->id)->get();
        return view('frontend.page.cart', compact('carts'));
    }
    function addtocart(Request $request) {
        
        
    
    }

    
   
        
   
}