@extends('frontend.fragement.layout')

    @section('content1')

        {{--<div class="container">--}}
            {{--<img src="/images/under_maintenance.png" class="mx-auto d-block" id="mainenance">--}}
        {{--</div>--}}
        <div class="container-fluid" style="padding: 0px; margin: 0px;">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    @foreach($slide1 as $slide)
                    <div class="carousel-item active">
                        <a href="#"><img class="d-block w-100"  src="{{$slide->photo?$slide->photo->file :'https://via.placeholder.com/1024x256'}}" alt="{{$slide->slide_name}}" style="width: 100%;"></a>
                    </div>
                    @endforeach

                    @foreach($slide2 as $slide2)
                    <div class="carousel-item">
                        <img class="d-block w-100 "  src="{{$slide2->photo?$slide2->photo->file :'https://via.placeholder.com/1024x256'}}" alt="{{$slide2->slide_name}}" style="width: 100%;">
                    </div>
                    @endforeach

                    @foreach($slide3 as $slide3)
                    <div class="carousel-item">
                        <img class="d-block w-100"  src="{{$slide3->photo?$slide3->photo->file :'https://via.placeholder.com/1024x256'}}" alt="{{$slide3->slide_name}}" alt="Third slide" style="width: 100%;">
                    </div>
                    @endforeach
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

        <!---- Promotion ---->
        <div class="container" style="margin-top: 30px">
            <div class="row">
                @foreach($promotion as $prom)
                <div class="col-md-4 promo">
                    <a href="{!! url('promotion-detail/'. $prom->id) !!}">
                    <figure class="imghvr-push-up">
                            <img  src="{{$prom->photo?$prom->photo->file :'https://via.placeholder.com/512x190'}}" style="width: 303.33px;height: 120px">
                        <figcaption>
                            <img  src="{{$prom->photo?$prom->photo->file :'https://via.placeholder.com/512x190'}}" style="width: 303.33px;height: 120px">
                        </figcaption>
                    </figure>
                    </a>
                </div>

                @endforeach
            </div>
            <hr>
        </div>
        <!---- Promotion End ---->



        <!---- Popular Product --->
        <div class="container" style="margin-top: 20px;">
            <div class="row w-auto">
                @foreach($pro_popular as $prod)
                    <div class="col-md-3" style="height: 100%">
                        <figure class="card card-product hovereffect">
                            <a href="{!! url('product-detail/'. $prod->id.$prod->category_id.$prod->brand_id) !!}"><div class="mx-auto d-block img-wrap products"><img src="{{$prod->photo->file}}"></div></a>
                            <figcaption class="info-wrap" style="padding-bottom: 0px">
                                <h5 class="title">{{$prod->pro_name}}</h5>
                                <p class="desc" >{{str_limit($prod->desc,40)}}</p>
                            </figcaption>
                            <div class="bottom-wrap">
                                <a href="{!! url('product-detail/'. $prod->id.$prod->category_id.$prod->brand_id) !!}"><button class="btn btn-sm btn-primary float-right" >View Detail</button></a>
                                <div class="price-wrap h5">
                                    <span class="price-new">${{$prod->prices}}</span> <del class="price-old"></del>
                                </div> <!-- price-wrap.// -->
                            </div> <!-- bottom-wrap.// -->
                        </figure>
                    </div> <!-- col // -->
                @endforeach
            </div> <!-- row.// --><hr>
        </div> <!---------end contianer---------->


        <div class="container" style="margin-top: 10px;margin-bottom: 30px">
            <div class="row">
                @foreach($sys_mainLeft as $Left)
                <div class="col-md-4 other-side">
                    <h5 style="color:#79bb2a; margin-top: 10px">{{$Left->static_value_first}}</h5>
                    <a href="#"><img src="{{$Left->photo->file}}" style="width: 290px;height: 190px"></a>
                </div>
                @endforeach
                @foreach($sys_mainCenter as $Center)
                <div class="col-md-4 other-side">
                    <h5 style="color:#79bb2a; margin-top: 10px">{{$Center->static_value_first}}</h5>
                    <a href="#"><img src="{{$Center->photo->file}}" style="width: 290px;height: 190px"></a>
                </div>
                @endforeach

                @foreach($sys_mainRight as $Right)
                <div class="col-md-4 other-side">
                    <h5 style="color:#79bb2a; margin-top: 10px">{{$Right->static_value_first}}</h5>
                    <iframe width="290px" height="190px" src="{{$Right->static_value_second}}"  allow="autoplay;" >
                    </iframe>
                </div>
                @endforeach
            </div>
        </div>

    @stop
