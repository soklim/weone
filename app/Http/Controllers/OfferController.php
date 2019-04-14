<?php

namespace App\Http\Controllers;

use App\Product;
use App\Promotion;
use App\SysStatic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class OfferController extends Controller
{
    public function index()
    {
        $results = DB::select('CALL offer_expired');
        $active_offer=Promotion::where('expired',1)->orderBy('to_date','asc')->get();
        $expired_offer=Promotion::where('expired',0)->orderBy('to_date','asc')->get();

        $sys_s=SysStatic::where('id',2)->get();
        $sys_logo=SysStatic::where('id',3)->get();
        $sys_footerLeft=SysStatic::where('id',5)->get();
        $sys_FirstOffer=SysStatic::where('id',9)->get();
        $sys_SecondOffer=SysStatic::where('id',10)->get();
        return view("frontend.product.offer",compact("active_offer","expired_offer","results","sys_SecondOffer","sys_FirstOffer","sys_s","sys_logo","sys_footerLeft"));
    }

    public function details($id)
    {
//
        $promotion_details=Promotion::where('id',$id)->get();


        $sys_s=SysStatic::where('id',2)->get();
        $sys_logo=SysStatic::where('id',3)->get();
        $sys_footerLeft=SysStatic::where('id',5)->get();
        $sys_FirstOffer=SysStatic::where('id',9)->get();
        $sys_SecondOffer=SysStatic::where('id',10)->get();

        return view('frontend.product.PromotionDetail',compact("sys_SecondOffer","sys_FirstOffer","promotion_details","sys_s","sys_logo","sys_footerLeft"));
    }
}
