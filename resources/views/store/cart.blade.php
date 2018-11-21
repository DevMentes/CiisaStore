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
                        <div class="cart-title mt-50">
                            <h2>Carrito de compras</h2>
                        </div>

                        <div class="cart-table clearfix">
                            <table class="table table-responsive">
                                <thead>
                                <tr>
                                    <th></th>
                                    <th>Nombre</th>
                                    <th>Precio</th>
                                    <th>Cantidad</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="cart_product_img">
                                        <a href="#"><img src="images/lenovo1.png" style="width:100px ; height: 80px"; alt="Product"></a>
                                    </td>
                                    <td class="cart_product_desc">
                                        <h5>Notebook Lenovo Z400</h5>
                                    </td>
                                    <td class="price">
                                        <span>$499.000</span>
                                    </td>
                                    <td class="qty">
                                        <div class="qty-btn d-flex">
                                            <p>Cantidad</p>
                                            <div class="quantity">
                                                <span class="qty-minus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) effect.value--;return false;"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                                <input type="number" class="qty-text" id="qty" step="1" min="1" max="300" name="quantity" value="1">
                                                <span class="qty-plus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="cart_product_img">
                                        <a href="#"><img src="images/BEATS.JPG" style="width:100px ; height: 80px"; alt="Product"></a>
                                    </td>
                                    <td class="cart_product_desc">
                                        <h5>Audifonos Beats</h5>
                                    </td>
                                    <td class="price">
                                        <span>$35.000</span>
                                    </td>
                                    <td class="qty">
                                        <div class="qty-btn d-flex">
                                            <p>Cantidad</p>
                                            <div class="quantity">
                                                <span class="qty-minus" onclick="var effect = document.getElementById('qty2'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) effect.value--;return false;"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                                <input type="number" class="qty-text" id="qty2" step="1" min="1" max="300" name="quantity" value="1">
                                                <span class="qty-plus" onclick="var effect = document.getElementById('qty2'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="each-product-info">
                            <h3>Carro total  </h3>
                            <span class="single-price"><b>Subtotal:</b> $534.000</span>
                            <br>
                            <span class="single-price"><b>Total:</b> $534.000</span>

                            <div class="product-add-cart">
                                <a href="{{ url('/verify')  }}" class="btn btn-fill">Registrar y Pagar</a>

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