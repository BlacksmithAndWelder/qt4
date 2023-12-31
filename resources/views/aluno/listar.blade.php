@extends('layout.main')

@section('title', 'Home')
    
@section('content')

@php
    $modelo     = 'aluno';
    $cadastrar  = 'aluno.criar';
    $editar     = 'aluno.editar';
    $excluir    = 'aluno.excluir';
    $titulo     = 'Aluno';
@endphp

    @include('componentes.titulo')
    @include('componentes.mensagem')

    @include('componentes.botao-cadastrar')
    
    <div class="card">
        <div class="card-body">
            <table id="table" class="table datatable">
                <caption>Table displaying a list of students</caption>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Class</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($ListaAluno as $Aluno)
                        <tr>
                            <td>{{ $Aluno->id }}</td>
                            <td>{{ $Aluno->nome . ' ' . $Aluno->sobrenome }}</td>
                            <td>{{ $Aluno->turma->escola->nome . '
                                - Team ' . $Aluno->turma->equipe . ',
                                Room: ' . $Aluno->turma->sala }}</td>
                            <td>
                                <div class="row justify-content-center">
                                    @include('componentes.acao-tabela', ['id' => $Aluno->id])
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>



@include('componentes.modal')

@endsection
