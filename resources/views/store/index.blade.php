@extends('store.layouts.app')

@section('content')
    <section class="xt-slider" style="margin-top: 50px;">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="height: 400px;width: 650px; margin-left: auto;margin-right: auto;">
            <div class="carousel-inner">

                @for($i = 0; $i < count($products); $i++)

                    @if($i === 0)
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="{{ asset($products[$i]->image_route) }}" alt="First slide" style="height: 400px;width: 650px;">
                            <div class="carousel-caption">
                                <a href="{{ url('/productos/' . $products[$i]->code)}}" type="button" class="btn btn-success">Ver producto</a>
                            </div>
                        </div>
                    @else
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{ asset($products[$i]->image_route) }}" alt="First slide" style="height: 400px;width: 650px;">
                            <div class="carousel-caption">
                                <a href="{{ url('/productos/' . $products[$i]->code)}}" type="button" class="btn btn-success">Ver producto</a>
                            </div>
                        </div>
                    @endif
                @endfor

                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>
@endsection