<?php

namespace App\Http\Controllers;

use App\Models\Color;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index (Request $request) {
        $homes = Product::get();
        $colors = Color::get();
        return view('frontend.page.home', compact('homes','colors'));
    }
    
}