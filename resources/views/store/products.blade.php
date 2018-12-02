@extends('store.layouts.app')

@section('content')
    <section style="margin-top: 50px;">
        <div class="container">
            <div class="row">
                @foreach($products as $product)
                    <div class="col-md-4">
                        <div class="card" style="width: 90%; margin-left: auto; margin-right: auto; text-align: center;">
                            <img class="card-img-top" src="{{asset($product->image_route)}}" style="height: 150px;" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">{{$product->name}}</h5>
                                <p class="card-text">$ {{$product->price}}</p>
                                <a href="{{url('/productos/' . $product->code)}}" class="btn btn-success">Ver producto</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection