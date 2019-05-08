<!DOCTYPE html>
<html lang="en">
<title>Weone</title>
<style>
    .dropdown:hover .dropdown-menu{display: block;}

</style>

<head>

    @include('frontend.fragement.style')

</head>
<body>
    <div class="container">
        <div class="row" id="pc-mode">
            <div class="col-lg-4 col-md-4 col-xs-12" >
                @foreach($sys_logo as $logo)
                    <div id="logo">
                        <a href="/"><img width="80px" src="{{$logo->photo?$logo->photo->file:'https://via.placeholder.com/400x65'}} "  data-toggle="tooltip" data-placement="right" title="Weone"></a>
                    </div>
                @endforeach

            </div>
            <div class="col-lg-8 col-md-8 col-xs-12" id="ads">

                @foreach($sys_FirstOffer as $FirstOffer)
                        <a href="#" class="adv col-lg-5  col-md-5">
                            <span class="img"><img src="{{$FirstOffer->photo->file}}"></span>
                            <span>{{$FirstOffer->static_value_first}}<br>{{$FirstOffer->static_value_second}}</span><b class="vtc_middle"></b>
                        </a>
                @endforeach


                @foreach($sys_SecondOffer as $SecondOffer)
                            <a href="#" class="adv col-lg-4  col-md-5">
                                <span class="img"><img src="{{$SecondOffer->photo->file}}"></span>
                                <span>{{$SecondOffer->static_value_first}}<br>{{$SecondOffer->static_value_second}} </span><b class="vtc_middle"></b>
                            </a>
                 @endforeach
                    <a href="{{ route('cart.index')}}" class="cart col-lg-3 col-md-2">
                    <span class="fa-stack fa-2x has-badge" data-count="{{ Cart::count() }}" >
                      <i class="fa fa-circle fa-stack-2x"></i>
                      <i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i>
                    </span></a>

            </div>


        </div>
    </div><!----end logo----->


   <!---------Navbar--------------->
    <div class="container-fluid color-background" id="navbar-menu">
        <div class="container">
            <!-- menu navbar -->
            <nav class="navbar navbar-expand-lg navbar-light">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                    <a class="navbar-brand fa fa-home" href="/" style="color: white;"></a>
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="/best&new-product">Best & New<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/offer')}}">Offer<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="dropdown nav-item">
                            <a class="dropdown-toggle nav-link" data-toggle="dropdown" href="#">Brand</a>
                            <ul class="dropdown-menu" style="background-color: #79bb2a;margin-top: 0px">
                                <li class="nav-item"> <a class="nav-link dropdown" href="{{url('/brand-innisfree')}}">Innisfree</a></li>
                                <li class="nav-item"><a class="nav-link dropdown" href="{{url('/brand-laneige')}}">Laneige</a></li>
                                <li class="nav-item"><a class="nav-link dropdown" href="{{url('/brand-iope')}}">IOPE</a></li>
                                <li class="nav-item"><a class="nav-link dropdown" href="{{url('/brand-etude-house')}}">Etude house</a></li>
                                <li class="nav-item"><a class="nav-link dropdown" href="{{url('/brand-other')}}">Other</a></li>

                            </ul>
                        </li>
                        <li class="dropdown nav-item">

                            <a class="dropdown-toggle nav-link" data-toggle="dropdown" href="#">Skin Care</a>
                            <ul class="dropdown-menu" style="background-color: #79bb2a;margin-top: 0px">
                                <li class="nav-item"> <a class="nav-link dropdown" href="{{url('/type/'.'1')}}">Cream</a></li>
                                <li class="nav-item"><a class="nav-link dropdown" href="{{url('/type/'.'2')}}">Toner</a></li>
                                <li class="nav-item"><a class="nav-link dropdown" href="{{url('/type/'.'3')}}">Serum</a></li>
                                <li class="nav-item"><a class="nav-link dropdown" href="{{url('/type/'.'4')}}">Cleanser</a></li>
                                <li class="nav-item"> <a class="nav-link dropdown" href="{{url('/type/'.'5')}}">Sun Care</a></li>
                                <li class="nav-item"><a class="nav-link dropdown" href="{{url('/type/'.'6')}}">Mask</a></li>
                                <li class="nav-item"><a class="nav-link dropdown" href="{{url('/type/'.'7')}}">Lotton</a></li>
                                <li class="nav-item"><a class="nav-link dropdown" href="{{url('/type/'.'8')}}">Accessories</a></li>
                                <li class="nav-item"><a class="nav-link dropdown " href="{{url('/type/'.'9')}}">Other</a></li>

                            </ul>

                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/make-up')}}">Make-Up<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/tracking-form')}}">Order Tracking<span class="sr-only">(current)</span></a>
                        </li>

                    </ul>
                    <form class="form-inline my-2 my-lg-0" action="{{route('searchResult')}}">
                        <input type="text" class="form-control mr-sm-2" placeholder="Seach..." name="searchname" id="searchname"
                        style="color: black" >
                        <button type="submit" class="btn btn-outline-success my-2 my-sm-0" style="color: white;border-color: white">Search</button>
                    </form>

                </div>
            </nav>
            <!-- end navbar -->

        </div>
    </div>
    <!--------end container-fluid Navbar--------------->

    @yield('content1')


    <!-- Footer -->
    <section id="footer" >
        <div class="container" style="margin-top: -40px" >
            <div class="row text-center text-xs-center text-sm-left text-md-left">

                <div class="col-xs-12 col-sm-8 col-md-8">
                    @foreach($sys_footerLeft as $footLeft)
                        <a href="{{url('/')}}"><h5>{{$footLeft->static_value_first}}</h5></a>
                        <a href="{{url('/best&new-product')}}"><p style="color: white;">{{$footLeft->static_value_second}}</p></a>
                        <a href="{{url('/offer')}}" ><p style="color: white;">{{$footLeft->static_value_third}}</p></a>
                        <a  href="{{url('/about-us')}}"><p style="color: white;">{{$footLeft->static_value_forth}}</p></a>
                    @endforeach
                </div>

                <div class="col-xs-12 col-sm-8 col-md-4">
                    @foreach($sys_s as $sys)
                    <h5>{{$sys->static_value_first}}</h5>
                    <p style="color: white;">Address: {{$sys->static_value_second}}</p>
                    <p style="color: white;">Phone: {{$sys->static_value_third}}</p>
                        @endforeach
                    <form method="post" action = "/subscribe-add">
                        @csrf
                        <div class="input-group">
                            <input class="form-control" type="email" placeholder="Enter your email" name="email" id="email" required style="width: 150px">
                            <button class="form-control btn btn-primary" type="submit">Subscribe</button>
                        </div>
                    </form>

                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
                    <ul class="list-unstyled list-inline social text-center">
                        <li class="list-inline-item"><a href="https://www.facebook.com/weonekh/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="javascript:void();"><i class="fas fa-line"></i></a></li>
                        <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-instagram"></i></a></li>
                        <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-youtube"></i></a></li>
                    </ul>
                </div>
                </hr>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
                    <p class="h6">© 2019, Weone, All Rights Reserved.</p>
                </div>
                </hr>
            </div>
        </div>
    </section>
    <!-- ./Footer -->


@include('frontend.fragement.footerjs')
</body>
</html>
