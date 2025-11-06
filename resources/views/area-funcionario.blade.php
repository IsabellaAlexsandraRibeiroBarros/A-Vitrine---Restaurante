<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área do Funcionário - D'VITRINNE</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>

    <!-- Cabeçalho -->
    <header class="header">
        <div class="logo">
            <a href="{{ route('home') }}">
                <img src="{{ asset('assets/img/DVITRINNE2.png') }}" alt="Logo D'VITRINNE">
            </a>
        </div>
        <nav>
            <ul class="nav-links">
                <li><a href="{{ route('cardapio') }}">Cardápio</a></li>
                <li><a href="{{ route('area.funcionario') }}" class="ativo">Área do Funcionário</a></li>
            </ul>
        </nav>
    </header>

    <!-- Carrossel -->
    <section class="carousel">
        <div class="carousel-images">
            <img src="{{ asset('assets/img/Carrossel/Prato1.jpg') }}" alt="Prato 1">
            <img src="{{ asset('assets/img/Carrossel/Prato2.jpg') }}" alt="Prato 2">
            <img src="{{ asset('assets/img/Carrossel/Prato3.jpg') }}" alt="Prato 3">
            <img src="{{ asset('assets/img/Carrossel/Prato4.jpg') }}" alt="Prato 4">
            <img src="{{ asset('assets/img/Carrossel/Prato5.jpg') }}" alt="Prato 5">
            <img src="{{ asset('assets/img/Carrossel/Prato6.jpg') }}" alt="Prato 6">
            <img src="{{ asset('assets/img/Carrossel/Prato7.jpg') }}" alt="Prato 7">
            <img src="{{ asset('assets/img/Carrossel/Prato8.jpg') }}" alt="Prato 8">
        </div>
        <div class="overlay">
            <h1>GERENCIAMENTO DO SISTEMA</h1>
        </div>
    </section>

    <!-- Painel de Gerenciamento -->
    <section class="painel-gerenciamento">
        <div class="painel-container">
            <div class="painel-header">
                <div class="gold-line"></div>
                <h2>Selecione uma das áreas para gerenciar:</h2>
            </div>

            <div class="painel-grid">
                <a href="{{ route('gerenciar.pratos') }}" class="painel-card">Gerenciar Pratos</a>
                <a href="{{ route('gerenciar.pedidos') }}" class="painel-card">Gerenciar Pedidos</a>
                <a href="{{ route('gerenciar.mesas') }}" class="painel-card">Gerenciar Mesas</a>
                <a href="{{ route('gerenciar.clientes') }}" class="painel-card">Gerenciar Clientes</a>
                <a href="{{ route('gerenciar.ingredientes') }}" class="painel-card">Gerenciar Ingredientes</a>
                <a href="{{ route('gerenciar.funcionarios') }}" class="painel-card">Gerenciar Funcionários</a>
                <a href="{{ route('gerenciar.estoque') }}" class="painel-card">Gerenciar Estoque</a>
            </div>
        </div>
    </section>

    <!-- Rodapé -->
    <footer>
        <div class="footer-container">
            <img src="{{ asset('assets/img/DVITRINNE2.png') }}" alt="Logo D'VITRINNE">
            <p>© 2025 D'VITRINNE<br>Todos os direitos reservados.</p>
        </div>
    </footer>

    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>
</html>
