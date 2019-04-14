@extends('front.homepages.header')
@section('content')
    <style>
        h1{
            text-align: center;
        }
        h3{
            text-align: center;
        }x
    </style>
    <div class="container-fluid" style="height: 450px;margin-top: 40px;">
        <h1> <i class="fa fa-check-circle" style=" font-size: 100px;color: green;"></i></br>Thank you!</h1>
        <h3>Your order was successfully!!!</h3>

    </div>
@include('front.homepages.footer')
@stop