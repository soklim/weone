
@extends('admin.fragement.layout')

@section('content1')

    <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Add user</li>
        </ol>

        <!-- Page Content -->
        @include('includes.form_error')
        <a href="{{route('users.index')}}" class="color:white;"><button class="btn btn-primary">Return to user list</button></a>
        {!! Form::open(['method'=>'POST','onsubmit'=>"return Validate(this);" , 'action'=> 'AdminUserController@store','files'=>true]) !!}

                <div class="form-group">
                    {!! Form::label('name','Username:') !!}
                    {!! Form::text('name',null,['class'=>'form-control','required','maxlength'=>'50']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('email','Email:') !!}
                    {!! Form::email('email',null,['class'=>'form-control','required','maxlength'=>'50']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('password','Password:') !!}
                    {!! Form::password('password',['class'=>'form-control','required','maxlength'=>'50']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('role_id','Role:') !!}
                    {!! Form::select('role_id',[''=>'--Select--'] + $roles->pluck('name','id')->toArray(),null,['class'=>'form-control','required']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('isActive','Status') !!}
                    {!! Form::select('isActive',array(0=>'Not Active',1=>'Active'),0,['class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('photo_id','Photo:') !!}
                    {!! Form::file('photo_id',null,['class'=>'form-control']) !!}
                </div>

                <div class="alert alert-danger" role="alert" style="display: none" id="validfile">
                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                    <strong>Warning</strong> You can upload file extension ".jpg", ".jpeg", ".bmp", ".gif", ".png" only!!!
                </div>
                <div class="alert alert-danger" role="alert" style="display: none" id="SizeFile">
                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                    <strong>Warning</strong> You can not upload file size more than 3MB!!!
                </div>

                <div class="form-group">
                    {!! Form::submit('Create Post',['class'=>'btn btn-primary']) !!}
                </div>


        {!! Form::close() !!}

    </div>
    <!-- /.container-fluid -->
@stop
