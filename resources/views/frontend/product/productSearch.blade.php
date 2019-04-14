@extends('frontend.fragement.layout')
@section('content1')

    <div class="container" style="margin-top: 20px;">
        <h3>Search Result...</h3>
    </div>


    <div class="container" style="margin-top: 20px;">
        <div class="row w-auto">
            @foreach($products as $product)
                <div class="col-md-3" style="height: 100%">
                    <figure class="card card-product hovereffect">
                        <a href="{!! url('product-detail/'. $product->id.$product->category_id.$product->brand_id) !!}"><div class="mx-auto d-block img-wrap products"><img src="{{$product->photo->file}}"></div></a>
                        <figcaption class="info-wrap" style="padding-bottom: 0px">
                            <h5 class="title">{{$product->pro_name}}</h5>
                            <p class="desc" >{{str_limit($product->desc,40)}}</p>
                        </figcaption>
                        <div class="bottom-wrap">
                            <a href="{!! url('product-detail/'. $product->id.$product->category_id.$product->brand_id) !!}"><button class="btn btn-sm btn-primary float-right">View Detail</button></a>
                            <div class="price-wrap h5">
                                <span class="price-new">${{$product->prices}}</span> <del class="price-old"></del>
                            </div> <!-- price-wrap.// -->
                        </div> <!-- bottom-wrap.// -->
                    </figure>
                </div> <!-- col // -->
            @endforeach
        </div> <!-- row.// -->
    </div> <!---------end contianer---------->

@stop

