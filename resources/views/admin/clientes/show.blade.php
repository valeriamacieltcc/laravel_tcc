<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        Cliente | Valéria Maciel Estética
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



<main class="container py-5">

    <h1>
        {{ $cliente->user->name ?? 'Cliente' }}
    </h1>

    <hr>

    <h2>Dados da cliente</h2>

    <p>
        <strong>Nome:</strong>
        {{ $cliente->user->name ?? 'Não informado' }}
    </p>

    <p>
        <strong>E-mail:</strong>
        {{ $cliente->user->email ?? 'Não informado' }}
    </p>

    <p>
        <strong>Telefone:</strong>
        {{ $cliente->telefone ?? 'Não informado' }}
    </p>


    <hr>


    <h2>Ficha de Anamnese</h2>

    @if($cliente->anamnese)

        <p>
            A cliente possui uma ficha de anamnese.
        </p>

        <a
    href="{{ route(
        'admin.clientes.show',
        $cliente
    ) }}"
    class="btn btn-success"
>
    Ver Ficha de Anamnese
</a>

    @else

        <p>
            Nenhuma ficha de anamnese cadastrada.
        </p>

        <a
            href="{{ route(
                'admin.clientes.edit_anamnese',
                $cliente
            ) }}"
            class="btn btn-success"
        >
            Criar Anamnese
        </a>

    @endif


    <hr>


    <h2>Fotos de Antes e Depois</h2>

    <a
        href="{{ route(
            'admin.clientes.fotos.create',
            $cliente
        ) }}"
        class="btn btn-success mb-4"
    >
        + Adicionar Fotos
    </a>


    @forelse($cliente->fotosAcompanhamento as $foto)

        <div class="card mb-4">

            <div class="card-body">

                @if($foto->procedimento)

                    <h4>
                        {{ $foto->procedimento }}
                    </h4>

                @endif


                @if($foto->data)

                    <p>
                        {{ $foto->data->format('d/m/Y') }}
                    </p>

                @endif


                <div class="row">

                    <div class="col-md-6">

                        <h5>Antes</h5>

                        @if($foto->foto_antes)

                            <img
                                src="{{ asset(
                                    'storage/' .
                                    $foto->foto_antes
                                ) }}"
                                class="img-fluid"
                                alt="Foto antes"
                            >

                        @else

                            <p>
                                Sem foto.
                            </p>

                        @endif

                    </div>


                    <div class="col-md-6">

                        <h5>Depois</h5>

                        @if($foto->foto_depois)

                            <img
                                src="{{ asset(
                                    'storage/' .
                                    $foto->foto_depois
                                ) }}"
                                class="img-fluid"
                                alt="Foto depois"
                            >

                        @else

                            <p>
                                Sem foto.
                            </p>

                        @endif

                    </div>

                </div>


                @if($foto->observacao)

                    <p class="mt-3">

                        <strong>Observação:</strong>

                        {{ $foto->observacao }}

                    </p>

                @endif


                <form
                    method="POST"
                    action="{{ route(
                        'admin.clientes.fotos.destroy',
                        $foto
                    ) }}"
                    class="mt-3"
                >

                    @csrf
                    @method('DELETE')

                    <button
                        type="submit"
                        class="btn btn-danger"
                    >
                        Excluir fotos
                    </button>

                </form>

            </div>

        </div>


    @empty

        <p>
            Nenhuma foto de acompanhamento cadastrada.
        </p>

    @endforelse

</main>


@include('_partials.footer')


<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js">
</script>

</body>

</html>