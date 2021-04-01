<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SSG | @yield('title')</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('css/site/default.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/dist/css/adminlte.min.css') }}">

</head>

<body class="hold-transition layout-top-nav">
    <div class="wrapper">

        @include('site.layouts._partials.navbar') {{-- Include do menu do TOPO --}}
        
        <div class="content-wrapper">
            @yield('conteudo')
            {{-- CONTEUDO CONTIDO NA VIEW --}}
        </div>
        <footer class="main-footer">
            <!-- To the right -->
            <div class="float-right d-none d-sm-inline">
                Você pode tudo!
            </div>
            <!-- Default to the left -->
            <strong>Copyright &copy; 2021 </strong> Todos os direitos reservados.

        </footer>
    </div>
    </div>
    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('vendor/dist/js/adminlte.min.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('vendor/dist/js/demo.js') }}"></script>
</body>

</html>
