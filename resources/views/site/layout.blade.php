<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{asset('img/favicon-16x16.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <nav class="nav-bar">
            <div class="logo">
                <a href="/">
                    <img src="{{asset('img/logo.png')}}" alt="Logo">
                </a>
            </div>
            <div class="nav-list">
                <ul>
                    <li class="nav-item"><a href="/atualizacoes" class="nav-link">Atualizações</a></li>
                    <li class="nav-item"><a href="/temporada" class="nav-link">Temporada</a></li>
                    <li class="nav-item"><a href="/perfil" class="nav-link">Perfil</a></li>
                </ul>
            </div>
            <div class="login-button">
                @if(session()->has('user'))
                    <button onclick="window.location.href='/logout'">Sair</button>
                @else
                    <button onclick="window.location.href='/login'">Entrar</button>
                @endif
            </div>
            <div class="mobile-menu-icon">
                <button onclick="menuShow()"><img class="icon" src="{{asset('img/menu_white.svg')}}" alt="Ícone de Menu"></button>
            </div>
        </nav>
        <div class="mobile-menu">
            <ul>
                <li class="nav-item"><a href="/atualizacoes" class="nav-link">Atualizações</a></li>
                <li class="nav-item"><a href="/temporada" class="nav-link">Temporada</a></li>
                <li class="nav-item"><a href="/perfil" class="nav-link">Perfil</a></li>
            </ul>
            <div class="login-button">
                @if(session()->has('user'))
                    <button onclick="window.location.href='/logout'">Sair</button>
                @else
                    <button onclick="window.location.href='/login'">Entrar</button>
                @endif
            </div>
        </div>
    </header>
    @yield('conteudo')
    @stack('scripts')
</body>
</html>