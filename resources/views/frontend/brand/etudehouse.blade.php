@extends('frontend.fragement.layout')

@section('content1')
    <div class="container-fluid bg-overlay-etude" id="main">

        <div class="container last-para">
            @foreach($bg as $b)
            <h1 class="title-about"><strong>{{$b->static_value_first}}</strong></h1>
            @endforeach
            {{--<img class="title-about" src="/images/brandheader/innisfree.png" width="200px">--}}

        </div>
    </div>

    <!---- Brand Innisfree --->
    <div class="container" style="margin-top: 20px;">
        <div class="row w-auto">
            @foreach($pro_etude as $etude)
                <div class="col-md-3" style="height: 100%">
                    <figure class="card card-product hovereffect">
                        <a href="{!! url('product-detail/'. $etude->id.'/'.$etude->category_id.'/'.$etude->brand_id) !!}"><div class="mx-auto d-block img-wrap products"><img src="{{$etude->photo->file}}"></div></a>
                        <figcaption class="info-wrap" style="padding-bottom: 0px">
                            <a href="{!! url('product-detail/'. $etude->id.$etude->category_id.$etude->brand_id) !!}"><h5 class="title">{{$etude->pro_name}}</h5></a>
                        </figcaption>
                        <div class="bottom-wrap">
                            <div class="price-wrap h5">
                                <span class="price-new">${{$etude->prices}}</span> <del class="price-old"></del>
                            </div> <!-- price-wrap.// -->
                        </div> <!-- bottom-wrap.// -->
                        <div class="bottom-wrap">
                            <a href="{!! url('product-detail/'. $etude->id.'/'.$etude->category_id.'/'.$etude->brand_id) !!}"><button class="btn btn-sm btn-primary" >View Detail</button></a>
                            <a href="{{route('cart.edit',$etude->id)}}"><button class="btn btn-sm btn-success">Add to cart</button></a>
                        </div> <!-- bottom-wrap.// -->
                    </figure>
                </div> <!-- col // -->
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
