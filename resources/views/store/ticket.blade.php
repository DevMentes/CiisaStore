@extends('store.layouts.app')

@section('content')

    <div class="container">

        <div class="alert alert-success" role="alert">
            <strong>Compra realizada correctamente!</strong>
        </div>

        <p><span>Numero de orden: {{ $order->id }}</span></p>
        <p><span>Realizado el: {{ $order->date }}</span></p>
        <p><span>Cliente: {{ $customer->name }}</span></p>

        <p><span>Productos comprados:</span></p>

        <table class="table table-condensed">
            <tr>
                <th>Codigo</th>
                <th>Cantidad</th>
                <th>Precio</th>
            </tr>
            @foreach($orderDetails as $orderDetail)
                <tr>
                    <td>{{ $orderDetail->product_code }}</td>
                    <td>{{ $orderDetail->quantity}}</td>
                    <td>{{ $orderDetail->total_price}}</td>
                </tr>
            @endforeach
            <tr>
                <td></td>
                <td>Total: </td>
                <td>{{ $order->total_price }}</td>
            </tr>
        </table>
    </div>
@endsection