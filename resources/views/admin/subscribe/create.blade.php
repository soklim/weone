
@extends('admin.fragement.layout')

@section('content1')

    <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Add new email</li>
        </ol>

        <!-- Page Content -->
        @include('includes.form_error')


        <a href="{{route('subscribe.index')}}" class="color:white;"><button class="btn btn-primary">Return to email list</button></a>

        {!! Form::open(['method'=>'POST','onsubmit'=>"return Validate(this);" , 'action'=> 'SubscribeController@store']) !!}

                <div class="form-group">
                    {!! Form::label('email','Email Address:') !!}
                    {!! Form::text('email',null,['class'=>'form-control','required','maxlength'=>'50']) !!}
                </div>
                 <div class="form-group">
                    {!! Form::submit('Create',['class'=>'btn btn-primary']) !!}
                </div>


        {!! Form::close() !!}

    </div>
    <!-- /.container-fluid -->


@stop
