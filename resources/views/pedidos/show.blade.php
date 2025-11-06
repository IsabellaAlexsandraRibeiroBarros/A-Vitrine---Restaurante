<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detalhes do Pedido - D'VITRINNE</title>
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body class="pagina-gerenciamento">
  <!-- Cabeçalho -->
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

  <!-- Conteúdo principal -->
  <main class="painel-geral">
    <section class="painel-header">
      <div class="gold-line"></div>
      <h1>DETALHES DO PEDIDO #{{ $pedido->id }}</h1>
      <p><strong>Cliente:</strong> {{ $pedido->nome_cliente }}</p>
      <p><strong>Status:</strong> {{ $pedido->status }}</p>
    </section>

    <!-- Tabela de Itens -->
    <section class="tabela-container">
      <table class="tabela-pratos">
        <thead>
          <tr>
            <th>Item</th>
            <th>Quantidade</th>
            <th>Valor Unitário (R$)</th>
            <th>Total (R$)</th>
          </tr>
        </thead>
        <tbody>
          @forelse ($pedido->itens as $item)
          <tr>
            <td>{{ $item->nome_item }}</td>
            <td>{{ $item->quantidade }}</td>
            <td>{{ number_format($item->valor_unitario, 2, ',', '.') }}</td>
            <td>{{ number_format($item->quantidade * $item->valor_unitario, 2, ',', '.') }}</td>
          </tr>
          @empty
          <tr>
            <td colspan="4" class="text-center">Nenhum item adicionado a este pedido.</td>
          </tr>
          @endforelse
        </tbody>
      </table>
    </section>

    <!-- Formulário de adicionar item -->
    <section class="form-container">
      <h2>Adicionar Item ao Pedido</h2>
      <form action="{{ route('pedidos.addItem', $pedido->id) }}" method="POST">
        @csrf
        <label>Nome do Item:</label>
        <input type="text" name="nome_item" required>

        <label>Quantidade:</label>
        <input type="number" name="quantidade" min="1" required>

        <label>Valor Unitário (R$):</label>
        <input type="number" name="valor_unitario" step="0.01" required>

        <div class="botoes">
          <button type="submit" class="btn-editar">Adicionar Item</button>
        </div>
      </form>
    </section>

    <!-- Total -->
    <section class="total-container">
      <h2>Total do Pedido: <strong>R$ {{ number_format($pedido->total, 2, ',', '.') }}</strong></h2>
    </section>

    <!-- Botões de Ação -->
    <section class="acoes-gerenciar">
      <!-- Atualizar status -->
      <form action="{{ route('pedidos.updateStatus', $pedido->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('PUT')
        <select name="status" class="status-select" required>
          <option value="Aberto" {{ $pedido->status == 'Aberto' ? 'selected' : '' }}>Aberto</option>
          <option value="Fechado" {{ $pedido->status == 'Fechado' ? 'selected' : '' }}>Fechado</option>
          <option value="Pago" {{ $pedido->status == 'Pago' ? 'selected' : '' }}>Pago</option>
        </select>
        <button type="submit" class="btn-editar">Atualizar Status</button>
      </form>

      <!-- Excluir pedido -->
      <form action="{{ route('pedidos.destroy', $pedido->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn-excluir" onclick="return confirm('Tem certeza que deseja excluir este pedido?')">Excluir Pedido</button>
      </form>

      <!-- Voltar -->
      <a href="{{ route('pedidos.index') }}"><button class="cancelar">Voltar</button></a>
    </section>
  </main>

  <!-- Rodapé -->
  <footer>
    <div class="footer-container">
      <img src="{{ asset('assets/img/DVITRINNE2.png') }}" alt="Logo D'VITRINNE">
      <p>© 2025 D'VITRINNE<br>Todos os direitos reservados.</p>
    </div>
  </footer>
</body>
</html>
