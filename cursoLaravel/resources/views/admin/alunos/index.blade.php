@extends('layout.site')

@section('titulo', 'Alunos')

@section('conteudo')
    <div class="container">
        <h3 class="center">Lista de Alunos</h3>
        <div class="row">
            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nome</th>
                        <th>Telefone</th>
                        <th>Email</th>
                        <th>Data de Nascimento</th>
                        <th>foto</th>
                        <th>Sexo</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($registros as $registro)
                        <tr>
                        <td>{{ $registro->id }}</td>
                        <td>{{ $registro->nome }}</td>
                        <td>{{ $registro->tel }}</td>
                        <td>{{ $registro->email }}</td>
                        <td>{{ $registro->data_nascimento }}</td>
                        <td><img width="90" height="90" src="{{ asset($registro->foto) }}" alt="{{ $registro->foto }}"></td>
                        <td>{{ $registro->sexo }}</td>
                        <td>
                            <a class="btn blue" href="{{ route('admin.alunos.editar',$registro->id) }}">Editar</a>
                            <a class="btn red" href="{{ route('admin.alunos.deletar',$registro->id) }}">Deletar</a>
                        </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="row">
            <a class="btn blue" href="{{ route('admin.alunos.adicionar') }}">Adicionar</a>
        </div>

    </div>

@endsection