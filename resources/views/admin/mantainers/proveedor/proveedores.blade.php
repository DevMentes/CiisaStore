@extends('admin.layouts.app')

@section('content')
    <div class="container">

        <!-- Button trigger modal -->
        <hr>
        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal">
            Nuevo proveedor
        </button>
        <hr>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Nuevo Proveedor</h5>
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
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" id="email" name="email" class="form-control">
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



                <table class="table">
                    <tr>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                    <tr>
                        <td>Proveedor 1</td>
                        <td>provedor1@gmail.com</td>

                        <td><button type="button" class="btn btn-success" data-toggle="modal" data-target="#modaleditar2">Editar</button></td>
                        <td><button type="button" class="btn btn-danger">Eliminar</button></td>
                    </tr>
                    <tr>
                        <td>Proveedor 2</td>
                        <td>provedor2@gmail.com</td>

                        <td><button type="button" class="btn btn-success">Editar</button></td>
                        <td><button type="button" class="btn btn-danger">Eliminar</button></td>
                    </tr>
                    <tr>
                        <td>Proveedor 3</td>
                        <td>provedor3@gmail.com</td>

                        <td><button type="button" class="btn btn-success">Editar</button></td>
                        <td><button type="button" class="btn btn-danger">Eliminar</button></td>
                    </tr>
                </table>
            </div>

    </div>
    <div class="modal fade" id="modaleditar2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Editar Proveedor</h5>
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
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" class="form-control">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary">Agregar</button>
                </div>
            </div>
        </div>
@endsection