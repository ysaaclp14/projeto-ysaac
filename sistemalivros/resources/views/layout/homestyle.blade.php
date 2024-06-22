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
            <div>
                <h2>@yield('title-head')</h2>
                <img src="/img/library_books.png" alt="book">
            </div>
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('books') }}">Livros</a></li>
                <li><a href="{{ route('reg-book') }}">Cadastrar Livros</a></li>
                <li><a href="{{ route('destroy') }}">Sair</a></li>
            </ul>
        </nav>
    </header>
    <section>

    </section>
    @yield('content')
</body>
</html>