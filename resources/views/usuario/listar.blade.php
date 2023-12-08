@extends('layout.main')

@section('title', 'Home')
    
@section('content')

@php
    $modelo     = 'usuario';
    $cadastrar  = 'usuario.criar';
    $editar     = 'usuario.editar';
    $excluir    = 'usuario.excluir';
    $titulo     = 'Usuário';
@endphp

    @include('componentes.titulo')
    @include('componentes.mensagem')

    @include('componentes.botao-cadastrar')
    
    <div class="card">
        <div class="card-body">
            <table id="table" class="table datatable" role="grid">
                <caption>List of Users</caption>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($ListaUsuarios as $Usuario)
                        <tr>
                            <td>{{ $Usuario->id }}</td>
                            <td>{{ $Usuario->name }}</td>
                            <td>
                                <div class="row justify-content-center">
                                    @include('componentes.acao-tabela', ['id' => $Usuario->id])
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
