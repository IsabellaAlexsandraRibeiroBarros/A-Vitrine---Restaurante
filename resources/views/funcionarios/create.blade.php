<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Adicionar Funcionário - D'VITRINNE</title>
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
    <h1>ADICIONAR FUNCIONÁRIO</h1>
  </section>

  <section class="form-container">
    {{-- ✅ O formulário deve usar o método POST e apontar para a rota correta --}}
    <form action="{{ route('funcionarios.store') }}" method="POST">
      @csrf

      <div class="form-group">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" placeholder="Digite o nome do funcionário" required>
      </div>

      <div class="form-group">
        <label for="cargo">Cargo:</label>
        <input type="text" id="cargo" name="cargo" placeholder="Ex: Garçom, Cozinheiro..." required>
      </div>

      <div class="form-group">
        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" placeholder="exemplo@email.com" required>
      </div>

      <div class="form-group">
        <label for="telefone">Telefone:</label>
        <input type="text" id="telefone" name="telefone" placeholder="(00) 00000-0000" required>
      </div>

      {{-- ✅ Botões corretos --}}
      <div class="botoes" style="margin-top: 20px;">
        <button type="submit" class="salvar">Adicionar Funcionário</button>
        <a href="{{ route('funcionarios.index') }}" class="cancelar">Voltar</a>
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
