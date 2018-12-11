@extends('store.layouts.app')

@section('content')
    <section>
        <div class="container">
            <form action="{{ url('/customer/register') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div id="personal_data" style="margin-top: 50px; border: 1px solid lightgray; border-radius: 5px; padding: 15px;">
                            <h5>Datos personales</h5>
                            <div class="form-group">
                                <label for="name"></label>
                                <input class="form-control" type="text" id="name" name="name" placeholder="Nombre">
                            </div>
                            <div class="form-group">
                                <label for="lastname"></label>
                                <input class="form-control" type="text" id="lastname" name="lastname" placeholder="Apellidos">
                            </div>
                            <div class="form-group">
                                <label for="email"></label>
                                <input class="form-control" type="email" id="email" name="email" placeholder="Correo electrónico">
                            </div>
                            <div class="form-group">
                                <label for="phone"></label>
                                <input class="form-control" type="text" id="phone" name="phone" placeholder="Telefono">
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Registrar y pagar</button>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div id="address" style="margin-top: 50px; border: 1px solid lightgray; border-radius: 5px; padding: 15px;">
                            <h5>Datos de dirección</h5>
                            <div class="form-group">
                                <label for="address">Dirección</label>
                                <input type="text" name="street_name" id="address" class="form-control" placeholder="Dirección">
                            </div>
                            <div class="form-group">
                                <label for="street_number">Numero calle</label>
                                <input type="number" class="form-control" name="street_number" id="street_number" placeholder="N°">
                            </div>
                            <div class="form-group">
                                <label for="city">Ciudad</label>
                                <input type="text" class="form-control" name="city" id="city">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection