<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Funcionários - D'VITRINNE</title>
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
    <h1>GERENCIAR FUNCIONÁRIOS</h1>
  </section>

  <section class="tabela-container">
    <table class="tabela-pratos">
      <thead>
        <tr>
          <th>ID</th>
          <th>Nome</th>
          <th>Cargo</th>
          <th>Email</th>
          <th>Telefone</th>
          <th colspan="2">Ações</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($funcionarios as $f)
        <tr>
          <td>{{ $f->id }}</td>
          <td>{{ $f->nome }}</td>
          <td>{{ $f->cargo }}</td>
          <td>{{ $f->email }}</td>
          <td>{{ $f->telefone }}</td>
          <td><a href="{{ route('funcionarios.edit', $f->id) }}"><button class="btn-editar">Editar</button></a></td>
          <td>
            <form action="{{ route('funcionarios.destroy', $f->id) }}" method="POST">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn-excluir" onclick="return confirm('Excluir funcionário?')">Excluir</button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </section>

  <section class="acoes-gerenciar">
    <a href="{{ route('funcionarios.create') }}"><button>Adicionar Funcionário</button></a>
    <a href="{{ route('area.funcionario') }}"><button>Voltar</button></a>
  </section>
</main>

<footer>
  <div class="footer-container">
    <img src="{{ asset('assets/img/DVITRINNE2.png') }}" alt="Logo D'VITRINNE">
    <p>© 2025 D'VITRINNE<br>Todos os direitos reservados.</p>
  </div>
</footer>
</body>
</html>
