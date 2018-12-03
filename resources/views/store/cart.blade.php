@extends('store.layouts.app')

@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5 style="text-align: center; margin-top: 50px; margin-bottom: 30px;">Carro de compras</h5>
                    <table class="table">
                        @php
                            $cart = Session::get('cart');
                        @endphp
                        @foreach($cart->items() as $item)
                            <tr>
                                <td><span class="car_item">{{ $item->code() }}</span></td>
                                <td>
                                    <img src="{{ asset($item->imageRoute())}}" style="width: 120px; height: 80px;">
                                </td>
                                <td><span class="car_item">{{ $item->name() }}</span></td>
                                <td><span class="car_item">${{ $item->price() }}c/u</span></td>
                                <td><span class="car_item">{{ $item->quantity() }}</span></td>
                                <td><span class="car_item">${{ $item->itemTotal() }}</span></td>
                            </tr>
                        @endforeach
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>Total:</td>
                            <td>{{ $cart->total() }}</td>
                        </tr>
                        <style>
                            .car_item{
                                line-height: 80px;
                                font-size: 16px;
                                color: #4C5B5C;
                            }
                        </style>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection