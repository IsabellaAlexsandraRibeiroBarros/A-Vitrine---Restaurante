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
        <img src="assets/img/DVITRINNE2.png" alt="Logo D'VITRINNE">
      </a>
    </div>
    <nav>
      <ul class="nav-links">
<li><a href="{{ route('cardapio') }}">Cardápio</a></li>   
<li><a href="{{ route('login') }}">Área do Funcionário</a></li>
      </ul>
    </nav>
  </header>

  <!-- Login Simbólico -->
  <section class="login-section">
    <div class="login-container">
      <h2>Área do Funcionário</h2>
      <form action="{{ route('login.submit') }}" method="POST">
    @csrf
        <label for="email">E-mail</label>
        <input type="email" id="email" name="email" placeholder="Digite seu e-mail" required>

        <label for="senha">Senha</label>
        <input type="password" id="senha" name="senha" placeholder="Digite sua senha" required>

        <button type="submit">Entrar</button>
      </form>
    </div>
  </section>

  <!-- Rodapé -->
  <footer>
    <div class="footer-container">
      <img src="assets/img/DVITRINNE2.png" alt="Logo D'VITRINNE">
      <p>© 2025 D'VITRINNE<br>Todos os direitos reservados.</p>
    </div>
  </footer>

  <script src="{{url ('assets/js/script.js')}}"></script>
</body>
</html>
