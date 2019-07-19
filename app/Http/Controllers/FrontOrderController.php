<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Orders;
use Session;
use DB;
use App\OrderDetail;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\SysStatic;
class FrontOrderController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function save(Request $request)
    {
        DB::transaction(function() use($request) {

            $oldCart = Session::get('cart');
            $cart = new Cart($oldCart);

            $order = new Orders;
            $order->user_id = $request->input('user_id');
            $order->address = $request->input('address');
            $order->phone = $request->input('phone');
            $order->email = $request->input('email');
            $order->province = $request->input('province');
            $order->payment_method = $request->input('payment_method');
            $order->descs = $request->input('desc');
            $order->statuss = $request->input('status_product');
            $order->total = $request->input('total');

            $order->save();
            $maxid = Orders::orderBy('order','asc')->max('order_id');
            $carts = Cart::content();
            foreach ($carts as $item) {
                $order_detail = new OrderDetail();
                $order_detail->order_id =$maxid;
                $order_detail->product_id = $item->id;
                $order_detail->qty = $item->qty;
                $order_detail->price = $item->price;
                $order_detail->amount = $item->subtotal;

                $order_detail->save();
            }
        });
        Cart::destroy();
        return redirect('/success-order');
    }

    public function success(){
        $maxid = Orders::orderBy('order','asc')->max('order_id');

        $order = Orders::where('order_id',$maxid)->get();
        $sys_s=SysStatic::where('id',2)->get();
        $sys_logo=SysStatic::where('id',3)->get();
        $sys_footerLeft=SysStatic::where('id',5)->get();
        $sys_FirstOffer=SysStatic::where('id',9)->get();
        $sys_SecondOffer=SysStatic::where('id',10)->get();
        return view("frontend.checkout.order-success",compact("order","sys_SecondOffer","sys_FirstOffer","sys_s","sys_logo","sys_footerLeft"));
    }
}
