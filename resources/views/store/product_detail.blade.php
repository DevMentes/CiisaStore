@extends('store.layouts.app')

@section('content')
    <section class="xt-xt-single-product">
        <div class="container">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-8">
                    <div id="product_detail_box">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="{{ $product->image_route }}">
                            </div>
                            <div class="col-md-6">
                                <h3>{{ $product->name }}</h3>

                                <p>{{ $product->description }}</p>
                                <p>$ {{ $product->price }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection