<?php

namespace App\Http\Controllers;

use App\Product;
use App\SlideShow;
use App\SysStatic;
use Illuminate\Http\Request;
use App\Promotion;
use Illuminate\Support\Facades\DB;

class HomePageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pro=Product::all()->take(3);
        $pro_popular1=Product::where('isPop',1)->orderBy('created_at','desc')->limit(4)->offset(0)->get();
        $pro_popular2=Product::where('isPop',1)->orderBy('created_at','desc')->limit(4)->offset(4)->get();

        $topView = Product::orderBy('visitor','desc')->limit(8)->offset(0)->get();

        $sys_s=SysStatic::where('id',2)->get();
        $sys_logo=SysStatic::where('id',3)->get();
        $sys_footerLeft=SysStatic::where('id',5)->get();
        $sys_mainLeft=SysStatic::where('id',6)->get();
        $sys_mainCenter=SysStatic::where('id',7)->get();
        $sys_mainRight=SysStatic::where('id',8)->get();
        $sys_FirstOffer=SysStatic::where('id',9)->get();
        $sys_SecondOffer=SysStatic::where('id',10)->get();

        $results = DB::select('CALL offer_expired');
        $promotion=Promotion::where('expired',1)->where('order',1)->orderBy('id','desc')->get()->take(3);
//        $promotion=Promotion::where('order',1)->orderBy('id','DESC')->get()->take(3);
        $slide1=SlideShow::where('id',1)->get();
        $slide2=SlideShow::where('id',2)->get();
        $slide3=SlideShow::where('id',3)->get();


        return view("frontend.homepage.homepage",compact('topView','pro_popular2',"sys_SecondOffer","sys_FirstOffer","slide1","slide2","slide3","promotion","pro","sys_s","pro_popular1","sys_logo","sys_footerLeft","sys_mainLeft","sys_mainCenter","sys_mainRight"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
