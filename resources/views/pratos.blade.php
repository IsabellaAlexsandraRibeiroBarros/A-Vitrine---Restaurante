<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gerenciar Pratos - D'VITRINNE</title>
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
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
      <h1>GERENCIAR PRATOS</h1>
    </section>

    <section class="tabela-container">
      <table class="tabela-pratos">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nome do Prato</th>
            <th>Descrição</th>
            <th>Valor (R$)</th>
            <th>Composição (Ingredientes e Quantidades)</th>
          </tr>
        </thead>
        <tbody>
          <tr><td>1</td><td>Tagliolini Burrata</td><td>Massa artesanal com burrata cremosa e manjericão fresco.</td><td>65,00</td><td>200g Massa, 50g Burrata, 3 folhas Manjericão</td></tr>
          <tr><td>2</td><td>Pappardelle Ragu</td><td>Pappardelle fresca com ragu de carne cozido lentamente.</td><td>72,00</td><td>180g Pappardelle, 100g Carne, 30g Queijo</td></tr>
          <tr><td>3</td><td>Risoto de Cogumelos</td><td>Risoto cremoso com mix de cogumelos e parmesão.</td><td>58,00</td><td>150g Arroz arbório, 80g Cogumelos, 20g Parmesão</td></tr>
        </tbody>
      </table>
    </section>

    <section class="acoes-gerenciar">
      <button id="editarPrato">Editar Prato</button>
      <button id="adicionarPrato">Adicionar Prato</button>
      <button id="removerPrato">Remover Prato</button>
      <button onclick="window.location.href='{{ route('area.funcionario') }}'">Voltar</button>
    </section>
  </main>

  <div id="modalUnificado" class="modal-unificado">
    <div class="conteudo">
      <h2 id="modalTitulo">Adicionar Prato</h2>
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
      <img src="{{ asset('assets/img/DVITRINNE2.png') }}" alt="Logo">
      <p>© 2025 D'VITRINNE<br>Todos os direitos reservados.</p>
    </div>
  </footer>

  <script src="{{ asset('assets/js/script.js') }}"></script>
  <body class="pagina-gerenciamento">

</body>
</html>
