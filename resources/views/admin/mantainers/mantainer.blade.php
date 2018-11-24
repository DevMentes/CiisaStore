@extends('admin.layouts.app')

@section('content')

    <div class="container">


        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <h3>Familias</h3>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">F</h5>
                        <a href="{{ url('/admin/mantainers/families')  }}" class="btn btn-primary">Gestionar</a>
                    </div>
            </div>

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Familias</h5>
                        <a href="{{ url('/admin/mantainers/families')  }}" class="btn btn-primary">Gestionar</a>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Familias</h5>
                        <a href="{{ url('/admin/mantainers/families')  }}" class="btn btn-primary">Gestionar</a>
                    </div>
                </div>


            </div>

            <div class="col-md-3"></div>
        </div>
    </div>

@endsection