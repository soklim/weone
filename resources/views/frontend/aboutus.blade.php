@extends('frontend.fragement.layout')

@section('content1')
    <div class="container-fluid bg-overlay-about">

        <div class="container last-para">
            @foreach($sys_about as $about)
            <h1 style="text-align: center;padding-top: 30px;"><strong>{{$about->static_value_first}}</strong></h1>
            <hr style="background-color: #ffffff;">
            <p style="padding-bottom: 30px;padding-top:20px; ">{{$about->static_value_second}}</p>
            @endforeach
        </div>
    </div>
    <div class="container" style="margin-top: 50px;margin-bottom: 50px">
        <div class="row">
            <div class="col-md-6">
                <h3 style="color: #79bb2a;">More Info</h3>
                @foreach($sys_s as $sys)
                <p><b>Address:</b> {{$sys->static_value_second}}</p>
                <p><b>Phone:</b> {{$sys->static_value_third}}</p>
                <p><b>Email:</b> {{$sys->static_value_forth}}</p>
                @endforeach
            </div>
            <div class="col-md-6">
                <h3 style="color: #79bb2a;">Get In Touch</h3>
                <form>
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="Your Name" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="Your Email">
                    </div>
                    <div class="form-group">
                        <input class="form-control" maxlength="10" type="text" placeholder="Your Phone" required>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" placeholder="Your Message" required></textarea>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
@stop
