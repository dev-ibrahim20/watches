<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Mail\OrderMail;
use App\Models\Order;
use App\Models\Orderf;
use App\Models\Product;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class ProductController extends Controller
{
    public function index()
    {
        $order = Order::select('ip')->where('ip', '=', Request()->ip())->get();
        $count = count($order);
        $index = Product::get();
        if(count($index) > 0){
            return view('frontend.product.home', compact('index'))->with('count', $count);
        }else{
            return view('frontend.product.notFound')->with('count', $count);
        }
    }
    public function order($id)
    {
        $data = Product::select('id', 'name', 'price', 'color', 'size', 'image', 'disc')->find($id);
        $order = Product::select('image')->skip(1)->take(4)->get()->find($id);
        return view('frontend.product.order', compact('data', 'order'));
    }
    public function checkout(Request $request)
    {
        // return $request->_price;
        // exit();
        $total = ($request->_price * $request->count);
        $check = [
            '_name' => $request->_name,
            '_image' => $request->_image,
            '_size' => $request->size,
            '_color' => $request->color,
            '_count' => $request->count,
            '_total' => $total,
        ];
        return view('frontend.product.checkout', compact('check'));
    }

    public function store(Request $request)
    {
        $address = explode('-', $request->address);
        Order::create([
            'name'      => $request->_name,
            'image'     => $request->_image,
            'size'      => $request->_size,
            'color'     => $request->_color,
            'quantity'  => $request->_count,
            // 'drive_cost'=> $address[0],
            'total'     => ($request->_total),
            'username'  => $request->name,
            'phone'     => $request->phone,
            'email'     => $request->email,
            'address'      => $request->street,
            'state'     => $request->state,
            'ip'        => Request()->ip(),
        ]);
        return redirect()->route('product');
    }



    // Show Order Details

    public function show()
    {
        $data = Product::get();
        $order = Order::get();
        return view('frontend.product.show', compact('order', 'data'));
    }

    public function deleteOrder($id)
    {
        $Order = Order::find($id);
        if (!$Order)
            return redirect()->back();

        $Order->delete();
        return redirect()->back();
    }
}
