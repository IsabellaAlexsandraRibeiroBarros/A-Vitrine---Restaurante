<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gerenciar Pedidos - D'VITRINNE</title>
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
    <h1>GERENCIAR PEDIDOS</h1>
  </section>

  <section class="tabela-container">
    <table class="tabela-pratos">
      <thead>
        <tr>
          <th>ID</th>
          <th>Cliente</th>
          <th>Status</th>
          <th>Valor Total (R$)</th>
          <th>Ações</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($pedidos as $p)
        <tr>
          <td>{{ $p->id }}</td>
          <td>{{ $p->nome_cliente }}</td>
          <td>{{ $p->status }}</td>
          <td>{{ number_format($p->total, 2, ',', '.') }}</td>
          <td>
            <a href="{{ route('pedidos.show', $p->id) }}">
              <button class="btn-editar">Ver Detalhes</button>
            </a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </section>

  <section class="acoes-gerenciar">
    <a href="{{ route('pedidos.create') }}"><button>Adicionar Pedido</button></a>
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
