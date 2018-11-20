@extends('store.layouts.app')
@extends('store.layouts.footer')

@section('cart')
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
    <div class="cart-table-area section-padding-100">
        <div class="container-fluid">
            <div class="row">
                <div class="container">
                    <div class="col-40 col-lg-4">
                        <h3>Iniciar sesion</h3>
                        <div id="form_user_verify">
                            <form>
                                
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="email" class="form-control"  name="email" s>

                                </div>
                                
                                    
                                    <label for="">Password</label>
                                    <input type="password" class="form-control"  name="password">

                                </div>
                            </form>
                        </div>
                    </div>
                    
                    <div class="col-md-7">
                            <div class="each-product-info">
                            <div class="cart-btn mt-100">
                                <a href="#" class="btn amado-btn w-100">Registrar</a>
                            </div>
                        
                        </div>
                    </div>
                </div>
                </div>

        </div>
    </div>

@endsection