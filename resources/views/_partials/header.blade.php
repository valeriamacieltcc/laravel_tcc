<!-- <nav class="navbar">

<div class="cart-icon">

<img src="{{ asset('imagem/menu.png') }}" alt="Menu">

</div>

    <ul>
        <li><a href="#">HOME</a></li>
        <li><a href="../procedimento/index">PROCEDIMENTOS</a></li>
        <li><a href="#">AGENDAR</a></li>
        <li><a href="../vitrine/index">LOJA</a></li>
        <li><a href="#">BLOG</a></li>
    </ul>

    <div class="cart-icon">

            <img src="{{ asset('imagem/bolsa-de-compras.png') }}" alt="Carrinho">

        </div>

</nav>

<section class="logo-section">

    <div class="logo">

        <img class="logo-icon"
             src="{{ asset('imagem/flor-de-lotus.png') }}"
             alt="Flor">

        Valéria Maciel

        <small>ESTÉTICA</small>

    </div>


</section> -->

<nav class="navbar">

    <!-- BOTÃO MENU -->
    <button
        class="menu-button"
        type="button"
        data-bs-toggle="offcanvas"
        data-bs-target="#menuLateral"
        aria-controls="menuLateral">

        <img src="{{ asset('imagem/menu.png') }}" alt="Menu">

    </button>


    <!-- LINKS PRINCIPAIS -->
    <ul>
        <li><a href="#">HOME</a></li>

        <li>
            <a href="../procedimento/index">
                PROCEDIMENTOS
            </a>
        </li>

        <li>
            <a href="#">
                AGENDAR
            </a>
        </li>

        <li>
            <a href="../vitrine/index">
                LOJA
            </a>
        </li>

        <li>
            <a href="#">
                BLOG
            </a>
        </li>
    </ul>


    <!-- CARRINHO -->
    <div class="cart-icon">

        <img
            src="{{ asset('imagem/bolsa-de-compras.png') }}"
            alt="Carrinho">

    </div>

</nav>


<!-- =====================================================
     MENU LATERAL BOOTSTRAP
===================================================== -->

<div
    class="offcanvas offcanvas-start menu-lateral"
    tabindex="-1"
    id="menuLateral"
    aria-labelledby="menuLateralLabel">


    <!-- CABEÇALHO -->

    <div class="offcanvas-header">

        <h5
            class="offcanvas-title"
            id="menuLateralLabel">

            MENU

        </h5>


        <button
            type="button"
            class="btn-close"
            data-bs-dismiss="offcanvas"
            aria-label="Fechar">
        </button>

    </div>


    <!-- CONTEÚDO -->

    <div class="offcanvas-body">

        <div class="menu-links">

            <a href="#">
                HOME
            </a>

            <a href="../procedimento/index">
                PROCEDIMENTOS
            </a>

            <a href="#">
                AGENDAR
            </a>

            <a href="../vitrine/index">
                LOJA
            </a>

            <a href="#">
                BLOG
            </a>

        </div>

    </div>

</div>


<!-- =====================================================
     LOGO
===================================================== -->

<section class="logo-section">

    <div class="logo">

        <img
            class="logo-icon"
            src="{{ asset('imagem/flor-de-lotus.png') }}"
            alt="Flor">

        Valéria Maciel

        <small>ESTÉTICA</small>

    </div>

</section>