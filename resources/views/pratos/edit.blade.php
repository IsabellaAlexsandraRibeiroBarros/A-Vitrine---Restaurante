<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Editar Prato - D'VITRINNE</title>
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body class="pagina-gerenciamento">
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

<main class="painel-geral">
  <section class="painel-header">
    <div class="gold-line"></div>
    <h1>EDITAR PRATO</h1>
  </section>

  <section class="form-container">
    <form action="{{ route('pratos.update', $prato->id) }}" method="POST">
      @csrf
      @method('PUT')

      <label>Nome:</label>
      <input type="text" name="nome" value="{{ $prato->nome }}" required>

      <label>Descrição:</label>
      <textarea name="descricao">{{ $prato->descricao }}</textarea>

      <label>Valor (R$):</label>
      <input type="number" name="valor" value="{{ $prato->valor }}" step="0.01" required>

      <label>Composição:</label>
      <textarea name="composicao">{{ $prato->composicao }}</textarea>

      <div class="botoes">
        <button type="submit" class="salvar">Salvar Alterações</button>
        <a href="{{ route('pratos.index') }}"><button type="button" class="cancelar">Cancelar</button></a>
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
