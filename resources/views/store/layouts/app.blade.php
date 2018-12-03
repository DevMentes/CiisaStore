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
    <div id="top" style="height: 150px;">
        <div class="row">
            <div class="col-md-4">
                <img src="{{asset('images/logociisa.png')}}" style="margin: 15px auto 5px 100px; width: 250px; height: 130px;">
            </div>
            <div class="col-md-4" style="text-align: center">
                <tittle style="line-height: 150px; font-size: 50px; font-weight: bold">
                    CiisaStore
                </tittle>
            </div>
            <div class="col-md-4" style="line-height: 150px; font-size: 50px;">
                <div class="row">
                    <div class="col-md-4">
                        <i class="fab fa-facebook-square"></i>
                    </div>
                    <div class="col-md-4">
                        <i class="fab fa-twitter-square"></i>
                    </div>
                    <div class="col-md-4">
                        <i class="fab fa-youtube"></i>
                    </div>
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
                    <div class="col-md-6">
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
                        <a href="{{url('/carro')}}" style="color: whitesmoke; font-size: 30px;">
                            <i class="fas fa-shopping-cart"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>

<content>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <sidebar>
                    <div id="families-sidebar"style="margin-top: -50px;">
                        <div style="background-color: #555555; height: 50px; line-height: 50px; text-align: center; color: whitesmoke; font-size: 25px">
                            <p>Familias</p>
                        </div>
                        <ul style="border: 1px solid rgba(0, 0, 0, 0.1); border-bottom-left-radius: 5px; border-bottom-right-radius: 5px; list-style: none; padding: 0; font-size: 19px;">
                            @foreach($families as $family)
                                <a href="{{url('/productos/familia/' . str_replace(' ', '-',$family->name))}}" style="text-decoration: none; color: #555555">
                                    <li style="height: 50px; line-height: 50px; border-bottom: 1px solid rgba(0, 0, 0, 0.1)">
                                        <span class="text-capitalize" style="margin-left: 15%;">{{ $family->name  }}</span>
                                    </li>
                                </a>
                            @endforeach
                        </ul>
                    </div>
                </sidebar>
            </div>
            <div class="col-md-9">
                @yield('content')
            </div>
        </div>
    </div>

</content>
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