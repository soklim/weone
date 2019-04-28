@extends('frontend.fragement.layout')

@section('content1')
    <div class="container-fluid bg-overlay-iope">

        <div class="container last-para">
            <h1 class="title-about"><strong>IOPE</strong></h1>
            {{--<img class="title-about" src="/images/brandheader/innisfree.png" width="200px">--}}

        </div>
    </div>

    <!---- Brand Innisfree --->
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
                                <span class="price-new">${{$innis->prices}}</span> <del class="price-old"></del>
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
    </div> <!---------end contianer---------->



@stop
