@extends('frontend.fragement.layout')

@section('content1')

    <!---- Brand Innisfree --->
    <div class="container after-header">
        <a href="{{url('/brand-innisfree')}}"><h3 class="brand-title">INNISFREE</h3></a>
        <hr class="brand-line">
    </div>
    <div class="container" style="margin-top: 20px;">
        <div class="row w-auto">
            @foreach($pro_innis as $innis)
                {{--<div class="col-md-3" style="height: 100%">--}}
                    {{--<figure class="card card-product hovereffect">--}}
                        {{--<a href="{!! url('product-detail/'. $innis->id.'/'.$innis->category_id.'/'.$innis->brand_id) !!}"><div class="mx-auto d-block img-wrap products"><img src="{{$innis->photo->file}}"></div></a>--}}
                        {{--<figcaption class="info-wrap" style="padding-bottom: 0px">--}}
                            {{--<a href="{!! url('product-detail/'. $innis->id.$innis->category_id.$innis->brand_id) !!}"><h5 class="title">{{$innis->pro_name}}</h5></a>--}}
                        {{--</figcaption>--}}
                        {{--<div class="bottom-wrap">--}}
                            {{--<div class="price-wrap h5">--}}
                                {{--<span class="price-new">${{$best->prices}}</span> <del class="price-old"></del>--}}
                            {{--</div> <!-- price-wrap.// -->--}}
                        {{--</div> <!-- bottom-wrap.// -->--}}
                        {{--<div class="bottom-wrap">--}}
                            {{--<a href="{!! url('product-detail/'. $innis->id.'/'.$innis->category_id.'/'.$innis->brand_id) !!}"><button class="btn btn-sm btn-primary" >View Detail</button></a>--}}
                            {{--<a href="{{route('cart.edit',$innis->id)}}"><button class="btn btn-sm btn-success">Add to cart</button></a>--}}
                        {{--</div> <!-- bottom-wrap.// -->--}}
                    {{--</figure>--}}
                {{--</div> <!-- col // -->--}}
                <div class="col-md-3 col-sm-6 item-shadow-gray">
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
    </div>
    <!----End Brand Innisfree --->



    <!---- Brand Laneige --->
    <div class="container after-header">
        <a href="{{url('/brand-laneige')}}"><h3 class="brand-title" style="text-align: right">LANEIGE</h3></a>
        <hr class="brand-line">
    </div>
    <div class="container" style="margin-top: 20px;">
        <div class="row w-auto">
            @foreach($pro_laneige as $laneige)
                <div class="col-md-3 col-sm-6 item-shadow-gray">
                    <div class="product-grid2">
                        <div class="product-image2">

                            <img class="pic-1" src="{{$laneige->photo->file}}" class="img-fluid w-100" id="product1">
                            <img class="pic-2" src="{{$laneige->photo->file}}" class="img-fluid w-100" id="product2">

                            <ul class="social">
                                <li><a href="{!! url('product-detail/'. $laneige->id.'/'.$laneige->category_id.'/'.$laneige->brand_id) !!}" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                {{--<li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>--}}
                                <li><a href="{{route('cart.edit',$innis->id)}}" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                            <a class="add-to-cart" href="{{route('cart.edit',$innis->id)}}">Add to cart</a>
                        </div>
                        <div class="product-content">
                            <h3 class="title primary" ><a href="{!! url('product-detail/'. $laneige->id.'/'.$laneige->category_id.'/'.$laneige->brand_id) !!}" >{{str_limit($laneige->pro_name,30) }}</a></h3>
                            <span class="price">${{$laneige->prices}}</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div> <!-- row.// -->
    </div>
    <!----End Brand Laneige --->

    <!---- Brand IOPE --->
    <div class="container after-header">
        <a href="{{url('/brand-iope')}}"><h3 class="brand-title">IOPE</h3></a>
        <hr class="brand-line">
    </div>
    <div class="container" style="margin-top: 20px;">
        <div class="row w-auto">
            @foreach($pro_iope as $iope)
                <div class="col-md-3" style="height: 100%">
                    <figure class="card card-product hovereffect">
                        <a href="{!! url('product-detail/'. $iope->id.$iope->category_id.$iope->brand_id) !!}"><div class="mx-auto d-block img-wrap products"><img src="{{$iope->photo->file}}"></div></a>
                        <figcaption class="info-wrap" style="padding-bottom: 0px">
                            <a href="{!! url('product-detail/'. $iope->id.$iope->category_id.$iope->brand_id) !!}"><h5 class="title">{{$iope->pro_name}}</h5></a>
                        </figcaption>
                        <div class="bottom-wrap">
                            <div class="price-wrap h5">
                                <span class="price-new">${{$iope->prices}}</span> <del class="price-old"></del>
                            </div> <!-- price-wrap.// -->
                        </div> <!-- bottom-wrap.// -->
                        <div class="bottom-wrap">
                            <a href="{!! url('product-detail/'. $iope->id.$iope->category_id.$iope->brand_id) !!}"><button class="btn btn-sm btn-primary" >View Detail</button></a>
                            <a href="{{route('cart.edit',$iope->id)}}"><button class="btn btn-sm btn-success">Add to cart</button></a>
                        </div> <!-- bottom-wrap.// -->
                    </figure>
                </div> <!-- col // -->
            @endforeach
        </div> <!-- row.// -->
    </div>
    <!----End Brand IOPE --->

    <!---- Brand ETUDE HOUSE --->
    <div class="container after-header">
        <a href="{{url('/brand-etude-house')}}"><h3 class="brand-title" style="text-align: right">ETUDE HOUSE</h3></a>
        <hr class="brand-line">
    </div>
    <div class="container" style="margin-top: 20px;">
        <div class="row w-auto">
            @foreach($pro_etude as $etude)
                <div class="col-md-3" style="height: 100%">
                    <figure class="card card-product hovereffect">
                        <a href="{!! url('product-detail/'. $etude->id.$etude->category_id.$etude->brand_id) !!}"> <div class="mx-auto d-block img-wrap products"><img src="{{$etude->photo->file}}"></div></a>
                        <figcaption class="info-wrap" style="padding-bottom: 0px">
                            <a href="{!! url('product-detail/'. $etude->id.$etude->category_id.$etude->brand_id) !!}"><h5 class="title">{{$etude->pro_name}}</h5></a>
                        </figcaption>
                        <div class="bottom-wrap">
                            <div class="price-wrap h5">
                                <span class="price-new">${{$etude->prices}}</span> <del class="price-old"></del>
                            </div> <!-- price-wrap.// -->
                        </div> <!-- bottom-wrap.// -->
                        <div class="bottom-wrap">
                            <a href="{!! url('product-detail/'. $etude->id.$etude->category_id.$etude->brand_id) !!}"><button class="btn btn-sm btn-primary" >View Detail</button></a>
                            <a href="{{route('cart.edit',$etude->id)}}"><button class="btn btn-sm btn-success">Add to cart</button></a>
                        </div> <!-- bottom-wrap.// -->
                    </figure>
                </div> <!-- col // -->
            @endforeach
        </div> <!-- row.// -->
    </div>
    <!----End Brand ETUDE HOUSE --->

    <!---- Brand Other --->
    <div class="container after-header">
        <a href="{{url('/brand-other')}}"><h3 class="brand-title">OTHER</h3></a>
        <hr class="brand-line">
    </div>
    <div class="container" style="margin-top: 20px;">
        <div class="row w-auto">
            @foreach($pro_other as $other)
                <div class="col-md-3" style="height: 100%">
                    <figure class="card card-product hovereffect">
                        <a href="{!! url('product-detail/'. $other->id.$other->category_id.$other->brand_id) !!}"><div class="mx-auto d-block img-wrap products"><img src="{{$other->photo->file}}"></div></a>
                        <figcaption class="info-wrap" style="padding-bottom: 0px">
                            <a href="{!! url('product-detail/'. $other->id.$other->category_id.$other->brand_id) !!}"><h5 class="title">{{$other->pro_name}}</h5></a>
                        </figcaption>
                        <div class="bottom-wrap">
                            <div class="price-wrap h5">
                                <span class="price-new">${{$other->prices}}</span> <del class="price-old"></del>
                            </div> <!-- price-wrap.// -->
                        </div> <!-- bottom-wrap.// -->
                        <div class="bottom-wrap">
                            <a href="{!! url('product-detail/'. $other->id.$other->category_id.$other->brand_id) !!}"><button class="btn btn-sm btn-primary" >View Detail</button></a>
                            <a href="{{route('cart.edit',$other->id)}}"><button class="btn btn-sm btn-success">Add to cart</button></a>
                        </div> <!-- bottom-wrap.// -->
                    </figure>
                </div> <!-- col // -->
            @endforeach
        </div> <!-- row.// -->
    </div>
    <!----End Brand Other --->




@stop
