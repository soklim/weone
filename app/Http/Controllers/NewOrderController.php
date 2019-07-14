<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Orders;
use App\Product;
use App\OrderStatus;
use App\OrderDetail;

class NewOrderController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('IsAdmin');
    }
    public function index(){
        $order = Orders::where('statuss',1)->get();
        $pro_innis=Product::where('brand_id',1)->get();
        $pro_laneige=Product::where('brand_id',2)->get();
        $pro_iope=Product::where('brand_id',3)->get();
        $pro_etude=Product::where('brand_id',4)->get();
        $pro_other=Product::where('brand_id',5)->get();
        return view('admin.NewOrder.index',compact('order',"pro_innis","pro_laneige","pro_iope","pro_etude","pro_other"));
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

        return view('admin.NewOrder.edit',compact('orderStatus','orderDetail','order',"pro_innis","pro_laneige","pro_iope","pro_etude","pro_other"));
    }
}
