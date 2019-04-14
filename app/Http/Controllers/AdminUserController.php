<?php

namespace App\Http\Controllers;

use App\Http\Requests\UsersRequest;
use App\Photo;
use App\Role;
use App\User;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminUserController extends Controller
{
    public function __construct()
    {
        $this->middleware('IsAdmin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pro_innis=Product::where('brand_id',1)->get();
        $pro_laneige=Product::where('brand_id',2)->get();
        $pro_iope=Product::where('brand_id',3)->get();
        $pro_etude=Product::where('brand_id',4)->get();
        $pro_other=Product::where('brand_id',5)->get();

        $user = User::all();
        return view('admin.users.index',compact('user',"pro_innis","pro_laneige","pro_iope","pro_etude","pro_other"));
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

        $users = User::all();
        $roles = Role::all();
        return view('admin.users.create',compact('roles','users',"pro_innis","pro_laneige","pro_iope","pro_etude","pro_other"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UsersRequest $request)
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
        $input['password'] = bcrypt($request->password);

        User::create($input);

//        return $request->all();
        return redirect('/admin/users');
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
        $pro_innis=Product::where('brand_id',1)->get();
        $pro_laneige=Product::where('brand_id',2)->get();
        $pro_iope=Product::where('brand_id',3)->get();
        $pro_etude=Product::where('brand_id',4)->get();
        $pro_other=Product::where('brand_id',5)->get();

        $users = User::findOrFail($id);
        $roles = Role::all();

        return view('admin.users.edit',compact('users','roles',"pro_innis","pro_laneige","pro_iope","pro_etude","pro_other"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UsersRequest $request,$id)
    {
        //
        $user =User::findOrFail($id);

        if(trim($request->password)==''){
            $input=$request->except('password');
        }else{
            $input =$request->all();
        }


        if($file = $request->file('photo_id'))
        {
            $name = time()  .$file->getClientOriginalName();

            $file->move('images',$name);

            $photo = Photo::create(['file'=>$name]);

            $input['photo_id'] = $photo->id;

        }

        $input['password'] = bcrypt($request->password);

        $user->update($input);

        return redirect('/admin/users');



//        return $request->all();
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
        $user=User::findOrFail($id);

        unlink(public_path().$user->photo->file );

        $user->delete();

        Session::flash('deleted_user','User Deleted');

        return redirect('/admin/users');
    }
}
