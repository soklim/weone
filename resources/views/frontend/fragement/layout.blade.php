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
        <div class="row" id="">
            <div class="col-md-6 col-xs-12" >
                @foreach($sys_logo as $logo)
                    <div id="logo" style="padding-top: 20px;padding-bottom: 20px">
                        <a href="/"><img width="80px" src="{{$logo->photo?$logo->photo->file:'https://via.placeholder.com/400x65'}} "  data-toggle="tooltip" data-placement="right" title="Weone"></a>
                    </div>
                @endforeach
            </div>
            <div class="col-md-2  col-xs-5">
                @foreach($sys_FirstOffer as $FirstOffer)
                <a href="#" class="adv">
                    <span class="img"><img src="{{$FirstOffer->photo->file}}"></span>
                    <span>{{$FirstOffer->static_value_first}}<br>{{$FirstOffer->static_value_second}}</span><b class="vtc_middle"></b>
                </a>
                @endforeach
            </div>
            <div class="col-md-2  col-xs-5">
                @foreach($sys_SecondOffer as $SecondOffer)
                <a href="#" class="adv">
                    <span class="img"><img src="{{$SecondOffer->photo->file}}"></span>
                    <span>{{$SecondOffer->static_value_first}}<br>{{$SecondOffer->static_value_second}} </span><b class="vtc_middle"></b>
                </a>
                @endforeach
            </div>
            <div class="col-md-2  col-xs-5" style="padding-top: 25px">

                <a class="navbar-brand fa fa-shopping-cart text-dark Active " href="{{ route('cart.index')}}" style="float: right;font-size: 14px">
                    <i class=" fa-lg" aria-hidden="true"></i>
                    Card <span class="badge badge-pill badge-danger" style="border: 2px solid;">{{ Cart::count() }}</span></a>
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
                            <a class="nav-link" href="/best&new-product">BEST & NEW<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/offer')}}">OFFER<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="dropdown nav-item">
                            <a class="dropdown-toggle nav-link" data-toggle="dropdown" href="#">BRAND</a>
                            <ul class="dropdown-menu" style="background-color: #79bb2a;margin-top: 0px">
                                <li class="nav-item"> <a class="nav-link dropdown" href="{{url('/brand-innisfree')}}">INNISFREE</a></li>
                                <li class="nav-item"><a class="nav-link dropdown" href="{{url('/brand-laneige')}}">LANEIGE</a></li>
                                <li class="nav-item"><a class="nav-link dropdown" href="{{url('/brand-iope')}}">IOPE</a></li>
                                <li class="nav-item"><a class="nav-link dropdown" href="{{url('/brand-etude-house')}}">ETUDE HOUSE</a></li>
                                <li class="nav-item"><a class="nav-link dropdown" href="{{url('/brand-other')}}">OTHER</a></li>

                            </ul>
                        </li>
                        <li class="dropdown nav-item">

                            <a class="dropdown-toggle nav-link" data-toggle="dropdown" href="#">SKIN CARE</a>
                            <ul class="dropdown-menu" style="background-color: #79bb2a;margin-top: 0px">
                                <li class="nav-item"> <a class="nav-link dropdown" href="{{url('/type/'.'1')}}">CREAM</a></li>
                                <li class="nav-item"><a class="nav-link dropdown" href="{{url('/type/'.'2')}}">TONER</a></li>
                                <li class="nav-item"><a class="nav-link dropdown" href="{{url('/type/'.'3')}}">SERUM</a></li>
                                <li class="nav-item"><a class="nav-link dropdown" href="{{url('/type/'.'4')}}">CLEANSER</a></li>
                                <li class="nav-item"> <a class="nav-link dropdown" href="{{url('/type/'.'5')}}">SUN CARE</a></li>
                                <li class="nav-item"><a class="nav-link dropdown" href="{{url('/type/'.'6')}}">MASK</a></li>
                                <li class="nav-item"><a class="nav-link dropdown" href="{{url('/type/'.'7')}}">LOTION</a></li>
                                <li class="nav-item"><a class="nav-link dropdown" href="{{url('/type/'.'8')}}">ACCESSORIES</a></li>
                                <li class="nav-item"><a class="nav-link dropdown " href="{{url('/type/'.'9')}}">OTHER</a></li>

                            </ul>

                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/make-up')}}">MAKE-UP<span class="sr-only">(current)</span></a>
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
