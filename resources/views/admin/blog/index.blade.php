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

    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>
            <h1>Blog</h1>
            <p>Gerencie suas publicações.</p>
        </div>

        <a href="{{ route('admin.blog.create') }}" class="btn btn-primary">
            + NOVA PUBLICAÇÃO
        </a>

    </div>

    @if(session('sucesso'))
        <div class="alert alert-success">
            {{ session('sucesso') }}
        </div>
    @endif

    <div class="row g-4">

        @forelse($posts as $post)

            <div class="col-md-6 col-lg-4">

                <div class="card h-100 shadow-sm">

                    @if($post->imagem)

                        <img
                            src="{{ asset('storage/' . $post->imagem) }}"
                            class="card-img-top"
                            style="height:250px; object-fit:cover;"
                            alt="{{ $post->titulo }}"
                        >

                    @endif

                    <div class="card-body">

                        <span class="badge bg-secondary">
                            {{ $post->categoria ?? 'Sem categoria' }}
                        </span>

                        <h4 class="mt-2">
                            {{ $post->titulo }}
                        </h4>

                        <p>
                            {{ Str::limit($post->conteudo, 120) }}
                        </p>

                        <div class="mb-3">
                            ❤️ {{ $post->curtidas_count }}
                            &nbsp;&nbsp;
                            💬 {{ $post->comentarios_count }}
                        </div>

                        <div class="d-flex gap-2">

                            <a
                                href="{{ route('admin.blog.show', $post->id) }}"
                                class="btn btn-outline-secondary"
                            >
                                VER
                            </a>

                            <a
                                href="{{ route('admin.blog.edit', $post->id) }}"
                                class="btn btn-outline-primary"
                            >
                                EDITAR
                            </a>

                            <form
                                action="{{ route('admin.blog.destroy', $post->id) }}"
                                method="POST"
                                onsubmit="return confirm('Deseja realmente excluir esta publicação?')"
                            >
                                @csrf
                                @method('DELETE')

                                <button class="btn btn-outline-danger">
                                    EXCLUIR
                                </button>
                            </form>

                        </div>

                    </div>

                </div>

            </div>

        @empty

            <div class="text-center py-5">

                <h3>Nenhuma publicação ainda.</h3>

                <p>
                    Comece criando sua primeira publicação.
                </p>

            </div>

        @endforelse

    </div>

</div>


@include('_partials.footer')


<!-- =========================================================
     BOOTSTRAP JS
========================================================= -->

<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js">
</script>
