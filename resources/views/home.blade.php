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
    <title>Home</title>
</head>
<body>
<header class="nav-content">
    <div class="position-title">
        <h1 class="title">
            <a class="home-link">Gerador de docs</a>
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
   <div class="dark-mode">
       <h3 class="dark-title">Gerar</h3>
        <button type="button" class="btn-menu" onclick="show()">
         Menu
        </button>
   </div>
              <section class="account">
                  <i class="fa-solid fa-folder-open"></i>                           
                   <h2 class="text-account">Créditor totais</h2>
                        <h3 class="number">99.00</h3>
                     </section>
                    <section class="graphic-content">
                             <div class="graphic-style">
                                 <div class="graphic-icon">
                                 <i class="fa-solid fa-user"></i>
                                 </div>
                                 <h3 class="graphic-text">
                                          Pessoas
                                    </h3>
                                 <div class="graphic">
                                     <div class="graphic-color"></div>
                                 </div>
                             </div>
                             <div class="graphic-style">
                                 <div class="graphic-icon">
                                 <i class="fa-regular fa-building"></i>
                                 </div>
                                 <h3 class="graphic-text">
                                      Empresas
                                  </h3>
                                 <div class="graphic">
                                     <div class="graphic-color"></div>
                                 </div>
                             </div>
                             <div class="graphic-style">
                                 <div class="graphic-icon">
                                 <i class="fa-solid fa-car"></i>
                                 </div>
                                 <h3 class="graphic-text">
                                 Veículos
                              </h3>
                                 <div class="graphic">
                                     <div class="graphic-color"></div>
                                 </div>
                             </div>
                    </section>
    <script>
     function show() {
    // Seleciona todos os elementos com as classes especificadas
    const elements = document.querySelectorAll('.nav-content, .nav-link, .nav-style');
    
    // Itera sobre cada elemento e alterna a classe 'show'
    elements.forEach(element => {
        element.classList.toggle('show');
    });
}
    </script>
</body>
</html>
