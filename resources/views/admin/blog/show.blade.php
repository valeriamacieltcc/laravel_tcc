<!DOCTYPE html>
<html lang="pt-br">

<head>

    @include('admin._partials_admin.header_admin')

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Agenda | Valéria Maciel Estética</title>


    <!-- =====================================================
         BOOTSTRAP
    ====================================================== -->

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >


    <!-- =====================================================
         FONTES
    ====================================================== -->

    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600;700&display=swap"
        rel="stylesheet"
    >

    <link
        href="https://fonts.googleapis.com/css2?family=Parisienne&display=swap"
        rel="stylesheet"
    >

    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display+SC:wght@400;700&display=swap"
        rel="stylesheet"
    >


    <!-- =====================================================
         CSS DO SITE
    ====================================================== -->

    <!-- <link
        rel="stylesheet"
        href="{{ asset('css/style.css') }}"
    > -->

    <link
        rel="stylesheet"
        href="{{ asset('css/admin.css') }}"
    >


<div class="container py-5">

    <a
        href="{{ route('admin.blog.index') }}"
        class="btn btn-secondary mb-4"
    >
        ← VOLTAR
    </a>

    <div class="card shadow-sm">

        @if($post->imagem)

            <img
                src="{{ asset('storage/' . $post->imagem) }}"
                class="card-img-top"
                style="max-height:500px; object-fit:cover;"
                alt="{{ $post->titulo }}"
            >

        @endif

        <div class="card-body">

            <span class="badge bg-secondary">
                {{ $post->categoria ?? 'Sem categoria' }}
            </span>

            <h1 class="mt-3">
                {{ $post->titulo }}
            </h1>

            <p class="text-muted">
                Publicado por {{ $post->autor->name }}
            </p>

            <hr>

            <p style="white-space: pre-line;">
                {{ $post->conteudo }}
            </p>

            <hr>

            <h4>
                ❤️ {{ $post->curtidas_count }} curtidas
            </h4>

            <h4 class="mt-4">
                💬 Comentários
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

    </div>

</div>

@include('_partials.footer')


<!-- =========================================================
     BOOTSTRAP JS
========================================================= -->

<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js">
</script>
