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
    <div class="container" style="margin-top: 20px;">
        <div class="row w-auto">
            @foreach($pro_innis as $innis)
                <div class="col-md-3" style="height: 100%">
                    <figure class="card card-product hovereffect">
                        <a href="{!! url('product-detail/'. $innis->id.'/'.$innis->category_id.'/'.$innis->brand_id) !!}"><div class="mx-auto d-block img-wrap products"><img src="{{$innis->photo->file}}"></div></a>
                        <figcaption class="info-wrap" style="padding-bottom: 0px">
                            <a href="{!! url('product-detail/'. $innis->id.$innis->category_id.$innis->brand_id) !!}"><h5 class="title">{{$innis->pro_name}}</h5></a>
                        </figcaption>
                        <div class="bottom-wrap">
                            <div class="price-wrap h5">
                                <span class="price-new">${{$innis->prices}}</span> <del class="price-old"></del>
                            </div> <!-- price-wrap.// -->
                        </div> <!-- bottom-wrap.// -->
                        <div class="bottom-wrap">
                            <a href="{!! url('product-detail/'. $innis->id.'/'.$innis->category_id.'/'.$innis->brand_id) !!}"><button class="btn btn-sm btn-primary" >View Detail</button></a>
                            <a href="{{route('cart.edit',$innis->id)}}"><button class="btn btn-sm btn-success">Add to cart</button></a>
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


