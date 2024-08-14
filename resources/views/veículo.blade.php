
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
    <link href="{{ asset('css/veiculos.css') }}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Veículos</title>
</head>
<body>
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
      <section>
          <div class="information">
              <h1 class="text-information">
              <i class="fa-solid fa-folder-open" id="icon-docs"></i>
              Gerador de documentos de Veículo (Modelo, Marca, Ano, Etc)
              <button type="button" class="btn-menu" onclick="showVehicle()">
                 Menu
               </button>
               </h1>
          </div>
          <div class="option-vehicle">
                        <h2 class="info-text2">Opções</h2>
              <input class="button-vehicle" type="button" value="Gerar" onclick="show()">
              <script>
                  function show() {
                      // Faz uma solicitação AJAX para obter novos dados
                      $.ajax({
                          url: '/veículo/ajax',
                          method: 'GET',
                          success: function(data) {
                              // Atualiza o conteúdo da página com os novos dados
                              $('#info-marca').text(data.Marca);
                              $('#info-cor').text(data.Cor);
                              $('#info-renavam').text(data.Renavam);
                              $('#info-placa').text(data.Placa);
                              $('#info-ano').text(data.Ano);
                              $('#info-modelo').text(data.Modelo);
                          },
                          error: function() {
                              alert('Ocorreu um erro ao tentar obter novos dados.');
                          }
                      });
                  }
              </script>
      </section>
    <div class="form-container">
            <div class="input-position">
            <h1 class="input-text">Marca</h1>
            <div class="input-style">
                <span id="info-marca" class="text-input-style">
                        </span>
                <i class="fa-solid fa-copy"></i>
            </div>
        </div>
        <div class="input-position">
            <h1 class="input-text">Modelo</h1>
            <div class="input-style">
                <span  id="info-modelo" class="text-input-style">
                      </span>
                <i class="fa-solid fa-copy"></i>
            </div>
        </div>
        <div class="input-position">
            <h1 class="input-text">Ano</h1>
            <div class="input-style">
                <span  id="info-ano" class="text-input-style">
                        </span>
                <i class="fa-solid fa-copy"></i>
            </div>
        </div>
        <div class="input-position">
            <h1 class="input-text">RENAVAM</h1>
            <div class="input-style">
                <span  id="info-renavam" class="text-input-style">
                        </span>
                <i class="fa-solid fa-copy"></i>
            </div>
        </div>
        <div class="input-position">
            <h1 class="input-text">Placa</h1>
            <div class="input-style">
                <span  id="info-placa" class="text-input-style">
                        </span>
                <i class="fa-solid fa-copy"></i>
            </div>
        </div>
        <div class="input-position">
            <h1 class="input-text">Cor</h1>
            <div class="input-style">
                <span  id="info-cor" class="text-input-style">
                        </span>
                <i class="fa-solid fa-copy"></i>
            </div>
        </div>
    </div><!--end form-container-->
</body>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var copyIcons = document.querySelectorAll('.fa-copy');
        var textElements = document.querySelectorAll('.text-input-style');
        if (copyIcons.length !== textElements.length) {
            console.warn('Número de ícones de cópia e elementos de texto não coincidem.');
        }
        copyIcons.forEach(function(copyIcon, index) {
            copyIcon.addEventListener('click', function() {
                if (index < textElements.length) {
                    var textToCopy = textElements[index].textContent;

                    navigator.clipboard.writeText(textToCopy)
                        .then(function() {
                            alert('Texto copiado: ' + textToCopy);
                        })
                        .catch(function(err) {
                            alert('Erro ao copiar o texto: ' + err);
                        });
                } else {
                    alert('Nenhum texto encontrado para copiar');
                }
            });
        });
    });
      function showVehicle() {
    // Seleciona todos os elementos com as classes especificadas
    const elements = document.querySelectorAll('.nav-content, .nav-link, .nav-style');
    
    // Itera sobre cada elemento e alterna a classe 'show'
    elements.forEach(element => {
        element.classList.toggle('show');
    });
}
</script>
</html>
