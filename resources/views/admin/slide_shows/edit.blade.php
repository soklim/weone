
@extends('admin.fragement.layout')

@section('content1')

    <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Edit slide show</li>
        </ol>

        <!-- Page Content -->
        @include('includes.form_error')
        <a href="{{route('slide_shows.index')}}" class="color:white;"><button class="btn btn-primary">Return to slide show list</button></a>

        {!! Form::model($slide_show,['method'=>'PATCH','onsubmit'=>"return Validate(this);" ,'action'=> ['SlideShowController@update',$slide_show->id],'files'=>true]) !!}

        <div class="form-group">
            {!! Form::label('slide_name','Slide Name:') !!}
            {!! Form::text('slide_name',null,['class'=>'form-control','required','maxlength'=>'50']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('order','Order Name:') !!}
            {!! Form::text('order',null,['class'=>'form-control','required','maxlength'=>'3']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('photo_id','Photo:') !!}
            {!! Form::file('photo_id',null,['class'=>'form-control','required']) !!}
            <img src="{{$slide_show->photo?$slide_show->photo->file:'https://via.placeholder.com/400x400'}}" alt="" class=" img-rounded" height="100px">
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

    <script>
        // Allow upload only file that have extension: .jpg, ,jpeg, .bmp, .gif & .png
        var _validFileExtensions = [".jpg", ".jpeg", ".bmp", ".gif", ".png"];
        function Validate(oForm) {
            var arrInputs = oForm.getElementsByTagName("input");
            for (var i = 0; i < arrInputs.length; i++) {
                var oInput = arrInputs[i];
                if (oInput.type == "file") {
                    var sFileName = oInput.value;
                    if (sFileName.length > 0) {
                        var blnValid = false;
                        for (var j = 0; j < _validFileExtensions.length; j++) {
                            var sCurExtension = _validFileExtensions[j];
                            if (sFileName.substr(sFileName.length - sCurExtension.length, sCurExtension.length).toLowerCase() == sCurExtension.toLowerCase()) {
                                blnValid = true;
                                break;
                            }
                        }

                        if (!blnValid) {
                            document.getElementById("validfile").style.display = "block";

                            return false;
                            location.reload();

                        }
                    }
                }
            }
            alert("Successfully!!!");
            return true;
        }
    </script>
@stop
