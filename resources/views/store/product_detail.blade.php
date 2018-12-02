@extends('store.layouts.app')

@section('content')
    <section style="margin-top: 50px">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img class="w-100" src="{{ $product->image_route }}">
                </div>
                <div class="col-md-6">
                    <h3>{{ $product->name }}</h3>

                    <p>{{ $product->description }}</p>
                    <p>$ {{ $product->price }}</p>
                </div>
            </div>
        </div>
    </section>
@endsection