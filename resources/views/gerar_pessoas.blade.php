@extends('layout.head')
@section('titulo', 'Pessoa')
@section('content')
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
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
@endsection