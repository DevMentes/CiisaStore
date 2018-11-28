@extends('store.layouts.app')
@extends('store.layouts.footer')

@section('cart')
    <header id="xt-home" class="xt-header">
        <div class="header-top">
            <div class="container">
                <div class="row">


                    <div class="user-nav pull-right col-md-6 col-sm-6 col-xs-12">
                        <ul>

                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="main-navigation">
            <nav class="navbar navbar-fixed-top nav-scroll">
                <div class="container">
                
                    <div class="row">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span aria-hidden="true" class="icon"></span>
                            </button>
                            <a class="navbar-brand" href="{{ url('/')  }}"><img src="{{ asset('images/logociisa.png')  }}" alt="" class="img-responsive"></a>
                        </div>

                        <div class="collapse navbar-collapse" id="js-navbar-menu">
                            <ul class="nav navbar-nav navbar-right ep-mobile-menu" id="navbar-nav">
                                <li class="active"><a href="{{ url('/')  }}">Home</a></li>
                                <li><a href="{{ url('/products')  }}">Tienda</a></li>
                                <li><a href="{{ url('/products/detail')  }}">Producto</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <div class="cart-table-area section-padding-100">
        <div class="container-fluid">
            <div class="row">
                <div class="container">
                    <div class="col-md-8">
                    <div class="each-product-info">
                        <h3>Ingresar datos</h3>
                        <div id="form_user_verify">
                            <form>
                                <div class="form-group">
                                    <label for="">Nombre</label>
                                    <input type="text" class="form-control"  name="name" placeholder="Nombre">

                                </div>
                                <div class="form-group">
                                    <label for="">Apellido</label>
                                    <input type="text" class="form-control"  name="lastname" placeholder="Apellido">

                                </div>
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="email" class="form-control"  name="email" placeholder="Email">

                                </div>
                                <div class="form-group">
                                    <label for="">Fono</label>
                                    <input type="number" minlength="7" maxlength="8" class="form-control"  name="phone" placeholder="Fono">

                                </div>
                                <div class="form-group">
                                    <label for="">Direccion</label>
                                    <input type="text" class="form-control"  name="address" placeholder="Nombre de Calle">

                                    <input type="number" class="form-control"  name="numberaddress" placeholder="Numero de calle">

                                    <select class="form-control" id="sel1" name="city">
                                        <option>Selecciona Ciudad</option>
                                        <option>Santiago</option>
                                        <option>Chillan</option>
                                        <option>Talca</option>
                                    </select>

                                    <input type="text" class="form-control"  name="observation" placeholder="Observacion">

                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-4">
                    <div class="each-product-info">
                            <h3>Carro total  </h3>
                            <hr>
                            
                            <span class="single-price"><b>Total:</b> $534.000</span>

                            
                        </div>
                            <div class="payment-method">
                               
                                <!-- Paypal -->
                                <div class="custom-control custom-checkbox mr-sm-2">
                                    
                                    <label class="custom-control-label" for="paypal">Banco Estado<img class="ml-15" src="img/core-img/paypal.png" alt=""></label>
                                </div>
<br>
                                 <img src="images/BE.png" style="width:200px ; height: 100px;" alt="" class="img-responsive">
                            </div>
<br>
                            <div class="cart-btn mt-100">
                                <a href="{{ url('/pay')  }}" class="btn btn-warning">Pagar</a>
                                <hr>
                                 <a class="btn btn-dark" href="{{ url('/cart')  }}" >Atras</a>
                            </div>
                        </div>
                        
                    </div>
                    </div>
                </div>
                </div>

        </div>
    </div>

    
@endsection