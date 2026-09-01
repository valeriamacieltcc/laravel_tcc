
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Valéria Maciel Estética</title>

    <link rel="stylesheet" href="{{ asset('css/home.css') }}">

    <link href="https://fonts.googleapis.com/css2?family=Parisienne&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display+SC:wght@400;700&display=swap" rel="stylesheet">

</head>
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
        <li><a href="{{ route('admin.home') }}">HOME</a></li>

        <li>
            <a href="{{ route('admin.procedimentos.index') }}">
                PROCEDIMENTOS
            </a>
        </li>

        <li>
        <a href="{{ route('admin.agenda.index') }}">
    AGENDA
</a>
        </li>

        <li>
            <a href="{{ route('admin.vitrine.index') }}">
                LOJA
            </a>
        </li>

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

            <a href="{{ route('admin.procedimentos.index') }}">
                Criar Procedimento
            </a>

            <a href="{{ route('admin.agenda.index') }}">
    Agenda
</a>

            <a href="{{ route('admin.vitrine.index') }}">
            Criar Produtos
            </a>

            <a href="{{ route('admin.clientes.index') }}">
    CLIENTES
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