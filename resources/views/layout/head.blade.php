<!doctype html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport"
content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
crossorigin="anonymous" referrerpolicy="no-referrer" />
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link rel="shortcut icon" href="{{ asset('img/docs.png') }}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<title>@yield('titulo')</title>
</head>
<header class="nav-content">
    <div class="position-title">
<h1 class="title">
    <a class="home-link" href="/">Gerador de docs
    <i class="fa-solid fa-right-from-bracket" href="/"></i>
    </a>
</h1>
</div>
<div class="user">
    <div class="img">
        <img class="img-size" src="https://i.pinimg.com/564x/91/e2/5a/91e25a327a1b147ea7dea2d65ffb4027.jpg" alt="">
    </div>
    <h2 class="user-style">User</h2>
    <h3 class="user-name">Administrador</h3>
</div>
<nav class="nav-position">
<ul class="nav-list">
<li class="nav-style">
    <a href="/home/pessoa" class="nav-link">
        <i class="fa-solid fa-bars"></i>
        Pessoas
    </a>
</li>
<li class="nav-style">
    <a href="/home/empresa" class="nav-link">
        <i class="fa-solid fa-bars"></i>
        Empresas
    </a>
</li>
<li class="nav-style">
    <a href="/home/veículo" class="nav-link">
        <i class="fa-solid fa-bars"></i>
        Veículos
    </a>
</li>
</ul>
</nav>
</header>
<body>
    @yield('content')
</body>
</html>