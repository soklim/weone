
@extends('frontend.fragement.layout')
@section('content1')
<div class="container">

    <br>
    <!-- Nav tabs -->

    <ul class="nav nav-tabs">
        <li class="nav-item tab col-md-6" style="padding: 0px">
            <a class="nav-link active" data-toggle="tab" href="#home" >On Going</a>
        </li>
        <li class="nav-item tab col-md-6" style="padding: 0px">
            <a class="nav-link" data-toggle="tab" href="#menu1" >Expired</a>
        </li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
        <div id="home" class="container tab-pane active"><br>

            <div class="row">
                @foreach($active_offer as $active)
                <div class="col-md-4" style="padding-bottom: 50px;">
                    <input id="expired{{$active->id}}" type="text" value="{{$active->to_date}}" style="display: none;">
                       <a href="{!! url('promotion-detail/'. $active->id) !!}">
                           <img  src="{{$active->photo?$active->photo->file :'https://via.placeholder.com/512x190'}}" style="width: 100%;height: 120px">

                       </a>
                       <h4 id="demo{{$active->id}}" style="color: red;margin-top: 10px"></h4>
                </div>
                @endforeach
            </div>



        </div>
        <div id="menu1" class="container tab-pane fade"><br>
            <div class="row">
                @foreach($expired_offer as $expired)
                    <div class="col-md-4 " style="padding-bottom: 50px;">
                        <div class="wrap">
                            {{--<a href="{!! url('promotion-detail/'. $expired->id) !!}">--}}
                                <img  src="{{$expired->photo?$expired->photo->file :'https://via.placeholder.com/512x190'}}" style="width: 100%;height: 120px;">

                            {{--</a>--}}
                        </div>


                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>


{{--Countdown Offer--}}
@foreach($active_offer as $active)
    <script>

        // Set the date we're counting down to
        var expired{{$active->id}} =document.getElementById('expired{{$active->id}}').value;
        var countDownDate{{$active->id}} = new Date(expired{{$active->id}}).getTime();

        // Update the count down every 1 second

        var x = setInterval(function() {

            // Get todays date and time
            var now{{$active->id}} = new Date().getTime();

            // Find the distance between now and the count down date
            var distance{{$active->id}} = countDownDate{{$active->id}} - now{{$active->id}};

            // Time calculations for days, hours, minutes and seconds
            var days{{$active->id}} = Math.floor(distance{{$active->id}} / (1000 * 60 * 60 * 24));
            var hours{{$active->id}} = Math.floor((distance{{$active->id}} % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes{{$active->id}} = Math.floor((distance{{$active->id}} % (1000 * 60 * 60)) / (1000 * 60));
            var seconds{{$active->id}} = Math.floor((distance{{$active->id}} % (1000 * 60)) / 1000);

            // Output the result in an element with class="demo"

            document.getElementById("demo{{$active->id}}").innerHTML = days{{$active->id}} + "d " + hours{{$active->id}} + "h "
                + minutes{{$active->id}} + "m " + seconds{{$active->id}} + "s ";



        }, 1000)


    </script>
@endforeach;

@stop