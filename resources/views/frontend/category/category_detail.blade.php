@extends('frontend.fragement.layout')

@section('content1')

    <!---- Cateory --->
    <div class="container" style="margin-top: 20px;">
        <div class="row w-auto">
            @foreach($pro_cate as $cat)
                <div class="col-md-3" style="height: 100%">
                    <figure class="card card-product hovereffect">
                        <a href="{!! url('product-detail/'. $cat->id.'/'.$cat->category_id.'/'.$cat->brand_id) !!}"><div class="mx-auto d-block img-wrap products"><img src="{{$cat->photo->file}}"></div></a>
                        <figcaption class="info-wrap" style="padding-bottom: 0px">
                            <a href="{!! url('product-detail/'. $cat->id.$cat->category_id.$cat->brand_id) !!}"><h5 class="title">{{$cat->pro_name}}</h5></a>
                        </figcaption>
                        <div class="bottom-wrap">
                            <div class="price-wrap h5">
                                <span class="price-new">${{$cat->prices}}</span> <del class="price-old"></del>
                            </div> <!-- price-wrap.// -->
                        </div> <!-- bottom-wrap.// -->
                        <div class="bottom-wrap">
                            <a href="{!! url('product-detail/'. $cat->id.'/'.$cat->category_id.'/'.$cat->brand_id) !!}"><button class="btn btn-sm btn-primary" >View Detail</button></a>
                            <a href="{{route('cart.edit',$cat->id)}}"><button class="btn btn-sm btn-success">Add to cart</button></a>
                        </div> <!-- bottom-wrap.// -->
                    </figure>
                </div> <!-- col // -->
            @endforeach
        </div> <!-- row.// -->
    </div> <!---------end contianer---------->



@stop
