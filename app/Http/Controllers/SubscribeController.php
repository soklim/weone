<?php

namespace App\Http\Controllers;

use App\Subscribe;
use App\Product;
use App\Promotion;
use App\SysStatic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class SubscribeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $subscribe = Subscribe::all();
        $pro_innis=Product::where('brand_id',1)->get();
        $pro_laneige=Product::where('brand_id',2)->get();
        $pro_iope=Product::where('brand_id',3)->get();
        $pro_etude=Product::where('brand_id',4)->get();
        $pro_other=Product::where('brand_id',5)->get();
        return view('admin.subscribe.index',compact('subscribe',"pro_innis","pro_laneige","pro_iope","pro_etude","pro_other"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subscribe=Subscribe::all();
        $pro_innis=Product::where('brand_id',1)->get();
        $pro_laneige=Product::where('brand_id',2)->get();
        $pro_iope=Product::where('brand_id',3)->get();
        $pro_etude=Product::where('brand_id',4)->get();
        $pro_other=Product::where('brand_id',5)->get();

        return view('admin.subscribe.create',compact('subscribe',"pro_innis","pro_laneige","pro_iope","pro_etude","pro_other"));
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

        $input = $request->all();

        Subscribe::create($input);

//        return $request->all();
        return redirect('/admin/subscribe');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Subscribe  $subscribe
     * @return \Illuminate\Http\Response
     */
    public function show(Subscribe $subscribe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Subscribe  $subscribe
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subscribe = Subscribe::findOrFail($id);

        $pro_innis=Product::where('brand_id',1)->get();
        $pro_laneige=Product::where('brand_id',2)->get();
        $pro_iope=Product::where('brand_id',3)->get();
        $pro_etude=Product::where('brand_id',4)->get();
        $pro_other=Product::where('brand_id',5)->get();

        return view('admin.subscribe.edit',compact('subscribe',"pro_innis","pro_laneige","pro_iope","pro_etude","pro_other"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Subscribe  $subscribe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $subscribe =Subscribe::findOrFail($id);

        $input =$request->all();

        $subscribe->update($input);

        return redirect('/admin/subscribe');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Subscribe  $subscribe
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subscribe=Subscribe::findOrFail($id);
        $subscribe->delete();

        Session::flash('deleted_user','Email Deleted');

        return redirect('/admin/subscribe');
    }


}
