@section('header')
    <header id="xt-home" class="xt-header">
        <div class="header-top">
            <div class="container">
                <div class="row">


                    <div class="user-nav pull-right col-md-6 col-sm-6 col-xs-12">
                        <ul>

                            <li><a href="">Verificar</a></li>
                            <li><a href="">Iniciar Sesion</a></li>
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
                                <li class="active"><a href="index.html">Home</a></li>
                                <li><a href="shop-page.html">Tienda</a></li>
                                <li><a href="single-shop.html">Producto</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!--Mobile Menu-->
        <div class="main-color-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 left-menu-wrapper">
                        <div class="xt-sidenav hidden-xs hidden-sm">
                            <nav>
                                <ul class="xt-side-menu">
                                    <li>
                                        <a href="#">Categoria</a>
                                        <ul class="xt-dropdown">
                                            <li>
                                                <a  href="single-shop.html"><i class="fa flaticon-glasses"></i> Tecnologia </a>


                                            </li>
                                            <li>
                                                <a  href="single-shop.html"><i class="fa flaticon-dress"></i> Jardin & Terrazas</a>

                                            </li>
                                            <li><a href="single-shop.html"><i class="fa flaticon-high-heel"></i> Decohogar</a></li>

                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                    <div class="col-md-8 col-sm-10 col-xs-12 xt-header-search">
                        <div class="form-group xt-form search-bar  col-md-8 col-sm-8 col-xs-7 padding-right-o">
                            <input type="text" class="form-control" placeholder="Buscar producto" />
                        </div>

                    </div>
                    <div class="col-md-1 col-sm-2 col-xs-2">
                        <div class="xt-cart">
                            <ul>
                                <li class="dropdown">
                                    <a href="" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">
                                        <i class="fa flaticon-shopping-cart"></i>
                                    </a>
                                    <ul class="dropdown-menu xt-cart-items">
                                        <li>
                                            <a href="">
                                                <img src="{{ asset('images/4.jpg')  }}" alt="">
                                                <h3>Lipstick</h3>
                                                <span class="cart-price">$299</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                                <img src="{{ asset('images/1.jpg') }}" alt="">
                                                <h3>T-Shirt</h3>
                                                <span class="cart-price">$499</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                                <img src="{{ asset('images/3.jpg')  }}" alt="">
                                                <h3>Shirt</h3>
                                                <span class="cart-price">$399</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="subtotal top-checkout">
                                                <h3>Subtotal : </h3>
                                                <span class="total-price">$999</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="process top-checkout">
                                                <h3>Process to Checkout </h3>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <span class="xt-item-count">8</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>
@endsection