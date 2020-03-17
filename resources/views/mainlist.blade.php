@extends('template')

@section('content')

                    @foreach($products as $product)
                        <div class="col-sm-3"> <!-- 3 for 4 item in 1 row-->
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-title">{{$product->name}}</h5>
                                    <img src="{{ asset('image/') }}/{{$product->image}}" alt="" class="img-fluid">
                                    <div class="card-heading">RM {{$product->price}}</div>
                                    <a href="{{ route('product.detail', ['id' => $product->id]) }}">
                                    <button style="float:right" class="btn btn-danger btn-xs">Check Detail</button> </a>
                                </div>
                            </div>
                        </div>
                    @endforeach   
@endsection                