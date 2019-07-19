<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Thumbnail;
use App\Product;

class ThumbnailController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('IsAdmin');
    }
    public function edit($id)
    {
        //
        $thumbnail = Thumbnail::findOrFail($id);


        $pro_innis=Product::where('brand_id',1)->get();
        $pro_laneige=Product::where('brand_id',2)->get();
        $pro_iope=Product::where('brand_id',3)->get();
        $pro_etude=Product::where('brand_id',4)->get();
        $pro_other=Product::where('brand_id',5)->get();

        return view('admin.thumbnail.edit',compact('thumbnail',"pro_innis","pro_laneige","pro_iope","pro_etude","pro_other"));
    }

    public function update(Request $request, $id)
    {
        //
        $thumbnail =Thumbnail::findOrFail($id);
        $input =$request->all();

        if($file = $request->file('file'))
        {
            $name=$file->getClientOriginalName();
            $file->move('images', $name);
            $input['file'] = $name;

        }
        $thumbnail->update($input);


        return redirect('/admin/products');
    }

    public function destroy($id)
    {
        //
        $thumbnail=Thumbnail::findOrFail($id);

        unlink(public_path().$thumbnail->file );

        $thumbnail->delete();

//        Session::flash('deleted_user','Product Deleted');

        return redirect('/admin/products');
    }
}
