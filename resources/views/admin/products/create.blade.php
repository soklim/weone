
@extends('admin.fragement.layout')

@section('content1')

    <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Add new product</li>
        </ol>

        <!-- Page Content -->
        @include('includes.form_error')


        <a href="{{route('products.index')}}" class="color:white;"><button class="btn btn-primary">Return to products list</button></a>

        {!! Form::open(['method'=>'POST','onsubmit'=>"return Validate(this);" , 'action'=> 'ProductController@store','files'=>true]) !!}

                <div class="form-group">
                    {!! Form::label('pro_name','Product Name:') !!}
                    {!! Form::text('pro_name',null,['class'=>'form-control','required','maxlength'=>'50']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('pro_code','Product Code:') !!}
                    {!! Form::text('pro_code',null,['class'=>'form-control','maxlength'=>'20']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('prices','Price:') !!}
                    {!! Form::number('prices',null,['class'=>'form-control','required']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('category_id','Category:') !!}
                    {!! Form::select('category_id',[''=>'--Select--'] + $category->pluck('category_name','id')->toArray(),null,['class'=>'form-control','required']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('brand_id','Brand:') !!}
                    {!! Form::select('brand_id',[''=>'--Select--'] + $brand->pluck('brand_name','id')->toArray(),null,['class'=>'form-control','required']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('isPop','is it the new product?') !!}
                    {!! Form::select('isPop',[''=>'--Select--'] +  array('1' => 'Yes', '0' => 'No'),null,['class'=>'form-control','required']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('order','Order:') !!}
                    {!! Form::text('order',null,['class'=>'form-control','maxlength'=>'1']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('desc','Description:') !!}
                    {!! Form::textarea('desc',null,['class'=>'form-control','required','maxlength'=>'300']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('video','Path Video:') !!}
                    {!! Form::text('video',null,['class'=>'form-control','maxlength'=>'300']) !!}
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
                    {!! Form::submit('Create',['class'=>'btn btn-primary']) !!}
                </div>


        {!! Form::close() !!}

    </div>
    <!-- /.container-fluid -->


@stop
