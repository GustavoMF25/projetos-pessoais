<!-- Navbar -->
<nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
        <a href="{{ route('site.index') }}" class="navbar-brand">
            <img src="{{ asset('img/logo-icon.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                style="opacity: .8">
            <span class="brand-text font-weight-light">SSG - Sistema de Super Gestão</span>
        </a>

        <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse order-3" id="navbarCollapse">
            <!-- Left navbar links -->
            <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
                <li class="nav-item">
                    <a href="{{ route('site.index') }}" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('site.contato') }}" class="nav-link">Contato</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('site.sobrenos') }}" class="nav-link">Sobre-Nos</a>
                </li>
            </ul>
            <!-- Right navbar links -->
        </div>
    </div>
</nav>
<!-- /.navbar -->
