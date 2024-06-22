@extends('layout.homestyle')

@section('title', 'Livros')

@section('title-head', 'Seus Livros')

@section('content')
    <section class="table">
        <div>
            <table>
                <thead>
                    <tr>
                        <th>Autor</th>
                        <th>Título</th>
                        <th>Subtítulo</th>
                        <th>Edição</th>
                        <th>Editora</th>
                        <th>Ano de Publicação</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ( $books as $book) 
                        <tr>
                            <td>{{ $book->autor }}</td>
                            <td>{{ $book->titulo }}</td>
                            <td>{{ $book->subtitulo }}</td>
                            <td>{{ $book->edicao }}</td>
                            <td>{{ $book->editora }}</td>
                            <td>{{ $book->ano_publicacao }}</td>
                            <td></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection