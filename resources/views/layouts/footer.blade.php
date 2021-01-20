<footer class="footer bg-dark text-white" role="contentinfo">
    <div class="container">
        <div class="row">
        <div class="col-md-5 mb-4 mb-md-0">
            <h2 class="text-white">{{ setting('site.title') }}</h2>
            <p>{{ setting('site.slogan') }}</p>
            <p class="social">
                @if (setting('social.facebook'))
                    <a target="_blank" href="{{ setting('social.facebook') }}"><span class="icofont-facebook"></span></a>
                @endif
                @if (setting('social.twitter'))
                    <a target="_blank" href="{{ setting('social.twitter') }}"><span class="icofont-twitter"></span></a>
                @endif
                @if (setting('social.instagram'))
                    <a target="_blank" href="{{ setting('social.instagram') }}"><span class="icofont-instagram"></span></a>
                @endif
                @if (setting('social.whatsapp'))
                    <a target="_blank" href="https://api.whatsapp.com/send?phone={{ setting('social.whatsapp') }}"><span class="icofont-whatsapp"></span></a>
                @endif
                @if (setting('social.youtube'))
                    <a target="_blank" href="{{ setting('social.youtube') }}"><span class="icofont-youtube"></span></a>
                @endif
                @if (setting('social.github'))
                    <a target="_blank" href="{{ setting('social.github') }}"><span class="icofont-github"></span></a>
                @endif
                @if (setting('social.linkedin'))
                    <a target="_blank" href="{{ setting('social.linkedin') }}"><span class="icofont-linkedin"></span></a>
                @endif
            </p>
        </div>
        <div class="col-md-6 ml-auto">
            <div class="row site-section pt-0">
            <div class="col-md-4 mb-4 mb-md-0">
                <h3 class="text-white">Navigation</h3>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-white">Pricing</a></li>
                    <li><a href="#" class="text-white">Features</a></li>
                    <li><a href="#" class="text-white">Blog</a></li>
                    <li><a href="#" class="text-white">Contact</a></li>
                </ul>
            </div>
            <div class="col-md-4 mb-4 mb-md-0">
                <h3 class="text-white">Services</h3>
                <ul class="list-unstyled">
                <li><a href="#" class="text-white">Team</a></li>
                <li><a href="#" class="text-white">Collaboration</a></li>
                <li><a href="#" class="text-white">Todos</a></li>
                <li><a href="#" class="text-white">Events</a></li>
                </ul>
            </div>
            <div class="col-md-4 mb-4 mb-md-0">
                <h3 class="text-white">Downloads</h3>
                <ul class="list-unstyled">
                <li><a href="#" class="text-white">Get from the App Store</a></li>
                <li><a href="#" class="text-white">Get from the Play Store</a></li>
                </ul>
            </div>
            </div>
        </div>
        </div>

        <div class="row justify-content-center text-center">
        <div class="col-md-7">
            <p class="copyright">&copy; Copyright {{ date('Y') }} <b>{{ setting('site.title') }}</b></p>
            <div class="credits">
                Todos los derechos reservados
            </div>
        </div>
        </div>

    </div>
</footer>