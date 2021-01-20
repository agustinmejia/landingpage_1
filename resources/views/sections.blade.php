@extends('layouts.master')

@section('content')
    <main id="main">
        <div class="hero-section inner-page">
            <div class="wave">
            
            <svg width="1920px" height="265px" viewBox="0 0 1920 265" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="Apple-TV" transform="translate(0.000000, -402.000000)" fill="#FFFFFF">
                        <path d="M0,439.134243 C175.04074,464.89273 327.944386,477.771974 458.710937,477.771974 C654.860765,477.771974 870.645295,442.632362 1205.9828,410.192501 C1429.54114,388.565926 1667.54687,411.092417 1920,477.771974 L1920,667 L1017.15166,667 L0,667 L0,439.134243 Z" id="Path"></path>
                    </g>
                </g>
            </svg>

            </div>

        <div class="container">
            <div class="row align-items-center">
            <div class="col-12">
                <div class="row justify-content-center">
                <div class="col-md-7 text-center hero-text">
                    <h1 data-aos="fade-up" data-aos-delay="">{{ setting('sections.title') }}</h1>
                    <p class="mb-5" data-aos="fade-up"  data-aos-delay="100">{{ setting('sections.description') }}</p>  
                </div>
                </div>
            </div>
            </div>
        </div>
        
        </div>

        <div class="site-section pb-0">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-4 mr-auto">
                        <h2 class="mb-4">{{ setting('sections.title_1') }}</h2>
                        <p class="mb-4">{{ setting('sections.description_1') }}</p>
                    </div>
                    <div class="col-md-6" data-aos="fade-left">
                        <img src="{{ setting('sections.image_1') ? asset('storage/'.setting('sections.image_1')) : asset('landingpage/img/undraw_svg_1.svg') }}" alt="Image" class="img-fluid">
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
                        <img src="{{ setting('sections.image_2') ? asset('storage/'.setting('sections.image_2')) : asset('landingpage/img/undraw_svg_2.svg') }}" alt="Image" class="img-fluid">
                    </div>
                </div>
            </div>
        </div> <!-- .site-section -->

        <div class="site-section pb-0">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-4 mr-auto">
                        <h2 class="mb-4">{{ setting('sections.title_3') }}</h2>
                        <p class="mb-4">{{ setting('sections.description_3') }}</p>
                    </div>
                    <div class="col-md-6" data-aos="fade-left">
                        <img src="{{ setting('sections.image_3') ? asset('storage/'.setting('sections.image_3')) : asset('landingpage/img/undraw_svg_3.svg') }}" alt="Image" class="img-fluid">
                    </div>
                </div>
            </div>
        </div> <!-- .site-section -->

        <div class="site-section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-4 ml-auto order-2">
                        <h2 class="mb-4">{{ setting('sections.title_4') }}</h2>
                        <p class="mb-4">{{ setting('sections.description_4') }}</p>
                    </div>
                    <div class="col-md-6" data-aos="fade-right">
                        <img src="{{ setting('sections.image_4') ? asset('storage/'.setting('sections.image_4')) : asset('landingpage/img/undraw_svg_4.svg') }}" alt="Image" class="img-fluid">
                    </div>
                </div>
            </div>
        </div> <!-- .site-section -->

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

    </main>
@endsection