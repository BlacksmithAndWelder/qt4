@extends('layout.main')

@section('title', 'Home')
    
@section('content')

@php
    $modelo     = 'suporte-tarefa-status';
    $cadastrar  = 'suporte-tarefa-status.criar';
    $editar     = 'suporte-tarefa-status.editar';
    $excluir    = 'suporte-tarefa-status.excluir';
    $titulo     = 'Suporte Tarefa Status';
@endphp

    @include('componentes.titulo')
    @include('componentes.mensagem')

    @include('componentes.botao-cadastrar')
    
    <div class="card">
        <div class="card-body">
            <table id="table" class="table datatable">
                <caption>List of Suporte Tarefa Status</caption>
                <thead>
                    <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th class="text-center">Ação</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($ListaSuporteTarefaStatus as $SuporteTarefaStatus)
                    <tr>
                        <td>{{ $SuporteTarefaStatus->id }}</td>
                        <td>{{ $SuporteTarefaStatus->nome }}</td>
                        <td>
                        <div class="row justify-content-center">
                            @include('componentes.acao-tabela', ['id' => $SuporteTarefaStatus->id])
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
