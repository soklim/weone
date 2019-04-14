
@extends('admin.fragement.layout')


    @section('content1')

        <div class="container-fluid">
            <!-- Icon Cards-->
            <div class="row">
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card text-white bg-primary o-hidden h-100">
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fas fa-fw fa-comments"></i>
                            </div>
                            <div class="mr-5">26 New Messages!</div>
                        </div>
                        <a class="card-footer text-white clearfix small z-1" href="#">
                            <span class="float-left">View Details</span>
                            <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card text-white bg-warning o-hidden h-100">
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fas fa-fw fa-shopping-cart"></i>
                            </div>

                            <div class="mr-5"> {{$pro->count()}}  Products </div>

                        </div>
                        <a class="card-footer text-white clearfix small z-1" href="{{route('products.index')}}">
                            <span class="float-left">View Details</span>
                            <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card text-white bg-success o-hidden h-100">
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fas fa-fw fa-bullhorn"></i>
                            </div>
                            <div class="mr-5">{{$promotion->count()}} Promotion</div>
                        </div>
                        <a class="card-footer text-white clearfix small z-1" href="{{route('promotions.index')}}">
                            <span class="float-left">View Details</span>
                            <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-3">
                    <div class="card text-white bg-danger o-hidden h-100">
                        <div class="card-body">
                            <div class="card-body-icon">
                                <i class="fas fa-fw fa-envelope"></i>
                            </div>
                            <div class="mr-5">{{$email->count()}} Email Subscribe</div>
                        </div>
                        <a class="card-footer text-white clearfix small z-1" href="{{route('subscribe.index')}}">
                            <span class="float-left">View Details</span>
                            <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-8">
                    <div class="card mb-3">
                        <div class="card-header">
                            <i class="fas fa-chart-bar"></i>
                            Bar Chart Ordering</div>
                        <div class="card-body">
                            <canvas id="myBarChart" width="100%" height="50"></canvas>
                        </div>
                        <div class="card-footer small text-muted"></div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card mb-3">
                        <div class="card-header">
                            <i class="fas fa-chart-pie"></i>
                            Pie Chart Brands</div>
                        <div class="card-body">
                            <canvas id="myPieChart" width="100%" height="100"></canvas>
                        </div>
                        <div class="card-footer small text-muted"></div>
                    </div>
                </div>
            </div>

          {{--<!-- Page Content -->--}}
            {{--<h1 class="text-primary">Welcome <b class="text-success">Mr. {{Auth::user()->name}}</b> to Admin Panel Weone Shopping</h1>--}}
            {{--<div class="container">--}}
                {{--<img height="400px" src="{{Auth::user()->photo?Auth::user()->photo->file:'https://via.placeholder.com/400x400'}}" class="rounded mx-auto d-block">--}}
            {{--</div>--}}
          {{--<hr>--}}
          {{--<p></p>--}}

        </div>
        <!-- /.container-fluid -->
        <script>
            // Set new default font family and font color to mimic Bootstrap's default styling
            Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
            Chart.defaults.global.defaultFontColor = '#292b2c';

            // Pie Chart Example
            var ctx = document.getElementById("myPieChart");
            var myPieChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: ["Innisfree", "Laneige", "Iope", "Etude House","Other"],
                    datasets: [{
                        data: [{{$pro_innis->count()}}, {{$pro_laneige->count()}}, {{$pro_iope->count()}}, {{$pro_etude->count()}},{{$pro_other->count()}}],
                        backgroundColor: ['#007bff', '#dc3545', '#ffc107', '#28a745','#ff6600'],
                    }],
                },
            });

        </script>

        <script src="/js/demo/chart-bar-demo.js"></script>
        <script src="/vendor/chart.js/Chart.min.js"></script>

    @stop
