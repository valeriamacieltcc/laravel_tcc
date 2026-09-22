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

    <div class="row justify-content-center">

        <div class="col-lg-8">

            <article class="card shadow-sm">

                @if($post->imagem)

                    <img
                        src="{{ asset('storage/' . $post->imagem) }}"
                        class="card-img-top"
                        style="max-height:600px; object-fit:cover;"
                        alt="{{ $post->titulo }}"
                    >

                @endif

                <div class="card-body p-4">

                    @if($post->categoria)

                        <span class="badge bg-secondary">
                            {{ $post->categoria }}
                        </span>

                    @endif

                    <h1 class="mt-3">
                        {{ $post->titulo }}
                    </h1>

                    <p class="text-muted">
                        Por {{ $post->autor->name }}
                    </p>

                    <hr>

                    <p style="white-space: pre-line;">
                        {{ $post->conteudo }}
                    </p>

                    <hr>

                    @auth

                        @php
                            $curtiu = $post->curtidas()
                                ->where('user_id', auth()->id())
                                ->exists();
                        @endphp

                        <form
                            action="{{ route('cliente.blog.curtir', $post->id) }}"
                            method="POST"
                            class="mb-4"
                        >

                            @csrf

                            <button
                                type="submit"
                                class="btn {{ $curtiu ? 'btn-danger' : 'btn-outline-danger' }}"
                            >
                                {{ $curtiu ? '❤️ Curtido' : '♡ Curtir' }}
                            </button>

                            <span class="ms-2">
                                {{ $post->curtidas_count }} curtidas
                            </span>

                        </form>

                        <h4>
                            💬 Comentar
                        </h4>

                        <form
                            action="{{ route('cliente.blog.comentar', $post->id) }}"
                            method="POST"
                            class="mb-4"
                        >

                            @csrf

                            <textarea
                                name="comentario"
                                class="form-control mb-2"
                                rows="3"
                                placeholder="Escreva um comentário..."
                                required
                            ></textarea>

                            <button class="btn btn-primary">
                                PUBLICAR COMENTÁRIO
                            </button>

                        </form>

                    @else

                        <p>
                            <a href="{{ route('login') }}">
                                Entre na sua conta
                            </a>
                            para curtir e comentar.
                        </p>

                    @endauth

                    <hr>

                    <h4>
                        Comentários
                    </h4>

                    @forelse($post->comentarios as $comentario)

                        <div class="border rounded p-3 mt-3">

                            <strong>
                                {{ $comentario->usuario->name }}
                            </strong>

                            <p class="mb-0 mt-2">
                                {{ $comentario->comentario }}
                            </p>

                        </div>

                    @empty

                        <p class="text-muted mt-3">
                            Ainda não há comentários.
                        </p>

                    @endforelse

                </div>

            </article>

        </div>

    </div>

</div>
@include('_partials.footer')


<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
></script>