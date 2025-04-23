@extends('layouts.app')

@section('content')
    <h1>Tipos de Contato</h1>
    <a href="{{ route('tipo_contato.create') }}">Criar Novo</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tipos as $tipo)
                <tr>
                    <td>{{ $tipo->id }}</td>
                    <td>{{ $tipo->nome }}</td>
                    <td>{{ $tipo->descricao }}</td>
                    <td>
                        <a href="{{ route('tipo_contato.edit', $tipo->id) }}">Editar</a>
                        <form action="{{ route('tipo_contato.destroy', $tipo->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection