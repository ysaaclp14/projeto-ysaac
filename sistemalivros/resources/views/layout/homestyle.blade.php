<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="/css/homestyle.css">
    <title>@yield('title')</title>
</head>
<body>
    <header class="header">
        <nav class="navbar">
            <h2>Painel</h2>
            <ul>
                <li><a href="">Livros</a></li>
                <li><a href="">Cadastrar Livros</a></li>
                <li><a href="{{ route('destroy') }}">Sair</a></li>
            </ul>
        </nav>
    </header>
    <section>

    </section>
    @yield('content')
</body>
</html>