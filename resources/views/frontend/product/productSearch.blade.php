@extends('frontend.fragement.layout')
@section('content1')

    <div class="container" style="margin-top: 20px;">
        <h3>Search Result...</h3>
    </div>


    <div class="container" style="margin-top: 20px;">
        <div class="row w-auto">
            @foreach($products as $product)
                <div class="col-md-3 col-sm-6 item-shadow-gray">
                    <div class="product-grid2">
                        <div class="product-image2">

                            <img class="pic-1" src="{{$product->photo->file}}" class="img-fluid w-100" id="product1">
                            <img class="pic-2" src="{{$product->photo->file}}" class="img-fluid w-100" id="product2">

                            <ul class="social">
                                <li><a href="{!! url('product-detail/'. $product->id.'/'.$product->category_id.'/'.$product->brand_id) !!}" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                {{--<li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>--}}
                                <li><a href="{{route('cart.edit',$product->id)}}" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                            <a class="add-to-cart" href="{{route('cart.edit',$product->id)}}">Add to cart</a>
                        </div>
                        <div class="product-content">
                            <h3 class="title primary" ><a href="{!! url('product-detail/'. $product->id.'/'.$product->category_id.'/'.$product->brand_id) !!}" >{{str_limit($product->pro_name,30) }}</a></h3>
                            <span class="price">${{$product->prices}}</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div> <!-- row.// -->
    </div> <!---------end contianer---------->

@stop

