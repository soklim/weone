<?php

namespace App\Http\Controllers;

use App\Product;
use App\SysStatic;
use Illuminate\Http\Request;
use App\Promotion;

class BestProductController extends Controller
{
    public function index()
    {
        //

        $best_pro=Product::where('isPop',1)->orderBy('order','asc')->get();
        $sys_s=SysStatic::where('id',2)->get();
        $sys_logo=SysStatic::where('id',3)->get();
        $sys_footerLeft=SysStatic::where('id',5)->get();
        $sys_TopSeller = SysStatic::where('id',4)->get();
        $sys_FirstOffer=SysStatic::where('id',9)->get();
        $sys_SecondOffer=SysStatic::where('id',10)->get();
        return view("frontend.product.BestProduct",compact("sys_SecondOffer","sys_FirstOffer","sys_TopSeller","best_pro","sys_s","sys_logo","sys_footerLeft"));
    }
}
