<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Product;
use App\SlideShow;
use App\SysStatic;
use App\Thumbnail;
use Illuminate\Http\Request;
use App\Category;
use App\User;
use App\Photo;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class ProductDetailController extends Controller
{
    public function showProduct($id,$category_id,$brand_id)
    {
//
        DB::select(DB::raw("CALL UpdateVisitor($id)"));

        $pro_details=Product::where('id',$id)->get();
        $thumbnail = Thumbnail::where('item_id',$id)->get();
        $category=Category::where('id',$category_id)->get();
        $brand=Brand::where('id',$brand_id)->get();

        $sys_s=SysStatic::where('id',2)->get();
        $sys_logo=SysStatic::where('id',3)->get();
        $sys_footerLeft=SysStatic::where('id',5)->get();
        $sys_FirstOffer=SysStatic::where('id',9)->get();
        $sys_SecondOffer=SysStatic::where('id',10)->get();

        return view('frontend.product.ProductDetail',compact('thumbnail',"brand","sys_SecondOffer","sys_FirstOffer",'pro_details','category',"sys_s","sys_logo","sys_footerLeft"));
    }

    public function cartDetail()
    {
//
        return view('frontend.product.cart');
    }
}
