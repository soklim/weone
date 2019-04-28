<?php
/**
 * Created by PhpStorm.
 * User: AMIS
 * Date: 15-Apr-19
 * Time: 10:22 PM
 */
?>

@extends('admin.fragement.layout')

@section('content1')

    <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Order information</a>
            </li>
        </ol>

        <div class="row" style="padding-left: 15px">
            @foreach($order as $ord)
                <div class="col-md-3">
                    <label>Order No: <strong>{{$ord->order_id}}</strong></label>
                </div>
                <div class="col-md-3">
                    <label>Customer Name: <strong>{{$ord->customer_name}}</strong></label>
                </div>
                <div class="col-md-3">
                    <label>Date: <strong>{{$ord->order_date}}</strong></label>
                </div>
                <div class="col-md-3">
                    <label>Phone: <strong>{{$ord->phone}}</strong></label>
                </div>
         </div>
        <div class="row" style="padding-left: 15px">
                <div class="col-md-3">
                    <label>Email: <strong>{{$ord->email}}</strong></label>
                </div>
                <div class="col-md-3">
                    <label>Province: <strong>{{$ord->province}}</strong></label>
                </div>
                <div class="col-md-3">
                    <label>Address: <strong>{{$ord->address}}</strong></label>
                </div>
                <div class="col-md-3">
                    <label>Payment Method: <strong>{{$ord->payment_method}}</strong></label>
                </div>
        </div>
        <div class="row" style="padding-left: 15px">
            <div class="col-md-12">
                <label>Description: <strong>{{$ord->descs}}</strong></label>
            </div>
        </div>
        <form class="form-inline" style="padding-left: 15px; padding-bottom: 15px">
            <label for="status" class="mr-sm-2">Status:</label>
            <select class="form-control mr-sm-2">
                <option>{{$ord->statuss}}</option>
                <option>Ordering</option>
                <option>Accept</option>
                <option>On Delivery</option>
                <option>Finished</option>
                <option>Cancel</option>
            </select>
            <button type="submit" class="btn btn-primary mr-sm-2">Submit</button>
        </form>

        @endforeach

        </form>
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Product Name</th>
                <th>Price</th>
                <th>Qty</th>
                <th>Amount</th>
            </tr>
            </thead>
            <tbody>
            @foreach($orderDetail as $detail)
                <tr>
                    <td>{{$detail->product->pro_name}}</td>
                    <td>{{$detail->price}}</td>
                    <td>{{$detail->qty}}</td>
                    <td>{{$detail->amount}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div style="text-align: right">
            <strong><i><label style="text-align: right">Sub Total: {{$ord->total}}$</label></i></strong>
        </div>



    </div>
    <!-- /.container-fluid -->
@stop

