@extends('frontend.fragement.layout')

@section('content1')
    <div class="container-fluid bg-overlay-other">

        <div class="container last-para">
            <h1 class="title-about"><strong>OTHER</strong></h1>
            {{--<img class="title-about" src="/images/brandheader/innisfree.png" width="200px">--}}

        </div>
    </div>

    <!---- Brand Innisfree --->
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
    </div> <!---------end contianer---------->



@stop
