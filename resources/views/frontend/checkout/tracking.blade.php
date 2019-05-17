@extends('frontend.fragement.layout')

@section('content1')
    <style>
        .dataTables_filter {
            width: 50%;
            float: right;
            text-align: right;
        }
    </style>

    <div class="container" style="padding-top: 15px;padding-bottom: 15px">
        <form class="form-inline" action="{{route('trackingResult')}}">

            <input type="text" class="form-control mb-2 mr-sm-2"  placeholder="Enter phone" name="phone">
            <button type="submit" class="btn btn-primary mb-2 btnSubmit" onKeyPress="if(this.value.length==10) return false;">Submit</button>
        </form>
    </div>

    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>

@stop