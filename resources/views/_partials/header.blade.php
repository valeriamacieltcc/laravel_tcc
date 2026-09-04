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

        <!-- HOME -->
        <li>
            <a href="{{ route('home.index') }}">
                HOME
            </a>
        </li>


        <!-- PROCEDIMENTOS -->
        <li>
            <a href="{{ route('procedimento.index') }}">
                PROCEDIMENTOS
            </a>
        </li>


        <!-- AGENDAR -->
        <li>
            <a href="{{ route('cliente.agendamentos.index') }}">
                AGENDAR
            </a>
        </li>


        <!-- LOJA -->
        <li>
            <a href="{{ route('vitrine.index') }}">
                LOJA
            </a>
        </li>


        <!-- BLOG -->
        <li>
            <a href="#">
                BLOG
            </a>
        </li>

    </ul>





    <div class="cart-icon">
    @auth
        <a href="{{ route('cliente.perfil.show') }}">

            @if(Auth::user()->cliente && Auth::user()->cliente->foto_perfil)

                <img
                    src="{{ asset('storage/' . Auth::user()->cliente->foto_perfil) }}"
                    alt="Meu perfil"
                    class="foto-navbar"
                >

            @else

                <img
                    src="{{ asset('imagem/perfil-padrao.png') }}"
                    alt="Meu perfil"
                    class="foto-navbar"
                >

            @endif

        </a>
    @else

        <a href="{{ route('login') }}">
            <img
                src="{{ asset('imagem/perfil-padrao.png') }}"
                alt="Entrar"
                class="foto-navbar"
            >
        </a>

    @endauth

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