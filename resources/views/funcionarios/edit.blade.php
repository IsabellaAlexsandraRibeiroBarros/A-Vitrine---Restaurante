<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Editar Funcionário - D'VITRINNE</title>
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
    <h1>EDITAR FUNCIONÁRIO</h1>
  </section>

  <section class="form-container">
    <form action="{{ route('funcionarios.update', $funcionario->id) }}" method="POST">
      @csrf
      @method('PUT')

      <label>Nome:</label>
      <input type="text" name="nome" value="{{ $funcionario->nome }}" required>

      <label>Cargo:</label>
      <input type="text" name="cargo" value="{{ $funcionario->cargo }}" required>

      <label>Email:</label>
      <input type="email" name="email" value="{{ $funcionario->email }}" required>

      <label>Telefone:</label>
      <input type="text" name="telefone" value="{{ $funcionario->telefone }}" required>

      <div class="botoes">
        <button type="submit" class="salvar">Salvar Alterações</button>
        <a href="{{ route('funcionarios.index') }}"><button type="button" class="cancelar">Cancelar</button></a>
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
