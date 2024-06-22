@extends('layout.homestyle')

@section('title', 'Home')

@section('title-head', 'Painel')

@section('content')
    <section class="start">
        <div>
            <h1>Bem Vindo, {{ $userName }}</h1>
            <p>Aqui é a sua biblioteca, onde você pode cadastrar seus livros</p>
            <p>Se divirta</p>
            <img src="#" alt="biblioteca?">
        </div>
    </section>
    {{-- <section class="table">
        <div>
            
        </div>
    </section> --}}
@endsection