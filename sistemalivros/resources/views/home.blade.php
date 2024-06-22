@extends('layout.homestyle')

@section('title', 'Home')

@section('title-head', 'Painel')

@section('content')
    <section class="start">
        <div>
            <h1>Bem Vindo, {{ $userName }}</h1>
            <p>Aqui é a sua biblioteca, onde você pode cadastrar seus livros. Com nosso sistema intuitivo, você pode adicionar novos livros facilmente, inserindo detalhes como título, autor, editora e até mesmo alterar alguma informação ou deletar o livro criado.</p>
            <p>Se divirta</p>
        </div>
    </section>
    {{-- <section class="table">
        <div>
            
        </div>
    </section> --}}
@endsection