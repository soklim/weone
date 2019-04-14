<?php

namespace App\Http\Controllers;

use App\Product;
use App\SysStatic;
use App\Subscribe;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pro=Product::where('category_id',1)->get();
        $pro1=Product::where('category_id',2)->get();

        $sys_s=SysStatic::where('id',2)->get();
        $sys_logo=SysStatic::where('id',3)->get();
        $sys_footerLeft=SysStatic::where('id',5)->get();
        return view("frontend.category",compact('pro','pro1',"sys_s","sys_logo","sys_footerLeft"));
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

    public function autoComplete(Request $request)
    {
        $term=$request->term;
        $data = \App\Product::where('pro_name','LIKE','%'.$term.'%')
            ->take(8)
            ->get();
        $results=array();
        foreach($data as $key => $v){
            $results[]=['id'=>$v->id,'value'=>$v->pro_name];
        }
        return response()->json($results);

    }

    public function searchResult(Request $request){
        $sys_s=SysStatic::where('id',2)->get();
        $sys_logo=SysStatic::where('id',3)->get();
        $sys_footerLeft=SysStatic::where('id',5)->get();
        $sys_FirstOffer=SysStatic::where('id',9)->get();
        $sys_SecondOffer=SysStatic::where('id',10)->get();

        $searchname=$request->input('searchname');
        $products = \App\Product::where('pro_name','like',"%$searchname%")
            ->paginate(8);

        return view("frontend.product.productSearch",compact("products","sys_SecondOffer","sys_FirstOffer","sys_s","sys_logo","sys_footerLeft"));

    }


}
