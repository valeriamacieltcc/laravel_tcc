<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Vitrine Criar | Admin</title>

    <!-- FONTES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

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
        ====================================================== -->

        <header class="vm-produto-header">

            <h1 class="vm-produto-title">
                Novo Produto
            </h1>

            <p class="vm-produto-description">
                Cadastre um novo produto para aparecer na vitrine da loja.
            </p>

        </header>


        <!-- =====================================================
             MENSAGENS DE ERRO
        ====================================================== -->

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
        ====================================================== -->

        <form
            action="{{ route('admin.vitrine.store') }}"
            method="POST"
            enctype="multipart/form-data"
            class="vm-produto-form"
        >

            @csrf


            <!-- =================================================
                 INFORMAÇÕES DO PRODUTO
            ================================================== -->

            <section class="vm-produto-section">


                <div class="vm-produto-section-title">

                    <span class="vm-produto-number">
                        01
                    </span>

                    <div class="vm-produto-section-info">

                        <small>
                            Cadastro
                        </small>

                        <h2>
                            Informações do produto
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
                            value="{{ old('nome') }}"
                            placeholder="Digite o nome do produto"
                            required
                        >

                        @error('nome')

                            <span class="vm-produto-error">
                                {{ $message }}
                            </span>

                        @enderror

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
                            value="{{ old('marca') }}"
                            placeholder="Digite a marca"
                            required
                        >

                        @error('marca')

                            <span class="vm-produto-error">
                                {{ $message }}
                            </span>

                        @enderror

                    </div>


                    <!-- DESCRIÇÃO -->

                    <div class="vm-produto-field vm-produto-field-full">

                        <label for="descricao">
                            Descrição
                        </label>

                        <textarea
                            id="descricao"
                            name="descricao"
                            placeholder="Digite uma descrição para o produto"
                            required
                        >{{ old('descricao') }}</textarea>

                        @error('descricao')

                            <span class="vm-produto-error">
                                {{ $message }}
                            </span>

                        @enderror

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
                            value="{{ old('preco') }}"
                            placeholder="0,00"
                            required
                        >

                        @error('preco')

                            <span class="vm-produto-error">
                                {{ $message }}
                            </span>

                        @enderror

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
                            value="{{ old('link_contato') }}"
                            placeholder="Ex.: link do WhatsApp"
                        >

                        @error('link_contato')

                            <span class="vm-produto-error">
                                {{ $message }}
                            </span>

                        @enderror

                    </div>


                </div>


            </section>


            <!-- =================================================
                 IMAGEM
            ================================================== -->

            <section class="vm-produto-section">


                <div class="vm-produto-section-title">

                    <span class="vm-produto-number">
                        02
                    </span>

                    <div class="vm-produto-section-info">

                        <small>
                            Visual
                        </small>

                        <h2>
                            Imagem do produto
                        </h2>

                    </div>

                </div>


                <div class="vm-produto-upload">


                    <div class="vm-produto-field">

                        <label for="imagem">
                            Imagem
                        </label>

                        <input
                            type="file"
                            id="imagem"
                            name="imagem"
                            accept="image/*"
                            required
                        >

                        <span class="vm-produto-help">
                            Selecione uma imagem para apresentar o produto na vitrine.
                        </span>

                        @error('imagem')

                            <span class="vm-produto-error">
                                {{ $message }}
                            </span>

                        @enderror

                    </div>


                </div>


            </section>


            <!-- =================================================
                 DISPONIBILIDADE
            ================================================== -->

            <section class="vm-produto-section">


                <div class="vm-produto-section-title">

                    <span class="vm-produto-number">
                        03
                    </span>

                    <div class="vm-produto-section-info">

                        <small>
                            Status
                        </small>

                        <h2>
                            Disponibilidade
                        </h2>

                    </div>

                </div>


                <label
                    for="disponivel"
                    class="vm-produto-check"
                >

                    <input
                        type="checkbox"
                        id="disponivel"
                        name="disponivel"
                        value="1"
                        {{ old('disponivel', true) ? 'checked' : '' }}
                    >

                    <span>
                        Produto disponível para os clientes
                    </span>

                </label>


            </section>


            <!-- =================================================
                 AÇÕES
            ================================================== -->

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
                    Salvar produto
                </button>


            </div>


        </form>


    </div>


</main>

@include('admin._partials_admin.footer_admin')
</body>

</html>