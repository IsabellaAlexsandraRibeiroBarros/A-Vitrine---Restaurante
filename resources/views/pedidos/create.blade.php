<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Adicionar Pedido - D'VITRINNE</title>
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body class="pagina-gerenciamento">
  <!-- Cabeçalho -->
  <header>
    <div class="logo">
      <a href="{{ route('home') }}">
        <img src="{{ asset('assets/img/DVITRINNE2.png') }}" alt="Logo D'VITRINNE">
      </a>
    </div>

    <nav>
      <ul class="nav-links">
        <li><a href="{{ route('cardapio') }}">Cardápio</a></li>
        <li><a href="{{ route('area.funcionario') }}">Área do Funcionário</a></li>
      </ul>
    </nav>
  </header>

  <!-- Conteúdo principal -->
  <main class="painel-geral">
    <section class="painel-header">
      <div class="gold-line"></div>
      <h1>ADICIONAR PEDIDO</h1>
    </section>

    <section class="form-container">
      <form action="{{ route('pedidos.store') }}" method="POST">
        @csrf

        <label for="nome_cliente">Nome do Cliente:</label>
        <input type="text" id="nome_cliente" name="nome_cliente" required>

        <label for="status">Status:</label>
        <select id="status" name="status" required>
          <option value="Aberto">Aberto</option>
          <option value="Fechado">Fechado</option>
          <option value="Pago">Pago</option>
        </select>

        <div class="botoes">
          <button type="submit" class="salvar">Salvar Pedido</button>
          <a href="{{ route('pedidos.index') }}">
            <button type="button" class="cancelar">Cancelar</button>
          </a>
        </div>
      </form>
    </section>
  </main>

  <!-- Rodapé -->
  <footer>
    <div class="footer-container">
      <img src="{{ asset('assets/img/DVITRINNE2.png') }}" alt="Logo D'VITRINNE">
      <p>© 2025 D'VITRINNE<br>Todos os direitos reservados.</p>
    </div>
  </footer>
</body>
</html>
