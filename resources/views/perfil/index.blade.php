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

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

    <!-- NAVBAR -->
    <header class="navbar">

        <!-- MENU -->
        <div class="menu-icon">
            ☰
        </div>

        <!-- MENU LINKS -->
        <nav>

            <a href="#">HOME</a>
            <a href="#">PROCEDIMENTOS</a>
            <a href="#">AGENDAR</a>
            <a href="#">LOJA</a>
            <a href="#">BLOG</a>

        </nav>

      

    </header>

    <!-- CONTAINER -->
    <main class="container">

        <!-- LOGO TEXTO -->
        <section class="logo-section">

        <div class="cart-icon">

        <img src="{{ asset('imagem/flor-de-lotus.png') }}" alt="flor">

        </div>

            <h1>
                Valéria Maciel
            </h1>

            <span>
                ESTÉTICA
            </span>

        </section>

        

                 


            

        </section>

        <!-- SOBRE -->
        <section class="about">

            <!-- FOTO -->
            <div class="about-image">

             

            </div>

            <!-- TEXTO -->
            <div class="about-text">

               

               

            </div>
            

        

    </main>

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

        <!-- LOGO FOOTER -->
        <div class="footer-logo">

            <h2>
                Valéria Maciel
            </h2>

            <span>
                ESTÉTICA
            </span>

        </div>

    </footer>

    <!-- JS BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>