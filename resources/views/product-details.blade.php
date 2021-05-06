@extends('layouts.master')

@section('content')
    <main id="main">

        <div class="row">
            <div class="container">
                <div class="card mb-5" style="margin-top: 120px">
                    <div class="row">
                        <aside class="col-sm-5 border-right">
                            <article class="gallery-wrap">
                                @php
                                    $image_alt = 'data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22246%22%20height%3D%22160%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20246%20160%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_1793e5e14ea%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A12pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_1793e5e14ea%22%3E%3Crect%20width%3D%22246%22%20height%3D%22160%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2292.25%22%20y%3D%2285.1%22%3E246x160%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E';
                                    $images = [];
                                    if ($product->images) {
                                        $images = json_decode($product->images);
                                    }
                                @endphp
                                <div class="img-big-wrap">
                                    <a href="#"><img src="{{ count($images) > 0 ? asset('storage/'.$images[0]) : $image_alt }}" style="width: 100%"></a>
                                </div> <!-- slider-product.// -->
                                <div class="img-small-wrap">
                                    @foreach ($images as $image)
                                    <div class="item-gallery"> <img src="{{ asset('storage/'.str_replace(".", "-cropped.", $image)) }}"> </div>
                                    @endforeach
                                </div> <!-- slider-nav.// -->
                                </article> <!-- gallery-wrap .end// -->
                                        </aside>
                                        <aside class="col-sm-7">
                                <article class="card-body p-5">
                                <h3 class="title mb-3">{{ $product->name }}</h3>
                            
                                <p class="price-detail-wrap"> 
                                    <span class="price h3 text-primary"> 
                                        <span class="currency"></span><span class="num">{{ $product->price }}</span> Bs.
                                        @if ($product->old_price)
                                        <small><del class="text-danger">{{ $product->old_price }} Bs.</del></small>
                                        @endif
                                    </span>
                                </p>
                                {!! $product->details_small !!}
                                <hr>
                                {{-- <a href="#" class="btn btn-lg btn-primary text-uppercase"> Buy now </a>
                                <a href="#" class="btn btn-lg btn-outline-primary text-uppercase"> <i class="fas fa-shopping-cart"></i> Add to cart </a> --}}
                            </article>
                        </aside>
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection

@section('css')
    <style>
        .gallery-wrap .img-big-wrap img {
            width: auto;
            display: inline-block;
            cursor: zoom-in;
        }


        .gallery-wrap .img-small-wrap .item-gallery {
            width: 60px;
            height: 60px;
            border: 1px solid #ddd;
            margin: 7px 2px;
            display: inline-block;
            overflow: hidden;
        }

        .gallery-wrap .img-small-wrap {
            text-align: center;
        }
        .gallery-wrap .img-small-wrap img {
            max-width: 100%;
            max-height: 100%;
            object-fit: cover;
            border-radius: 4px;
            cursor: zoom-in;
        }
    </style>
@endsection

@section('javascript')
    <script>
        $(document).ready(function(){
            $('.sticky-wrapper').addClass('is-sticky');

            $(window).scroll(function (event) {
                var scroll = $(window).scrollTop();
                if(scroll == 0){
                    $('.sticky-wrapper').addClass('is-sticky');
                }
            });
        });
    </script>
@endsection