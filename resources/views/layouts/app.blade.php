<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'RDO') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sidebar.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div id="app" class="d-flex">
        <!-- Botão de Toggle da Sidebar fora do Sidebar -->
        <div class="toggle-container">
            <input type="checkbox" id="checkbox">
            <label for="checkbox" class="toggle">
                <div class="bars" id="bar1"></div>
                <div class="bars" id="bar2"></div>
                <div class="bars" id="bar3"></div>
            </label>
        </div>

        <!-- Sidebar -->
        <nav class="sidebar">
            <div class="container py-4">
                <!-- Botões da Sidebar (somente se logado) -->
                @auth
                <div class="button-container d-flex flex-column">
                    <a href="{{ route('users.index') }}" class="btn btn-primary mb-2">Usuários</a>
                    <a href="{{ route('rdos.index') }}" class="btn btn-primary mb-2">RDOs</a>
                    <a href="{{ route('obras.index') }}" class="btn btn-primary mb-2">Obras</a>
                    <a href="{{ route('equipamentos.index') }}" class="btn btn-primary mb-2">Equipamentos</a>
                    <a href="{{ route('mao_obras.index') }}" class="btn btn-primary mb-2">Mão de Obra</a>
                </div>
                @endauth
            </div>
        </nav>

        <!-- Conteúdo Principal -->
        <main class="content flex-grow-1 py-4">
            <!-- Barra superior com autenticação -->
            <div class="navbar navbar-fixed-right">
                <div class="container-fluid">
                    <div class="d-flex justify-content-between align-items-center w-100">
                        <!-- Logo dentro da Navbar -->
                        <div class="navbar-logo" id="logo-navbar">
                            <a class="navbar-brand" href="{{ url('/') }}">
                                <button id="alfaid-logo-button">
                                    <img src="{{ asset('img/navbar/Vector.png') }}" alt="Logo" class="logo-image">
                                </button>
                            </a>
                        </div>

                        @auth
                        <div class="dropdown">
                            <button class="perfil" id="userDropdown" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="fas fa-user"></i> <!-- Ícone de usuário -->
                                <label class="perfil-label">{{ Auth::user()->name }}</label>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                            </div>
                        </div>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                        @endauth

                        @guest
                        <a href="{{ route('login') }}" class="btn btn-outline-primary mr-2">{{ __('Login') }}</a>
                        @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn btn-outline-success">{{ __('Cadastrar-se') }}</a>
                        @endif
                        @endguest
                    </div>
                </div>
            </div>

            @yield('content')
        </main>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Script para funcionalidade da Sidebar -->
    <script>
        // Alternar visibilidade da sidebar
        document.getElementById('checkbox').addEventListener('click', function () {
            document.querySelector('.sidebar').classList.toggle('collapsed');
            document.querySelector('.content').classList.toggle('collapsed');
        });

        let prevScrollPos = window.pageYOffset; // Posição de rolagem anterior

        // Função onscroll unificada
        window.onscroll = function () {
            let currentScrollPos = window.pageYOffset; // Posição de rolagem atual

            // Lógica para o botão "perfil"
            let perfilButton = document.querySelector('.perfil');
            if (prevScrollPos > currentScrollPos) {
                perfilButton.style.top = "10px"; // Exibe o botão ao rolar para cima
            } else {
                perfilButton.style.top = "-50px"; // Esconde o botão ao rolar para baixo
            }

            // Lógica para a logo "logo-navbar"
            let logoNavbar = document.querySelector('#logo-navbar');
            if (prevScrollPos > currentScrollPos) {
                logoNavbar.style.top = "10px"; // Exibe a logo ao rolar para cima
            } else {
                logoNavbar.style.top = "-50px"; // Esconde a logo ao rolar para baixo
            }

            // Atualiza a posição de rolagem anterior
            prevScrollPos = currentScrollPos;
        };
    </script>
</body>

</html>
