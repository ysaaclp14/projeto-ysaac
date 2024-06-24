@extends('layout.main')

@section('title', 'Login')

@section('content')
<div class="erro">
    @foreach ($errors->all() as $erro)
        <p>{{ $erro }}</p>
    @endforeach
</div>
<div class="container">
    <h1>Login</h1>
    <form action="{{route('store')}}" method="POST">
        @csrf
        <label>
            Email:
            <input type="email" name="email" placeholder="Ex: email@gmail.com">
        </label>
        <label>
            Senha:
            <input type="password" name="password" placeholder="Ex: 12345">
        </label>
        <button type="submit">Enviar</button>
    </form>
        <a href="{{ route('register') }}">Não tem uma conta?</a>
    </div>

@endsection