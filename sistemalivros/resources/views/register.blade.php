@extends('layout.main')

@section('title', 'Cadastro')

@section('content')
    <div class="erro">
        @foreach ($errors->all() as $erro)
             <p>{{ $erro }}</p>
        @endforeach
    </div>
    <div class="container">
        <h1>Cadastro</h1>
        <form action="{{route('register')}}" method="POST">
            @csrf
            <label>
                Nome:
                <input type="text" name="name" value="{{old('name')}}">
            </label>
            <label>
                Email:
                <input type="email" name="email" value="{{old('email')}}">
            </label>
            <label>
                Senha:
                <input type="password" name="password">
            </label>
            <label>
                Confirmar Senha:
                <input type="password" name="password_confirmation">
            </label>
            <button type="submit">Cadastrar</button>
        </form>
        <a href="{{ route('login') }}">Já tem uma conta?</a>
    </div>
    
@endsection