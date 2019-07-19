
@extends('admin.fragement.layout')

@section('content1')

    <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Add new promotion</li>
        </ol>

        <!-- Page Content -->
        @include('includes.form_error')
        <a href="{{route('promotions.index')}}" class="color:white;"><button class="btn btn-primary">Return to promotion list</button></a>

        {!! Form::open(['method'=>'POST', 'action'=> 'PromotionController@store','files'=>true]) !!}

                <div class="form-group">
                    {!! Form::label('promo_name','Promotion Name:') !!}
                    {!! Form::text('promo_name',null,['class'=>'form-control','required','maxlength'=>'50']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('desc','Description:') !!}
                    {!! Form::textarea('desc',null,['class'=>'form-control','required','maxlength'=>'300']) !!}
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
