
@extends('admin.fragement.layout')

@section('content1')

    <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Edit product</li>
        </ol>

        <!-- Page Content -->
        @include('includes.form_error')
        <div>
            <a href="{{route('products.index')}}" class="color:white;"><button class="btn btn-primary">Return to products list</button></a>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12">
                <img src="{{$products->photo?$products->photo->file:'https://via.placeholder.com/400x400'}}" alt="" class="img-fluid" style="margin-top: 140px" height="200px">
            </div>
            <div class="col-9">
                {!! Form::model($products,['method'=>'PATCH','onsubmit'=>"return Validate(this);" , 'action'=> ['ProductController@update',$products->id],'files'=>true]) !!}

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
                    {!! Form::label('isPop','Popular:') !!}
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
                    {!! Form::submit('Confirm',['class'=>'btn btn-primary']) !!}
                </div>


                {!! Form::close() !!}

                {!! Form::open(['method'=>'DELETE','action'=>['ProductController@destroy',$products->id]]) !!}
                <div class="form-group">
                    {!! Form::submit('DELETE',['class'=>'btn btn-danger']) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@stop
