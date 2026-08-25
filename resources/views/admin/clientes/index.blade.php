<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        Clientes | Valéria Maciel Estética
    </title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <link
        rel="stylesheet"
        href="{{ asset('css/style.css') }}"
    >

</head>

<body>



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



<main class="container py-5">


    <h1 class="mb-4">
        Clientes
    </h1>


    <div class="row">


        @forelse($clientes as $cliente)


            <div class="col-md-4 mb-4">


                <div class="card h-100">


                    <div class="card-body">


                        <h5 class="card-title">

                            {{ $cliente->user->name ?? 'Cliente' }}

                        </h5>


                        <p>

                            {{ $cliente->user->email ?? '' }}

                        </p>


                        @if($cliente->telefone)

                            <p>
                                {{ $cliente->telefone }}
                            </p>

                        @endif


                        <a
                            href="{{ route(
                                'admin.clientes.show',
                                $cliente
                            ) }}"
                            class="btn btn-success"
                        >

                            Ver cliente

                        </a>


                    </div>


                </div>


            </div>


        @empty


            <p>
                Nenhuma cliente cadastrada.
            </p>


        @endforelse


    </div>


</main>


@include('_partials.footer')


<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js">
</script>


</body>

</html>