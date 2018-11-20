@extends('store.layouts.app')
@extends('store.layouts.footer')

@section('login')
    <header id="xt-home" class="xt-header">
        <div class="header-top">
            <div class="container">
                <div class="row">


                    <div class="user-nav pull-right col-md-6 col-sm-6 col-xs-12">
                        <ul>

                            <li><a href="verify">Verificar</a></li>
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
                            <a class="navbar-brand" href="index.html"><img src="{{ asset('images/logociisa.png')  }}" alt="" class="img-responsive"></a>
                        </div>

                        <div class="collapse navbar-collapse" id="js-navbar-menu">
                            <ul class="nav navbar-nav navbar-right ep-mobile-menu" id="navbar-nav">
                                <li class="active"><a href="index.php">Home</a></li>
                                <li><a href="products">Tienda</a></li>
                                <li><a href="products/detail">Producto</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>


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