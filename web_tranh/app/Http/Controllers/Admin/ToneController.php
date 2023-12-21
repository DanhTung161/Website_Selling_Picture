<?php

namespace App\Http\Controllers\Admin;

use App\Models\Tone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ToneController extends Controller
{
    function index (Request $request ) {
        $search = $request->get('search', '');
        $tones = Tone::where('name', 'like', '%'.$search.'%')->paginate();
        return view('admin.tone.index',['data' => $tones]);
    }

    function create() {
        return view('admin.tone.create');
    }

    function onCreate(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:tones|max:100'
        ], [
            'required' => 'bạn phải nhập tên vào',
            'unique' => 'tên danh mục đã có sẵn',
            'max' => 'Tên quá dài'
        ]);
        if ($validator->fails()) {
            return redirect()->route('tone.create')
                        ->withErrors($validator)
                        ->withInput();
        }
        Tone::create(['name' => $request->input('name', '')]);
        return redirect()->route('tone');

    }
    function edit(Request $request) {

        $tone = Tone::find($request->id);
        return view('admin.tone.update', compact('tone'));
    }

    function onEdit(Request $request) {
        $id = $request->id;
        $tone = Tone::find($id);

        if ($tone) {
            $tone->update([
                'name' => $request->input('name', '')
            ]);
        }
        return redirect()->route('tone');
    }

    function delete(Request $request) {
        $id = $request->id;
        // Product::where($id)->delete($id);
        Tone::find($id)->delete($id);
        return redirect()->route('tone');
    }
}