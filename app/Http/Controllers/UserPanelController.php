<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SysStatic;
use App\Orders;
use App\OrderDetail;
use App\User;
use Illuminate\Support\Facades\Input as input;
use Illuminate\Support\Facades\Session;

class UserPanelController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index($id)
    {
        //
        $order=Orders::where('user_id',$id)->orderBy('order_id','desc')->get();

        $sys_s=SysStatic::where('id',2)->get();
        $sys_logo=SysStatic::where('id',3)->get();
        $sys_footerLeft=SysStatic::where('id',5)->get();
        $sys_mainLeft=SysStatic::where('id',6)->get();
        $sys_mainCenter=SysStatic::where('id',7)->get();
        $sys_mainRight=SysStatic::where('id',8)->get();
        $sys_FirstOffer=SysStatic::where('id',9)->get();
        $sys_SecondOffer=SysStatic::where('id',10)->get();


        return view("frontend.homepage.user_panel",compact('order',"sys_SecondOffer","sys_FirstOffer","sys_s","sys_logo","sys_footerLeft","sys_mainLeft","sys_mainCenter","sys_mainRight"));
    }

    public function password()
    {
        //
        $sys_s=SysStatic::where('id',2)->get();
        $sys_logo=SysStatic::where('id',3)->get();
        $sys_footerLeft=SysStatic::where('id',5)->get();
        $sys_mainLeft=SysStatic::where('id',6)->get();
        $sys_mainCenter=SysStatic::where('id',7)->get();
        $sys_mainRight=SysStatic::where('id',8)->get();
        $sys_FirstOffer=SysStatic::where('id',9)->get();
        $sys_SecondOffer=SysStatic::where('id',10)->get();


        return view("frontend.homepage.change_password",compact("sys_SecondOffer","sys_FirstOffer","sys_s","sys_logo","sys_footerLeft","sys_mainLeft","sys_mainCenter","sys_mainRight"));
    }

    public function update(Request $request, $id)
    {
        //
        $user =User::findOrFail($id);
        $input =$request->all();
        $user->update($input);

        return redirect('/');
    }

}
