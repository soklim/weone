@extends('frontend.fragement.layout')
@section('content1')

    <div class="container">
        <div class="row">
            @foreach($sys_TopSeller as $top)
            <div class="col-md-12" style="margin-top: 20px">
                <h1 style="color: #008000;">{{$top->static_name}}</h1>
                <p>{{$top->static_value_first}}</p>
            </div>
            <div class="col-md-12" style="margin-top: 20px">
                <img class="img-fluid" src="{{$top->photo->file}}" width="100%" height="389px">
            </div>
            @endforeach

        </div>
    </div>

    <!---- Brand IOPE --->
    <div class="container" style="margin-top: 20px;margin-bottom: 20px">
        <div class="row w-auto item-shadow-gray">
            @foreach($best_pro as $best)
                <div class="col-md-3 col-sm-6">
                    <div class="product-grid2">
                        <div class="product-image2">

                            <img class="pic-1" src="{{$best->photo->file}}" class="img-fluid w-100" id="product1">
                            <img class="pic-2" src="{{$best->photo->file}}" class="img-fluid w-100" id="product2">

                            <ul class="social">
                                <li><a href="{!! url('product-detail/'. $best->id.'/'.$best->category_id.'/'.$best->brand_id) !!}" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                {{--<li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>--}}
                                <li><a href="{{route('cart.edit',$best->id)}}" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                            <a class="add-to-cart" href="{{route('cart.edit',$best->id)}}">Add to cart</a>
                        </div>
                        <div class="product-content">
                            <h3 class="title primary" ><a href="{!! url('product-detail/'. $best->id.'/'.$best->category_id.'/'.$best->brand_id) !!}" >{{str_limit($best->pro_name,30) }}</a></h3>
                            <span class="price">${{$best->prices}}</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div> <!-- row.// -->
    </div> <!---------end contianer---------->

@stop

