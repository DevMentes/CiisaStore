@extends('admin.layouts.app')

@section('content')
    <div class="container">
<hr>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal">
            Nueva producto
        </button>
        <hr>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Nueva producto</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>

                            <div>
                                <h6>Disponibilidad</h6>
                                <label class="switch">
                                    <input type="checkbox">
                                    <span class="slider round"></span>
                                </label>
                            </div>

                            <div>
                                <h6>Orden de Compra</h6>
                                <label class="switch">
                                    <input type="checkbox">
                                    <span class="slider round"></span>
                                </label>
                            </div>
                            <div class="form-group">
                                <label for="name">Nombre</label>
                                <input type="text" id="name" name="name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="descr">Descripcion</label>
                                <input type="text" id="descr" name="descr" class="form-control">
                            </div>
                            <div class="form-group">
                                <select class="custom-select">
                                    <option selected>Familia</option>
                                    <option value="1">Tecnologia</option>
                                    <option value="2">Jardin & Terrazas</option>
                                    <option value="3">Decohogar</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="price">Precio</label>
                                <input type="number" id="price" name="price" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="umbral">Umbral</label>
                                <input type="number" maxlength="5" id="umbral" name="umbral" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="umax">Umbral Maximo</label>
                                <input type="number" maxlength="5" id="umax" name="umax" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="umin">Umbral Minimo</label>
                                <input type="number" minlength="2" id="umin" name="umin" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="stock">Stock</label>
                                <input type="number"  id="stock" name="stock" class="form-control">
                            </div>
                            <div class="form-group">
                                <select class="custom-select">
                                    <option selected>Proveedor</option>
                                    <option value="1">Proveedor 1</option>
                                    <option value="2">Proveedor 2 </option>
                                </select>
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
                <th>Descripcion</th>
                <th>Familia</th>
                <th>Precio</th>
                <th>Umbral</th>
                <th>Umbral Maximo</th>
                <th>Umbral Minimo</th>
                <th>Stock</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
            <tr>
                <td>Lenovo</td>
                <td>Computador Portatil Z400</td>
                <td>Tecnologia</td>
                <td>$499000</td>
                <td>5</td>
                <td>5</td>
                <td>2</td>
                <td>5</td>
                <td><button type="button" class="btn btn-success" data-toggle="modal" data-target="#modaleditar">Editar</button></td>
                <td><button type="button" class="btn btn-danger">Eliminar</button></td>
            </tr>
            <tr>
                <td>Masetero</td>
                <td>Blanco Luminoso</td>
                <td>Jardin & Terrazas</td>
                <td>$6000</td>
                <td>5</td>
                <td>5</td>
                <td>2</td>
                <td>5</td>
                <td><button type="button" class="btn btn-success">Editar</button></td>
                <td><button type="button" class="btn btn-danger">Eliminar</button></td>
            </tr>
            <tr>
                <td>Poltrona</td>
                <td>Terciopleo</td>
                <td>Tecnologia Celeste</td>
                <td>$15000</td>
                <td>5</td>
                <td>5</td>
                <td>2</td>
                <td>5</td>
                <td><button type="button" class="btn btn-success">Editar</button></td>
                <td><button type="button" class="btn btn-danger">Eliminar</button></td>
            </tr>
            <tr>
                <td>Corsair</td>
                <td>Mouse Negro</td>
                <td>Tecnologia</td>
                <td>$26000</td>
                <td>5</td>
                <td>5</td>
                <td>2</td>
                <td>5</td>
                <td><button type="button" class="btn btn-success">Editar</button></td>
                <td><button type="button" class="btn btn-danger">Eliminar</button></td>
            </tr>
            <tr>
                <td>Lampara</td>
                <td>4 Flores</td>
                <td>Decohogar</td>
                <td>$8000</td>
                <td>5</td>
                <td>5</td>
                <td>2</td>
                <td>5</td>
                <td><button type="button" class="btn btn-success">Editar</button></td>
                <td><button type="button" class="btn btn-danger">Eliminar</button></td>
            </tr>
            <tr>
                <td>Beats</td>
                <td>Audifonos inalambricos</td>
                <td>Tecnologia</td>
                <td>$35000</td>
                <td>5</td>
                <td>5</td>
                <td>2</td>
                <td>5</td>
                <td><button type="button" class="btn btn-success">Editar</button></td>
                <td><button type="button" class="btn btn-danger">Eliminar</button></td>
            </tr>
        </table>
    </div>


    <div class="modal fade" id="modaleditar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Editar producto</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>

                        <div>
                            <h6>Disponibilidad</h6>
                            <label class="switch">
                                <input type="checkbox">
                                <span class="slider round"></span>
                            </label>
                        </div>

                        <div>
                            <h6>Orden de Compra</h6>
                            <label class="switch">
                                <input type="checkbox">
                                <span class="slider round"></span>
                            </label>
                        </div>
                        <div class="form-group">
                            <label for="name">Nombre</label>
                            <input type="text" id="name" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="descr">Descripcion</label>
                            <input type="text" id="descr" name="descr" class="form-control">
                        </div>
                        <div class="form-group">
                            <select class="custom-select">
                                <option selected>Familia</option>
                                <option value="1">Tecnologia</option>
                                <option value="2">Jardin & Terrazas</option>
                                <option value="3">Decohogar</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="price">Precio</label>
                            <input type="number" id="price" name="price" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="umbral">Umbral</label>
                            <input type="number" maxlength="5" id="umbral" name="umbral" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="umax">Umbral Maximo</label>
                            <input type="number" maxlength="5" id="umax" name="umax" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="umin">Umbral Minimo</label>
                            <input type="number" minlength="2" id="umin" name="umin" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="stock">Stock</label>
                            <input type="number"  id="stock" name="stock" class="form-control">
                        </div>
                        <div class="form-group">
                            <select class="custom-select">
                                <option selected>Proveedor</option>
                                <option value="1">Proveedor 1</option>
                                <option value="2">Proveedor 2 </option>
                            </select>
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



    <style>
        /* The switch - the box around the slider */
        .switch {
            position: relative;
            display: inline-block;
            width: 50px;
            height: 24px;
        }

        /* Hide default HTML checkbox */
        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        /* The slider */
        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            -webkit-transition: .4s;
            transition: .4s;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 15px;
            width: 15px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            -webkit-transition: .4s;
            transition: .4s;
        }

        input:checked + .slider {
            background-color: #2196F3;
        }

        input:focus + .slider {
            box-shadow: 0 0 1px #2196F3;
        }

        input:checked + .slider:before {
            -webkit-transform: translateX(26px);
            -ms-transform: translateX(26px);
            transform: translateX(26px);
        }

        /* Rounded sliders */
        .slider.round {
            border-radius: 34px;
        }

        .slider.round:before {
            border-radius: 50%;
        }
    </style>
@endsection
