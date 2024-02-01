<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Color;
use App\Models\Material;
use App\Models\Order;
use App\Models\Product;
use App\Models\Tone;
use Doctrine\DBAL\Schema\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    function index (Request $request) {
        $product = $this->filter_products();
        return view('frontend.page.home', compact('product'));
    }
    

    function filter_products() {
        $categoryId = request()->get('category_id');
        $subcategoryId = request()->get('subcategory_id');
        $colorId = request()->get('color_id');
        $materialId = request()->get('material_id');
        $toneId = request()->get('tone_id');
        $products = Product::all();
        if ($categoryId) {
            $products = DB::table('products')
                        ->join('sub_categories', 'sub_categories.id', '=', 'products.sub_category_id')
                        ->join('categories', 'categories.id', '=', 'sub_categories.category_id')
                        ->where('categories.id', $categoryId)
                        ->get();
        }

        if ($subcategoryId) {
            $products = DB::table('products')
                        ->where('sub_category_id', $subcategoryId)
                        ->get();
        }

        if ($colorId) {
            $products = DB::table('products')
                        ->where('color_id', $colorId)
                        ->get();
        }

        if ($materialId) {
            $products = DB::table('products')
                        ->where('material_id', $materialId)
                        ->get();
        }
        
        if ($toneId) {
            $products = DB::table('products')
                        ->where('tone_id', $toneId)
                        ->get();
        }
        return $products;
    }

    function show_about() {
        return view("frontend.page.about");
    }
}