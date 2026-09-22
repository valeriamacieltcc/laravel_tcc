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

    <h1 class="mb-4">
        Editar Publicação
    </h1>

    <form
        action="{{ route('admin.blog.update', $post->id) }}"
        method="POST"
        enctype="multipart/form-data"
    >

        @csrf
        @method('PUT')

        <div class="mb-3">

            <label class="form-label">
                Título
            </label>

            <input
                type="text"
                name="titulo"
                class="form-control"
                value="{{ old('titulo', $post->titulo) }}"
                required
            >

        </div>

        <div class="mb-3">

            <label class="form-label">
                Categoria
            </label>

            <input
                type="text"
                name="categoria"
                class="form-control"
                value="{{ old('categoria', $post->categoria) }}"
            >

        </div>

        @if($post->imagem)

            <div class="mb-3">

                <label class="form-label">
                    Imagem atual
                </label>

                <br>

                <img
                    src="{{ asset('storage/' . $post->imagem) }}"
                    style="max-width:300px;"
                    class="img-fluid rounded"
                >

            </div>

        @endif

        <div class="mb-3">

            <label class="form-label">
                Nova imagem
            </label>

            <input
                type="file"
                name="imagem"
                class="form-control"
                accept="image/*"
            >

        </div>

        <div class="mb-3">

            <label class="form-label">
                Conteúdo
            </label>

            <textarea
                name="conteudo"
                class="form-control"
                rows="8"
                required
            >{{ old('conteudo', $post->conteudo) }}</textarea>

        </div>

        <div class="form-check mb-4">

            <input
                type="checkbox"
                name="publicado"
                value="1"
                class="form-check-input"
                id="publicado"
                {{ $post->publicado ? 'checked' : '' }}
            >

            <label
                class="form-check-label"
                for="publicado"
            >
                Publicação visível no Blog
            </label>

        </div>

        <button class="btn btn-primary">
            SALVAR ALTERAÇÕES
        </button>

        <a
            href="{{ route('admin.blog.index') }}"
            class="btn btn-secondary"
        >
            CANCELAR
        </a>

    </form>

</div>


@include('_partials.footer')


<!-- =========================================================
     BOOTSTRAP JS
========================================================= -->

<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js">
</script>
