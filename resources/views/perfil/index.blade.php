<!DOCTYPE html>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil da Cliente</title>


<link rel="stylesheet" href="{{ asset('css/perfil.css') }}">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Parisienne&display=swap" rel="stylesheet">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">


</head>
<body>



<main class="perfil-container">


<section class="perfil-topo">

    <div class="foto-perfil">

        <img src="{{ asset($cliente->foto) }}" alt="{{ $cliente->nome }}">

    </div>

    <div class="info-perfil">

    

        <h1>{{ $cliente->nome }}</h1>

        <h2>{{ $cliente->idade }} anos</h2>

    </div>

</section>

<section class="galeria">

    <h3>Histórico dos Antes & Depois</h3>

    <div class="galeria-grid">

        @foreach($cliente->antes_depois as $foto)

            <img src="{{ asset($foto) }}" alt="Antes e Depois">

        @endforeach

    </div>

</section>

<section class="bloco-info">

    <div class="titulo-bloco">
        Histórico dos Procedimentos
    </div>

    <div class="conteudo-bloco">

        @foreach($cliente->procedimentos as $procedimento)

            <div class="procedimento">

                <h4>{{ $procedimento['nome'] }}</h4>

                <small>{{ $procedimento['data'] }}</small>

                <p>{{ $procedimento['observacao'] }}</p>

            </div>

        @endforeach

    </div>

</section>

<section class="bloco-info">

    <div class="titulo-bloco">
        Ficha de Anamnese
    </div>

    <div class="conteudo-bloco">

        <p><strong>Alergias:</strong> {{ $cliente->anamnese['alergias'] }}</p>

        <p><strong>Medicamentos:</strong> {{ $cliente->anamnese['medicamentos'] }}</p>

        <p><strong>Doenças:</strong> {{ $cliente->anamnese['doencas'] }}</p>

        <p><strong>Observações:</strong> {{ $cliente->anamnese['observacoes'] }}</p>

    </div>

</section>

<section class="bloco-info">

    <div class="titulo-bloco">
        Favoritos
    </div>

    <div class="conteudo-bloco">

        <ul>

            @foreach($cliente->favoritos as $favorito)

                <li>{{ $favorito }}</li>

            @endforeach

        </ul>

    </div>

</section>

</main>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
