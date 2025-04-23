@extends('layouts.app')

@section('content')
    <h1>Criar Tipo de Contato</h1>
    <form action="{{ route('tipo_contato.store') }}" method="POST">
        @csrf
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required>
        <label for="descricao">Descrição:</label>
        <textarea name="descricao" id="descricao" required></textarea>
        <button type="submit">Salvar</button>
    </form>
@endsection