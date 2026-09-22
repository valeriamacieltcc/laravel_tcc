<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        Avaliar procedimento | Valéria Maciel
    </title>


    <!-- FONTES -->

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


    <!-- CSS -->

    <link
        rel="stylesheet"
        href="{{ asset('css/style.css') }}"
    >

    <link
        rel="stylesheet"
        href="{{ asset('css/home.css') }}"
    >

    <link
        rel="stylesheet"
        href="{{ asset('css/avaliacao.css') }}"
    >

</head>


<body>


@include('_partials.header')



<div class="container py-5">

    <div class="text-center mb-5">

        <h1>Blog</h1>

        <p>
            Dicas, cuidados e novidades da Valéria Maciel Estética.
        </p>

    </div>

    <div class="row g-4">

        @forelse($posts as $post)

            <div class="col-md-6 col-lg-4">

                <div class="card h-100 shadow-sm">

                    @if($post->imagem)

                        <img
                            src="{{ asset('storage/' . $post->imagem) }}"
                            class="card-img-top"
                            style="height:280px; object-fit:cover;"
                            alt="{{ $post->titulo }}"
                        >

                    @endif

                    <div class="card-body">

                        @if($post->categoria)

                            <span class="badge bg-secondary">
                                {{ $post->categoria }}
                            </span>

                        @endif

                        <h3 class="mt-2">
                            {{ $post->titulo }}
                        </h3>

                        <p>
                            {{ Str::limit($post->conteudo, 150) }}
                        </p>

                        <div class="mb-3">

                            ❤️ {{ $post->curtidas_count }}

                            &nbsp;&nbsp;

                            💬 {{ $post->comentarios->count() }}

                        </div>

                        <a
                            href="{{ route('blog.show', $post->id) }}"
                            class="btn btn-outline-primary"
                        >
                            VER PUBLICAÇÃO
                        </a>

                    </div>

                </div>

            </div>

        @empty

            <div class="text-center">

                <h3>
                    Nenhuma publicação disponível.
                </h3>

            </div>

        @endforelse

    </div>

</div>


@include('_partials.footer')


<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
></script>