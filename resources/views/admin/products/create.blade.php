
@extends('admin.fragement.layout')

@section('content1')
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>


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
                    {!! Form::label('pro_status','Product Status') !!}
                    {!! Form::select('pro_status',[''=>'--Select--'] +  array('In Stock' => 'In Stock', 'Out of Stock' => 'Out of Stock'),null,['class'=>'form-control','required']) !!}
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
                <div class="form-group">
                    <label>Thumbnail Images:</label>
                    <div class="input-group control-group increment" >
                        <input type="file" name="filename[]" class="form-control">
                        <div class="input-group-btn">
                            <button class="btn btn-success" type="button"><i class="glyphicon glyphicon-plus"></i>Add</button>
                        </div>
                    </div>
                    <div class="clone hide" style="display: none">
                        <div class="control-group input-group" style="margin-top:10px">
                            <input type="file" name="filename[]" class="form-control">
                            <div class="input-group-btn">
                                <button class="btn btn-danger" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
                            </div>
                        </div>
                    </div>
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
                    {!! Form::submit('Submit',['class'=>'btn btn-primary']) !!}
                </div>


        {!! Form::close() !!}

    </div>
    <!-- /.container-fluid -->

    <script type="text/javascript">

        $(document).ready(function() {

        $(".btn-success").click(function(){
        var html = $(".clone").html();
        $(".increment").after(html);
        });

        $("body").on("click",".btn-danger",function(){
        $(this).parents(".control-group").remove();
        });

        });

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
