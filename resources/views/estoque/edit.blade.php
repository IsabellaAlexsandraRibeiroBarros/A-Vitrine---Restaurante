<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Editar Item - D'VITRINNE</title>
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body class="pagina-gerenciamento">
<header>
  <div class="logo">
    <a href="{{ route('home') }}">
      <img src="{{ asset('assets/img/DVITRINNE2.png') }}" alt="Logo">
    </a>
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
    <h1>EDITAR ITEM DO ESTOQUE</h1>
  </section>

  <section class="form-container">
    <form action="{{ route('estoque.update', $item->id) }}" method="POST">
      @csrf
      @method('PUT')

      <label>Item:</label>
      <input type="text" name="item" value="{{ $item->item }}" required>

      <label>Quantidade:</label>
      <input type="number" name="quantidade" step="0.01" value="{{ $item->quantidade }}" required>

      <label>Unidade:</label>
      <input type="text" name="unidade" value="{{ $item->unidade }}" required>

      <label>Valor Unitário (R$):</label>
      <input type="number" name="valor_unitario" step="0.01" value="{{ $item->valor_unitario }}" required>

      <label>Status:</label>
      <input type="text" name="status" value="{{ $item->status }}" required>

      <div class="botoes">
        <button type="submit" class="salvar">Salvar Alterações</button>
        <a href="{{ route('estoque.index') }}"><button type="button" class="cancelar">Cancelar</button></a>
      </div>
    </form>
  </section>
</main>

<footer>
  <div class="footer-container">
    <img src="{{ asset('assets/img/DVITRINNE2.png') }}" alt="Logo">
    <p>© 2025 D'VITRINNE<br>Todos os direitos reservados.</p>
  </div>
</footer>
</body>
</html>
