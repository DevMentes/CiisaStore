@extends('admin.layouts.app')

@section('content')

    <div class="container">
        <div class="jumbotron">
            <h1 class="display-4">Administrador</h1>
            <p class="lead"></p>
        </div>
        <div class="row" style="margin-left: 30px">

            <div class="col-md-4">
                <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
                    <div class="card-header"><a class="btn btn-default text-white" href="{{url('/admin/mantainers/families')}}">Familias</a></div>
                    <div class="card-body">
                        <h5 class="card-title">3</h5>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                    <div class="card-header"><a class="btn btn-default text-white" href="{{url('/admin/mantainers/productos')}}">Productos</a></div>
                    <div class="card-body">
                        <h5 class="card-title">1</h5>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card text-white bg-warning mb-3" style="max-width: 18rem;">
                    <div class="card-header"><a class="btn btn-default text-white" href="{{url('/admin/mantainers/proveedor')}}">Proveedores</a></div>
                    <div class="card-body">
                        <h5 class="card-title">3</h5>
                    </div>
                </div>
            </div>

        </div>

    </div>

@endsection