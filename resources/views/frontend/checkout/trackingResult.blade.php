@extends('frontend.fragement.layout')

@section('content1')
    <style>
        h1{
            text-align: center;
        }
        h3{
            text-align: center;
        }x


        .dataTables_filter {
            width: 50%;
            float: right;
            text-align: right;
        }
    </style>
    <div class="card-body container">
        <div class="table-responsive">
            <table class="table" id="dataTable">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Date</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Status</th>
                </tr>
                </thead>
                <tbody>
                @foreach($order as $ord)
                    <tr>
                        <th scope="row">{{$ord->order_id}}</th>
                        <td>{{$ord->order_date}}</td>
                        <td>{{$ord->phone}}</td>
                        <td>{{$ord->orderStatus->status_name}}</td>
                    </tr>
                @endforeach

                </tbody>
            </table>


        </div>
        <!-- /.container-fluid -->
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


    $('.dataTables_filter').addClass('pull-right');
    });
    </script>


@stop
