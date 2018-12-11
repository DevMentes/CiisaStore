<!doctype html>
<html lang="es">
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
<header id="xt-home" class="xt-header">
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">

                    <form action="{{ url('/transaccion') }}" method="POST" style="margin-top: 100px;">

                        @csrf
                        <div class="form-group">
                            <label for="account">Numero de cuenta</label>
                            <input type="number" id="account" class="form-control" placeholder="Numero de cuenta">
                        </div>
                        <div class="form-group">
                            <label for="password">Clave</label>
                            <input type="password" id="password" class="form-control" placeholder="Clave">
                        </div>
                        <button type="submit" class="btn btn-warning">Pagar</button>
                        <a class="btn btn-dark" href="{{url('/')  }}">Cancelar</a>
                    </form>
                    <div class="footer-bottom">
                        <div class="container">
                            <div class="row section-separator">
                                <div aling="center">
                                    <img src="images/BE.png" style="width:200px ; height: 100px;" alt="" class="img-responsive" >
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <img src="" alt="" class="img-responsive">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </div>
</header>

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

