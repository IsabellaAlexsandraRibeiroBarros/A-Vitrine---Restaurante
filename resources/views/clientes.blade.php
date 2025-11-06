<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Gerenciar Clientes - D'VITRINNE</title>
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
    <h1>GERENCIAR CLIENTES</h1>
  </section>

  <section class="tabela-container">
    <table class="tabela-pratos">
      <thead>
        <tr>
          <th>ID</th>
          <th>Nome</th>
          <th>Telefone</th>
          <th>Email</th>
          <th>Mesa Associada</th>
        </tr>
      </thead>
      <tbody>
        <tr><td>1</td><td>Ana Silva</td><td>(11) 99999-0000</td><td>ana@email.com</td><td>08</td></tr>
        <tr><td>2</td><td>Carlos Souza</td><td>(11) 98888-1111</td><td>carlos@email.com</td><td>03</td></tr>
      </tbody>
    </table>
  </section>

  <section class="acoes-gerenciar">
    <button id="editarCliente">Editar Cliente</button>
    <button id="adicionarCliente">Adicionar Cliente</button>
    <button id="removerCliente">Remover Cliente</button>
    <button onclick="window.location.href='{{ route('area.funcionario') }}'">Voltar</button>
  </section>
</main>

<div id="modalUnificado" class="modal-unificado">
  <div class="conteudo">
    <h2 id="modalTitulo">Adicionar Cliente</h2>
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
