@extends('site.layouts.modelo')
@section('title', $title)


@section('conteudo')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"> Contato</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('site.index') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Contato</a></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container">


            
                <div class="row">
                    <div class="col-5 text-center d-flex align-items-center justify-content-center">

                        <div class="">
                            <h2><strong>Contato</strong></h2>
                            <img class="img-fluid" src=" {{ asset('img/ssg.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-7">

                        {{-- COMPONENTE FORMULARIO - CONTATO --}}
                        @component('site.layouts._components.form_contato', ['color_button' => 'primary'])
                        <h2>Contato</h2>
                            <p>A nossa equipe analisará a sua mensagem e retornaremos o mais brevemente possível.</p>
                            <p>Nosso tempo de resposta é de 48 horas</p>
                        @endcomponent



                    </div>
                </div>

            <!-- /.container-fluid -->
        </div>
    </div>
    <!-- /.content -->
@endsection
