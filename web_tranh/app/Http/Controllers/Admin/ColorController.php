<?php

namespace App\Http\Controllers\Admin;

use App\Models\Color;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ColorController extends Controller
{
    function index (Request $request) {
        $search = $request->get('search', '');
        $colors = Color::where('name', 'like', '%'.$search.'%')->paginate(5);
        return view('admin.color.index',['data' => $colors]);
    }

    function create() {
        return view('admin.color.create');
    }

    function onCreate(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:colors|max:100'
        ], [
            'required' => 'bạn phải nhập tên vào',
            'unique' => 'tên sản phẩm đã có sẵn',
            'max' => 'Tên quá dài'
        ]);
        if ($validator->fails()) {
            return redirect()->route('color.create')
                        ->withErrors($validator)
                        ->withInput();
        }
        Color::create(['name' => $request->input('name', '')]);
        return redirect()->route('color');

    }
    function edit(Request $request) {
        $color = Color::find($request->id);
        return view('admin.color.update', compact('color'));
    }

    function onEdit(Request $request) {
        $id = $request->id;
        $color = Color::find($id);
        if ($color) {
            $color->update([
                'name' => $request->input('name', '')
            ]);
        }
        return redirect()->route('color');
    }
    function delete(Request $request) {
        $id = $request->id;
        // Product::where($id)->delete($id);
        Color::find($id)->delete($id);
        return redirect()->route('color');
    }
}