<?php
/**
 * Created by PhpStorm.
 * User: SOKLIM
 * Date: 7/16/2019
 * Time: 10:54 PM
 */
?>

@extends('frontend.fragement.layout')

@section('content1')
 <style>
     .emp-profile{
         padding: 3%;
         border-radius: 0.5rem;
         background: #fff;
     }
     .profile-img{
         text-align: center;
     }
     .profile-img img{
         width: 70%;
         height: 50%;
     }
     .profile-img .file {
         position: relative;
         overflow: hidden;
         margin-top: -20%;
         width: 70%;
         border: none;
         border-radius: 0;
         font-size: 15px;
         background: #212529b8;
     }
     .profile-img .file input {
         position: absolute;
         opacity: 0;
         right: 0;
         top: 0;
     }
     .profile-head h5{
         color: #333;
     }
     .profile-head h6{
         color: #0062cc;
     }
     .profile-edit-btn{
         border: none;
         border-radius: 1.5rem;
         width: 70%;
         padding: 2%;
         font-weight: 600;
         color: #6c757d;
         cursor: pointer;
     }
     .proile-rating{
         font-size: 12px;
         color: #818182;
         margin-top: 5%;
     }
     .proile-rating span{
         color: #495057;
         font-size: 15px;
         font-weight: 600;
     }
     .profile-head .nav-tabs{
         margin-bottom:5%;
     }
     .profile-head .nav-tabs .nav-link{
         font-weight:600;
         border: none;
     }
     .profile-head .nav-tabs .nav-link.active{
         border: none;
         border-bottom:2px solid #008000;
     }
     .profile-work{
         padding: 14%;
         margin-top: -15%;
     }
     .profile-work p{
         font-size: 12px;
         color: #818182;
         font-weight: 600;
         margin-top: 10%;
     }
     .profile-work a{
         text-decoration: none;
         color: #495057;
         font-weight: 600;
         font-size: 14px;
     }
     .profile-work ul{
         list-style: none;
     }
     .profile-tab label{
         font-weight: 600;
     }
     .profile-tab p{
         font-weight: 600;
         color: #0062cc;
     }

     a.nav-link.active {

         color:#008000 !important
     }

 </style>
 <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-formhelpers/2.3.0/css/bootstrap-formhelpers.css" rel="stylesheet">
 <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-formhelpers/2.3.0/css/bootstrap-formhelpers.min.css" rel="stylesheet">


    <div class="container emp-profile">
        <form method="post">
            <div class="row">
                <div class="col-md-10">
                    <div class="profile-head">

                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Profile</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Your Order</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content profile-tab" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row">
                                <div class="col-md-12">
                                    <form method="POST" action="/update-profiles/"+{{Auth::user()->id}}>
                                        @csrf
                                        @method('post')
                                        <div class="form-group">
                                            <label for="name" class="col-md-4">{{ __('User Name') }}</label>
                                            <input id="name" type="text" class="form-control col-md-8" name="name" value="{{Auth::user()->name}}" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="email" class="col-md-4">{{ __('E-Mail Address:') }}</label>
                                             <input id="email" type="email" class="form-control col-md-8" name="email" value="{{Auth::user()->email}}" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="phone" class="col-md-4">{{ __('Phone') }}</label>
                                            <select id="countries_phone1" class="form-control bfh-countries" data-country="KH" style="display: none" ></select>

                                            <input type="text" class="form-control bfh-phone col-md-8" id="phone" name="phone" data-country="countries_phone1" value="{{Auth::user()->phone}}" disabled>

                                        </div>
                                        <div class="form-group">
                                            <label for="address" class="col-md-4">{{ __('Address') }}</label>
                                            <textarea id="address" class="form-control col-md-8" name="address" maxlength="200" disabled>{{Auth::user()->address}}</textarea>
                                        </div>
                                        <div class="form-group col-md-2">
                                            <a href="{{route('changepassword.edit',Auth::user()->id)}}"><i class="btn btn-primary fa fa-edit"></i></a>

                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="row">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <a href="{!! url('user-panel/'. Auth::user()->id) !!}">
                                            <button type="button" class="btn btn-success">Get order data</button>
                                        </a>

                                        <table class="table" id="dataTable">
                                            <thead  class="thead-dark">
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Date</th>
                                                <th scope="col">Status</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($order as $ord)
                                                <tr>
                                                    <th scope="row">{{$ord->order_id}}</th>
                                                    <td>{{$ord->order_date}}</td>
                                                    <td>{{$ord->orderStatus->status_name}}</td>
                                                </tr>
                                            @endforeach

                                            </tbody>
                                        </table>


                                    </div>
                                    <!-- /.container-fluid -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    @if(Auth::user()->role_id== 1 || Auth::user()->role_id== 2)
                       <a href="{{url('/admin')}}">
                           <button type="button" class="btn btn-primary">Go to Admin Panel</button>
                       </a>
                    @else
                        <a href="{{ url('/change-password') }}">
                            <button type="button" class="btn btn-primary">Change password</button>
                        </a>
                    @endif

                </div>

            </div>

        </form>
    </div>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

 <script src="//code.jquery.com/jquery-1.10.2.js"></script>
 <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-formhelpers/2.3.0/js/bootstrap-formhelpers.js">
 </script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-formhelpers/2.3.0/js/bootstrap-formhelpers.min.js">
 </script>

 <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>

 <script>
     $(document).ready(function() {
         $('#dataTable').dataTable({
             language: {
                 searchPlaceholder: "Search ordering",
                 search: ""
             },
             "aaSorting": [],
             "bPaginate": true,
             "bLengthChange": false,
             "bFilter": true,
             "bInfo": false,
             "bAutoWidth": false });


         $('.dataTables_filter').addClass('pull-right');
     });
 </script>


@stop


