@extends('layout.site')

@section('titulo', 'Matriculas')

@section('conteudo')
    <div class="container">
        <h3 class="center">Adicionar Matrículas</h3>
        <div class="row">
        <form class="" action="{{ route('admin.matriculas.salvar') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            @include('admin.matriculas._form')

            <button class="btn deep-orange">Salvar</button>

        </form>
        </div>

    </div>

@endsection