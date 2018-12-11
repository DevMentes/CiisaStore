<!DOCTYPE html>
<!--[if IE 7]> <html class="no-js ie7 oldie" lang="en-US"> <![endif]-->
<!--[if IE 8]> <html class="no-js ie8 oldie" lang="en-US"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en">
<head>
    <!-- TITLE OF SITE -->
    <title> CiisaStore </title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="description" content="app landing page template" />
    <meta name="keywords" content="app, landing page, gradient background, image background, video background, template, responsive, bootstrap" />
    <meta name="developer" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- FAV AND ICONS   -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">
    <link rel="shortcut icon" href="{{ asset('images/apple-icon.png') }}">
    <link rel="shortcut icon" sizes="72x72" href="{{ asset('images/apple-icon-72x72.png') }}">
    <link rel="shortcut icon" sizes="114x114" href="{{ asset('images/apple-icon-114x114.png') }}">

    <!-- Font Awesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <!-- Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>

@php

    use App\Cart;

    if (!Session::has('cart')){
        Session::put('cart', new Cart());
    }

@endphp

<header>
    <div id="top" style="height: 120px;">
        <div class="row">
            <div class="col-md-4">
                <img src="{{asset('images/logociisa.png')}}" style="margin: 15px auto 5px 100px; width: 170px; height: 100px;">
            </div>
            <div class="col-md-4" style="text-align: center">
                <tittle style="line-height: 150px; font-size: 30px; font-weight: bold" >
                    CiisaStore
                </tittle>
            </div>
            <div class="col-md-4" style="line-height: 120px; font-size: 30px;">
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-1">
                        <a href="https://www.facebook.com/ipciisa"><i style="color: darkblue;" class="fab fa-facebook-square" ></i></a>
                    </div>
                    <div class="col-md-1">
                        <a href="https://twitter.com/ip_ciisa"><i style="color: deepskyblue" class="fab fa-twitter-square"></i></a>
                    </div>
                    <div class="col-md-1">
                        <a href="https://www.youtube.com/user/CIISAIP"><i style="color: red;" class="fab fa-youtube"></i></a>
                    </div>
                    <div class="col-md-5"></div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-success" style="height: 56px">
        <div class="collapse navbar-collapse" id="navbarText">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <form class="form-inline">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn bg-white btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-5">
                        <ul class="navbar-nav mr-auto" style="font-size: 20px;">
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('/')}}" style="color:whitesmoke;">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('/productos')}}" style="color:whitesmoke;">Productos</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6" style="text-align: center">
                        @if(!empty(Session::get('cart')->items()))
                            <a href="{{url('/carro')}}" style="color: whitesmoke; font-size: 30px;">
                                <i class="fas fa-shopping-cart"></i>
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
<section>
    <div class="container">
        <form action="{{ url('/customer/register') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div id="personal_data" style="margin-top: 50px; border: 1px solid lightgray; border-radius: 5px; padding: 15px;">
                        <h5>Datos personales</h5>
                        <div class="form-group">
                            <label for="name"></label>
                            <input class="form-control" type="text" id="name" name="name" placeholder="Nombre">
                        </div>
                        <div class="form-group">
                            <label for="lastname"></label>
                            <input class="form-control" type="text" id="lastname" name="lastname" placeholder="Apellidos">
                        </div>
                        <div class="form-group">
                            <label for="email"></label>
                            <input class="form-control" type="email" id="email" name="email" placeholder="Correo electrónico">
                        </div>
                        <div class="form-group">
                            <label for="phone"></label>
                            <input class="form-control" type="text" id="phone" name="phone" placeholder="Telefono">
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Registrar y pagar</button>
                    </div>
                </div>
                <div class="col-md-6">
                    <div id="address" style="margin-top: 50px; border: 1px solid lightgray; border-radius: 5px; padding: 15px;">
                        <h5>Datos de dirección</h5>
                        <div class="form-group">
                            <label for="address">Dirección</label>
                            <input type="text" name="street_name" id="address" class="form-control" placeholder="Dirección">
                        </div>
                        <div class="form-group">
                            <label for="street_number">Numero calle</label>
                            <input type="number" class="form-control" name="street_number" id="street_number" placeholder="N°">
                        </div>
                        <div class="form-group">
                            <label for="city">Ciudad</label>
                            <input type="text" class="form-control" name="city" id="city">
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>





<!--
|========================
|      Script
|========================
-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
