<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Meus Favoritos</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <link
        rel="stylesheet"
        href="{{ asset('css/procedimento.css') }}"
    >
</head>

<body>

@include('_partials.header')

<div class="container mt-5">

    <h1>Meus Favoritos ❤️</h1>

    @if($favoritos->isEmpty())

        <p>Você ainda não possui procedimentos favoritos.</p>

    @else

        <div class="row">

            @foreach($favoritos as $favorito)

                <div class="col-md-4 mb-4">

                    <div class="card">

                        @if($favorito->procedimento->imagem)
                            <img
                                src="{{ asset('storage/' . $favorito->procedimento->imagem) }}"
                                class="card-img-top"
                            >
                        @endif

                        <div class="card-body">

                            <h3>
                                {{ $favorito->procedimento->nome }}
                            </h3>

                            <p>
                                {{ $favorito->procedimento->descricao }}
                            </p>

                            <a
                                href="{{ route('procedimentos.show', $favorito->procedimento->id) }}"
                                class="btn btn-primary"
                            >
                                Ver procedimento
                            </a>

                            <form
                                action="{{ route('cliente.favoritos.toggle', $favorito->procedimento->id) }}"
                                method="POST"
                                class="mt-2"
                            >
                                @csrf

                                <button
                                    type="submit"
                                    class="btn btn-danger"
                                >
                                    ❤️ Remover dos favoritos
                                </button>

                            </form>

                        </div>

                    </div>

                </div>

            @endforeach

        </div>

    @endif

</div>

@include('_partials.footer')

</body>
</html>