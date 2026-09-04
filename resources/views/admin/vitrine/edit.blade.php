<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Editar Produto | Admin</title>


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
        href="{{ asset('css/admin.css') }}"
    >

    <link
        rel="stylesheet"
        href="{{ asset('css/style.css') }}"
    >

</head>


<body>

@include('admin._partials_admin.header_admin')


<main class="vm-produto-page">

    <div class="vm-produto-container">


        <!-- =====================================================
             CABEÇALHO
             ===================================================== -->

        <header class="vm-produto-header">

            <span class="vm-produto-subtitle">
                Administração da vitrine
            </span>

            <h1 class="vm-produto-title">
                Editar produto
            </h1>

            <p class="vm-produto-description">
                Atualize as informações do produto disponível na loja.
            </p>

        </header>


        <!-- =====================================================
             ERROS
             ===================================================== -->

        @if($errors->any())

            <div class="vm-produto-alert vm-produto-alert-erro">

                <strong>
                    Verifique os dados informados
                </strong>

                <ul>

                    @foreach($errors->all() as $erro)

                        <li>
                            {{ $erro }}
                        </li>

                    @endforeach

                </ul>

            </div>

        @endif


        <!-- =====================================================
             FORMULÁRIO
             ===================================================== -->

        <form
            action="{{ route('admin.vitrine.update', $vitrine) }}"
            method="POST"
            enctype="multipart/form-data"
            class="vm-produto-form"
        >

            @csrf

            @method('PUT')


            <!-- =================================================
                 SEÇÃO 01
                 ================================================= -->

            <section class="vm-produto-section">


                <div class="vm-produto-section-title">

                    <span class="vm-produto-number">
                        01
                    </span>


                    <div class="vm-produto-section-info">

                        <small>
                            Informações principais
                        </small>

                        <h2>
                            Dados do produto
                        </h2>

                    </div>

                </div>


                <div class="vm-produto-grid">


                    <!-- NOME -->

                    <div class="vm-produto-field">

                        <label for="nome">
                            Nome do produto
                        </label>

                        <input
                            type="text"
                            id="nome"
                            name="nome"
                            value="{{ old('nome', $vitrine->nome) }}"
                            placeholder="Digite o nome do produto"
                            required
                        >

                    </div>


                    <!-- MARCA -->

                    <div class="vm-produto-field">

                        <label for="marca">
                            Marca
                        </label>

                        <input
                            type="text"
                            id="marca"
                            name="marca"
                            value="{{ old('marca', $vitrine->marca) }}"
                            placeholder="Digite a marca"
                            required
                        >

                    </div>


                    <!-- DESCRIÇÃO -->

                    <div class="vm-produto-field vm-produto-field-full">

                        <label for="descricao">
                            Descrição
                        </label>

                        <textarea
                            id="descricao"
                            name="descricao"
                            placeholder="Descreva o produto..."
                            required
                        >{{ old('descricao', $vitrine->descricao) }}</textarea>

                    </div>


                    <!-- PREÇO -->

                    <div class="vm-produto-field">

                        <label for="preco">
                            Preço
                        </label>

                        <input
                            type="number"
                            id="preco"
                            name="preco"
                            step="0.01"
                            min="0"
                            value="{{ old('preco', $vitrine->preco) }}"
                            placeholder="0,00"
                            required
                        >

                    </div>


                    <!-- LINK -->

                    <div class="vm-produto-field">

                        <label for="link_contato">
                            Link para contato
                        </label>

                        <input
                            type="text"
                            id="link_contato"
                            name="link_contato"
                            value="{{ old('link_contato', $vitrine->link_contato) }}"
                            placeholder="Digite o link para contato"
                        >

                    </div>

                </div>

            </section>


            <!-- =================================================
                 SEÇÃO 02
                 ================================================= -->

            <section class="vm-produto-section">


                <div class="vm-produto-section-title">

                    <span class="vm-produto-number">
                        02
                    </span>


                    <div class="vm-produto-section-info">

                        <small>
                            Imagem do produto
                        </small>

                        <h2>
                            Foto da vitrine
                        </h2>

                    </div>

                </div>


                <div class="vm-produto-grid">


                    <!-- IMAGEM ATUAL -->

                    <div class="vm-produto-field vm-produto-field-full">

                        <label>
                            Imagem atual
                        </label>


                        @if($vitrine->imagem)

                            <img
                                src="{{ asset('storage/' . $vitrine->imagem) }}"
                                alt="{{ $vitrine->nome }}"
                                class="vm-produto-imagem-atual"
                            >

                        @else

                            <div class="vm-produto-sem-imagem">

                                Nenhuma imagem cadastrada.

                            </div>

                        @endif

                    </div>


                    <!-- NOVA IMAGEM -->

                    <div class="vm-produto-field vm-produto-field-full">

                        <label for="imagem">
                            Alterar imagem
                        </label>

                        <div class="vm-produto-upload">

                            <input
                                type="file"
                                id="imagem"
                                name="imagem"
                                accept="image/*"
                            >

                            <small class="vm-produto-help">
                                Selecione uma nova imagem caso queira substituir a atual.
                            </small>

                        </div>

                    </div>

                </div>

            </section>


            <!-- =================================================
                 SEÇÃO 03
                 ================================================= -->

            <section class="vm-produto-section">


                <div class="vm-produto-section-title">

                    <span class="vm-produto-number">
                        03
                    </span>


                    <div class="vm-produto-section-info">

                        <small>
                            Disponibilidade
                        </small>

                        <h2>
                            Status do produto
                        </h2>

                    </div>

                </div>


                <label class="vm-produto-check">

                    <input
                        type="checkbox"
                        id="disponivel"
                        name="disponivel"
                        value="1"
                        {{ old('disponivel', $vitrine->disponivel) ? 'checked' : '' }}
                    >

                    <span>
                        Produto disponível
                    </span>

                </label>

            </section>


            <!-- =================================================
                 BOTÕES
                 ================================================= -->

            <div class="vm-produto-actions">


                <a
                    href="{{ route('admin.vitrine.index') }}"
                    class="vm-produto-back"
                >
                    Cancelar
                </a>


                <button
                    type="submit"
                    class="vm-produto-save"
                >
                    Salvar alterações
                </button>


            </div>


        </form>

    </div>

</main>


<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
></script>


@include('admin._partials_admin.footer_admin')

</body>

</html>