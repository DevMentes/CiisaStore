@extends('admin.layouts.app')

@section('content')
    <div class="container">

        <!-- Button trigger modal -->
        <hr>
        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal">
            Nueva familia
        </button>
<hr>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Nueva categoría</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>

                            <div class="form-group">
                                <label for="name">Nombre</label>
                                <input type="text" id="name" name="name" class="form-control">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary">Agregar</button>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">

            <div class="col-md-4">
                <table class="table">
                    <tr>
                        <th>Nombre</th>
                        <th>Eliminar</th>
                    </tr>
                    <tr>
                        <td>Tecnologia</td>


                        <td><button type="button" class="btn btn-danger">Eliminar</button></td>
                    </tr>
                    <tr>
                        <td>Jardin & Terrazas</td>


                        <td><button type="button" class="btn btn-danger">Eliminar</button></td>
                    </tr>
                    <tr>
                        <td>Decohogar</td>


                        <td><button type="button" class="btn btn-danger">Eliminar</button></td>
                    </tr>
                </table>

            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
@endsection