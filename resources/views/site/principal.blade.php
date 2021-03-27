@extends('site.layouts.modelo')
@section('title', 'Home')
@section('conteudo')
    <div class="content-header">
        <div class="container">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"> Principal</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('site.index') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Menu</a></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container">


            <div class="card">
                <div class="card-body">
                    <div class="row">

                        <div class="col-lg-6"></div>
                        <div class="col-lg-6">
                            <div class="card  bg-primary">
                                <div class="card-body">
                                    <h2>Contato</h2>

                                    <p>
                                        Caso tenha qualquer dúvida por favor entre em contato com nossa equipe pelo
                                        formulário abaixo.
                                    </p>
                                    @component('site.layouts._components.form_contato')
                                    @endcomponent
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6"></div>
                        <div class="col-lg-6"></div>
                    </div>


                </div>
            </div><!-- /.container-fluid -->
        </div>
    </div>
    <!-- /.content -->
    </div>
@endsection
