<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>D'VITRINNE</title>
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>

    <!-- Cabeçalho -->
<header class="header">
  <div class="logo">
      <!-- Logo com link para página inicial -->
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

    <!-- Carrossel -->
    <section class="carousel">
        <div class="carousel-images">
            <img src="{{url ('assets/img/Carrossel/Prato1.jpg')}}" alt="Prato 1">
            <img src="{{url ('assets/img/Carrossel/Prato2.jpg')}}" alt="Prato 2">
            <img src="{{url ('assets/img/Carrossel/Prato3.jpg')}}" alt="Prato 3">
            <img src="{{url ('assets/img/Carrossel/Prato4.jpg')}}" alt="Prato 4">
            <img src="{{url ('assets/img/Carrossel/Prato5.jpg')}}" alt="Prato 5">
            <img src="{{url ('assets/img/Carrossel/Prato6.jpg')}}" alt="Prato 6">
            <img src="{{url ('assets/img/Carrossel/Prato7.jpg')}}" alt="Prato 7">
            <img src="{{url ('assets/img/Carrossel/Prato8.jpg')}}" alt="Prato 8">
        </div>
        <div class="overlay">
            <h1>Bem-vindo ao D'VITRINNE</h1>
        </div>
    </section>

    <!-- SOBRE -->
    <section class="sobre">
        <div class="sobre-container">
            <div class="decorated-title">
                <div class="gold-line"></div>
                <h2>SOBRE O RESTAURANTE</h2>
            </div>
            <div class="sobre-texto">
                <p>O D'VITRINNE é um restaurante sofisticado que combina o sabor da culinária tradicional com um toque contemporâneo. 
                Nosso ambiente acolhedor e nossos pratos cuidadosamente elaborados garantem uma experiência inesquecível, repleta de sabor e elegância.</p>
            </div>
        </div>
    </section>

    <!-- LOCALIZAÇÃO -->
    <section class="localizacao">
        <div class="local-container">
            <div class="decorated-title">
                <div class="gold-line"></div>
                <div class="local-info">
                    <h2>LOCALIZAÇÃO</h2>
                    <p>Rua das Palmeiras, 123<br>Centro - Cidade Gourmet - Brasil</p>
                </div>
            </div>
            <div class="local-mapa">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3656.7924291774923!2d-46.65657322458086!3d-23.57644147878852!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce59c65fbd9c5b%3A0x931a9b8acbd9db0f!2sAv.%20Paulista%2C%20S%C3%A3o%20Paulo!5e0!3m2!1spt-BR!2sbr!4v1696267840111!5m2!1spt-BR!2sbr" 
                    width="100%" 
                    height="350" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy">
                </iframe>
            </div>
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
