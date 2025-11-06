<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Gerenciar Estoque - D'VITRINNE</title>
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
</head>
<body>
<header>
  <div class="logo">
    <a href="{{ route('home') }}"><img src="{{ asset('assets/img/DVITRINNE2.png') }}" alt="Logo"></a>
  </div>
  <nav>
    <ul class="nav-links">
      <li><a href="{{ route('cardapio') }}">Cardápio</a></li>
      <li><a href="{{ route('area.funcionario') }}">Área do Funcionário</a></li>
    </ul>
  </nav>
</header>

<main class="painel-geral">
  <section class="painel-header">
    <div class="gold-line"></div>
    <h1>GERENCIAR ESTOQUE</h1>
  </section>

  <section class="tabela-container">
    <table class="tabela-pratos">
      <thead>
        <tr>
          <th>ID</th>
          <th>Item</th>
          <th>Quantidade</th>
          <th>Unidade</th>
          <th>Valor Unitário (R$)</th>
          <th>Status</th>
        </tr>
      </thead>
      <tbody>
        <tr><td>1</td><td>Guardanapos</td><td>500</td><td>un</td><td>0,15</td><td>Adequado</td></tr>
        <tr><td>2</td><td>Copos de vidro</td><td>12</td><td>un</td><td>4,50</td><td>Baixo</td></tr>
      </tbody>
    </table>
  </section>

  <section class="acoes-gerenciar">
    <button id="editarEstoque">Editar Item</button>
    <button id="adicionarEstoque">Adicionar Item</button>
    <button id="removerEstoque">Remover Item</button>
    <button onclick="window.location.href='{{ route('area.funcionario') }}'">Voltar</button>
  </section>
</main>

<div id="modalUnificado" class="modal-unificado">
  <div class="conteudo">
    <h2 id="modalTitulo">Adicionar Item ao Estoque</h2>
    <form id="formModal">
      <div id="camposDinamicos"></div>
      <div class="botoes">
        <button type="submit" class="salvar">Salvar</button>
        <button type="button" class="cancelar" id="fecharModal">Cancelar</button>
      </div>
    </form>
  </div>
</div>

<footer>
  <div class="footer-container">
    <img src="{{ asset('assets/img/DVITRINNE2.png') }}" alt="Logo" />
    <p>© 2025 D'VITRINNE<br>Todos os direitos reservados.</p>
  </div>
</footer>

<script src="{{ asset('assets/js/script.js') }}"></script>
<body class="pagina-gerenciamento">

</body>
</html>
