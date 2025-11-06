<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Editar Cliente - D'VITRINNE</title>
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
    <h1>EDITAR CLIENTE</h1>
  </section>

  <section class="form-container">
    <form action="{{ route('clientes.update', $cliente->id_cliente) }}" method="POST">
      @csrf
      @method('PUT')

      <label for="nome">Nome:</label>
      <input type="text" id="nome" name="nome" value="{{ $cliente->nome }}" required>

      <label for="cpf">CPF:</label>
      <input type="text" id="cpf" name="cpf" value="{{ $cliente->cpf ?? '' }}">

      <label for="data_nasc">Data de Nascimento:</label>
      <input type="date" id="data_nasc" name="data_nasc" value="{{ $cliente->data_nasc ?? '' }}">

      <label for="endereco">Endereço:</label>
      <input type="text" id="endereco" name="endereco" value="{{ $cliente->endereco ?? '' }}">

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" value="{{ $cliente->email }}" required>

      <label for="telefone">Telefone:</label>
      <input type="text" id="telefone" name="telefone" value="{{ $cliente->telefone ?? '' }}">



      <div class="botoes">
        <button type="submit" class="btn-editar">Salvar Alterações</button>
        <a href="{{ route('gerenciar.clientes') }}">
          <button type="button" class="btn-voltar">Cancelar</button>
        </a>
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
