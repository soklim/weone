@extends('frontend.fragement.layout')

@section('content1')


    <section id="contact">
        <div class="container-fluid">
            <div class="col-md-12" id="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d3736489.7218514383!2d90.21589792292741!3d23.857125486636733!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1506502314230" width="100%" height="315" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-7"​​ id="contact2">
                    @foreach($sys as $sys)
                    <h3 class="title">{{$sys->static_name}}</h3>
                    <p><b>{{$sys->static_value_first}}</b></p>
                    <p>{{$sys->static_value_second}}</p>
                    <p>{{$sys->static_value_third}}</p>

                        @endforeach
                </div>

                <div class="col-md-5" id="contact2">
                    <h4 class="title">ទំនាក់ទំនងមកកាន់ពួកយើង</h4>
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" name="" value="" placeholder="ឈ្មោះ">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="" value="" placeholder="អុីម៊ែល">
                        </div>
                        <div class="form-group">
                            <input type="tel" class="form-control" name="" value="" placeholder="លេខទូរស័ព្ទ">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="" rows="3" placeholder="សាររបស់អ្នក"></textarea>
                        </div>
                        <button class="btn btn-primary" type="submit" name="button">
                            <i class="fa fa-paper-plane-o" aria-hidden="true"></i> បញ្ចូនសារ
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

@stop
