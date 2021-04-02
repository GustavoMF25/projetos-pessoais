<!-- .navbar -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a href="{{ route('site.index') }}" class="navbar-brand">
            <img src="{{ asset('img/logo-icon.png') }}" width="40px" alt="AdminLTE Logo"
                class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text text-nav">SSG - Sistema de Super Gestão</span>
        </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
            data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
            aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars ml-1"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
                <li class="nav-item">
                    <a href="{{ route('site.index') }}" class="text-nav">Home</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('site.contato') }}" class="text-nav">Contato</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('site.sobrenos') }}" class="text-nav">Sobre-Nos</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
