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
                <div class="col-md-3" style="height: 100%">
                    <figure class="card card-product hovereffect">
                        <a href="{!! url('product-detail/'. $innis->id.$innis->category_id.$innis->brand_id) !!}"><div class="mx-auto d-block img-wrap products"><img src="{{$innis->photo->file}}"></div></a>
                        <figcaption class="info-wrap" style="padding-bottom: 0px">
                            <h5 class="title">{{$innis->pro_name}}</h5>
                            <p class="desc" >{{str_limit($innis->desc,40)}}</p>
                        </figcaption>
                        <div class="bottom-wrap">
                            <a href="{!! url('product-detail/'. $innis->id.$innis->category_id.$innis->brand_id) !!}"><button class="btn btn-sm btn-primary float-right">View Detail</button></a>
                            <div class="price-wrap h5">
                                <span class="price-new">${{$innis->prices}}</span> <del class="price-old"></del>
                            </div> <!-- price-wrap.// -->
                        </div> <!-- bottom-wrap.// -->
                    </figure>
                </div> <!-- col // -->
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
                <div class="col-md-3" style="height: 100%">
                    <figure class="card card-product hovereffect">
                        <a href="{!! url('product-detail/'. $laneige->id.$laneige->category_id.$laneige->brand_id) !!}"><div class="mx-auto d-block img-wrap products"><img src="{{$laneige->photo->file}}"></div></a>
                        <figcaption class="info-wrap" style="padding-bottom: 0px">
                            <h5 class="title">{{$laneige->pro_name}}</h5>
                            <p class="desc" >{{str_limit($laneige->desc,40)}}</p>
                        </figcaption>
                        <div class="bottom-wrap">
                            <a href="{!! url('product-detail/'. $laneige->id.$laneige->category_id.$laneige->brand_id) !!}"><button class="btn btn-sm btn-primary float-right">View Detail</button></a>
                            <div class="price-wrap h5">
                                <span class="price-new">${{$laneige->prices}}</span> <del class="price-old"></del>
                            </div> <!-- price-wrap.// -->
                        </div> <!-- bottom-wrap.// -->
                    </figure>
                </div> <!-- col // -->
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
                            <h5 class="title">{{$iope->pro_name}}</h5>
                            <p class="desc" >{{str_limit($iope->desc,40)}}</p>
                        </figcaption>
                        <div class="bottom-wrap">
                            <a href="{!! url('product-detail/'. $iope->id.$iope->category_id.$iope->brand_id) !!}"><button class="btn btn-sm btn-primary float-right">View Detail</button></a>
                            <div class="price-wrap h5">
                                <span class="price-new">${{$iope->prices}}</span> <del class="price-old"></del>
                            </div> <!-- price-wrap.// -->
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
                            <h5 class="title">{{$etude->pro_name}}</h5>
                            <p class="desc" >{{str_limit($etude->desc,40)}}</p>
                        </figcaption>
                        <div class="bottom-wrap">
                            <a href="{!! url('product-detail/'. $etude->id.$etude->category_id.$etude->brand_id) !!}"><button class="btn btn-sm btn-primary float-right">View Detail</button></a>
                            <div class="price-wrap h5">
                                <span class="price-new">${{$etude->prices}}</span> <del class="price-old"></del>
                            </div> <!-- price-wrap.// -->
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
                            <h5 class="title">{{$other->pro_name}}</h5>
                            <p class="desc" >{{str_limit($other->desc,40)}}</p>
                        </figcaption>
                        <div class="bottom-wrap">
                            <a href="{!! url('product-detail/'. $other->id.$other->category_id.$other->brand_id) !!}"><button class="btn btn-sm btn-primary float-right">View Detail</button></a>
                            <div class="price-wrap h5">
                                <span class="price-new">${{$other->prices}}</span> <del class="price-old"></del>
                            </div> <!-- price-wrap.// -->
                        </div> <!-- bottom-wrap.// -->
                    </figure>
                </div> <!-- col // -->
            @endforeach
        </div> <!-- row.// -->
    </div>
    <!----End Brand Other --->




@stop
