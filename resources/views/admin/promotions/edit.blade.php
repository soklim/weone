
@extends('admin.fragement.layout')

@section('content1')

    <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Blank Page</li>
        </ol>

        <!-- Page Content -->
        @include('includes.form_error')
        <div>
            <a href="{{route('promotions.index')}}" class="color:white;"><button class="btn btn-primary">Return to promotion list</button></a>
        </div>
        <div class="row">
            <div class="col-9">
                {!! Form::model($promotions,['method'=>'PATCH', 'action'=> ['PromotionController@update',$promotions->id],'files'=>true]) !!}

                <div class="form-group">
                    {!! Form::label('promo_name','Promotion Name:') !!}
                    {!! Form::text('promo_name',null,['class'=>'form-control','required','maxlength'=>'50']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('desc','Description:') !!}
                    {!! Form::textarea('desc',null,['class'=>'form-control','required','maxlength'=>'155']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('from_date','Date From:') !!}
                    {!! Form::date('from_date',null,['class'=>'form-control','maxlength'=>'10'] ) !!}


                </div>

                <div class="form-group">
                    {!! Form::label('to_date','Date To:') !!}
                    {!! Form::date('to_date',null,['class'=>'form-control','date','maxlength'=>'10']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('order','Top 3?') !!}
                    {!! Form::select('order',[''=>'--Select--'] +  array('1' => 'Yes', '0' => 'No'),null,['class'=>'form-control','required']) !!}
                </div>



                <div class="form-group">
                    {!! Form::label('photo_id','Photo:') !!}
                    {!! Form::file('photo_id',null,['class'=>'form-control','required']) !!}
                    <img src="{{$promotions->photo?$promotions->photo->file:'https://via.placeholder.com/400x400'}}" alt="" class=" img-rounded" height="100px">
                </div>

                <div class="form-group">
                    {!! Form::submit('Confirm',['class'=>'btn btn-primary']) !!}
                </div>

                {!! Form::close() !!}

                {!! Form::open(['method'=>'DELETE','action'=>['PromotionController@destroy',$promotions->id]]) !!}
                <div class="form-group">
                    {!! Form::submit('DELETE',['class'=>'btn btn-danger']) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@stop
