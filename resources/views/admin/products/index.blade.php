@extends('admin.fragement.layout')

@section('content1')


    <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">List of product</li>
        </ol>
        @if(Session::has('deleted_user'))
                <p class="bg-danger">{{session('deleted_user')}}</p>
            @endif
        <!-- Page Content -->
        <a href="{{route('products.create')}}" class="color:white;"><button class="btn btn-primary">Add new</button></a>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table" id="dataTable">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Product Name</th>
                        <th scope="col">Product Code</th>
                        <th scope="col">Prices</th>
                        <th scope="col">Category</th>
                        <th scope="col">Brand</th>
                        <th scope="col">Top Product</th>
                        <th scope="col">Order</th>
                        <th scope="col">Images</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $product)
                        <tr>
                            <th scope="row">{{$product->id}}</th>
                            <td>{{$product->pro_name}}</td>
                            <td>{{$product->pro_code}}</td>
                            <td>${{$product->prices}}</td>
                            <td>{{$product->category->category_name}}</td>
                            <td>{{$product->brand->brand_name}}</td>
                            <td>{{$product->isPop}}</td>
                            <td>{{$product->order}}</td>
                            <td><img height="50px;" src="{{$product->photo?$product->photo->file:'https://via.placeholder.com/400x400'}}" alt=""></td>

                            <td>
                                <a href="{{route('products.edit',$product->id)}}"><i class="btn btn-primary fas fa-edit"></i></a>

                            </td>
                            <td>
                                {!! Form::open(['method'=>'DELETE','action'=>['ProductController@destroy',$product->id]]) !!}
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
        </div>


    </div>
    <!-- /.container-fluid -->
    </div>
    </div>
@stop
