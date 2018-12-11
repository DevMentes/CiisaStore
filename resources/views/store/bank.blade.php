@extends('store.layouts.app')

@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-5">
                    <h5 style="margin-top: 50px;">Confirma tu compra</h5>
                    <table class="table table-condensed">
                        @php
                            $cart = Session::get('cart');
                        @endphp

                        @foreach($cart->items() as $item)
                            <tr>
                                <td>{{$item->name()}}</td>
                                <td>{{$item->price()}}</td>
                                <td>{{$item->quantity()}}</td>
                            </tr>
                        @endforeach
                        <tr>
                            <td></td>
                            <td>Total</td>
                            <td>{{$cart->total()}}</td>
                        </tr>
                    </table>
                    <a type="button" href="{{ url('/pagar') }}" class="btn btn-success">Confirmar</a>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
    </section>
@endsection