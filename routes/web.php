
<?php
use App\SysStatic;
use App\Product;
use Illuminate\Support\Facades\Input as input;
use App\User;

Route::get('/404error',function (){
    return view('admin.errors.error404');
});

Route::get('/no-video',function (){
    return view('frontend.product.NoVideo');
});

//FrontEnd Route
Route::get('/','HomePageController@index');
Route::get('/admin-sv','DashboardController@index');

Auth::routes();

Route::get('/brand-innisfree','InnisfreeController@index');
Route::get('/brand-iope','iopeController@index');
Route::get('/make-up','CategoryController@makeup');
Route::get('/brand-laneige','laneigeController@index');
Route::get('/brand-etude-house','etudehouseController@index');
Route::get('/brand-other','OtherController@index');
Route::get('/all-brand','AllBrandController@index');
Route::get('/tracking-form','OrderStatusController@index');
Route::get('/offer','OfferController@index');
Route::get('/best&new-product','BestProductController@index');
Route::get('/about-us','AboutUsController@index');
Route::get('/product-detail/{id}{category_id}{brand_id}', 'ProductDetailController@showproduct');
Route::get('/shopping-cart', 'ProductDetailController@cartDetail');
Route::post('/order', 'OrdersController@save');

Route::get('/type/{cat_id}', 'CategoryController@index');

Route::get('/carts/{id}', 'CartController@edit');




//Admin Route

Route::resource('admin/sys_statics','SysStaticController');

Route::resource('admin/products','ProductController');

Route::resource('admin/slide_shows','SlideShowController');

Route::resource('admin/promotions','PromotionController');
Route::resource('admin/subscribe','SubscribeController');
Route::resource('admin/order','OrdersController');
Route::resource('admin/CancelOrder','CancelOrderController');
Route::resource('admin/NewOrder','NewOrderController');

Route::group(['middleware'=>'IsAdmin'], function (){


    Route::resource('admin/users', 'AdminUserController');


});


Route::get('/admin/profile',function (){
    $pro_innis=Product::where('brand_id',1)->get();
    $pro_laneige=Product::where('brand_id',2)->get();
    $pro_iope=Product::where('brand_id',3)->get();
    $pro_etude=Product::where('brand_id',4)->get();
    $pro_other=Product::where('brand_id',5)->get();
    return view('auth.profile',compact("pro_innis","pro_laneige","pro_iope","pro_etude","pro_other"));
});

Route::resource('/changepassword','ChangePasswordController');




Route::post('change/password',function (){
    $users = User::find(Auth::user()->id);

    if(Hash::check(Input::get('passwordOld'),$users['password']) && Input::get('password') == Input::get('password_confirmation')){
        $users->password = bcrypt(Input::get('password'));
        $users->save();
        return redirect('/admin/profile')->with('success','Password Changed');
    }else{
        return back()->with('error','Something went wrong!');
    }

});




Route::get('/autoComplete', array('as' => 'autoComplete', 'uses' => 'ProductsController@autoComplete'));
Route::get('/searchResult', array('as' => 'searchResult', 'uses' => 'ProductsController@searchResult'));


Route::post('/subscribe-add','ContactUsController@save');
Route::post('/update-orderStatus','OrdersController@updateStatus');
Route::get('/success-subscribe','ContactUsController@success');

// Cart controller
Route::resource('/cart', 'CartController');
Route::get('remove-cart/{rowid}', 'CheckoutController@RemoveCart');


Route::get('/view-card', 'CartController@viewCart');

Route::get('/cart/update/{id}', 'CartController@update');

Route::get('/success-order','OrdersController@success');


