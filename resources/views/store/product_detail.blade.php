@extends('store.layouts.app')
@extends('store.layouts.header')
@extends('store.layouts.sidebar')
@extends('store.layouts.footer')

@section('product_detail')
    <section class="xt-xt-single-product">
        <div class="container">
        <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-9"> 
                <div id="alert1" style="display: none " class="alert alert-success">
                        <strong>Producto agregado con exito</strong> 
                    </div>
                
                </div>
                
        </div>
            <div class="row">
                <div class="col-md-3 visible-xs visible-sm padding-right-o"></div>
                <div class="col-md-9 col-md-offset-3 padding-o">
                    <div class="xt-product-inner">
                        <div class="col-md-5">
                            <div role="tabpanel" class="tab-pane active xt-product-tab">
                                <div class="tab-content xt-pro-small-image">
                                    <!-- Tab panel-->
                                    

                                    <div role="tabpanel" id="xt-pro-1" class="tab-pane fade">
                                        <a class="grouped_elements" data-fancybox="gallery" href="{{ asset ('images/MQUF2.jpg') }}">
                                            <img src="{{ asset ('images/MQUF2.jpg') }}" style="width:500px ; height: 400px;" alt="" class="img-responsive">
                                        </a>
                                    </div>
                                    <div role="tabpanel" id="xt-pro-2" class="tab-pane fade">
                                        <a class="grouped_elements" data-fancybox="gallery" href="{{ asset ('images/BEATS.JPG') }}">
                                            <img src="{{ asset ('images/BEATS.JPG') }}" style="width:500px ; height: 400px;" class="img-responsive">
                                        </a>
                                    </div>
                                    
                                    
                                </div>
                                <!-- Nav tabs -->
                                <ul id="tablist" class="xt-pro-thumbs-list" role="tablist">
                                    <li role="presentation" class="">
                                        <a href="#xt-pro-1" role="tab" data-toggle="tab" aria-expanded="false">
                                            <img src="{{ asset ('images/MQUF2.jpg') }}" alt="product thumbs">
                                        </a>
                                    </li>
                                    <li role="presentation" class="">
                                        <a href="#xt-pro-2" role="tab" data-toggle="tab" aria-expanded="false">
                                            <img src="{{ asset ('images/BEATS.JPG') }}" alt="product thumbs">
                                        </a>
                                    </li>
                                    
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="each-product-info">
                                <h3>Audifonos Inalambricos Beats</h3>
                                <div class="select-quantity">
                                    <label>Disponible</label>
                                </div>
                                <span class="single-price"><b>Precio:</b> $35.000</span>
                                <p>Audifonos Inalambricos Negos/rosado</p>
                                
                                
                                <div class="select-quantity">
                                    Cantidad: <input type="number" step="1" name="quantity" value="1" title="Qty" class="input-text qty text" size="4">
                                </div>
                                
                                
                                
                                <div class="product-add-cart">
                                    <button onclick="añadir_carro()" type="button" class="btn btn-info">Añadir al carro</button>
                                   <script>
                                   function añadir_carro()
                                   {
                                    alert1= document.getElementById("alert1");
                                  alert1.style.display = "block";
                                   }
                                   </script>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection