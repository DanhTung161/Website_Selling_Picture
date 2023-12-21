<?php

namespace App\Http\Controllers;

use App\Models\Color;
use App\Models\Product;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    function show (Request $request) {
        $detail = Product::find($request->id);
        $colors = Color::get();
        return view('frontend.page.detail_product', compact('detail', 'colors'));
    }
}