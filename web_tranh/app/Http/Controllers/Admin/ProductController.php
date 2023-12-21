<?php

namespace App\Http\Controllers\Admin;

use App\Models\Color;
use App\Models\Material;
use App\Models\Product;
use App\Models\Sub_Category;
use App\Models\Tone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\File;

class ProductController extends Controller
{
    function index (Request $request) {
        $search = $request->get('search', '');
        $products = Product::where('title', 'like', '%'.$search.'%')->paginate(5);
        return view('admin.product.index',['data' => $products]);
    }

    function create() {
        $materials = Material::all();
        $sub_categories = Sub_Category::all();
        $colors = Color::all();
        $tones = Tone::all();
        return view('admin.product.create', compact('materials','sub_categories','colors','tones'));
    }

    function onCreate(Request $request) {
        $validator = Validator::make($request->all(), [
            'title' => 'required|unique:products|max:100',
            'image' => ['required', File::types(['png', 'jpg', 'webp'])
            ->max(12 * 1024),],
            'price' => 'required',
            'size' => 'required',
            'composed' => 'required',
            'description' => 'max:300'
        ], [
            'title.required' => 'bạn phải nhập title vào',
            'title.unique' => 'tên sản phẩm đã có sẵn',
            'title.max' => 'Tên quá dài',
            'image.required' => 'Chưa thêm ảnh ',
            'description.max' => 'Mô tả quá dài ',
            'price.required' => 'Bạn chưa nhập giá',
            'size.required' => 'Bạn chưa nhập kích cỡ',
            'composed.required' => 'Bạn chưa nhập tác giả',
        ]);
        if ($validator->fails()) {
            return redirect()->route('product.create')
                        ->withErrors($validator)
                        ->withInput();
        }
        // dd($request->all());
        
        $fileName = time() . '.'. $request->image->extension();
        $request->image->move(public_path('images'), $fileName);
        
        Product::create([
            'title' => $request->input('title', ''),
            'price' => $request->input('price', ''),
            'size' => $request->input('size', ''),
            'image' => 'images/'.$fileName, // 'images/anhdep.png'
            'composed' => $request->input('composed', ''),
            'description' => $request->input('description', ''),
            'material_id' => $request->input('material_id', ''),
            'sub_category_id' => $request->input('sub_category_id', ''),
            'color_id' => $request->input('color_id', ''),
            'tone_id' => $request->input('tone_id', ''),
        ]);
        return redirect()->route('product');

    }
    function edit(Request $request) {
        $product = Product::find($request->id);
        $sub = Sub_Category::all();
        $mater = Material::all();
        $col = Color::all();
        $ton = Tone::all();
        return view('admin.product.update', compact('product','sub','mater','col','ton'));
    }

    function onEdit(Request $request) {
        // dd($request->all());
        // validator
        
        $id = $request->id;
        $product = Product::find($id);
        $image = $product->image;
        if ($request->image) {
            $fileName = time() . '.'. $request->image->extension();
            $request->image->move(public_path('images'), $fileName);
            $image = 'images/'. $fileName;
        }
        if ($product) {
            $product->update([
            'title' => $request->input('title', ''),
            'price' => $request->input('price', ''),
            'size' => $request->input('size', ''),
            'image' => $image,
            'composed' => $request->input('composed', ''),
            'description' => $request->input('description', ''),
            'material_id' => $request->input('material_id', ''),
            'sub_category_id' => $request->input('sub_category_id', ''),
            'color_id' => $request->input('color_id', ''),
            'tone_id' => $request->input('tone_id', ''),
            ]);
        }
        return redirect()->route('product');
    }
    function delete(Request $request) {
        $id = $request->id;
        // Product::where($id)->delete($id);
        Product::find($id)->delete($id);
        return redirect()->route('product');
    }
}