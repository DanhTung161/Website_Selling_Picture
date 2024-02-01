<?php

namespace App\Http\Controllers\Admin;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    function index (Request $request) {

        // $id = Auth::user()->id;
        // $user = Auth::user(); // Lấy về tất cả các thông tin của người dùng.
        // $email = Auth::user()->email; // Lây về email người dùng.

        // dd($email);

        $search = $request->get('search', '');
        $categories = Category::where('name', 'like', '%'.$search.'%')->paginate();
        return view('admin.category.index',['data' => $categories]);
    }

    function create() {
        // hiển thị màn hình tạo
        // truyền đối tượng muốn tạo
        return view('admin.category.create');
    }

    function onCreate(Request $request) {
        // validate các giá trị đầu vào => validator
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:categories|max:50'
        ], [
            'required' => 'bạn phải nhập tên vào',
            'unique' => 'tên danh mục đã có sẵn',
            'max' => 'Tên quá dài'
        ]);
        if ($validator->fails()) {
            return redirect()->route('category.create')
                        ->withErrors($validator)
                        ->withInput();
        }
        // gọi hàm tạo
        // quay lại màn danh sách
        Category::create(['name' => $request->input('name', '')]);
        return redirect()->route('category');

    }
    function edit(Request $request) {
        // lấy id của bản ghi
        // hiển thị màn hình cập nhật
        // truyền đối tượng muốn cập nhật
        $category = Category::find($request->id);
        // dd($request->id);
        return view('admin.category.update', compact('category'));
    }

    function onEdit(Request $request) {
        // dd($request->all());
        // validate các giá trị đầu vào => validator
        // lấy đc id của bản ghi muốn cập nhật -> lấy từ request
        // gọi hàm cập nhật
        // quay lại màn danh sách

        $id = $request->id;

        $category = Category::find($id);
        // dd($category);

        if ($category) {
            $category->update([
                'name' => $request->input('name', '')
            ]);
        }
        return redirect()->route('category');
    }

    function delete(Request $request) {
        // dd('csa');
        $id = $request->id;
        // Sub_Category::find($id)->delete($id);
        Category::find($id)->delete($id);
        return redirect()->route('category');
    }
}