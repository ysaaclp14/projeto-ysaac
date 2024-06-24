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
                    <input type="text" name="autor">
                </label>
                <label>
                    Título:
                    <input type="text" name="titulo">
                </label>
                <label>
                    Subtítulo:
                    <input type="text" name="subtitulo">
                </label>
                <label>
                    Edição:
                    <input type="number" name="edicao">
                </label>
                <label>
                    Editora:
                    <input type="text" name="editora">
                </label>
                <label>
                    Ano de Publicação:
                    <input type="number" name="ano_publicacao" min="1" max="2024">
                </label>
                <button type="submit">Cadastrar Livro</button>
            </form>
        </div>
    </section>
@endsection