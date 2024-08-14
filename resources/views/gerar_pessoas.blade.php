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
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Pessoa</title>
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
            <div class="info-text-style">
                <h1 class="text-information">
                <i class="fa-solid fa-folder-open" id="icon-docs">
                </i>
               Gerador de documentos de empresas (Nome, CNPJ, ETC.)
                 <button type="button" class="btn-menu" onclick="show()">
                 Menu
               </button>
                </h1>
            </div>
            <div class="options">
                               <h2 class="info-text2">Opções</h2>
                <input class="button-female" type="button" value="Gerar Feminino" onclick="showFemale()">
                <input class="button-male" type="button" value="Gerar Masculino" onclick="showMale()">
                <script>
              function showFemale() {
                $.ajax({
                    url: '/mulher/ajax',
                    method: 'GET',
                    success: function(data) {
                        // Atualiza o conteúdo de cada span com os novos dados
                        $('#info-nome').html(data.Name);
                        $('#info-cpf').html(data.CPF);
                        $('#info-rg').html(data.Rg);
                        $('#info-sexo').html(data.Sexo);
                        $('#info-endereco').html(data.Endereço);
                        $('#info-mae').html(data.Mãe);
                        $('#info-pai').html(data.Pai);
                        $('#info-cep').html(data.CEP);
                        $('#info-cidade').html(data.Cidade);
                        $('#info-estado').html(data.Estado);
                    },
                    error: function() {
                        alert('Ocorreu um erro ao tentar obter novos dados.');
                    }
                });
            }
                function showMale() {
                $.ajax({
                    url: '/pessoa/ajax',
                    method: 'GET',
                    success: function(data) {
                        // Atualiza o conteúdo de cada span com os novos dados
                        $('#info-nome').html(data.Name);
                        $('#info-cpf').html(data.CPF);
                        $('#info-rg').html(data.Rg);
                        $('#info-sexo').html(data.Sexo);
                        $('#info-endereco').html(data.Endereço);
                        $('#info-mae').html(data.Mãe);
                        $('#info-pai').html(data.Pai);
                        $('#info-cep').html(data.CEP);
                        $('#info-cidade').html(data.Cidade);
                        $('#info-estado').html(data.Estado);
                    },
                    error: function() {
                        alert('Ocorreu um erro ao tentar obter novos dados.');
                    }
                });
            }
                </script>              
            </div><!-- end option-company-->
        </section>
       <div class="form-container">
         <div class="input-position">
             <h1 class="input-text">Nome</h1>
             <div class="input-style">
                 <span id="info-nome" class="text-input-style">
                 <!--Nome--></span>
                 <i class="fa-solid fa-copy"></i>
             </div>
         </div>
           <div class="input-position">
               <h1 class="input-text">CPF</h1>
               <div class="input-style">
                   <span id="info-cpf" class="text-input-style">
                   <!--CPF--></span>
                   <i class="fa-solid fa-copy"></i>
               </div>
           </div>
           <div class="input-position">
               <h1 class="input-text">Rg</h1>
               <div class="input-style">
                   <span id="info-rg" class="text-input-style">
                   <!--Rg--></span>
                   <i class="fa-solid fa-copy"></i>
               </div>
           </div>
           <div class="input-position">
               <h1 class="input-text">Sexo</h1>
               <div class="input-style">
                   <span id="info-sexo" class="text-input-style">
                   <!--Sexo--></span>
                   <i class="fa-solid fa-copy"></i>
               </div>
           </div>
           <div class="input-position">
               <h1 class="input-text">Endereço</h1>
               <div class="input-style">
                   <span id="info-endereco" class="text-input-style">
                           <!--Endereço--></span>
                   <i class="fa-solid fa-copy"></i>
               </div>
           </div>
       </div><!--end form-container-->
                <div class="form-container-second">
            <div class="input-position">
                <h1 class="input-text">Mãe</h1>
                <div class="input-style">
                    <span id="info-mae" class="text-input-style">
                            <!--Mãe--></span>
                    <i class="fa-solid fa-copy"></i>
                </div>
            </div>
            <div class="input-position">
                <h1 class="input-text">Pai</h1>
                <div class="input-style">
                    <span id="info-pai" class="text-input-style">
                            <!--Pai--></span>
                    <i class="fa-solid fa-copy"></i>
                </div>
            </div>
            <div class="input-position">
                <h1 class="input-text">CEP</h1>
                <div class="input-style">
                    <span id="info-cep" class="text-input-style">
                            <!--CEP--></span>
                    <i class="fa-solid fa-copy"></i>
                </div>
            </div>
            <div class="input-position">
                <h1 class="input-text">Cidade</h1>
                <div class="input-style">
                    <span id="info-cidade" class="text-input-style">
                            <!--Cidade--></span>
                    <i class="fa-solid fa-copy"></i>
                </div>
            </div>
            <div class="input-position">
                <h1 class="input-text">Estado</h1>
                <div class="input-style">
                    <span id="info-estado" class="text-input-style">
                            <!--Estado--></span>
                    <i class="fa-solid fa-copy"></i>
                        </div>
                    </div>
                </div><!--end container-second-->
          </body>
<script>
                         //Code function copy
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
   function show() {
    // Seleciona todos os elementos com as classes especificadas
    const elements = document.querySelectorAll('.nav-content, .nav-link, .nav-style');
    
    // Itera sobre cada elemento e alterna a classe 'show'
    elements.forEach(element => {
        element.classList.toggle('show');
    });
}
</script>
</html>
