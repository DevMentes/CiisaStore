@extends('store.layouts.app')
@extends('store.layouts.header')
@extends('store.layouts.sidebar')
@extends('store.layouts.footer')

@section('products')
    <div class="xt-product-subpage">
        <div class="container">
            <div class="row">
                <!-- SIDEBAR -->
                <aside class="col-md-3 product-sidebar">

                    <div class="xt-side-deal">
                        <div class="">

                        </div>
                    </div>
                </aside>
                <div class="col-md-9">
                    <!--end singlw item info -->
                    <div class="xt-feature-product">
                        <div class="section-separator">
                            <div class="xt-filter-nav">

                                <div class="col-md-5 col-sm-5 col-xs-12">
                                    <div class="xt-page-pagination">
                                        <nav aria-label="Page navigation">
                                            <ul class="pagination xt-pagination">
                                                <li class="active"><a href="#">1</a></li>
                                                <li><a href="#">2</a></li>
                                                <li><a href="#">3</a></li>
                                                <li><a href="#">4</a></li>
                                                <li><a href="#" aria-label="Next"><i class="fa fa-caret-right"></i></a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-xs-12 xt-top-hr">
                                    <hr class="xt-hr">
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="xt-each-feature">
                                <div class="col-md-4 col-sm-4">
                                <div class="xt-feature">
                                            <div class="product-img">
                                                <img src="images/masetero1.JPG" style="width:300px ; height: 270px;"alt="" class="img-responsive">
                                                <span class="product-tag xt-uppercase">sale!</span>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-title">
                                                    <span class="category xt-uppercase">Masetero</span>
                                                    <span class="name xt-semibold">Blanco Luminoso</span>
                                                </div>
                                                <div class="price-tag pull-right">
                                                    <br>
                                                    <span class="new-price xt-semibold">$6.000</span>
                                                </div>
                                                <div class="xt-featured-caption">
                                                    <div class="product-title">
                                                        <span class="category xt-uppercase">Masetero</span>
                                                        <span class="name xt-semibold">Blanco Luminoso</span>
                                                    </div>
                                                    <div class="price-tag pull-right">
                                                        <br>
                                                        <span class="new-price xt-semibold">$6.000</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a href="" class="btn btn-fill">Añadir al carro</a>
                                                        <ul class="reaction">
                                                            <li><a href=""><i class="fa fa-search"></i></a></li>
                                                            <li><a href=""><i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href=""><i class="fa fa-bar-chart-o"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4">
                                        <div class="xt-feature">
                                            <div class="product-img">
                                                <img src="images/Ripley-Fotos-770x4804.jpg"style="width:300px ; height: 270px;"  alt="" class="img-responsive">
                                                <span class="product-tag xt-uppercase">sale!</span>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-title">
                                                    <span class="category xt-uppercase">Poltrona</span>
                                                    <span class="name xt-semibold">Terciopelo Celeste</span>
                                                </div>
                                                <div class="price-tag pull-right"> 
                                                    <span class="new-price xt-semibold">$15.000</span>
                                                </div>
                                                <div class="xt-featured-caption">
                                                    <div class="product-title">
                                                        <span class="category xt-uppercase">Poltrona</span>
                                                        <span class="name xt-semibold">Terciopelo Celeste</span>
                                                    </div>
                                                    <div class="price-tag pull-right">
                                                        <span class="new-price xt-semibold">$15.000</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a href="" class="btn btn-fill">Añadir al carro</a>
                                                        <ul class="reaction">
                                                            <li><a href=""><i class="fa fa-search"></i></a></li>
                                                            <li><a href=""><i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href=""><i class="fa fa-bar-chart-o"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4">
                                        <div class="xt-feature">
                                            <div class="product-img">
                                                <img src="images/lenovo1.png"  style="width:300px ; height: 270px;" alt="" class="img-responsive">
                                                <span class="product-tag xt-uppercase">sale!</span>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-title">
                                                    <span class="category xt-uppercase">Lenovo</span>
                                                    <span class="name xt-semibold"> Notebook Z400</span>
                                                </div>
                                                <div class="price-tag pull-right">
                                                    <span class="new-price xt-semibold">$499.000</span>
                                                </div>
                                                <div class="xt-featured-caption">
                                                    <div class="product-title">
                                                        <span class="category xt-uppercase">Lenovo</span>
                                                        <span class="name xt-semibold">Notebook Z400</span>
                                                    </div>
                                                    <div class="price-tag pull-right">
                                                        <span class="new-price xt-semibold">$499.000</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a href="" class="btn btn-fill">Añadir al carro</a>
                                                        <ul class="reaction">
                                                            <li><a href=""><i class="fa fa-search"></i></a></li>
                                                            <li><a href=""><i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href=""><i class="fa fa-bar-chart-o"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4">
                                        <div class="xt-feature">
                                            <div class="product-img">
                                                <img src="images/mouse1.jpg" style="width:300px ; height: 270px;" alt="" class="img-responsive">
                                                <span class="product-tag xt-uppercase">sale!</span>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-title">
                                                    <span class="category xt-uppercase">Corsair</span>
                                                    <span class="name xt-semibold">Mouse Negro </span>
                                                </div>
                                                <div class="price-tag pull-right">
                                                    <span class="new-price xt-semibold">$26.000</span>
                                                </div>
                                                <div class="xt-featured-caption">
                                                    <div class="product-title">
                                                        <span class="category xt-uppercase">Corsair</span>
                                                        <span class="name xt-semibold">Mouse Negro</span>
                                                    </div>
                                                    <div class="price-tag pull-right">
                                                        <span class="new-price xt-semibold">$26.000</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a href="" class="btn btn-fill">Añadir al carro</a>
                                                        <ul class="reaction">
                                                            <li><a href=""><i class="fa fa-search"></i></a></li>
                                                            <li><a href=""><i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href=""><i class="fa fa-bar-chart-o"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4">
                                        <div class="xt-feature">
                                            <div class="product-img">
                                                <img src="images/lamp1.jpg" style="width:300px ; height: 270px;"alt="" class="img-responsive">
                                                <span class="product-tag xt-uppercase">sale!</span>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-title">
                                                    <span class="category xt-uppercase">Lampara</span>
                                                    <span class="name xt-semibold">4 Flores</span>
                                                </div>
                                                <div class="price-tag pull-right">
                                                    <span class="new-price xt-semibold">$8.000</span>
                                                </div>
                                                <div class="xt-featured-caption">
                                                    <div class="product-title">
                                                        <span class="category xt-uppercase">Lampara</span>
                                                        <span class="name xt-semibold">4 Flores</span>
                                                    </div>
                                                    <div class="price-tag pull-right">
                                                        <span class="new-price xt-semibold">$8.000</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a href="" class="btn btn-fill">Añadir al carro</a>
                                                        <ul class="reaction">
                                                            <li><a href=""><i class="fa fa-search"></i></a></li>
                                                            <li><a href=""><i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href=""><i class="fa fa-bar-chart-o"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4">
                                        <div class="xt-feature">
                                            <div class="product-img">
                                                <img src="images/MQUF2.jpg" style="width:300px ; height: 270px;" alt="" class="img-responsive">
                                                <span class="product-tag xt-uppercase">sale!</span>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-title">
                                                    <span class="category xt-uppercase">Beats</span>
                                                    <span class="name xt-semibold">Audifonos inalambricos</span>
                                                </div>
                                                <div class="price-tag pull-right">
                                                    <span class="new-price xt-semibold">$35.000</span>
                                                </div>
                                                <div class="xt-featured-caption">
                                                    <div class="product-title">
                                                        <span class="category xt-uppercase">Beats</span>
                                                        <span class="name xt-semibold">Audifonos inalambricos</span>
                                                    </div>
                                                    <div class="price-tag pull-right">
                                                        <span class="new-price xt-semibold">$35.000</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a href="" class="btn btn-fill">Añadir al carro</a>
                                                        <ul class="reaction">
                                                            <li><a href=""><i class="fa fa-search"></i></a></li>
                                                            <li><a href=""><i class="fa fa-heart-o"></i></a></li>
                                                            <li><a href=""><i class="fa fa-bar-chart-o"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            <div class="clearfix"></div>
                            <div class="col-md-12 xt-bottom-hr">
                                <hr class="xt-hr">
                            </div>
                            <div class="xt-filter-nav padding-bottom-60">
                                <div class="col-md-2 col-sm-2 col-xs-6">
                                    <div class="xt-view">
                                        <a href="" class="active"><i class="fa fa-th-large"></i></a>
                                        <a href=""><i class="fa fa-navicon"></i></a>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-6 xt-show-item">
                                    <label>Show: </label>
                                    <div class="xt-select xt-search-opt xt-item-view-count">
                                        <select class="xt-category-search select-beast">
                                            <option>4</option>
                                            <option>8</option>
                                            <option>12</option>
                                            <option>20</option>
                                            <option>40</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group xt-shop-category col-md-4 col-sm-4 col-xs-12">
                                    <div class="xt-select xt-search-opt">
                                        <select class="xt-category-search select-beast">
                                            <option>Shirt</option>
                                            <option>Pant</option>
                                            <option>Jeans</option>
                                            <option>Jackets</option>
                                        </select>
                                    </div>
                                    <div class="xt-search-opt xt-search-btn">
                                        <button type="button" class="btn-search"><i class="fa fa-long-arrow-down"></i></button>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <div class="xt-page-pagination">
                                        <nav aria-label="Page navigation">
                                            <ul class="pagination xt-pagination">
                                                <li class="active"><a href="#">1</a></li>
                                                <li><a href="#">2</a></li>
                                                <li><a href="#">3</a></li>
                                                <li><a href="#">4</a></li>
                                                <li><a href="#" aria-label="Next"><i class="fa fa-caret-right"></i></a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection