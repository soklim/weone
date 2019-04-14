@extends('admin.fragement.layout')

@section('content1')
    <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">User Profile</a>
            </li>
        </ol>
        <div class="row">
            <div class="col-md-4">
                <img src="{{Auth::user()->photo?Auth::user()->photo->file:'https://via.placeholder.com/400x400'}}" alt="" class="img-rounded" height="300px">
            </div>
            <div class="col-md-8">
                <div class="form-group">
                    <label for="name">Username:</label>
                    <input class="form-control" required maxlength="50" name="name" type="text" value="{{Auth::user()->name}}" id="name" readonly>
                </div>
                <div class="form-group">
                    <label for="name">Username:</label>
                    <input class="form-control" required maxlength="50" name="name" type="text" value="{{Auth::user()->email}}" id="name" readonly>
                </div>
                <div class="form-group">
                    <label for="name">Role:</label>
                    <input class="form-control" required maxlength="50" name="name" type="text" value="{{Auth::user()->role->name}}" id="name" readonly>
                </div>
                <div class="form-group">
                    <label for="name">Active:</label>
                    <input class="form-control" required maxlength="50" name="name" type="text" value="{{Auth::user()->isActive}}" id="name" readonly>
                </div>
                <a href="{{route('changepassword.edit',Auth::user()->id)}}"><i class="btn btn-primary fas fa-edit"></i></a>
                <a href="/changepassword"><i class="btn btn-primary fas fa-edit">Change Password</i></a>

                @if(session('success'))
                    <div class="alert alert-primary" role="alert">
                        Success Change Pasword
                    </div>
                @endif
            </div>

        </div>

    </div>
    @stop
