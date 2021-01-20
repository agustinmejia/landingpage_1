<header class="site-navbar js-sticky-header site-navbar-target" role="banner">

    <div class="container">
        <div class="row align-items-center">

        <div class="col-6 col-lg-2">
            <h1 class="mb-0 site-logo"><a href="{{ url('') }}" class="mb-0"> <img src="{{ $site_logo }}" width="50px" alt=""> {{ setting('site.title') }}</a></h1>
        </div>

        @php
            $uri = $_SERVER['REQUEST_URI'];
        @endphp
        <div class="col-12 col-md-10 d-none d-lg-block">
            <nav class="site-navigation position-relative text-right" role="navigation">
                <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                    <li class="@if($uri == '/') active @endif"><a href="{{ url('') }}" class="nav-link">Inicio</a></li>
                    <li class="@if($uri == '/sections') active @endif"><a href="{{ url('sections') }}" class="nav-link">Acerca de nosotros</a></li>
                    {{-- <li class="has-children">
                        <a href="#" class="nav-link">Blog</a>
                        <ul class="dropdown">
                            <li><a href="blog.html" class="nav-link">Blog</a></li>
                            <li><a href="blog-single.html" class="nav-link">Blog Sigle</a></li>
                        </ul>
                    </li> --}}
                    <li class="@if($uri == '/contact') active @endif"><a href="{{ url('contact') }}" class="nav-link">Contáctanos</a></li>
                </ul>
            </nav>
        </div>


        <div class="col-6 d-inline-block d-lg-none ml-md-0 py-3" style="position: relative; top: 3px;">

            <a href="#" class="burger site-menu-toggle js-menu-toggle" data-toggle="collapse"
            data-target="#main-navbar">
            <span></span>
            </a>
        </div>

        </div>
    </div>

</header>