<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">

    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Parisienne&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display+SC&display=swap" rel="stylesheet">

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<header class="top-navbar">

<div class="menu-icon">
    ☰
</div>

<nav>
    <a href="#">HOME</a>
    <a href="#">PROCEDIMENTOS</a>
    <a href="#">AGENDAR</a>
    <a href="#">LOJA</a>
    <a href="#">BLOG</a>
</nav>

<div class="cart-icon">
    <img src="{{ asset('imagem/bolsa-de-compras.png') }}" alt="Carrinho">
</div>

</header>

    <!-- CONTAINER -->
    <main class="container">

        <!-- LOGO TEXTO -->
        <section class="logo-section">

<div class="logo">

    <img src="{{ asset('imagem/flor-de-lotus.png') }}" alt="flor" class="logo-icon">

    <h1>Valéria Maciel</h1>

    <small>ESTÉTICA</small>

</div>

</section>

        <!-- BANNER / CARROSSEL -->
        <section class="hero">

            <div id="carouselExampleAutoplaying"
                 class="carousel slide"
                 data-bs-ride="carousel">

                <div class="carousel-inner">

                    <!-- ITEM 1 -->
                    <div class="carousel-item active">

                        <img src="https://i.pinimg.com/1200x/cf/f1/a2/cff1a2994e6447a975c39c4ef6b44abe.jpg"
                             class="d-block w-100"
                             alt="Banner 1">

                    </div>

                    <!-- ITEM 2 -->
                    <div class="carousel-item">

                        <img src="https://i.pinimg.com/1200x/a2/ca/36/a2ca365239e8894df6fa487e31d3a89e.jpg"
                             class="d-block w-100"
                             alt="Banner 2">

                    </div>

                    <!-- ITEM 3 -->
                    <div class="carousel-item">

                        <img src="https://i.pinimg.com/736x/b5/c2/31/b5c2318a43b336e87875193bf0fc15b5.jpg"
                             class="d-block w-100"
                             alt="Banner 3">

                    </div>

                </div>

                <!-- BOTÃO ANTERIOR -->
                <button class="carousel-control-prev"
                        type="button"
                        data-bs-target="#carouselExampleAutoplaying"
                        data-bs-slide="prev">

                    <span class="carousel-control-prev-icon"
                          aria-hidden="true"></span>

                    <span class="visually-hidden">
                        Previous
                    </span>

                </button>

                <!-- BOTÃO PRÓXIMO -->
                <button class="carousel-control-next"
                        type="button"
                        data-bs-target="#carouselExampleAutoplaying"
                        data-bs-slide="next">

                    <span class="carousel-control-next-icon"
                          aria-hidden="true"></span>

                    <span class="visually-hidden">
                        Next
                    </span>

                </button>

            </div>

        </section>

        <!-- SOBRE -->
        <section class="about">

            <!-- FOTO -->
            <div class="about-image">

                <img src="https://i.pinimg.com/736x/c5/ac/77/c5ac77654151b0712c786a7174c85912.jpg"
                     alt="Perfil">

            </div>

            <!-- TEXTO -->
            <div class="about-text">

                <h2>
                    QUEM SOU?
                </h2>

                <p>

                    Valéria Maciel Estética é um espaço dedicado ao cuidado,
                    bem-estar e autoestima. Com profissionais especializados,
                    oferecemos serviços personalizados para elevar sua beleza
                    natural e proporcionar uma experiência acolhedora.

                </p>

            </div>

        </section>

        <!-- SERVIÇOS -->
        <section class="services">

            <!-- CARD 1 -->
            <div class="card">

                <img src="https://i.pinimg.com/1200x/bb/0d/ff/bb0dff7adbd80c5ae3322f070bc562ed.jpg"
                     alt="Corpo">

                <h3>
                    CORPO
                </h3>

            </div>

            <!-- CARD 2 -->
            <div class="card">

                <img src="https://i.pinimg.com/736x/3b/93/99/3b93992768d7266d2de4d6fe7054fe63.jpg"
                     alt="Face">

                <h3>
                    FACE
                </h3>

            </div>

            <!-- CARD 3 -->
            <div class="card">

                <img src="https://i.pinimg.com/736x/85/54/39/85543969a0ca3ff9040745386c4418e9.jpg"
                     alt="Cabelo">

                <h3>
                    CABELO
                </h3>

            </div>

            <!-- CARD 4 -->
            <div class="card">

                <img src="https://i.pinimg.com/736x/c6/12/e6/c612e651df488d64a48ce23eda24ce18.jpg"
                     alt="Unha">

                <h3>
                    UNHA
                </h3>

            </div>

        </section>

    </main>

  <!-- FOOTER -->
<footer class="footer">

<!-- MAPA -->
<div class="footer-map">

    <div class="map-text">
        <h4>VENHA NOS VISITAR</h4>
        <span>Clique para acessar o mapa</span>
    </div>

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3663.177658334066!2d-47.861492999999996!3d-23.3455773!2m3!1f0!2f0!3f0!2m3!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c5d8de3415dfb3%3A0xfe48706959ac40f2!2sAlameda%20Lazinho%20de%20P%C3%A1dua%2C%2085%20-%20Nova%20Tatu%C3%AD%2C%20Tatu%C3%AD%20-%20SP%2C%2018278-350!5e0!3m2!1spt-BR!2sbr!4v1779828749353!5m2!1spt-BR!2sbr"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade">
    </iframe>

</div>
<!-- INFORMAÇÕES -->
<div class="footer-info">

    <h3>
        ALAMEDA LAZINHO DE PÁDUA, Nº85<br>
        NOVA TATUÍ, TATUÍ - SP
    </h3>

    <div class="cart-icon">
        <img src="{{ asset('imagem/whatsapp.png') }}" alt="WhatsApp">
        <p>(15) 99791-8256</p>
    </div>

    <div class="cart-icon">
        <img src="{{ asset('imagem/instagram.png') }}" alt="Instagram">
        <p>@VALERIAMACIEL_ESTETICA</p>
    </div>

</div>

<!-- LOGO -->
<div class="footer-logo">
    <img src="{{ asset('imagem/logo.png') }}" alt="Logo">
</div>

</footer>

<div class="footer-copy">
    <div class="footer-copy-line"></div>

    <p>
        COPYRIGHT 2025 VALERIA MACIEL - TODOS OS DIREITOS RESERVADOS
    </p>
</div>

    <!-- JS BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>