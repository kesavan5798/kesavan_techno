<?php

namespace App\Http\Controllers;


use App\Models\Inventory;
use App\Models\Product;
use App\Models\UserGroup;
use App\Models\Users;
use App\Models\Order;
use Redirect;
use Session;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    
    public function index()
    {
        $product = Product::with(['inventory_details'])->get();
        
        if ($product) {
            $product_details = $product->toArray();
        }
        // dd($product_details);
        return view('product', compact('product'));
    }


    public function details($id)
    {

        $product = Product::where('id', $id)->with(['inventory_details'])->first();
        if ($product) {
            $product_details = $product->toArray();
        }
        return view('product_details', compact('product_details'));
    }

    public function order(Request $request)
    {
        // dd($request->all());
        $user_check = Users::where('email', $request->email)->first();
        // dd($user_check);
        if ($user_check) {
            $user_id = $user_check['id'];
            // dd("hi");
        }
        else
        {
            // dd("hlo");
            $user = Users::create([
                "name" => $request->name,
                "email" => $request->email,
                "phone_number" => $request->phone,
                "user_type" => "3"
            ]);
            $user_id = $user->id;
        }
        // dd($user_id);
        $product = Product::where('id', $request->product_id)->with(['inventory_details'])->first();
        if ($product) {
            $product_details = $product->toArray();
        }

        $total_amount = $request->quantity * $product_details['amount'];
        $order = Order::create([
                "product_id" => $product_details['id'],
                "buyer_id" => $user_id,
                "seller_id" => $product_details['seller_id'],
                "quantity" => $request->quantity,
                "amount" => $product_details['amount'],
                "total_amount" => $total_amount,
            ]);
        $order_id = $order->id;
        // dd($order->id);
        // return Redirect::route('order.view, $order_id');
        return redirect()->route('order.view')->with(['id' => $order_id]);
        // return redirect('order', compact('order_id'));
    }

    public function order_view()
    {
        $id = Session::get('id');
        // dd($id);
        $order = Order::where('id', $id)->with(['product_details', 'seller_details', 'user_details'])->first();
        if ($order) {
            $order_details = $order->toArray();
        }
        // dd($order_details);
        return view('order', compact('order_details'));
    }

}
