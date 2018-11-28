@extends('store.layouts.app')

@section('cart')
<header id="xt-home" class="xt-header">
        <div class="header-top">
            <div class="container">
            
                <div class="row">

                    <div class="user-nav pull-right col-md-6 col-sm-6 col-xs-12">
                        <ul>

                            
                            <li><a href="{{ url('/')  }}">Volver a Home</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        </header>

       <div class="form-container">
       
      <div class="form-group-center"> 
      
      <div class="row">
                <div class="col-md-3"></div>
                        <div class="col-md-6"> 
                                <div id="alert1" class="alert alert-success">
                                    <strong style="text-align: justify ">Transacción Exitosa</strong> 
                                 </div>
                         <div class="col-md-3">
                </div>
        </div>
                
        </div>
        <div class="col-12 col-lg-4">
                        <div class="each-product-info">
                            <h3>Detalle Boleta </h3>
                            <div class="product-add-cart">
                            <span class="single-price"><b>Numero de Transacción:</b> XXX-1</span>
                            </div>
<hr>
                            <div class="product-add-cart">
                            <label for="account"> Nombre Comprador :  Comprador 1</label>
                            </div>
<hr>
                            <h5>Productos: </h5>
                            <div class="product-add-cart">
                            <label for="account">Lenovo: Computador portatil</label>
                            <br>
                            <label for="account">Valor: $499.000</label>

                            </div>
                            <div class="product-add-cart">
                            <label for="account">Beats: Audifonos Inalambricos</label> 
                            <br>   
                            <label for="account">Valor: $35.000</label>                       
                            </div>
                            <hr>

                            <span class="single-price"><b>Monto Pagado</b> $534.000</span>
                            

                        </div>
                    </div>


      </div>
       </div>

                                 
                              