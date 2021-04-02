@extends('site.layouts.modelo')
@section('title', $title)


@section('conteudo')

    <!-- Main content -->
    <div class="content mt-5">
        <div class="container pt-4">
            <div class="row">
                <div class="col-md-6 col-sm-12 text-center d-flex align-items-center justify-content-center">

                    <div class="">
                        <h2><strong>Contato</strong></h2>
                        <img class="img-fluid" src=" {{ asset('img/ssg.png') }}" alt="">
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">

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
