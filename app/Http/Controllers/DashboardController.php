<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Product;
use App\Promotion;
use App\Subscribe;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
//        $pro=Product::all('');
        $pro=Product::all();
        $promotion = Promotion::all();
        $email = Subscribe::all();

        $pro_innis=Product::where('brand_id',1)->get();
        $pro_laneige=Product::where('brand_id',2)->get();
        $pro_iope=Product::where('brand_id',3)->get();
        $pro_etude=Product::where('brand_id',4)->get();
        $pro_other=Product::where('brand_id',5)->get();

        $user = Auth::user();
        if ($user) {

            return view('admin.index',compact("pro","promotion","email","pro_innis","pro_laneige","pro_iope","pro_etude","pro_other"));
        }
    }
}


