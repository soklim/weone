@extends('admin.fragement.layout')

@section('content1')


    <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">List of promotion</li>
        </ol>
        @if(Session::has('deleted_user'))
            <div class="alert alert-danger" role="alert">
                {{session('deleted_user')}}
            </div>
            @endif
        <!-- Page Content -->
        <a href="{{route('promotions.create')}}" class="color:white;"><button class="btn btn-primary">Add new</button></a>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table" id="dataTable">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Pro-Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">File</th>
                        <th scope="col">From Date</th>
                        <th scope="col">To Date</th>
                        <th scope="col">Order</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($promotions as $promotion)
                        <tr>
                            <th scope="row">{{$promotion->id}}</th>
                            <td>{{$promotion->promo_name}}</td>
                            <td>{{$promotion->desc}}</td>
                            <td><img height="50px;" width="100px" src="{{$promotion->photo?$promotion->photo->file:'https://via.placeholder.com/400x400'}}" alt=""></td>
                            <td>{{$promotion->from_date}}</td>
                            <td>{{$promotion->to_date}}</td>
                            <td>{{$promotion->order}}</td>
                            <td>
                                <a href="{{route('promotions.edit',$promotion->id)}}"><i class="btn btn-primary fas fa-edit"></i></a>

                            </td>
                            <td>
                                {!! Form::open(['method'=>'DELETE','action'=>['PromotionController@destroy',$promotion->id]]) !!}
                                <div class="form-group ">
                                    {{--{!! Form::submit('',['class'=>'btn btn-danger fas fa-edit']) !!}--}}
                                    <button class="btn btn-danger fas fa-trash-alt" type="submit" value=""></button>
                                </div>
                                {!! Form::close() !!}
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
    </div>
    </div>
@stop
