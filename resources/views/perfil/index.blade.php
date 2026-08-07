<!DOCTYPE html>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil da Cliente</title>



<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Parisienne&display=swap" rel="stylesheet">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/home.css') }}">



</head>
<body>
    
@include('_partials.header')

<main class="perfil-container">


<section class="perfil-topo">

    <div class="foto-perfil">

        <img src="{{ asset($cliente->foto) }}" alt="{{ $cliente->nome }}">

    </div>

    <div class="info-perfil">

    

        <h1>{{ $cliente->nome }}</h1>

        <h2>{{ $cliente->idade }} anos</h2>

        <!-- BOTÃO ADICIONADO -->
        <button 
            type="button" 
            class="btn-editar"
            data-bs-toggle="modal"
            data-bs-target="#modalEditarPerfil">

            Editar perfil

        </button>

    </div>

</section>

<section class="galeria-perfil">

    <h3>Histórico dos Antes & Depois</h3>

    <div class="galeria-perfil-grid">

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

            <div class="procedimento-perfil">

                <h4>{{ $procedimento['nome'] }}</h4>

                <small>{{ $procedimento['data'] }}</small>

                <p>{{ $procedimento['observacao'] }}</p>

            </div>

        @endforeach

    </div>

</section>

<section class="bloco-info">

<a href="{{ route('perfil.anamnese.index') }}" class="titulo-bloco botao-anamnese">
    Ficha de Anamnese
</a>

    <div class="conteudo-bloco">


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


<!-- MODAL PARA EDITAR O PERFIL -->

<div 
    class="modal fade" 
    id="modalEditarPerfil" 
    tabindex="-1"
    aria-labelledby="tituloModalEditarPerfil"
    aria-hidden="true">

    <div class="modal-dialog">

        <div class="modal-content">

            <div class="modal-header">

                <h5 
                    class="modal-title" 
                    id="tituloModalEditarPerfil">

                    Editar perfil

                </h5>

                <button 
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Fechar">

                </button>

            </div>


            <form 
                action="{{ route('perfil.atualizar') }}"
                method="POST"
                enctype="multipart/form-data">

                @csrf

                @method('PUT')


                <div class="modal-body">


                    <!-- CAMPO PARA TROCAR A FOTO -->

                    <div class="mb-3">

                        <label 
                            for="foto"
                            class="form-label">

                            Trocar foto de perfil

                        </label>

                        <input 
                            type="file"
                            name="foto"
                            id="foto"
                            class="form-control"
                            accept="image/*">

                    </div>


                    <!-- CAMPO PARA TROCAR O NOME -->

                    <div class="mb-3">

                        <label 
                            for="nome"
                            class="form-label">

                            Nome

                        </label>

                        <input 
                            type="text"
                            name="nome"
                            id="nome"
                            class="form-control"
                            value="{{ $cliente->nome }}"
                            required>

                    </div>


                </div>


                <div class="modal-footer">

                    <button 
                        type="button"
                        class="btn btn-secondary"
                        data-bs-dismiss="modal">

                        Cancelar

                    </button>


                    <button 
                        type="submit"
                        class="btn-salvar">

                        Salvar alterações

                    </button>

                </div>


            </form>


        </div>

    </div>

</div>


</main>


@include('_partials.footer')



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>