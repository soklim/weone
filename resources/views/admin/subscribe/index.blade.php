@extends('admin.fragement.layout')

@section('content1')


    <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">List of email subscribe</li>
        </ol>
        @if(Session::has('deleted_user'))
                <p class="bg-danger">{{session('deleted_user')}}</p>
            @endif
        <!-- Page Content -->
        <a href="{{route('subscribe.create')}}" class="color:white;"><button class="btn btn-primary">Add new</button></a>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table" id="dataTable">
                    <thead class="thead-dark" id='headers'>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Email</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($subscribe as $sub)
                        <tr>
                            <th scope="row">{{$sub->id}}</th>
                            <td>{{$sub->email}}</td>
                            <td>
                                <a href="{{route('subscribe.edit',$sub->id)}}"><i class="btn btn-primary fas fa-edit"></i></a>

                            </td>
                            <td>
                                {!! Form::open(['method'=>'DELETE','action'=>['SubscribeController@destroy',$sub->id]]) !!}
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
