<?php
/**
 * Created by PhpStorm.
 * User: AMIS
 * Date: 15-Apr-19
 * Time: 9:45 PM
 */
?>
@extends('admin.fragement.layout')

@section('content1')


    <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">All Ordering</li>
        </ol>
        @if(Session::has('deleted_user'))
            <p class="bg-danger">{{session('deleted_user')}}</p>
        @endif

        <div class="card-body">
            <div class="table-responsive">
                <table class="table" id="dataTable">
                    <thead  class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Date</th>
                        <th scope="col">Customer Name</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Email</th>
                        <th scope="col">Province</th>
                        <th scope="col">Status</th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($order as $ord)
                        <tr>
                            <th scope="row">{{$ord->order_id}}</th>
                            <td>{{$ord->order_date}}</td>
                            <td>{{$ord->user->name}}</td>
                            <td>{{$ord->phone}}</td>
                            <td>{{$ord->email}}</td>
                            <td>{{$ord->provinces->province_name}}</td>
                            <td>{{$ord->orderStatus->status_name}}</td>
                            <td>
                                <a href="{{route('order.edit',$ord->order_id)}}"><i class="btn btn-primary fas fa-eye"></i></a>
                            </td>

                        </tr>
                    @endforeach

                    </tbody>
                </table>


            </div>
            <!-- /.container-fluid -->
        </div>
    </div>
@stop

