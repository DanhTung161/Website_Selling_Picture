<?php

namespace App\Http\Controllers\Admin;

use App\Models\Sub_Category;
use Illuminate\Http\Request;

class Sub_CategoryController extends Controller
{
    function show( ) {
        $sub_category = Sub_Category::all();
        return view('admin.pages.sub-categories', compact('sub_category'));
    }
}