@extends('frontend.fragement.layout')

@section('content1')
    <div class="container-fluid bg-overlay-etude">

        <div class="container last-para">
            <h1 class="title-about"><strong>ETUDE HOUSE</strong></h1>
            {{--<img class="title-about" src="/images/brandheader/innisfree.png" width="200px">--}}

        </div>
    </div>

    <!---- Brand Innisfree --->
    <div class="container" style="margin-top: 20px;">
        <div class="row w-auto">
            @foreach($pro_etude as $etude)
                <div class="col-md-3" style="height: 100%">
                    <figure class="card card-product hovereffect">
                        <a href="{!! url('product-detail/'. $etude->id.$etude->category_id.$etude->brand_id) !!}"><div class="mx-auto d-block img-wrap products"><img src="{{$etude->photo->file}}"></div></a>
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
    </div> <!---------end contianer---------->



@stop
