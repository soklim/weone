<?php

namespace App\Http\Controllers;

use App\Category;
use App\Brand;
use App\SysStatic;
use App\Product;
use Illuminate\Http\Request;
use App\User;
use App\Photo;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
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
        $user = User::all();
        $products = Product::all();

        $pro_innis=Product::where('brand_id',1)->get();
        $pro_laneige=Product::where('brand_id',2)->get();
        $pro_iope=Product::where('brand_id',3)->get();
        $pro_etude=Product::where('brand_id',4)->get();
        $pro_other=Product::where('brand_id',5)->get();

        return view('admin.products.index',compact('user','products',"pro_innis","pro_laneige","pro_iope","pro_etude","pro_other"));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $category=Category::all();
        $brand=Brand::all();
        $products=Product::all();
        $users = User::all();

        $pro_innis=Product::where('brand_id',1)->get();
        $pro_laneige=Product::where('brand_id',2)->get();
        $pro_iope=Product::where('brand_id',3)->get();
        $pro_etude=Product::where('brand_id',4)->get();
        $pro_other=Product::where('brand_id',5)->get();

        return view('admin.products.create',compact('category','brand','users','products',"pro_innis","pro_laneige","pro_iope","pro_etude","pro_other"));
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
        $user = Auth::user();

        $input = $request->all();

        if($file = $request->file('photo_id'))
        {
            $name = time()  .$file->getClientOriginalName();

            $file->move('images',$name);

            $photo = Photo::create(['file'=>$name]);

            $input['photo_id'] = $photo->id;
        }


        $user->products()->create($input);

//        return $request->all();
        return redirect('/admin/products');
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
        $products = Product::findOrFail($id);

        $category = Category::all();
        $brand=Brand::all();

        $pro_innis=Product::where('brand_id',1)->get();
        $pro_laneige=Product::where('brand_id',2)->get();
        $pro_iope=Product::where('brand_id',3)->get();
        $pro_etude=Product::where('brand_id',4)->get();
        $pro_other=Product::where('brand_id',5)->get();

        return view('admin.products.edit',compact('products','category','brand',"pro_innis","pro_laneige","pro_iope","pro_etude","pro_other"));
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
        $products =Product::findOrFail($id);

        $input =$request->all();


        if($file = $request->file('photo_id'))
        {
            $name = time()  .$file->getClientOriginalName();

            $file->move('images',$name);

            $photo = Photo::create(['file'=>$name]);

            $input['photo_id'] = $photo->id;

        }


        $products->update($input);

        return redirect('/admin/products');
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
        $products=Product::findOrFail($id);

        unlink(public_path().$products->photo->file );

        $products->delete();

        Session::flash('deleted_user','Product Deleted');

        return redirect('/admin/products');
    }
}
