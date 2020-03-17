@extends('template2')
@section('content')                        
@foreach($products as $product)               
        <div class="col-md-6"><img src="{{ asset('image/') }}/{{$product->image}}" alt="" class="img-fluid">                        </div>
                        <div class="col-md-6">
                            <form action="{!! URL::to('paypal') !!}" method="post">
                            {{ csrf_field() }}
                            <h5 class="card-title">{{$product->name}}</h5>
                            <br>
                            <b>Description:</b> &nbsp;
                            <p>{{$product->description}}</p>
                            <b>Display:</b> &nbsp;
                            <p>{{$product->display}}</p>
                            <b>Rear Camera:</b> &nbsp;
                            <p>{{$product->rearCamera}}</p>
                            <b>Battery Capacity:</b> &nbsp;
                            <p>{{$product->batteryCapacity}}</p>
                            <b>Processor:</b> &nbsp;
                            <p>{{$product->processor}}</p>
                            <b>RAM:</b> &nbsp;
                            <p>{{$product->ram}}</p>
                            <b>Operating System:</b> &nbsp;
                            <p>{{$product->operatingSystem}}</p>
                            <b>Front Camera:</b> &nbsp;
                            <p>{{$product->frontCamera}}</p>
                            <b>Storage</b> &nbsp;
                            <p>{{$product->storage}}</p>
                            <div style="height: 50px">Quantity <input type="number" id="qty" value="1" min="1" max="10"> Available stock: {{$product->quantity}}
                            </div>
                            <input type="hidden" id="price" value="{{$product->price}}">
                            <input type="hidden" id="name" name="name" value="{{$product->name}}">
                            <input type="hidden" id="amount" name="amount" value="">
                            <script>
                                function cal(){
                                    document.getElementById("amount").value=document.getElementById("qty").value*document.getElementById("price").value;
                                   
                                }
                            </script>
                            <div style="height: 100px"><b>RM {{$product->price}} </b> <button type="submit" onClick="cal()" style="float:right" class="btn btn-danger btn-xs">Buy Now</button></form>
                            </div>
@endforeach
@endsection                       