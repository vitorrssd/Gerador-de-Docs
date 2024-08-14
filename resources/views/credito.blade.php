<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/credito.css') }}" rel="stylesheet">
    <title>Créditos</title>
</head>
<body>
<header class="nav-content">
    <div class="position-title">
        <h1 class="title">
            <a class="home-link" href="/">Gerador de docs</a>
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
                <i class="fa-solid fa-chevron-right"></i>
            </li>
            <li class="nav-style">
                <a href="/home/empresa" class="nav-link">
                    <i class="fa-solid fa-bars"></i>
                    Empresas
                </a>
                <i class="fa-solid fa-chevron-right"></i>
            </li>
            <li class="nav-style">
                <a href="/home/veículo" class="nav-link">
                    <i class="fa-solid fa-bars"></i>
                    Veículos
                </a>
                <i class="fa-solid fa-chevron-right"></i>
            </li>
            <li class="nav-style">
                <a href="/home/crédito" class="nav-link">
                    <i class="fa-solid fa-bars"></i>
                    créditos
                </a>
                <i class="fa-solid fa-chevron-right"></i>
            </li>
            <li class="nav-style">
                <a href="/" class="nav-link">
                    <i class="fa-solid fa-box-archive"></i>
                    Histórico
                </a>
                <i class="fa-solid fa-chevron-right"></i>
            </li>
            <i class="fa-solid fa-right-from-bracket"></i>
        </ul>
    </nav>
</header>
        <section>
    <div class="info-text-style">
        <h1 class="text-information">Obter Créditos</h1>
    </div>
            <div class="form-container">
                <div class="price-box">
                    <span class="text-price">
                        Preços Mensais
                        <br>Básico<br>
                        <hr>
                    </span>
                    <div class="number-style">
                        <p class="number">
                            $30.00
                        </p>
                        <p class="promotion">
                            50% off
                        </p>
                    </div>
                    <div class="benefits">
                        <p class="text-benefits"><i class="fa-solid fa-circle-check"></i>30 Créditos</p>
                        <p class="text-benefits"><i class="fa-solid fa-circle-check"></i>Pesquisa pessoas</p>
                        <p class="text-benefits"><i class="fa-solid fa-circle-check"></i>Pesquisa empresas</p>
                        <p class="text-benefits"><i class="fa-solid fa-circle-check"></i>Pesquisa veículos</p>
                        <p class="text-benefits"><i class="fa-solid fa-circle-check"></i>Suporte em horário comercial</p>
                    </div>
                    <input type="button" class="pay" value="Assinar">
                </div>
                <div class="price-box">
                        <span class="text-price">
                        Preços Mensais
                        <br>Plus<br>
                        <hr>
                    </span>
                    <div class="number-style">
                        <p class="number">
                            $65.00
                        </p>
                        <p class="promotion">
                            50% off
                        </p>
                    </div>
                    <div class="benefits">
                        <p class="text-benefits"><i class="fa-solid fa-circle-check"></i>60 Créditos</p>
                        <p class="text-benefits"><i class="fa-solid fa-circle-check"></i>Pesquisa pessoas</p>
                        <p class="text-benefits"><i class="fa-solid fa-circle-check"></i>Pesquisa empresas</p>
                        <p class="text-benefits"><i class="fa-solid fa-circle-check"></i>Pesquisa veículos</p>
                        <p class="text-benefits"><i class="fa-solid fa-circle-check"></i>Suporte em horário comercial</p>
                    </div>
                    <input type="button" class="pay" value="Assinar">
                </div>
                <div class="price-box">
                        <span class="text-price">
                        Preços Mensais
                        <br>Master<br>
                        <hr>
                    </span>
                    <div class="number-style">
                        <p class="number">
                            $100.00
                        </p>
                        <p class="promotion">
                            50% off
                        </p>
                    </div>
                    <div class="benefits">
                        <p class="text-benefits"><i class="fa-solid fa-circle-check"></i>Créditos Ilimitados</p>
                        <p class="text-benefits"><i class="fa-solid fa-circle-check"></i>Pesquisa pessoas</p>
                        <p class="text-benefits"><i class="fa-solid fa-circle-check"></i>Pesquisa empresas</p>
                        <p class="text-benefits"><i class="fa-solid fa-circle-check"></i>Pesquisa veículos</p>
                        <p class="text-benefits"><i class="fa-solid fa-circle-check"></i>Suporte em horário comercial</p>
                    </div>
                    <input type="button" class="pay" value="Assinar">
                </div>
            </div>
        </section>
</body>
</html>
