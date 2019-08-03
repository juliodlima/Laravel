@extends('layout.site')

@section('titulo', 'Matriculas')

@section('conteudo')
    <div class="container">
        <h3 class="center">Lista de Matriculas</h3>
        <div class="row">
            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Aluno</th>
                        <th>Curso</th>
                        <th>Data da Matrícula</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($registros as $registro)
                        <tr>
                        <td>{{ $registro->id }}</td>
                        <td>{{ $registro->id_aluno }}</td>
                        <td>{{ $registro->id_curso }}</td>
                        <td>{{ $registro->data_matricula }}</td>
                        <td>
                            <a class="btn blue" href="{{ route('admin.matriculas.editar',$registro->id) }}">Editar</a>
                            <a class="btn red" href="{{ route('admin.matriculas.deletar',$registro->id) }}">Deletar</a>
                        </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="row">
            <a class="btn blue" href="{{ route('admin.matriculas.adicionar') }}">Adicionar</a>
        </div>

    </div>

@endsection