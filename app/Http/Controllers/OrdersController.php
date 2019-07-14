<?php

namespace App\Http\Controllers;
use App\OrderDetail;
use App\OrderStatus;
use App\Province;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\SysStatic;
use App\Orders;
use App\Product;
use Illuminate\Http\Request;
use Session;
use DB;


class OrdersController extends Controller
{
    public function __construct()
    {
        $this->middleware('IsAdmin');
    }
    public function save(Request $request)
    {
        DB::transaction(function() use($request) {

            $oldCart = Session::get('cart');
            $cart = new Cart($oldCart);

            $order = new Orders;
            $order->customer_name = $request->input('customer_name');
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
    public function index(){
        $order = Orders::where('statuss', '!=' , 5)->get();
        $pro_innis=Product::where('brand_id',1)->get();
        $pro_laneige=Product::where('brand_id',2)->get();
        $pro_iope=Product::where('brand_id',3)->get();
        $pro_etude=Product::where('brand_id',4)->get();
        $pro_other=Product::where('brand_id',5)->get();
        return view('admin.order.index',compact('order',"pro_innis","pro_laneige","pro_iope","pro_etude","pro_other"));
    }



    public function edit($id)
    {
        //
        $order = Orders::where('order_id',$id)->get();
        $orderDetail = OrderDetail::where('order_id',$id)->join('products', 'order_details.product_id', '=', 'products.id')->get();

        $pro_innis=Product::where('brand_id',1)->get();
        $pro_laneige=Product::where('brand_id',2)->get();
        $pro_iope=Product::where('brand_id',3)->get();
        $pro_etude=Product::where('brand_id',4)->get();
        $pro_other=Product::where('brand_id',5)->get();
        $orderStatus=OrderStatus::all();

        return view('admin.order.edit',compact('orderStatus','orderDetail','order',"pro_innis","pro_laneige","pro_iope","pro_etude","pro_other"));
    }
    public function show($id)
    {
        //
        $order = Orders::where('order_id',$id)->get();
        $orderDetail = OrderDetail::where('order_id',$id)->join('products', 'order_details.product_id', '=', 'products.id')->get();

        $pro_innis=Product::where('brand_id',1)->get();
        $pro_laneige=Product::where('brand_id',2)->get();
        $pro_iope=Product::where('brand_id',3)->get();
        $pro_etude=Product::where('brand_id',4)->get();
        $pro_other=Product::where('brand_id',5)->get();
        $orderStatus=OrderStatus::all();

        return view('admin.order.print',compact('orderStatus','orderDetail','order',"pro_innis","pro_laneige","pro_iope","pro_etude","pro_other"));
    }
    public function updateStatus(Request $request)
    {
        $status = $request->input('statusID');
        $order_id = $request->input('order_id');

        Orders::where('order_id', $order_id)
            ->update(['statuss' => $status]);


        return redirect('/admin/order');

    }



}
