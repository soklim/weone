@extends('frontend.fragement.layout')

@section('content1')
    <style>
        .dataTables_filter {
            width: 50%;
            float: right;
            text-align: right;
        }
    </style>
    <div class="container-fluid bg-overlay-etude">

        <div class="container last-para">
            <h1 class="title-about"><strong>Order Tracking</strong></h1>
            {{--<img class="title-about" src="/images/brandheader/innisfree.png" width="200px">--}}

        </div>
    </div>

    <div class="container">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table" id="dataTable">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Date</th>
                        <th scope="col">Customer Name</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Email</th>
                        <th scope="col">Province</th>
                        <th scope="col">Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($order as $ord)
                        <tr>
                            <th scope="row">{{$ord->order_id}}</th>
                            <td>{{$ord->order_date}}</td>
                            <td>{{$ord->customer_name}}</td>
                            <td>{{$ord->phone}}</td>
                            <td>{{$ord->email}}</td>
                            <td>{{$ord->provinces->province_name}}</td>
                            <td>{{$ord->orderStatus->status_name}}</td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>

            </div>
        </div>
    </div>

    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#dataTable').dataTable({
                language: {
                    searchPlaceholder: "Search ordering",
                    search: ""
                },

                "bPaginate": true,
                "bLengthChange": false,
                "bFilter": true,
                "bInfo": false,
                "bAutoWidth": false });


            $('.dataTables_filter').addClass('pull-left');
        });
    </script>

@stop