@extends('layout')

@section('title', 'Detalhes da Tarefa')

@section('content')
<h1>Detalhes da Tarefa</h1>

<p><strong>ID:</strong> {{ $tarefa->id }}</p>
<p><strong>Título:</strong> {{ $tarefa->titulo }}</p>

<a href="{{ route('tarefas.index') }}" class="btn btn-secondary">Voltar</a>

<hr>

<!-- Adição espcial da area de comentarios para a atividade -->
<h3>Comentários</h3>
<ul>
    @foreach($tarefa->comentarios as $comentario)
        <li>{{ $comentario->conteudo }} - <small>{{ $comentario->created_at->format('d/m/Y H:i') }}</small></li>
    @endforeach
</ul>

<form action="{{ route('comentarios.store', $tarefa->id) }}" method="POST">
    @csrf
    <textarea name="conteudo" placeholder="Escreva seu comentário" required class="form-control mb-2"></textarea>
    <button type="submit" class="btn btn-primary">Adicionar Comentário</button>
</form>
@endsection
