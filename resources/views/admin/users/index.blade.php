@extends('admin.fragement.layout')

@section('content1')


    <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">List user</li>
        </ol>
        @if(Session::has('deleted_user'))
                <p class="bg-danger">{{session('deleted_user')}}</p>
            @endif
        <!-- Page Content -->
        <a href="{{route('users.create')}}" class="color:white;"><button class="btn btn-primary">Add new</button></a>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table" id="dataTable">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Photo</th>
                        <th scope="col">Username</th>
                        <th scope="col">Email</th>
                        <th scope="col">Role</th>
                        <th scope="col">Status</th>
                        <th scope="col">Created</th>
                        <th scope="col">Updated</th>
                        <th scope="col">Action</th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($user as $users)
                        <tr>
                            <th scope="row">{{$users->id}}</th>
                            <td><img height="50px;" src="{{$users->photo?$users->photo->file:'https://via.placeholder.com/400x400'}}" alt=""></td>
                            <td>{{$users->name}}</td>
                            <td>{{$users->email}}</td>
                            <td>{{$users->role->name}}</td>
                            <td>{{$users->isActive==1?'Active':'Not Active'}}</td>
                            <td>{{$users->created_at->diffForHumans()}}</td>
                            <td>{{$users->updated_at}}</td>
                            <td>
                                <a href="{{route('users.edit',$users->id)}}"><i class="btn btn-primary fas fa-edit"></i></a>

                            </td>
                            <td>
                                {!! Form::open(['method'=>'DELETE','action'=>['AdminUserController@destroy',$users->id]]) !!}
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
