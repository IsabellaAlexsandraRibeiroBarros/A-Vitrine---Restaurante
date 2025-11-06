<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gerenciar Ingredientes - D'VITRINNE</title>
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
    <h1>GERENCIAR INGREDIENTES</h1>
  </section>

  <section class="tabela-container">
    <table class="tabela-pratos">
      <thead>
        <tr>
          <th>ID</th>
          <th>Ingrediente</th>
          <th>Quantidade</th>
          <th>Unidade</th>
          <th>Valor Unitário (R$)</th>
          <th colspan="2">Ações</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($ingredientes as $ing)
        <tr>
          <td>{{ $ing->id }}</td>
          <td>{{ $ing->nome }}</td>
          <td>{{ $ing->quantidade }}</td>
          <td>{{ $ing->unidade }}</td>
          <td>{{ number_format($ing->valor_unitario, 2, ',', '.') }}</td>
          <td>
            <a href="{{ route('ingredientes.edit', $ing->id) }}"><button class="btn-editar">Editar</button></a>
          </td>
          <td>
            <form action="{{ route('ingredientes.destroy', $ing->id) }}" method="POST">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn-excluir" onclick="return confirm('Deseja excluir este ingrediente?')">Excluir</button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </section>

  <section class="acoes-gerenciar">
    <a href="{{ route('ingredientes.create') }}"><button>Adicionar Ingrediente</button></a>
    <a href="{{ route('area.funcionario') }}"><button>Voltar</button></a>
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
