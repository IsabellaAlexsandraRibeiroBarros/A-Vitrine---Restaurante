<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gerenciar Pratos - D'VITRINNE</title>
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
    <h1>GERENCIAR PRATOS</h1>
  </section>

  <section class="tabela-container">
    @if (session('success'))
      <div class="alerta-sucesso">{{ session('success') }}</div>
    @endif

    <table class="tabela-pratos">
      <thead>
        <tr>
          <th>ID</th>
          <th>Nome do Prato</th>
          <th>Descrição</th>
          <th>Valor (R$)</th>
          <th>Composição</th>
          <th colspan="2">Ações</th>
        </tr>
      </thead>
      <tbody>
        @forelse ($pratos as $p)
        <tr>
          <td>{{ $p->id }}</td>
          <td>{{ $p->nome }}</td>
          <td>{{ $p->descricao }}</td>
          <td>{{ number_format($p->valor, 2, ',', '.') }}</td>
          <td>{{ $p->composicao }}</td>
          <td>
            <a href="{{ route('pratos.edit', $p->id) }}"><button class="btn-editar">Editar</button></a>
          </td>
          <td>
            <form action="{{ route('pratos.destroy', $p->id) }}" method="POST">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn-excluir" onclick="return confirm('Deseja excluir este prato?')">Excluir</button>
            </form>
          </td>
        </tr>
        @empty
        <tr>
          <td colspan="7" class="text-center">Nenhum prato cadastrado.</td>
        </tr>
        @endforelse
      </tbody>
    </table>
  </section>

  <section class="acoes-gerenciar">
    <a href="{{ route('pratos.create') }}"><button>Adicionar Prato</button></a>
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
