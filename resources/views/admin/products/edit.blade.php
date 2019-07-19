
@extends('admin.fragement.layout')

@section('content1')
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

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
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div style="padding-top: 15px">
                    <h5>Main Images</h5>
                    <img src="{{$products->photo?$products->photo->file:'https://via.placeholder.com/400x400'}}" alt="" class="img-fluid w-100" style="height:350px" >
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <h5>Thumbnail Images</h5>
                        <table class="table table-striped">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Image</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($thumbnail as $thumbnail)
                                <tr>
                                    <th scope="row">{{$thumbnail->id}}</th>
                                    <td><img height="50px;" src="{{$thumbnail->file}}" alt=""></td>

                                    <td>
                                        <a href="{{route('thumbnail.edit',$thumbnail->id)}}"><i class="btn btn-primary fas fa-edit"></i></a>

                                    </td>
                                    <td>
                                        {!! Form::open(['method'=>'DELETE','action'=>['ThumbnailController@destroy',$thumbnail->id]]) !!}
                                        <div class="form-group ">
                                            {{--{!! Form::submit('',['class'=>'btn btn-danger fas fa-edit']) !!}--}}
                                            <button class="btn btn-danger fas fa-trash-alt" type="submit" value=""></button>
                                        </div>
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                    {!! Form::model($products,['method'=>'PATCH','onsubmit'=>"return Validate(this);" , 'action'=> ['ProductController@update',$products->id],'files'=>true]) !!}

                    <div class="form-group">

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
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">

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
                    {!! Form::textarea('desc',null,['class'=>'form-control','required','maxlength'=>'2000']) !!}
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
                    {!! Form::submit('Submit',['class'=>'btn btn-primary']) !!}
                </div>


                {!! Form::close() !!}

            </div>
        </div>
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
