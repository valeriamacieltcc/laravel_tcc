<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title> procedimentos- Valéria Maciel</title>

    <link
        rel="preconnect"
        href="https://fonts.googleapis.com"
    >

    <link
        rel="preconnect"
        href="https://fonts.gstatic.com"
        crossorigin
    >

    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600;700&family=Parisienne&family=Playfair+Display+SC:wght@400;600&display=swap"
        rel="stylesheet"
    >

    <!-- BOOTSTRAP -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >
    <link
        rel="stylesheet"
        href="{{ asset('css/home.css') }}"
    >
    <link
        rel="stylesheet"
        href="{{ asset('css/style.css') }}"
    >
    

</head>

<body>

@include('_partials.header')

<div class="container mt-5">
<div class="meus-agendamentos-header">

                <div class="meus-agendamentos-header-info">

                    <h1 class="meus-agendamentos-title">
                        Meus Favoritos
                    </h1>

                    <p class="meus-agendamentos-description">
                      Visualize seus procedimentos favoritados
                    </p>

                </div>

            </div>


    @if($favoritos->isEmpty())

        <p>Você ainda não possui procedimentos favoritos.</p>

    @else

    <div class="vm-favoritos-grid">

@foreach($favoritos as $favorito)

    <div class="vm-favorito-card">

        @if($favorito->procedimento->imagem)
            <div class="vm-favorito-imagem">
                <img
                    src="{{ asset('storage/' . $favorito->procedimento->imagem) }}"
                    alt="{{ $favorito->procedimento->nome }}"
                >
            </div>
        @endif

        <div class="vm-favorito-conteudo">

            <span class="vm-favorito-label">
                PROCEDIMENTO
            </span>

            <h2 class="vm-favorito-titulo">
                {{ $favorito->procedimento->nome }}
            </h2>

            <div class="vm-favorito-linha"></div>

            <p class="vm-favorito-descricao">
                {{ $favorito->procedimento->descricao }}
            </p>

            <div class="vm-favorito-acoes">

                <a
                    href="{{ route('procedimentos.show', $favorito->procedimento->id) }}"
                    class="vm-favorito-ver"
                >
                    VER PROCEDIMENTO
                </a>

                <form
                    action="{{ route('cliente.favoritos.toggle', $favorito->procedimento->id) }}"
                    method="POST"
                >
                    @csrf

                    <button
                        type="submit"
                        class="vm-favorito-remover"
                    >
                        REMOVER DOS FAVORITOS
                    </button>

                </form>

            </div>

        </div>

    </div>

@endforeach

</div>

        </div>

    @endif

</div>

@include('_partials.footer')

</body>
</html>