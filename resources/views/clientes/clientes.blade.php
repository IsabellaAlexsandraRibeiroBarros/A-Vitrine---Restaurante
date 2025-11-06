<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Gerenciar Clientes - D'VITRINNE</title>
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
    <h1>GERENCIAR CLIENTES</h1>
  </section>

  <section class="tabela-container">
    <table class="tabela-pratos">
      <thead>
        <tr>
          <th>ID</th>
          <th>Nome</th>
          <th>Telefone</th>
          <th>Email</th>
          <th colspan="2">Ações</th>
        </tr>
      </thead>

      <tbody>
        @foreach ($clientes as $c)
        <tr>
          <td>{{ $c->id_cliente }}</td>
          <td>{{ $c->nome }}</td>
          <td>{{ $c->telefone }}</td>
          <td>{{ $c->email }}</td>

          <!-- Botão Editar -->
          <td>
            <a href="{{ route('clientes.edit', $c->id_cliente) }}">
              <button>Editar</button>
            </a>
          </td>

          <!-- Botão Excluir -->
          <td>
            <form action="{{ route('clientes.destroy', $c->id_cliente) }}" method="POST">
              @csrf
              @method('DELETE')
              <button type="submit" onclick="return confirm('Deseja excluir este cliente?')">
                Excluir
              </button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </section>

  <section class="acoes-gerenciar">
    <a href="{{ route('clientes.create') }}"><button>Adicionar Cliente</button></a>
    <button onclick="window.location.href='{{ route('area.funcionario') }}'">Voltar</button>
  </section>

</main>

<!-- Modal (mantido) -->
<div id="modalUnificado" class="modal-unificado">
  <div class="conteudo">
    <h2 id="modalTitulo">Adicionar Cliente</h2>
    <form id="formModal">
      <div id="camposDinamicos"></div>
      <div class="botoes">
        <button type="submit" class="salvar">Salvar</button>
        <button type="button" class="cancelar" id="fecharModal">Cancelar</button>
      </div>
    </form>
  </div>
</div>

<footer>
  <div class="footer-container">
    <img src="{{ asset('assets/img/DVITRINNE2.png') }}" alt="Logo" />
    <p>© 2025 D'VITRINNE<br>Todos os direitos reservados.</p>
  </div>
</footer>

<script src="{{ asset('assets/js/script.js') }}"></script>

</body>
</html>
