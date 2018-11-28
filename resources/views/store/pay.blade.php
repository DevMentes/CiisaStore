@extends('store.layouts.app')

@section('cart')
<header id="xt-home" class="xt-header">
        <div class="header-top">
            <div class="container">
                <div class="row">


                    <div class="user-nav pull-right col-md-6 col-sm-6 col-xs-12">
                        <ul>

                            
                            <li><a href="{{ url('/')  }}">Volver a Home</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        </header>
 <header id="xt-home" class="xt-header">
    <div class="header-top">
        <div class="container">
            <form>
            
                <div class="form-group">
                <h4>Transacción</h4>
                    <label for="account">Numero de cuenta</label>
                    <input type="number" id="account" class="form-control" placeholder="Numero de cuenta">
                </div>
                <div class="form-group">
                    <label for="password">Clave</label>
                    <input type="text" id="password" class="form-control" placeholder="Clave">
                </div>
                <br>
                
                <a type="button" href="{{ url('/ticket')  }}" class="btn btn-warning">Pagar</a>
                <a class="btn btn-dark" href="{{ url('/verify')  }}">Atras</a>
            </form>
        </div>
    </div>
</header>
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
                    
            <!-- CREDIT CARD FORM STARTS HERE 
            <div class="panel panel-default credit-card-box">
                <div class="panel-heading display-table" >
                    <div class="row display-tr" >
                        <h3 class="panel-title display-td" >Payment Details</h3>
                        <div class="display-td" >                            
                            <img class="img-responsive pull-right" src="http://i76.imgup.net/accepted_c22e0.png">
                        </div>
                    </div>                    
                </div>
                <div class="panel-body">
                    <form role="form" id="payment-form" method="POST" action="javascript:void(0);">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label for="cardNumber">CARD NUMBER</label>
                                    <div class="input-group">
                                        
                                        <span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
                                    </div>
                                </div>                            
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-7 col-md-7">
                                <div class="form-group">
                                    <label for="cardExpiry"><span class="hidden-xs">EXPIRATION</span><span class="visible-xs-inline">EXP</span> DATE</label>
                                    
                                </div>
                            </div>
                            <div class="col-xs-5 col-md-5 pull-right">
                                <div class="form-group">
                                    <label for="cardCVC">CV CODE</label>
                                    
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-xs-12">
                                <button class="subscribe btn btn-success btn-lg btn-block" type="button">Start Subscription</button>
                            </div>
                        </div>
                        <div class="row" style="display:none;">
                            <div class="col-xs-12">
                                <p class="payment-errors"></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>            
            
        </div>            

    </div>
</div>
</div>
</header> -->
