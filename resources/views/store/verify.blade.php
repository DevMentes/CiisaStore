@extends('store.layouts.app')
@extends('store.layouts.footer')

@section('cart')
    <header id="xt-home" class="xt-header">
        <div class="header-top">
            <div class="container">
                <div class="row">


                    <div class="user-nav pull-right col-md-6 col-sm-6 col-xs-12">
                        <ul>

                            <li><a href="{{ url('/verify')  }}">Verificar</a></li>
                            <li><a href="{{ url('/login')  }}">Iniciar Sesion</a></li>
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
                    <div class="col-12 col-lg-8">
                        <h3>Ingresa tus datos</h3>
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

                                    <input type="number" class="form-control"  name="address" placeholder="Numero de calle">

                                    <select class="form-control" id="sel1">
                                        <option>Selecciona Ciudad</option>
                                        <option>Santiago</option>
                                        <option>Chillan</option>
                                        <option>Talca</option>
                                    </select>

                                    <input type="text" class="form-control"  name="address" placeholder="Observacion">

                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="cart-summary">
                            <h5>Total Carro de compra</h5>
                            <ul class="summary-table">
                                <li><span>subtotal:</span> <span>$509.000</span></li>

                                <li><span>total:</span> <span>$509.000</span></li>
                            </ul>

                            <div class="payment-method">
                                <!-- Cash on delivery -->
                                <div class="custom-control custom-checkbox mr-sm-2">
                                    <input type="checkbox" class="custom-control-input" id="cod" checked>
                                    <label class="custom-control-label" for="cod">Pagar en Delivery</label>
                                </div>
                                <!-- Paypal -->
                                <div class="custom-control custom-checkbox mr-sm-2">
                                    <input type="checkbox" class="custom-control-input" id="paypal">
                                    <label class="custom-control-label" for="paypal">Paypal <img class="ml-15" src="img/core-img/paypal.png" alt=""></label>
                                </div>
<br>
                                 <img src="images/payment.png" style="width:200px ; height: 30px;" alt="" class="img-responsive">
                            </div>
<br>
                            <div class="cart-btn mt-100">
                                <a href="#" class="btn amado-btn w-100">Pagar</a>
                            </div>
                        </div>
                    </div>
                </div>
                </div>

        </div>
    </div>

    <!--<section class="xt-xt-single-product">
        <div class="container">
            <div class="row">
                <div class="col-md-3 visible-xs visible-sm padding-right-o"></div>
                <div class="col-md-9 col-md-offset-3 padding-o">
                    <div class="xt-product-inner">
                        <div class="col-md-5">

                        <div class="col-md-7">
                            <div class="each-product-info">
                                <h3>Nike Sneaker</h3>
                                <span class="single-price"><b>Subtotal:</b> $260</span>
                                <br>
                                <span class="single-price"><b>Total:</b> $260</span>

                                <div class="product-add-cart">
                                    <a href="" class="btn btn-fill">Registrar y Pagar</a>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
@endsection