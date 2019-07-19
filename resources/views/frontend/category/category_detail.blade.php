@extends('frontend.fragement.layout')

@section('content1')

    <!---- Cateory --->
    <div class="container" style="margin-top: 20px;margin-bottom: ">
        <div class="row w-auto item-shadow-gray">
            @foreach($pro_cate as $cat)
                <div class="col-md-3 col-sm-6 ">
                    <div class="product-grid2">
                        <div class="product-image2">

                            <img class="pic-1" src="{{$cat->photo->file}}" class="img-fluid w-100" id="product1">
                            <img class="pic-2" src="{{$cat->photo->file}}" class="img-fluid w-100" id="product2">

                            <ul class="social">
                                <li><a href="{!! url('product-detail/'. $cat->id.'/'.$cat->category_id.'/'.$cat->brand_id) !!}" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                {{--<li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>--}}
                                <li><a href="{{route('cart.edit',$cat->id)}}" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                            <a class="add-to-cart" href="{{route('cart.edit',$cat->id)}}">Add to cart</a>
                        </div>
                        <div class="product-content">
                            <h3 class="title primary" ><a href="{!! url('product-detail/'. $cat->id.'/'.$cat->category_id.'/'.$cat->brand_id) !!}" >{{str_limit($cat->pro_name,30) }}</a></h3>
                            <span class="price">${{$cat->prices}}</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div> <!-- row.// -->
    </div> <!---------end contianer---------->



@stop
