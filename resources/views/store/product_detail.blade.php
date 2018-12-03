@extends('store.layouts.app')

@section('content')
    <section style="margin-top: 50px">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img class="w-100" style="height: 300px;" src="{{ $product->image_route }}">
                </div>
                <div class="col-md-6">
                    <p>Codigo: {{$product->code}}</p>
                    <h3 style="font-size: 40px; font-weight: bold">{{ $product->name }}</h3>
                    <p style="font-size: 20px;">{{ $product->description }}</p>
                    <p style="font-size: 25px;">$ {{ $product->price }}</p>
                    <p style="display: none" id="product_code">{{ $product->code }}</p>
                    @if($product->stock > 0)
                        <p style="color: green; font-size: 25px;">Disponible</p>
                        <a type="button" href="{{ url('/carro/añadir/'. $product->code . '/' . 1) }}" class="btn btn-success">Añadir al carro</a>
                    @else
                        <p style="color: red; font-size: 25px;">No disponible</p>
                    @endif

                    @if(Session::has('message'))
                        <div class="alert alert-success" role="alert">
                            Se ha añadido al carro.
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection