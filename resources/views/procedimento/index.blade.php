<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Procedimentos & Cuidados</title>
<link rel="stylesheet" href="{{ asset('css/procedimento.css') }}">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display+SC:wght@400;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Parisienne&display=swap" rel="stylesheet">
</head>

<body>


<nav class="navbar">

    <div class="menu">☰</div>

    <ul>
        <li><a href="#">HOME</a></li>
        <li><a href="#">PROCEDIMENTOS</a></li>
        <li><a href="#">AGENDAR</a></li>
        <li><a href="#">LOJA</a></li>
        <li><a href="#">BLOG</a></li>
    </ul>

    <div class="cart-icon">

            <img src="{{ asset('imagem/bolsa-de-compras.png') }}" alt="Carrinho">

        </div>

</nav>

<!-- TOPO -->
<section class="logo-section">

    <div class="logo">

        <img class="logo-icon"
             src="{{ asset('imagem/flor-de-lotus.png') }}"
             alt="Flor">

        Valéria Maciel

        <small>ESTÉTICA</small>

    </div>

    <div class="titulo">
        <h1>PROCEDIMENTOS &<br> CUIDADOS</h1>
    </div>

</section>

<!-- CARDS -->

<section class="cards">

    <div class="card">
        <img src="https://i.pinimg.com/1200x/e9/30/1b/e9301b3c37268ae7afd20085e2e05d5f.jpg">
        <div class="card-body">
            <h3>LIMPEZA DE PELE</h3>
            <p>Remoção de impurezas e revitalização da pele.</p>
            <button class="btn">VER MAIS</button>
        </div>
    </div>

    <div class="card">
        <img src="{{ asset('img/sobrancelha.jpg') }}">
        <div class="card-body">
            <h3>DESIGN DE SOBRANCELHA</h3>
            <p>Realce natural.</p>
            <button class="btn">VER MAIS</button>
        </div>
    </div>

    <div class="card">
        <img src="{{ asset('img/depilacao.jpg') }}">
        <div class="card-body">
            <h3>DEPILAÇÃO A CERA</h3>
            <p>Pelos mais finos e menos frequentes.</p>
            <button class="btn">VER MAIS</button>
        </div>
    </div>

    <div class="card">
        <img src="{{ asset('img/massagem.jpg') }}">
        <div class="card-body">
            <h3>MASSAGEM</h3>
            <p>Relaxamento e alívio das dores.</p>
            <button class="btn">VER MAIS</button>
        </div>
    </div>

    <div class="card">
        <img src="{{ asset('img/manicure.jpg') }}">
        <div class="card-body">
            <h3>MANICURE</h3>
            <p>Beleza das unhas das mãos.</p>
            <button class="btn">VER MAIS</button>
        </div>
    </div>

    <div class="card">
        <img src="{{ asset('img/pedicure.jpg') }}">
        <div class="card-body">
            <h3>PEDICURE</h3>
            <p>Beleza das unhas dos pés.</p>
            <button class="btn">VER MAIS</button>
        </div>
    </div>

    <div class="card">
        <img src="{{ asset('img/capilar.jpg') }}">
        <div class="card-body">
            <h3>TRATAMENTOS CAPILARES</h3>
            <p>Práticas terapêuticas e estéticas.</p>
            <button class="btn">VER MAIS</button>
        </div>
    </div>

    <div class="card">
        <img src="{{ asset('img/tintura.jpg') }}">
        <div class="card-body">
            <h3>TINTURAS</h3>
            <p>Práticas terapêuticas e estéticas.</p>
            <button class="btn">VER MAIS</button>
        </div>
    </div>

</section>

<!-- RODAPÉ -->
 
    <!-- FOOTER -->
    <footer class="footer">

        <!-- MAPA -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3663.177658334066!2d-47.861492999999996!3d-23.3455773!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c5d8de3415dfb3%3A0xfe48706959ac40f2!2sAlameda%20Lazinho%20de%20P%C3%A1dua%2C%2085%20-%20Nova%20Tatu%C3%AD%2C%20Tatu%C3%AD%20-%20SP%2C%2018278-350!5e0!3m2!1spt-BR!2sbr!4v1779828749353!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

        </div>

        <!-- INFORMAÇÕES -->
        <div class="footer-info">

            <h3>
                ALAMEDA LAZINHO DE PÁDUA, Nº5
            </h3>

            <p>
                NOVA TATUÍ, TATUÍ - SP
            </p>

            <div class="cart-icon">

                <img src="{{ asset('imagem/whatsapp.png') }}" alt="WhatsApp">

                <p>(15) 99791-8256</p>

            </div>
            
            <div class="cart-icon">

                <img src="{{ asset('imagem/instagram.png') }}" alt="WhatsApp">

                <p> @VALERIAMACIEL_ESTETICA</p>

            </div>
         

        </div>
        <div class="logo-footer">
        <img src="{{ asset('imagem/logo.png') }}" alt="Logo">
        </div>
    </footer>



</footer> -->

</body>
</html>