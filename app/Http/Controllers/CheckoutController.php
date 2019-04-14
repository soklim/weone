<?php

namespace App\Http\Controllers;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\User;
use App\Product;
use App\Order;
use Auth;
use DB;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
          $products = Cart::content();
     
     // iterate through the products and store them into the database
     foreach($products as $product){
         Order::create([
             'product_id' => $product->id,
             'user_id' => auth()->id(),
         ]);
     }
     
     return back();    }



    public function checkout()
    {
        $data1['data'] = DB::table('tbl_category')->get();
        return view('front.checkout.checkout',$data1);
    }
    //remove cart
    public function RemoveCart($rowid)
    {
        Cart::remove($rowid);
        return redirect()->back();
    }

    public function logout()
    {
        Auth::logout();

        session(['guest' => null]);
        foreach (Cart::content() as $row) {
            session([$row->id => null]);
        }
        Cart::destroy();
        return redirect('/');
    }
}
