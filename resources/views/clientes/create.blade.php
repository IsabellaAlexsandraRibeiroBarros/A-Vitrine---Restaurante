<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Adicionar Cliente - D'VITRINNE</title>
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
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
    <h1>ADICIONAR CLIENTE</h1>
  </section>

  <section class="form-container">
    <form action="{{ route('clientes.store') }}" method="POST">
      @csrf

      <label>Nome:</label>
      <input type="text" name="nome" required>

      <label>CPF:</label>
      <input type="text" name="cpf">

      <label>Data de Nascimento:</label>
      <input type="date" name="data_nasc">

      <label>Endereço:</label>
      <input type="text" name="endereco">

      <label>Email:</label>
      <input type="email" name="email" required>

      <label>Telefone:</label>
      <input type="text" name="telefone">


      <div class="botoes">
        <button type="submit" class="salvar">Salvar</button>
        <a href="{{ route('gerenciar.clientes') }}"><button type="button" class="cancelar">Cancelar</button></a>
    </div>
    </form>
  </section>
</main>

<footer>
  <div class="footer-container">
    <img src="{{ asset('assets/img/DVITRINNE2.png') }}" alt="Logo" />
    <p>© 2025 D'VITRINNE<br>Todos os direitos reservados.</p>
  </div>
</footer>

</body>
</html>
