@extends('admin.fragement.layout')

@section('content1')

    <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="/admin/profile">User Profile</a>
            </li>
            <li class="breadcrumb-item active">Edit User Porfile</li>
        </ol>
        <div class="row">
            <div class="col-md-4">
                <img src="{{Auth::user()->photo?Auth::user()->photo->file:'https://via.placeholder.com/400x400'}}" alt="" class="img-rounded" height="300px">
            </div>
            <div class="col-md-8">
                {!! Form::model(Auth::user() ,['method'=>'PATCH','onsubmit'=>"return Validate(this);" , 'action'=> ['ChangePasswordController@update',Auth::user()->id],'files'=>true]) !!}

                <div class="form-group">
                    {!! Form::label('name','Username:') !!}
                    {!! Form::text('name',null,['class'=>'form-control','required','maxlength'=>'50']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('email','Email:') !!}
                    {!! Form::email('email',null,['class'=>'form-control','required','maxlength'=>'50']) !!}
                </div>


                <div class="form-group">
                    {!! Form::label('photo_id','Photo:') !!}
                    {!! Form::file('photo_id',null,['class'=>'form-control']) !!}
                    <img src="{{Auth::user()->photo?Auth::user()->photo->file:'https://via.placeholder.com/400x400'}}" alt="" class=" img-rounded" height="100px">
                </div>

                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Current Password') }}</label>

                <div class="col-md-6">
                    <input id="password" type="password" class="form-control{{ $errors->has('passwordOld') ? ' is-invalid' : '' }}" name="passwordOld" required>

                    @if ($errors->has('passwordOld'))
                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('passwordOld') }}</strong>
                                </span>
                    @endif
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
            </div>
        </div>
    </div>
@stop
