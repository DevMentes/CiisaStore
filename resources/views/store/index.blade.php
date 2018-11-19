@extends('store.layouts.app')
@extends('store.layouts.header')
@extends('store.layouts.sidebar')
@extends('store.layouts.footer')

@section('slider')
    <section class="xt-slider">
        <div class="container">
            <div class="row">
                <div class="col-md-3 category-hidden padding-right-o"></div>
                <div class="col-md-9 col-md-offset-3 padding-o padding-sm">
                    <div class="flexslider xt-slider-inner">
                        <ul class="slides">

                            <li>
                                <img src="{{ asset ('images/lenovo1.png') }}" style="width:600px ;height: 500px"  alt="" />
                                <div class="slide_text">
                                    <span class="slide-category">Tecnologia</span>
                                    <h2 class="slide_title ">Notebook<br> Lenovo Z400</h2>
                                    <p class="slide_byline ">LENOVO Z400 CI3/ 4GB/ 500GB/ NVIDIA 1GB </p>
                                    <a href="" class="btn btn-fill ">Ver</a>
                                </div>
                            </li>
                            <li>
                                <img src="{{ asset ('images/lamp1.jpg') }}" style="width:500px ;height: 500px" alt="" />
                                <div class="slide_text">
                                    <span class="slide-category">Decohogar </span>
                                    <h2 class="slide_title ">Lampara <br> Flores</h2>
                                    <p class="slide_byline "> Lampara 4 flores, color blanca</p>
                                    <a href="" class="btn btn-fill ">Ver</a>
                                </div>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection