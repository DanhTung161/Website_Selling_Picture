<?php

namespace App\Http\Controllers\Admin;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    function show (Request $request) {
        $search = $request->get('search','');
        $orders = Order::where('fullname','like','%'.$search.'%')->paginate();
        return view('admin.order.index',['data' => $orders]);
    }
}