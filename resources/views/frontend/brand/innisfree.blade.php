@extends('frontend.fragement.layout')

@section('content1')
    <div class="container-fluid bg-overlay-innisfree" id="main">

        <div class="container last-para">
            @foreach($bg as $b)
                <h1 class="title-about"><strong>{{$b->static_value_first}}</strong></h1>
            @endforeach

        </div>
    </div>

    <!---- Brand IOPE --->
    <div class="container" style="margin-top: 20px;margin-bottom: 25px">
        <div class="row w-auto item-shadow-gray">
            @foreach($pro_innis as $innis)
                <div class="col-md-3 col-sm-6 ">
                    <div class="product-grid2">
                        <div class="product-image2">

                            <img class="pic-1" src="{{$innis->photo->file}}" class="img-fluid w-100" id="product1">
                            <img class="pic-2" src="{{$innis->photo->file}}" class="img-fluid w-100" id="product2">

                            <ul class="social">
                                <li><a href="{!! url('product-detail/'. $innis->id.'/'.$innis->category_id.'/'.$innis->brand_id) !!}" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                {{--<li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>--}}
                                <li><a href="{{route('cart.edit',$innis->id)}}" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                            <a class="add-to-cart" href="{{route('cart.edit',$innis->id)}}">Add to cart</a>
                        </div>
                        <div class="product-content">
                            <h3 class="title primary" ><a href="{!! url('product-detail/'. $innis->id.'/'.$innis->category_id.'/'.$innis->brand_id) !!}" >{{str_limit($innis->pro_name,30) }}</a></h3>
                            <span class="price">${{$innis->prices}}</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div> <!-- row.// -->
    </div> <!---------end contianer---------->


    <script>
        var mains = document.getElementById('main');
        @foreach($bg as $b)
            mains.style.background = 'linear-gradient(rgba(0,0,0,.7), rgba(0,0,0,.7)), url({{$b->photo->file}}) center center / cover no-repeat';
        @endforeach
    </script>


@stop


