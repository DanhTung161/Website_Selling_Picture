<?php

namespace App\Http\Controllers;

use App\Models\Detail_Order;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    function cart() {
        $total = $this->Get_total();
        return view('frontend.page.cart', compact('total'));
    }

    
    function addtoCart($id) {
        //dd($id);
        $products = Product::find($id);
        // dd($product);

        //dd($id);
        $cart = session()->get('cart');
        
        if(!$cart) {
            $cart = [
                    $id => [
                        'id' => $products->id,
                        "title" => $products->title,
                        "quantity" => 1,
                        "price" => $products->price,
                        "image" => $products->image,
                    ]
            ];
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }
        // if cart not empty then check if this product exist then increment quantity
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }
        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            "title" => $products->title,
            "quantity" => 1,
            "price" => $products->price,
            "image" => $products->image
        ];
        session()->put('cart', $cart);
        return redirect()->with('success', 'Product added to cart successfully!');
    }
    public function update(Request $request)
    {
        if($request->id and $request->quantity)
        {
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');

            $total = 0;
            $carts = session()->get('cart');
            foreach($carts as $val) {
                $total += $val['price'] * $val['quantity'];
            }

            return response()->json([
                'price' => $request->quantity * $cart[$request->id]["price"],
                'total' => $total
            ]);
        }
    }

    public function deleteProduct($productId)
    {
        if($productId) {
            $cart = session()->get('cart');
            if(isset($cart[$productId])) {
                unset($cart[$productId]);
                session()->put('cart', $cart);
            }
        }
        return response()->json([
            'status' => true // xóa thành công
        ]);
    }

    // function updateProduct($id, Request $request) {
    //     $cart = session()->get('cart');
    //     if(isset($cart[$id])) {
    //         $cart[$id]["quantity"] = $request->quantity;
    //         session()->put('cart', $cart);
    //     }
    // }

        function check( ) {
            $total = $this->Get_total();
            if(!Auth::check()) {
                return redirect()->route('login')->with('error', 'Bạn cần đăng nhập để thanh toán');
            }
            $user = Auth::user();
            return view('frontend.page.checkout', compact('total', 'user'));
        }

        function Get_total( ) {
            $carts = session()->get('cart');
            $total = 0;
            if ($carts) {
                
                foreach($carts as $key => $val) {
                    $total += $val['price'] * $val['quantity'];
                }
            }
            return $total;
        }


    function checkout(Request  $request) {
       //dd($request->all());
        // Tạo đơn hàng
        $total = $this->Get_total();
        $order = Order::create([
            'user_id' => auth()->id(),
            'total_price' => $total,
            'fullname' => $request->fullname,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'address' => $request->address,
            'shipping_date' => $request->shipping_date,
            'payment_methor' => $request->payment_methor,
            'status' => 'Đã thanh toán'
        ]);
        $carts = session()->get('cart');
        // Tạo các mục đơn hàng
        foreach ($carts as $item) { 
            $orderItem = new Detail_Order();
            $orderItem -> order_id = $order->id;
            $orderItem->product_id = $item['id'];
            $orderItem->quantity = $item['quantity'];
            $orderItem->price = $item['price'];
            //dd($request->all());

            // Trừ số lượng sản phẩm trong database
            $item = Detail_Order::find($item['id']);
            $item->quantity -= $item['quantity'];
            
        }
        //xóa sp khỏi session
        Session::forget('cart');

        return redirect()->route('order_complete')->with('success','Đơn hàng đã đc tạo thành công');
    }


    function order_complete() {
        
        return view('frontend.page.order_complete');
    }
}