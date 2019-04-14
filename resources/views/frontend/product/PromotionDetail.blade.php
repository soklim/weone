



@extends('frontend.fragement.layout')
@section('content1')
    <div class="container">
        <div class="row">
            @foreach($promotion_details as $detail)
            <div class="col-md-12" style="margin-top: 20px">
                <h2 style="color: #ffa366;">{{$detail->promo_name}}</h2>
                <label>From Date:&nbsp;{{$detail->from_date}} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;To Date:&nbsp;{{$detail->to_date}}</label>
                <hr style="background-color: #ffa366;">
            </div>

            @endforeach

        </div>
        <div class="row" style="padding-bottom: 50px">
            @foreach($promotion_details as $detail)
                <div class="col-md-6" style="margin-top: 20px">
                   <label><Strong>Description</Strong> </label> <p>{{$detail->desc}}</p>
                </div>
                <div class="col-md-6" style="margin-top: 20px">
                    <div class="mx-auto d-block image_detail"> <a href="#"><img src="{{$detail->photo?$detail->photo->file :'https://via.placeholder.com/512x190'}}" width="100%" height="200px"></a></div>
                </div>

            @endforeach

        </div>
    </div>



@stop

