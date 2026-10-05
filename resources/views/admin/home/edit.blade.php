```html
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Editar Home - Valéria Maciel Estética</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display+SC:wght@400;700&display=swap"
        rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Parisienne&display=swap"
        rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
</head>

<body>

    @include('admin._partials_admin.header_admin')

    <main class="home-container">

        <section class="admin-edit-area">

            <h2>Editar página inicial</h2>

            @if(session('success'))
                <div class="success-message">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('admin.home.update') }}" method="POST">

                @csrf
                @method('PUT')

                <label>Banner 1</label>

                <input
                    type="url"
                    name="banner_1"
                    value="{{ $home->banner_1 }}"
                    class="admin-input">


                <label>Banner 2</label>

                <input
                    type="url"
                    name="banner_2"
                    value="{{ $home->banner_2 }}"
                    class="admin-input">


                <label>Banner 3</label>

                <input
                    type="url"
                    name="banner_3"
                    value="{{ $home->banner_3 }}"
                    class="admin-input">


                <label>Imagem "Quem sou?"</label>

                <input
                    type="url"
                    name="sobre_imagem"
                    value="{{ $home->sobre_imagem }}"
                    class="admin-input">


                <label>Título</label>

                <input
                    type="text"
                    name="sobre_titulo"
                    value="{{ $home->sobre_titulo }}"
                    class="admin-input">


                <label>Descrição</label>

                <textarea
                    name="sobre_texto"
                    class="admin-input admin-textarea">{{ $home->sobre_texto }}</textarea>


                <hr>


                <h4>Categoria 1</h4>

                <label>Imagem</label>

                <input
                    type="url"
                    name="categoria_1_imagem"
                    value="{{ $home->categoria_1_imagem }}"
                    class="admin-input">

                <label>Nome</label>

                <input
                    type="text"
                    name="categoria_1_nome"
                    value="{{ $home->categoria_1_nome }}"
                    class="admin-input">


                <h4>Categoria 2</h4>

                <label>Imagem</label>

                <input
                    type="url"
                    name="categoria_2_imagem"
                    value="{{ $home->categoria_2_imagem }}"
                    class="admin-input">

                <label>Nome</label>

                <input
                    type="text"
                    name="categoria_2_nome"
                    value="{{ $home->categoria_2_nome }}"
                    class="admin-input">


                <h4>Categoria 3</h4>

                <label>Imagem</label>

                <input
                    type="url"
                    name="categoria_3_imagem"
                    value="{{ $home->categoria_3_imagem }}"
                    class="admin-input">

                <label>Nome</label>

                <input
                    type="text"
                    name="categoria_3_nome"
                    value="{{ $home->categoria_3_nome }}"
                    class="admin-input">


                <h4>Categoria 4</h4>

                <label>Imagem</label>

                <input
                    type="url"
                    name="categoria_4_imagem"
                    value="{{ $home->categoria_4_imagem }}"
                    class="admin-input">

                <label>Nome</label>

                <input
                    type="text"
                    name="categoria_4_nome"
                    value="{{ $home->categoria_4_nome }}"
                    class="admin-input">


                <div class="admin-home-actions">

                    <a href="{{ route('admin.home.index') }}" class="btn-voltar">
                        VOLTAR
                    </a>

                    <button type="submit" class="btn-salvar">
                        SALVAR ALTERAÇÕES
                    </button>

                </div>

            </form>

        </section>

    </main>

    @include('admin._partials_admin.footer_admin')

</body>

</html>
```
