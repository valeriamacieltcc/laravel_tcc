<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Perfil da Cliente</title>

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
        href="https://fonts.googleapis.com/css2?family=Parisienne&family=Playfair+Display+SC:wght@400;600;700&display=swap"
        rel="stylesheet"
    >

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <link
        rel="stylesheet"
        href="{{ asset('css/home.css') }}"
    >

</head>


<body>


{{-- =====================================================
     HEADER / NAVBAR
     ===================================================== --}}

@include('_partials.header')

@foreach($cliente->fotosAcompanhamento as $foto)

    <div class="card-antes-depois">

        {{-- NOME DO PROCEDIMENTO --}}
        @if($foto->procedimento)
            <h2>{{ $foto->procedimento }}</h2>
        @endif

        {{-- DESCRIÇÃO / OBSERVAÇÃO --}}
        @if($foto->observacao)
            <p class="descricao-procedimento">
                {{ $foto->observacao }}
            </p>
        @endif

        <div class="fotos-antes-depois">

            @if($foto->foto_antes)
                <div class="foto-item">
                    <span>Antes</span>

                    <img
                        src="{{ asset('storage/' . $foto->foto_antes) }}"
                        alt="Antes"
                    >
                </div>
            @endif

            @if($foto->foto_depois)
                <div class="foto-item">
                    <span>Depois</span>

                    <img
                        src="{{ asset('storage/' . $foto->foto_depois) }}"
                        alt="Depois"
                    >
                </div>
            @endif

        </div>

    </div>

@endforeach


{{-- =====================================================
     FOOTER
     ===================================================== --}}

@include('_partials.footer')



<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
></script>


</body>

</html>