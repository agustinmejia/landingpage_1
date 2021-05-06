@extends('layouts.master')

@section('meta-datos')
    <title>{{ setting('site.title') }} | Bienvenido</title>
    <meta property="og:url"           content="{{ url('/') }}" />
    <meta property="og:type"          content="E-Commerce" />
    <meta property="og:title"         content="{{ setting('site.title') }}" />
    <meta property="og:description"   content="{{ setting('site.description') }}" />
    <meta property="og:image"         content="{{ asset('storage').'/'.setting('site.logo') }}" />
@endsection

@section('content')
    <main id="main">
        <div class="hero-section">
            <div class="wave">

                <svg width="100%" height="355px" viewBox="0 0 1920 355" version="1.1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="Apple-TV" transform="translate(0.000000, -402.000000)" fill="#FFFFFF">
                        <path
                        d="M0,439.134243 C175.04074,464.89273 327.944386,477.771974 458.710937,477.771974 C654.860765,477.771974 870.645295,442.632362 1205.9828,410.192501 C1429.54114,388.565926 1667.54687,411.092417 1920,477.771974 L1920,757 L1017.15166,757 L0,757 L0,439.134243 Z"
                        id="Path"></path>
                    </g>
                    </g>
                </svg>

            </div>

            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 hero-text-image">
                        <div class="row">
                            <div class="col-lg-7 text-center text-lg-left">
                                <h1 data-aos="fade-right">{{ setting('site.description') }}</h1>
                                <p class="mb-5" data-aos="fade-right" data-aos-delay="100">{{ setting('site.slogan') }}</p>
                                {{-- <p data-aos="fade-right" data-aos-delay="200" data-aos-offset="-500"><a href="#" class="btn btn-outline-white">Get started</a></p> --}}
                            </div>
                            <div class="col-lg-5 iphone-wrap">
                                <img src="{{ setting('banner.image_1') ? asset('storage/'.setting('banner.image_1')) : asset('landingpage/img/phone_1.png') }}" alt="Image" class="phone-1" data-aos="fade-right">
                                <img src="{{ setting('banner.image_2') ? asset('storage/'.setting('banner.image_2')) : asset('landingpage/img/phone_2.png') }}" alt="Image" class="phone-2" data-aos="fade-right" data-aos-delay="200">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="site-section">
            <div class="container">

                <div class="row justify-content-center text-center mb-5">
                    <div class="col-md-5" data-aos="fade-up">
                    <h2 class="section-heading">{{ setting('features.title') }}</h2>
                    </div>
                </div>

                <div class="row">
                    {!! setting('features.panel_1') !!}
                    {!! setting('features.panel_2') !!}
                    {!! setting('features.panel_3') !!}
                </div>

            </div>
        </div> <!-- .site-section -->

        <div class="site-section">
            <div class="container">
                <div class="row justify-content-center text-center mb-5" data-aos="fade">
                    <div class="col-md-6 mb-5">
                        <img src="{{ setting('features.banner') ? asset('storage/'.setting('features.banner')) : asset('landingpage/img/undraw_svg_1.svg') }}" alt="Image" class="img-fluid">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="step">
                            <span class="number">01</span>
                            <h3>{{ setting('features.subtitle_1') }}</h3>
                            <p>{{ setting('features.description_1') }}</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="step">
                            <span class="number">02</span>
                            <h3>{{ setting('features.subtitle_2') }}</h3>
                            <p>{{ setting('features.description_2') }}</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="step">
                            <span class="number">03</span>
                            <h3>{{ setting('features.subtitle_3') }}</h3>
                            <p>{{ setting('features.description_3') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- .site-section -->



        <div class="site-section pb-0">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-4 mr-auto">
                        <h2 class="mb-4">{{ setting('sections.title_1') }}</h2>
                        <p class="mb-4">{{ setting('sections.description_1') }}</p>
                    </div>
                    <div class="col-md-6" data-aos="fade-left">
                        <img src="{{ setting('sections.image_1') ? asset('storage/'.setting('sections.image_1')) : asset('landingpage/img/undraw_svg_2.svg') }}" alt="Image" class="img-fluid">
                    </div>
                </div>
            </div>
        </div> <!-- .site-section -->

        <div class="site-section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-4 ml-auto order-2">
                        <h2 class="mb-4">{{ setting('sections.title_2') }}</h2>
                        <p class="mb-4">{{ setting('sections.description_2') }}</p>
                    </div>
                    <div class="col-md-6" data-aos="fade-right">
                        <img src="{{ setting('sections.image_2') ? asset('storage/'.setting('sections.image_2')) : asset('landingpage/img/undraw_svg_3.svg') }}" alt="Image" class="img-fluid">
                    </div>
                </div>
            </div>
        </div> <!-- .site-section -->

        @php
            $image_alt = 'data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22246%22%20height%3D%22160%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20246%20160%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_1793e5e14ea%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A12pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_1793e5e14ea%22%3E%3Crect%20width%3D%22246%22%20height%3D%22160%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2292.25%22%20y%3D%2285.1%22%3E246x160%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E';
        @endphp
        @php
            $products = App\Models\Product::limit(6)->get();
        @endphp
        @if(count($products))
        <div class="site-section border-top border-bottom">
            <div class="container">
                <div class="row justify-content-center text-center mb-5">
                    <div class="col-md-12" data-aos="fade-up">
                        <h2 class="section-heading">Nuestros productos</h2>
                    </div>
                </div>
                <div class="row">
                    @foreach ($products as $item)
                        @php
                            if ($item->images) {
                                $images = json_decode($item->images);
                            }
                        @endphp
                        <div class="col-md-4 mb-5">
                            <div class="card">
                                <a href="{{ url('product/'.$item->slug) }}"><img class="card-img-top" src="{{ count($images) > 0 ? asset('storage/'.str_replace(".", "-cropped.", $images[0])) : $image_alt }}" alt="{{ $item->name }}" width="100%"></a>
                                <div class="card-body">
                                    <h5 class="card-title">{{ $item->name }}</h5>
                                    <p class="card-text">{{ $item->description }}</p>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h6>{{ $item->price }} Bs. &nbsp; @if ($item->old_price) <small><del class="text-danger">{{ $item->old_price }} Bs.</del></small> @endif </h6>
                                        </div>
                                        <div class="col-md-6 text-right">
                                            <a href="{{ url('product/'.$item->slug) }}" class="btn btn-success"><small>Ver detalles</small> <span class="icofont-eye-alt"></span> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @php
                            $images = [];
                        @endphp
                    @endforeach
                </div>
            </div>
        </div>
        @endif 

        @php
            $customers = App\Models\Customer::all();
        @endphp
        @if(count($customers))
            <div class="site-section border-top border-bottom">
                <div class="container">
                    <div class="row justify-content-center text-center mb-5">
                        <div class="col-md-8">
                            <h2 class="section-heading">{{ setting('customer.title') }}</h2>
                            <p class="text-muted">{{ setting('customer.subtitle') }}</p>
                        </div>
                    </div>
                    <div class="row justify-content-center text-center">
                        <div class="col-md-7">
                            <div class="owl-carousel testimonial-carousel">
                                @foreach ($customers as $customer)
                                    <div class="review text-center">
                                        @php
                                            $rating = !empty($customer->rating) ? $customer->rating : 0;
                                        @endphp
                                        <p class="stars">
                                            @for ($i = 0; $i < $rating; $i++)
                                            <span class="icofont-star"></span>
                                            @endfor
                                            @for ($i = $rating; $i < 5; $i++)
                                            <span class="icofont-star muted"></span>
                                            @endfor
                                        </p>
                                        <h3>{{ $customer->title }}</h3>
                                        <blockquote>
                                            <p>{{ $customer->comment }}</p>
                                        </blockquote>

                                        <p class="review-user">
                                            <img src="{{ $customer->avatar ? asset('storage/'.$customer->avatar) : asset('landingpage/img/user.png') }}" alt="Image" class="img-fluid rounded-circle mb-3">
                                            <span class="d-block">
                                            <span class="text-black">{{ $customer->name }}</span>, &mdash; {{ $customer->description }}
                                            </span>
                                        </p>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif


        <div class="site-section cta-section">
            <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8 mr-auto text-center text-md-left mb-5 mb-md-0">
                    <h2>{{ setting('action.title') }}</h2>
                    <p>{{ setting('action.description') }}</p>
                </div>
                <div class="col-md-3 text-center text-md-right">
                    <p>{!! setting('action.url') !!}</p>
                </div>
            </div>
            </div>
        </div>

        @php
            $people = App\Models\Person::all();
        @endphp
        @if(count($people))
            <div class="site-section border-top border-bottom">
                <div class="container">
                    <div class="row justify-content-center text-center mb-5">
                        <div class="col-md-8">
                            <h2 class="section-heading">{{ setting('team.title') }}</h2>
                            <p class="text-muted">{{ setting('team.subtitle') }}</p>
                        </div>
                    </div>

                    <div class="row justify-content-center text-center">
                        <div class="col-md-12">
                            <div class="owl-carousel team-carousel">
                                @foreach ($people as $person)
                                    <div class="review text-center">
                                        <p class="review-team">
                                            <img src="{{ $person->avatar ? asset('storage/'.$person->avatar) : asset('landingpage/img/user.png') }}" alt="Image" class="img-fluid rounded-circle mb-3">
                                            <span class="d-block">
                                            <span class="text-black">{{ $person->name }}</span>
                                            </span>
                                        </p>
                                        <h3>{{ $person->specialty }}</h3>
                                        <blockquote>
                                            <p>{{ $person->description }}</p>
                                        </blockquote>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </main>
@endsection