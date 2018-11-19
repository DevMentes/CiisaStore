@extends('store.layouts.app')
@extends('store.layouts.header')
@extends('store.layouts.sidebar')
@extends('store.layouts.footer')

@section('product_detail')
    <section class="xt-xt-single-product">
        <div class="container">
            <div class="row">
                <div class="col-md-3 visible-xs visible-sm padding-right-o"></div>
                <div class="col-md-9 col-md-offset-3 padding-o">
                    <div class="xt-product-inner">
                        <div class="col-md-5">
                            <div role="tabpanel" class="tab-pane active xt-product-tab">
                                <div class="tab-content xt-pro-small-image">
                                    <!-- Tab panel-->
                                    <div role="tabpanel" id="xt-pro-1" class="tab-pane fade">
                                        <a class="grouped_elements" data-fancybox="gallery" href="{{ asset ('images/s-1.jpg') }}">
                                            <img src="{{ asset ('images/s-1.jpg') }}" alt="" class="img-responsive">
                                        </a>
                                    </div>
                                    <div role="tabpanel" id="xt-pro-2" class="tab-pane fade">
                                        <a class="grouped_elements" data-fancybox="gallery" href="{{ asset ('images/s-2.jpg') }}">
                                            <img src="{{ asset ('images/s-2.jpg') }}" alt="" class="img-responsive">
                                        </a>
                                    </div>
                                    <div role="tabpanel" id="xt-pro-3" class="tab-pane fade active in">
                                        <a class="grouped_elements" data-fancybox="gallery" href="{{ asset ('images/s-3.jpg') }}">
                                            <img src="{{ asset ('images/s-3.jpg') }}" alt="" class="img-responsive">
                                        </a>
                                    </div>
                                    <div role="tabpanel" id="xt-pro-4" class="tab-pane fade">
                                        <a class="grouped_elements" data-fancybox="gallery" href="{{ asset ('images/s-4.jpg') }}">
                                            <img src="{{ asset ('images/s-4.jpg') }}" alt="" class="img-responsive">
                                        </a>
                                    </div>
                                </div>
                                <!-- Nav tabs -->
                                <ul id="tablist" class="xt-pro-thumbs-list" role="tablist">
                                    <li role="presentation" class="">
                                        <a href="#xt-pro-1" role="tab" data-toggle="tab" aria-expanded="false">
                                            <img src="{{ asset ('images/s-1.jpg') }}" alt="product thumbs">
                                        </a>
                                    </li>
                                    <li role="presentation" class="">
                                        <a href="#xt-pro-2" role="tab" data-toggle="tab" aria-expanded="false">
                                            <img src="{{ asset ('images/s-2.jpg') }}" alt="product thumbs">
                                        </a>
                                    </li>
                                    <li role="presentation" class="active">
                                        <a href="#xt-pro-3" role="tab" data-toggle="tab" aria-expanded="true">
                                            <img src="{{ asset ('images/s-3.jpg') }}" alt="product thumbs">
                                        </a>
                                    </li>
                                    <li role="presentation" class="">
                                        <a href="#xt-pro-4" role="tab" data-toggle="tab" aria-expanded="false">
                                            <img src="{{ asset ('images/s-4.jpg') }}" alt="product thumbs">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="each-product-info">
                                <h3>Nike Sneaker</h3>
                                <span class="single-price"><b>Current Price:</b> $260</span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                    ad minim veniam, quis nostrud exercitation ullamco,</p>
                                <div class="color-select">
                                    Color:
                                    <ul>
                                        <li class="red-bg selected"><i class="fa fa-check"></i></li>
                                        <li class="green-bg"><i class="fa fa-check"></i></li>
                                        <li class="blue-bg"><i class="fa fa-check"></i></li>
                                    </ul>
                                </div>
                                <div class="select-size">
                                    Size:
                                    <ul>
                                        <li class="selected">M</li>
                                        <li>L</li>
                                        <li>XL</li>
                                    </ul>
                                </div>
                                <div class="select-quantity">
                                    <input type="number" step="1" name="quantity" value="1" title="Qty" class="input-text qty text" size="4">
                                </div>
                                <div class="product-add-cart">
                                    <a href="" class="btn btn-fill">Add to cart</a>
                                    <a href="" class="btn liked "><i class="fa fa-heart-o xt-no-color"></i><i class="fa fa-heart xt-color"></i></a>
                                </div>
                                <div class="product-additional-info">
                                    <ul>
                                        <li><b>Sku:</b>P001</li>
                                        <li><b>Category:</b><a href="">Fashion & clothings</a>, <a href="">Women</a></li>
                                        <li><b>Tag:</b> <a href="">Rib</a>, <a href="">Neck</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection