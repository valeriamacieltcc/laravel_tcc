<!DOCTYPE html>

<html lang="pt-br">

<head>

<meta charset="UTF-8">

<meta
    name="viewport"
    content="width=device-width, initial-scale=1.0"
>

<title>Vitrine | Administração</title>


<!-- FONTES -->

<link rel="preconnect" href="https://fonts.googleapis.com">

<link
    rel="preconnect"
    href="https://fonts.gstatic.com"
    crossorigin
>

<link
    href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600&family=Parisienne&family=Playfair+Display+SC&display=swap"
    rel="stylesheet"
>


<!-- BOOTSTRAP -->

<link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
>


<!-- CSS -->

<link
    rel="stylesheet"
    href="{{ asset('css/style.css') }}"
>

<link
    rel="stylesheet"
    href="{{ asset('css/admin.css') }}"
>


</head>


<body>


@include('admin._partials_admin.header_admin')


<main class="vitrine-detalhe">

    <div class="vitrine-detalhe-container">


        <!-- TÍTULO -->

        <div class="vitrine-detalhe-titulo">

            <h1>
                {{ $vitrine->nome }}
            </h1>

            <p>
                Detalhes do produto
            </p>

        </div>


        <!-- CONTEÚDO -->

        <div class="vitrine-detalhe-conteudo">


            <!-- IMAGEM -->

            <div class="vitrine-detalhe-imagem">

                @if($vitrine->imagem)

                    <img
                        src="{{ asset('storage/' . $vitrine->imagem) }}"
                        alt="{{ $vitrine->nome }}"
                    >

                @else

                    <div class="vitrine-detalhe-sem-imagem">
                        Sem imagem
                    </div>

                @endif

            </div>


            <!-- INFORMAÇÕES -->

            <div class="vitrine-detalhe-informacoes">


                <div class="vitrine-detalhe-item">

                    <strong>
                        Marca
                    </strong>

                    <span>
                        {{ $vitrine->marca }}
                    </span>

                </div>

                <div class="vitrine-detalhe-item">

<strong>
    Categoria
</strong>

<span>
    {{ $vitrine->categoria ?? 'Não informada' }}
</span>

</div>
                <div class="vitrine-detalhe-item">

                    <strong>
                        Descrição
                    </strong>

                    <span>
                        {{ $vitrine->descricao }}
                    </span>

                </div>


                <div class="vitrine-detalhe-item">

                    <strong>
                        Preço
                    </strong>

                    <span class="vitrine-detalhe-preco">
                        R$ {{ number_format($vitrine->preco, 2, ',', '.') }}
                    </span>

                </div>


                <div class="vitrine-detalhe-item">

                    <strong>
                        Status
                    </strong>

                    @if($vitrine->disponivel)

                        <span class="vitrine-status disponivel">
                            Disponível
                        </span>

                    @else

                        <span class="vitrine-status indisponivel">
                            Indisponível
                        </span>

                    @endif

                </div>


                <div class="vitrine-detalhe-item">

                    <strong>
                        Link para contato
                    </strong>

                    @if($vitrine->link_contato)

                        <a
                            href="{{ $vitrine->link_contato }}"
                            target="_blank"
                            class="vitrine-link"
                        >
                            {{ $vitrine->link_contato }}
                        </a>

                    @else

                        <span>
                            Não informado
                        </span>

                    @endif

                </div>


            </div>

        </div>


        <!-- BOTÕES -->

        <div class="vitrine-detalhe-acoes">

            <a
                href="{{ route('admin.vitrine.edit', $vitrine) }}"
                class="vitrine-detalhe-botao editar"
            >
                Editar
            </a>


            <a
                href="{{ route('admin.vitrine.index') }}"
                class="vitrine-detalhe-botao voltar"
            >
                Voltar
            </a>

        </div>


    </div>

</main>

<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
></script>

@include('admin._partials_admin.footer_admin')


</body>

</html>

