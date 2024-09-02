@extends('layout.head')
@section('titulo', 'Empresa')
@section('content')
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
<section>
<div class="info-text-style">
       <h1 class="text-information">
<i class="fa-solid fa-folder-open" id="icon-docs"></i>
          Gerador de documentos de empresas (Nome, CNPJ, ETC)
      <button type="button" class="btn-menu" onclick="show()">
        Menu
</button>
      </h1>
</div>
<div class="options">
      <h2 class="info-text3">Opções</h2>
            <input class="button-company" type="button" value="Gerar Empresa" onclick="showCompany()">
     <script>
        function showCompany() {
        // Faz uma solicitação AJAX para obter novos dados
        $.ajax({
        url: '/empresa/ajax',
        method: 'GET',
        success: function(data) {
        // Atualiza o conteúdo da página com os novos dados
        $('#info-nome').text(data.Nome);
        $('#info-cnpj').text(data.CNPJ);
        $('#info-inscricao').text(data.InscriçãoEstadual);
        $('#info-data').text(data.DataDeAbertura);
        $('#info-cep').text(data.CEP);
        $('#info-cidade').text(data.Cidade);
        $('#info-estado').text(data.Estado);
        $('#info-endereco').text(data.Endereço);
        $('#info-telefone').text(data.Telefone);
        $('#info-numero').text(data.Numero);
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
            </span>
    <i class="fa-solid fa-copy"></i>
</div>
</div>
<div class="input-position">
      <h1 class="input-text">CNPJ</h1>
        <div class="input-style">
           <span id="info-cnpj" class="text-input-style">
    </span>
<i class="fa-solid fa-copy"></i>
</div>
   </div>
<div class="input-position">
<h1 class="input-text">Inscrição Estadual</h1>
    <div class="input-style">
       <span id="info-inscricao" class="text-input-style">
            </span>
    <i class="fa-solid fa-copy"></i>
  </div>
</div>
<div class="input-position">
   <h1 class="input-text">Data de abertura</h1>
     <div class="input-style">
       <span id="info-data" class="text-input-style">
                </span>
 <i class="fa-solid fa-copy"></i>
    </div>
</div>
<div class="input-position">
    <h1 class="input-text">CEP</h1>
      <div class="input-style">
   <span id="info-cep" class="text-input-style">
          </span>
<i class="fa-solid fa-copy"></i>
       </div>
    </div>
</div><!--end form-container-->
<div class="form-container-second">
   <div class="input-position">
     <h1 class="input-text">Endereço</h1>
  <div class="input-style">
      <span id="info-endereco" class="text-input-style">
         </span>
    <i class="fa-solid fa-copy"></i>
    </div>
</div>
<div class="input-position">
    <h1 class="input-text">Número</h1>
    <div class="input-style">
        <span id="info-numero" class="text-input-style">
                </span>
        <i class="fa-solid fa-copy"></i>
    </div>
</div>
<div class="input-position">
 <h1 class="input-text">Cidade</h1>
    <div class="input-style">
        <span id="info-cidade" class="text-input-style">
                    </span>
        <i class="fa-solid fa-copy"></i>
    </div>
</div>
<div class="input-position">
    <h1 class="input-text">Estado</h1>
    <div class="input-style">
        <span id="info-estado" class="text-input-style">
                    </span>
        <i class="fa-solid fa-copy"></i>
    </div>
</div>
<div class="input-position">
 <h1 class="input-text">Telefone</h1>
    <div class="input-style">
<span id="info-telefone" class="text-input-style">
            </span>
<i class="fa-solid fa-copy"></i>
        </div>
</div>
    </div><!--end input-container-second-->
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

