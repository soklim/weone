@extends('frontend.fragement.layout')
@section('content1')

    <div class="container">
        <div class="row">
            @foreach($sys_TopSeller as $top)
            <div class="col-md-12" style="margin-top: 20px">
                <h1 style="color: #79bb2a;">{{$top->static_name}}</h1>
                <p>{{$top->static_value_first}}</p>
            </div>
            <div class="col-md-12" style="margin-top: 20px">
                <img class="img-fluid" src="{{$top->photo->file}}" width="100%" height="389px">
            </div>
            @endforeach

        </div>
    </div>

    <!---- Brand IOPE --->
    <div class="container" style="margin-top: 20px;">
        <div class="row w-auto">
            @foreach($best_pro as $best)
                <div class="col-md-3" style="height: 100%">
                    <figure class="card card-product hovereffect">
                        <a href="{!! url('product-detail/'. $best->id.$best->category_id.$best->brand_id) !!}"><div class="mx-auto d-block img-wrap products"><img src="{{$best->photo->file}}"></div></a>
                        <figcaption class="info-wrap" style="padding-bottom: 0px">
                            <a href="{!! url('product-detail/'. $best->id.$best->category_id.$best->brand_id) !!}"><h5 class="title">{{$best->pro_name}}</h5></a>
                        </figcaption>
                        <div class="bottom-wrap">
                            <div class="price-wrap h5">
                                <span class="price-new">${{$best->prices}}</span> <del class="price-old"></del>
                            </div> <!-- price-wrap.// -->
                        </div> <!-- bottom-wrap.// -->
                        <div class="bottom-wrap">
                            <a href="{!! url('product-detail/'. $best->id.$best->category_id.$best->brand_id) !!}"><button class="btn btn-sm btn-primary" >View Detail</button></a>
                            <a href="{{route('cart.edit',$best->id)}}"><button class="btn btn-sm btn-success">Add to cart</button></a>

                        </div> <!-- bottom-wrap.// -->
                    </figure>
                </div> <!-- col // -->
            @endforeach
        </div> <!-- row.// -->
    </div> <!---------end contianer---------->

@stop

