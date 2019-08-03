@extends('layout.site')

@section('titulo', 'Matriculas')

@section('conteudo')
    <div class="container">
        <h3 class="center">Editando Matrículas</h3>
        <div class="row">
        <form class="" action="{{ route('admin.matriculas.atualizar',$registro->id) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="put">
            @include('admin.matriculas._form')

            <button class="btn deep-orange">Atualizar</button>

        </form>
        </div>

    </div>

@endsection