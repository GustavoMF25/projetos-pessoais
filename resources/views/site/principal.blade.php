@extends('site.layouts.modelo')
@section('title', 'Home')
@section('conteudo')
    <header class="masthead">
        <div class="container">
            <div class="masthead-subheading">Seja bem vindo!</div>
            <div class="masthead-heading text-uppercase">Sistema de Super Gestão</div>
            {{-- <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Tell Me More</a> --}}
        </div>
    </header>

    <div class="content">
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Services</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">E-Commerce</h4>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam
                            architecto quo inventore harum ex magni, dicta impedit.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Responsive Design</h4>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam
                            architecto quo inventore harum ex magni, dicta impedit.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Web Security</h4>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam
                            architecto quo inventore harum ex magni, dicta impedit.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-secondary">
            <div class="row">
                <div class="col-5 text-center d-flex align-items-center justify-content-center">

                    <div class="">
                        <h2><strong>Contato</strong></h2>
                        <img class="img-fluid" src=" {{ asset('img/logo-icon.png') }}" alt="">
                        <h1 class="text-uppercase"><strong>Sistema de Super Gestão</strong></h1>
                    </div>
                </div>
                <div class="col-lg-6">

                    <h2>Contato</h2>

                    <p>
                        Caso tenha qualquer dúvida por favor entre em contato com nossa equipe pelo
                        formulário abaixo.
                    </p>
                    @component('site.layouts._components.form_contato')
                    @endcomponent

                </div>
            </div>
        </section>

    </div>
    <!-- /.content -->
@endsection
