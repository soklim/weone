<?php
/**
 * Created by PhpStorm.
 * User: SOKLIM
 * Date: 7/14/2019
 * Time: 2:38 AM
 */
?>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="">
<meta name="author" content="">

<title>Anachak Technology</title>

<!-- Bootstrap core CSS-->
<link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom fonts for this template-->
<link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">


<body>
<div class="container-fluid">
    <div  style="text-align: center" >
        <img src="/images/header/logo.jpg" class="img-fluid">

    </div>
    <hr>
    <h3 align="center">RECEIPT</h3>
    <hr>
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
            <label>Payment Method: <strong>{{$ord->payment_method}}</strong></label>
        </div>

        <div class="col-md-6">
            <label>Address: <strong>{{$ord->address}}</strong></label>
        </div>

    </div>

    @endforeach

    </form>
    <table class="table">
        <thead>
        <tr class="thead-dark">
            <th>Product Name</th>
            <th>Unit Price</th>
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
        <strong><label style="text-align: right">Total: {{$ord->total}}$</label></strong>
        <input type="text" id="total" value="{{$ord->total}}" style="display: none">
    </div>
    <div style="text-align: right">
        <strong><label style="text-align: right">Delivery Fee: @if($ord->province==1) 1.5$ @else 2$" @endif</label></strong>
        <input type="text" id="delivery" @if($ord->province==1) value="1.5" @else value="2" @endif style="display: none">
    </div>
    <div style="text-align: right">
        <strong><i><label style="text-align: right" id="amount"></label></i></strong>
    </div>



</div>

<script>
    var total = parseFloat(document.getElementById('total').value);
    var delivery = parseFloat(document.getElementById('delivery').value);

    var subtotal = parseFloat(total+delivery);
    document.getElementById('amount').innerText="NET TOTAL: "+subtotal+"$";
</script>
<!-- /.container-fluid -->
</body>









