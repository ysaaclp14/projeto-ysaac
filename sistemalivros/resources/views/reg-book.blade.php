@extends('layout.homestyle')

@section('title', 'Cadastrar Livro')

@section('title-head', 'Cadastre Seus Livros')

@section('content')
    <div class="erro">
        @foreach ($errors->all() as $erro)
            <p>{{ $erro }}</p>
        @endforeach
    </div>

    <section class="container"> 
        <div>
            <h1>Cadastrar Livro</h1>
            <form action="{{ route('reg-book') }}" method="POST">
                @csrf
                <label>
                    Autor:
                    <input type="text" name="autor" placeholder="Ex: Maria João">
                </label>
                <label>
                    Título:
                    <input type="text" name="titulo" placeholder="Ex: Uma História de José">
                </label>
                <label>
                    Subtítulo:
                    <input type="text" name="subtitulo" placeholder="Ex: E Suas Aventuras">
                </label>
                <label>
                    Edição:
                    <input type="number" name="edicao" min="1" placeholder="Ex: 1">
                </label>
                <label>
                    Editora:
                    <input type="text" name="editora" placeholder="Ex: Moderna">
                </label>
                <label>
                    Ano de Publicação:
                    <input type="number" name="ano_publicacao" min="1" max="2024" placeholder="Ex: 2024">
                </label>
                <button type="submit">Cadastrar Livro</button>
            </form>
        </div>
    </section>
@endsection