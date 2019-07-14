@extends('frontend.fragement.layout')

@section('content1')
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
        @foreach($order as $max)
            <h3>Your order was successful with order number:<b> {{$max->order_id}}</b></h3>
            <h5 style="text-align: center">Please keep your order number for tracking your products</h5>



        @endforeach

    </div>

@stop