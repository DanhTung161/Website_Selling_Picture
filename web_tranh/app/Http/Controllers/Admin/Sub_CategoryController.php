<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Models\Sub_Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Sub_CategoryController extends Controller
{
    
    function index (Request $request ) {
        $search = $request->get('search', '');
        $sub_categories = Sub_Category::where('name', 'like', '%'.$search.'%')->paginate(10);
        return view('admin.subcategory.index',['data' => $sub_categories]);
    }

    function create() {
        $category = Category::all();
        return view('admin.subcategory.create', compact('category'));
    }

    function onCreate(Request $request) {
        $validator =  Validator::make($request->all(), [
            'name' => 'required|unique:sub_categories|max:100'
        ], [
            'required' => 'bạn phải nhập tên vào',
            'unique' => 'tên danh mục đã có sẵn',
            'max' => 'Tên quá dài'
        ]);
        if ($validator->fails()) {
            return redirect()->route('subcategory.create')
                        ->withErrors($validator)
                        ->withInput();
        }
        Sub_Category::create([
            'name' => $request->input('name', ''),
            'category_id' => $request->input('category_id', ''),
        ]);
        return redirect()->route('subcategory');

    }
    function edit(Request $request) {

        $sub_categories = Sub_Category::find($request->id);
        $category = Category::all();
        return view('admin.subcategory.update', compact('sub_categories', 'category'));
    }

    function onEdit(Request $request) {
        $id = $request->id;
        $sub_categories = Sub_Category::find($id);

        if ($sub_categories) {
            $sub_categories->update([
                'name' => $request->input('name', '')
            ]);
        }
        return redirect()->route('subcategory');
    }

    function delete(Request $request) {
        $id = $request->id;
        // Product::where($id)->delete($id);
        Sub_Category::find($id)->delete($id);
        return redirect()->route('subcategory');
    }
}