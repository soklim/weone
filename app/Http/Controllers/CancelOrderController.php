<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Orders;
use App\Product;

class CancelOrderController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('IsAdmin');
    }
    public function index(){
        $order = Orders::where('statuss',5)->get();
        $pro_innis=Product::where('brand_id',1)->get();
        $pro_laneige=Product::where('brand_id',2)->get();
        $pro_iope=Product::where('brand_id',3)->get();
        $pro_etude=Product::where('brand_id',4)->get();
        $pro_other=Product::where('brand_id',5)->get();
        return view('admin.CancelOrder.index',compact('order',"pro_innis","pro_laneige","pro_iope","pro_etude","pro_other"));
    }
}
