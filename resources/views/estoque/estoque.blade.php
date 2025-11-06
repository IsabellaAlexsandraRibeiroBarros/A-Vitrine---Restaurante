<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gerenciar Estoque - D'VITRINNE</title>
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
    <h1>GERENCIAR ESTOQUE</h1>
  </section>

  <section class="tabela-container">
    <table class="tabela-pratos">
      <thead>
        <tr>
          <th>ID</th>
          <th>Item</th>
          <th>Quantidade</th>
          <th>Unidade</th>
          <th>Valor Unitário (R$)</th>
          <th>Status</th>
          <th colspan="2">Ações</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($estoques as $e)
        <tr>
          <td>{{ $e->id }}</td>
          <td>{{ $e->item }}</td>
          <td>{{ $e->quantidade }}</td>
          <td>{{ $e->unidade }}</td>
          <td>{{ number_format($e->valor_unitario, 2, ',', '.') }}</td>
          <td>{{ $e->status }}</td>

          <td>
            <a href="{{ route('estoque.edit', $e->id) }}">
              <button class="btn-editar">Editar</button>
            </a>
          </td>

          <td>
            <form action="{{ route('estoque.destroy', $e->id) }}" method="POST">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn-excluir" onclick="return confirm('Deseja excluir este item?')">Excluir</button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </section>

  <section class="acoes-gerenciar">
    <a href="{{ route('estoque.create') }}"><button>Adicionar Item</button></a>
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
