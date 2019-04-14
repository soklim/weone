
@extends('admin.fragement.layout')

@section('content1')

    <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Edit email</li>
        </ol>

        <!-- Page Content -->
        @include('includes.form_error')
        <div>
            <a href="{{route('subscribe.index')}}" class="color:white;"><button class="btn btn-primary">Return to email list</button></a>
        </div>
        <div class="row">

            <div class="col-12">
                {!! Form::model($subscribe,['method'=>'PATCH','onsubmit'=>"return Validate(this);" , 'action'=> ['SubscribeController@update',$subscribe->id]]) !!}

                <div class="form-group">
                    {!! Form::label('email','Email Addres:') !!}
                    {!! Form::text('email',null,['class'=>'form-control','required','maxlength'=>'50']) !!}
                </div>

                <div class="form-group">
                    {!! Form::submit('Confirm',['class'=>'btn btn-primary']) !!}
                </div>


                {!! Form::close() !!}

                {!! Form::open(['method'=>'DELETE','action'=>['ProductController@destroy',$subscribe->id]]) !!}
                <div class="form-group">
                    {!! Form::submit('DELETE',['class'=>'btn btn-danger']) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@stop
