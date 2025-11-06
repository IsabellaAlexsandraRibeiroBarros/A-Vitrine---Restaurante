<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gerenciar Mesas - D'VITRINNE</title>
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
    <h1>GERENCIAR MESAS</h1>
  </section>

  <section class="tabela-container">
    <table class="tabela-pratos">
      <thead>
        <tr>
          <th>Número</th>
          <th>Status</th>
          <th>Ação</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($mesas as $mesa)
        <tr>
          <td>{{ $mesa->numero }}</td>
          <td>
            @if($mesa->status === 'Livre')
              <span style="color: green; font-weight:bold;">{{ $mesa->status }}</span>
            @elseif($mesa->status === 'Reservada')
              <span style="color: goldenrod; font-weight:bold;">{{ $mesa->status }}</span>
            @else
              <span style="color: red; font-weight:bold;">{{ $mesa->status }}</span>
            @endif
          </td>
          <td>
            <form action="{{ route('mesas.update', $mesa->id_mesa) }}" method="POST" style="display:inline;">
              @csrf
              @method('PUT')
              <select name="status" class="select-status">
                <option value="Livre" {{ $mesa->status == 'Livre' ? 'selected' : '' }}>Livre</option>
                <option value="Reservada" {{ $mesa->status == 'Reservada' ? 'selected' : '' }}>Reservada</option>
                <option value="Ocupada" {{ $mesa->status == 'Ocupada' ? 'selected' : '' }}>Ocupada</option>
              </select>
              <button type="submit" class="btn-editar">Atualizar</button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </section>

  <section class="acoes-gerenciar">
    <a href="{{ route('area.funcionario') }}"><button class="btn-voltar">Voltar</button></a>
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
