
@extends('admin.fragement.layout')

@section('content1')

    <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Edit thumbnail</li>
        </ol>

        <!-- Page Content -->
        @include('includes.form_error')

        <div class="row">
            <div class="col-4">
                <img src="{{$thumbnail->file}}" class="img-fluid w-100">
            </div>
            <div class="col-8">
                {!! Form::model($thumbnail,['method'=>'PATCH','onsubmit'=>"return Validate(this);" , 'action'=> ['ThumbnailController@update',$thumbnail->id],'files'=>true]) !!}

                <div class="form-group">
                    <label>Upload Image:</label>
                    <input class="form-control" type="file" name="file" required accept="image/x-png,image/gif,image/jpeg">
                </div>
                <div class="form-group">
                    {!! Form::submit('Submit',['class'=>'btn btn-primary']) !!}
                </div>


                {!! Form::close() !!}
                <div class="alert alert-danger" role="alert" style="display: none" id="validfile">
                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                    <strong>Warning</strong> You can upload file extension ".jpg", ".jpeg", ".bmp", ".gif", ".png" only!!!
                </div>
                <div class="alert alert-danger" role="alert" style="display: none" id="SizeFile">
                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                    <strong>Warning</strong> You can not upload file size more than 3MB!!!
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->

    <script>
        var uploadField = document.getElementById("photo_id");

        uploadField.onchange = function() {
            //Allow upload file less than 3MB
            if(this.files[0].size > 30000000){
                document.getElementById("SizeFile").style.display = "block";
                // alert("File is too big! You can not upload file more than 3MB");
                this.value = "";
            };
        };
    </script>

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
