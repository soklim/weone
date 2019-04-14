<?php

namespace App\Http\Controllers;

use App\Photo;
use App\SysStatic;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SysStaticController extends Controller
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
        $sys_statics = SysStatic::all();
        $pro_innis=Product::where('brand_id',1)->get();
        $pro_laneige=Product::where('brand_id',2)->get();
        $pro_iope=Product::where('brand_id',3)->get();
        $pro_etude=Product::where('brand_id',4)->get();
        $pro_other=Product::where('brand_id',5)->get();

        return view('admin.sys_statics.index',compact('sys_statics',"pro_innis","pro_laneige","pro_iope","pro_etude","pro_other"));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pro_innis=Product::where('brand_id',1)->get();
        $pro_laneige=Product::where('brand_id',2)->get();
        $pro_iope=Product::where('brand_id',3)->get();
        $pro_etude=Product::where('brand_id',4)->get();
        $pro_other=Product::where('brand_id',5)->get();
        return view('admin.sys_statics.create',compact("pro_innis","pro_laneige","pro_iope","pro_etude","pro_other"));
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

        if($file = $request->file('photo_id'))
        {
            $name = time()  .$file->getClientOriginalName();

            $file->move('images',$name);

            $photo = Photo::create(['file'=>$name]);

            $input['photo_id'] = $photo->id;
        }

        SysStatic::create($input);

        return redirect('/admin/sys_statics');
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
        $sys_statics = SysStatic::findOrFail($id);
        $pro_innis=Product::where('brand_id',1)->get();
        $pro_laneige=Product::where('brand_id',2)->get();
        $pro_iope=Product::where('brand_id',3)->get();
        $pro_etude=Product::where('brand_id',4)->get();
        $pro_other=Product::where('brand_id',5)->get();

        return view('admin.sys_statics.edit',compact('sys_statics',"pro_innis","pro_laneige","pro_iope","pro_etude","pro_other"));
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
        $sys_statics = SysStatic::findOrFail($id);

        $input =$request->all();

        if($file = $request->file('photo_id'))
        {
            $name = time()  .$file->getClientOriginalName();

            $file->move('images',$name);

            $photo = Photo::create(['file'=>$name]);

            $input['photo_id'] = $photo->id;

        }

        $sys_statics->update($input);

        return redirect('admin/sys_statics');

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
        $sys_statics = SysStatic::findOrFail($id);

        unlink(public_path().$sys_statics->photo->file );

        $sys_statics->delete();

        Session::flash('deleted_user','Sys Static Deleted');

        return redirect('admin/sys_statics');
    }
}
