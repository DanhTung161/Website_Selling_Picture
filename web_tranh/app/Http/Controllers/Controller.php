<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use App\Models\Category;
use App\Models\Color;
use App\Models\Material;
use App\Models\Sub_Category;
use App\Models\Tone;
use Illuminate\Support\Facades\View;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
        $cate = Category::all(); // gọi biến toàn cục bên Category.php
        $color = Color::all();
        $material = Material::all();
        $tone = Tone::all();
        $subCategories = Sub_Category::all();
        // foreach ($cate as $key => $value) {
        //     $value->sub = Sub_Category::where('category_id', $value->id)->get();
        // }
        // cách gọi thủ công
        View::share('cate', $cate);
        View::share('color',$color);
        View::share('material',$material);
        View::share('tone',$tone);
        View::share('subCategories',$subCategories);

    }
}