<?php

namespace App\Http\Controllers;

use App\Product;
use App\SysStatic;
use Illuminate\Http\Request;
use App\Promotion;

class InnisfreeController extends Controller
{


    public function index()
    {
        //

        $pro_innis=Product::where('brand_id',1)->orderBy('order','asc')->get();
        $sys_s=SysStatic::where('id',2)->get();
        $sys_logo=SysStatic::where('id',3)->get();
        $sys_footerLeft=SysStatic::where('id',5)->get();
        $sys_FirstOffer=SysStatic::where('id',9)->get();
        $sys_SecondOffer=SysStatic::where('id',10)->get();
        return view("frontend.brand.innisfree",compact("sys_SecondOffer","sys_FirstOffer","pro_innis","sys_s","sys_logo","sys_footerLeft"));
    }





}
