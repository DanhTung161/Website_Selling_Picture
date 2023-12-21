<?php

namespace App\Http\Controllers\Admin;

use App\Models\Material;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MaterialController extends Controller
{
    function index (Request $request ) {
        $search = $request->get('search', '');
        $materials = Material::where('name', 'like', '%'.$search.'%')->paginate();
        return view('admin.material.index',['data' => $materials]);
    }

    function create() {
        return view('admin.material.create');
    }

    function onCreate(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:colors|max:100'
        ], [
            'required' => 'bạn phải nhập tên vào',
            'unique' => 'tên danh mục đã có sẵn',
            'max' => 'Tên quá dài'
        ]);
        if ($validator->fails()) {
            return redirect()->route('material.create')
                        ->withErrors($validator)
                        ->withInput();
        }
        Material::create(['name' => $request->input('name', '')]);
        return redirect()->route('material');

    }
    function edit(Request $request) {

        $material = Material::find($request->id);
        return view('admin.material.update', compact('material'));
    }

    function onEdit(Request $request) {
        $id = $request->id;
        $material = Material::find($id);

        if ($material) {
            $material->update([
                'name' => $request->input('name', '')
            ]);
        }
        return redirect()->route('material');
    }

    function delete(Request $request) {
        $id = $request->id;
        // Product::where($id)->delete($id);
        Material::find($id)->delete($id);
        return redirect()->route('material');
    }
}