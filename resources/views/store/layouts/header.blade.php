@section('header')
    <header id="xt-home" class="xt-header">
        <div class="header-top">
            <div class="container">
                <div class="row">


                    <div class="user-nav pull-right col-md-6 col-sm-6 col-xs-12">
                        <ul>

                            <li><a href="{{ url('/verify')  }}">Verificar </a></li>
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
                                       <a href="{{ url('/cart')  }}"><i class="fa flaticon-shopping-cart"></i></a>
                                    </a>
                                    <ul class="dropdown-menu xt-cart-items">
                                    <li>
                                                <a href="">
                                                    <img src="images/lenovo1.png" alt="">
                                                    <h3>Lenovo</h3>
                                                    <span class="cart-price">$499.000</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">
                                                    <img src="images/MQUF2.jpg" alt="">
                                                    <h3>Beats</h3>
                                                    <span class="cart-price">$35.000</span>
                                                </a>
                                            </li>
                                    </ul>
                                </li>
                            </ul>
                            <span class="xt-item-count">2</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>
@endsection