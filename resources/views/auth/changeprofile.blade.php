
@extends('frontend.fragement.layout')

@section('content1')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-formhelpers/2.3.0/css/bootstrap-formhelpers.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-formhelpers/2.3.0/css/bootstrap-formhelpers.min.css" rel="stylesheet">

    <div class="container" style="padding-top: 20px;padding-bottom: 20px">
        <div class="row">
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
                    <label for="phone">{{ __('Phone') }}</label>
                    <select id="countries_phone1" class="form-control bfh-countries" data-country="KH" style="display: none" ></select>

                    <input type="text" class="form-control bfh-phone col-md-8" id="phone" name="phone" data-country="countries_phone1" value="{{Auth::user()->phone}}">
                </div>
                <div class="form-group">
                    <label for="phone">{{ __('Address') }}</label>

                    <textarea type="text" class="form-control" id="address" name="address">{{Auth::user()->address}}</textarea>
                </div>

                <div class="form-group">
                    <label for="password">{{ __('Current password:') }}</label>
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
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-formhelpers/2.3.0/js/bootstrap-formhelpers.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-formhelpers/2.3.0/js/bootstrap-formhelpers.min.js">
    </script>

    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>

@stop
