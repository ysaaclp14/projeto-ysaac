{{-- todo Usar essa blade para atualizar o livro--}}
@extends('layout.homestyle')

@section('title', 'Editar Livro')

@section('title-head', 'Edite Seu Livro')

@section('content')

    <section class="container"> 
        <div>
            <h1>Editar Livro</h1>
            <form action="{{ route('books-update', ['id'=>$books->id]) }}" method="POST">
                @csrf
                @method('PUT')
                <label>
                    Autor:
                    <input type="text" name="autor" value="{{ $books->autor }}">
                </label>
                <label>
                    Título:
                    <input type="text" name="titulo" value="{{ $books->titulo }}">
                </label>
                <label>
                    Subtítulo:
                    <input type="text" name="subtitulo" value="{{ $books->subtitulo }}">
                </label>
                <label>
                    Edição:
                    <input type="number" name="edicao" value="{{ $books->edicao }}">
                </label>
                <label>
                    Editora:
                    <input type="text" name="editora" value="{{ $books->editora }}">
                </label>
                <label>
                    Ano de Publicação:
                    <input type="number" name="ano_publicacao" min="1" max="2024" value="{{ $books->ano_publicacao }}">
                </label>
                <button type="submit">Salvar</button>
            </form>
        </div>
    </section>
@endsection