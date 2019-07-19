



@extends('frontend.fragement.layout')
@section('content1')
    <div class="container">
        <div class="row">
            <div class="col-md-12" style="margin-top: 20px">
                @foreach($pro_details as $detail)
                <h2 style="color: #008000 ;">{{$detail->pro_name}}</h2>
                @endforeach
                <hr style="background-color: #008000;">

            </div>
        </div>
        <div class="row" style="padding-bottom: 25px">
            <div class="col-md-5 col-sm-12">
                <!--Carousel Wrapper-->
                <div id="carousel-example-2" class="carousel slide carousel-fade z-depth-1-half" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        @foreach($pro_details as $detail)
                        <div class="carousel-item active">
                            <div class="view pro-detail">
                                <img class="d-block w-100 img-fluid " src="{{$detail->photo->file}}">
                                <div class="mask rgba-black-light"></div>
                            </div>
                        </div>
                        @endforeach
                        @foreach($thumbnail as $thumbnail)
                        <div class="carousel-item ">
                            <!--Mask color-->
                            <div class="view pro-detail">
                                <img class="d-block w-100 img-fluid" src="{{$thumbnail->file}}">
                                <div class="mask rgba-black-light"></div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <!--/.Slides-->
                    <!--Controls-->
                    <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                    <!--/.Controls-->
                </div>
            </div>
            <div class="col-md-7 col-sm-12">
                @foreach($pro_details as $detail)
                    <article class="card-body" style="margin-top: -10px;">
                        {{--<h3 class="title mb-3">{{$detail->pro_name}}</h3>--}}

                        <p class="price-detail-wrap" style="color: red !important;font-weight: bold;">
                            <span class="price h3 text-primary">
                                <span class="currency">Price: </span><span class="num">{{$detail->prices}}$</span>
                        {{--<p><a href="#" style="color: red !important;font-weight: bold;">{{ $detail->prices }}$</a></p>--}}
                        </span>
                        </p>
                        <dl class="param param-feature">
                            <strong>Product Status: <label class="pro_status"> {{$detail->pro_status}}</label></strong>
                        </dl>
                        <dl class="param param-feature">
                            <dt>Product Code: #{{$detail->pro_code}}</dt>
                        </dl>
                        @foreach($brand as $bra)
                            <dl class="param param-feature">
                                <dt name="pro_name">Brand: {{$bra->brand_name}}</dt>
                            </dl>
                        @endforeach
                        @foreach($category as $cat)
                            <dl class="param param-feature">
                                <dt>Type: {{$cat->category_name}}</dt>
                            </dl>
                        @endforeach
                        <dl class="item-property">
                            <dt>Description</dt>
                            <textarea class="form-control" readonly style="font-family: 'Khmer OS Battambang', sans-serif" rows='5'>{{$detail->desc}}</textarea>
                            {{--<dd><p >{{$detail->desc}}</p></dd>--}}
                        </dl>

                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-info video-btn" data-toggle="modal" @if($detail->video=='') data-src="/no-video" @else data-src="{{$detail->video}}" @endif  data-target="#myModal">
                            How to use
                        </button>
                        <a href="{{route('cart.edit',$detail->id)}}"><button type="button" class="btn btn-success">Add to cart</button></a>


                        <!-- Modal -->
                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">


                                    <div class="modal-body">

                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <!-- 16:9 aspect ratio -->
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{--<dl class="item-property">--}}
                            {{--<dt>How to use</dt>--}}
                            {{--<dd> <iframe width="auto" height="220px" @if($detail->video=='') src="/no-video" @else src="{{$detail->video}}" @endif  allow="autoplay;" >--}}
                                {{--</iframe></dd>--}}

                        {{--</dl>--}}


                    </article>
                @endforeach
            </div>
        </div>
    </div>


    <!--/.Carousel Wrapper-->
    {{--<div class="container product_detail">--}}
            {{--<div class="row">--}}
                {{--@foreach($pro_details as $detail)--}}
                {{--<aside class="col-sm-5">--}}

                    {{--<div class="mx-auto d-block image_detail"> <a href="#"><img src="{{$detail->photo->file}}"></a></div>--}}
                {{--</aside>--}}
                {{--<aside class="col-sm-7">--}}

                {{--</aside> <!-- col.// -->--}}
                {{--@endforeach--}}
            {{--</div> <!-- row.// -->--}}
    {{--</div>--}}
    <!--container.//-->


@stop

