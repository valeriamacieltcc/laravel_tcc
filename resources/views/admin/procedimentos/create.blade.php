<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Novo Procedimento | Admin</title>

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


<body class="admin-procedimento-body">

    @include('admin._partials_admin.header_admin')


    <main class="admin-procedimento-page">

        <div class="admin-procedimento-container">


            <!-- =================================================
                 CABEÇALHO
                 ================================================= -->

            <div class="admin-procedimento-header">

                <span class="admin-procedimento-subtitle">
                    ADMINISTRAÇÃO
                </span>

                <h1 class="admin-procedimento-title">
                    Novo procedimento
                </h1>

                <p class="admin-procedimento-description">
                    Cadastre um novo procedimento para disponibilizá-lo aos seus clientes.
                </p>

            </div>


            <!-- =================================================
                 ERROS
                 ================================================= -->

            @if($errors->any())

                <div class="admin-procedimento-alert admin-procedimento-alert-erro">

                    <strong>
                        Verifique os campos abaixo
                    </strong>

                    <ul>

                        @foreach($errors->all() as $error)

                            <li>
                                {{ $error }}
                            </li>

                        @endforeach

                    </ul>

                </div>

            @endif


            <!-- =================================================
                 FORMULÁRIO
                 ================================================= -->

            <form
                action="{{ route('admin.procedimentos.store') }}"
                method="POST"
                enctype="multipart/form-data"
                class="admin-procedimento-form"
            >

                @csrf


                <!-- =================================================
                     SEÇÃO 01 - INFORMAÇÕES
                     ================================================= -->

                <section class="admin-procedimento-section">

                    <div class="admin-procedimento-section-title">

                        <span class="admin-procedimento-number">
                            01
                        </span>

                        <div class="admin-procedimento-section-info">

                            <small>
                                INFORMAÇÕES
                            </small>

                            <h2>
                                Dados do procedimento
                            </h2>

                        </div>

                    </div>


                    <div class="admin-procedimento-grid">


                        <!-- CATEGORIA -->

                        <div class="admin-procedimento-field">

                            <label for="categoria_procedimento_id">
                                Categoria
                            </label>

                            <select
                                id="categoria_procedimento_id"
                                name="categoria_procedimento_id"
                            >

                                <option value="">
                                    Selecione uma categoria
                                </option>

                                @foreach($categorias as $categoria)

                                    <option
                                        value="{{ $categoria->id }}"
                                        @selected(
                                            old('categoria_procedimento_id') == $categoria->id
                                        )
                                    >
                                        {{ $categoria->nome }}
                                    </option>

                                @endforeach

                            </select>

                            @error('categoria_procedimento_id')

                                <span class="admin-procedimento-error">
                                    {{ $message }}
                                </span>

                            @enderror

                        </div>


                        <!-- NOME -->

                        <div class="admin-procedimento-field">

                            <label for="nome">
                                Nome do procedimento
                            </label>

                            <input
                                type="text"
                                id="nome"
                                name="nome"
                                value="{{ old('nome') }}"
                                placeholder="Digite o nome do procedimento"
                                required
                            >

                            @error('nome')

                                <span class="admin-procedimento-error">
                                    {{ $message }}
                                </span>

                            @enderror

                        </div>


                        <!-- DESCRIÇÃO -->

                        <div class="admin-procedimento-field admin-procedimento-field-full">

                            <label for="descricao">
                                Descrição
                            </label>

                            <textarea
                                id="descricao"
                                name="descricao"
                                placeholder="Descreva o procedimento..."
                                required
                            >{{ old('descricao') }}</textarea>

                            @error('descricao')

                                <span class="admin-procedimento-error">
                                    {{ $message }}
                                </span>

                            @enderror

                        </div>

                    </div>

                </section>


                <!-- =================================================
                     SEÇÃO 02 - DETALHES
                     ================================================= -->

                <section class="admin-procedimento-section">

                    <div class="admin-procedimento-section-title">

                        <span class="admin-procedimento-number">
                            02
                        </span>

                        <div class="admin-procedimento-section-info">

                            <small>
                                DETALHES
                            </small>

                            <h2>
                                Valores e duração
                            </h2>

                        </div>

                    </div>


                    <div class="admin-procedimento-grid">


                        <!-- PREÇO -->

                        <div class="admin-procedimento-field">

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
                            >

                            @error('preco')

                                <span class="admin-procedimento-error">
                                    {{ $message }}
                                </span>

                            @enderror

                        </div>


                        <!-- DURAÇÃO -->

                        <div class="admin-procedimento-field">

                            <label for="duracao_minutos">
                                Duração em minutos
                            </label>

                            <input
                                type="number"
                                id="duracao_minutos"
                                name="duracao_minutos"
                                min="1"
                                value="{{ old('duracao_minutos', 60) }}"
                                placeholder="Ex.: 60"
                                required
                            >

                            @error('duracao_minutos')

                                <span class="admin-procedimento-error">
                                    {{ $message }}
                                </span>

                            @enderror

                        </div>

                    </div>

                </section>


                <!-- =================================================
                     SEÇÃO 03 - IMAGEM
                     ================================================= -->

                <section class="admin-procedimento-section">

                    <div class="admin-procedimento-section-title">

                        <span class="admin-procedimento-number">
                            03
                        </span>

                        <div class="admin-procedimento-section-info">

                            <small>
                                APRESENTAÇÃO
                            </small>

                            <h2>
                                Imagem do procedimento
                            </h2>

                        </div>

                    </div>


                    <div class="admin-procedimento-field">

                        <label for="imagem">
                            Imagem
                        </label>

                        <input
                            type="file"
                            id="imagem"
                            name="imagem"
                            accept="image/*"
                        >

                        <span class="admin-procedimento-help">
                            Escolha uma imagem para representar o procedimento.
                        </span>

                        @error('imagem')

                            <span class="admin-procedimento-error">
                                {{ $message }}
                            </span>

                        @enderror

                    </div>

                </section>


                <!-- =================================================
                     SEÇÃO 04 - CUIDADOS
                     ================================================= -->

                <section class="admin-procedimento-section">

                    <div class="admin-procedimento-section-title">

                        <span class="admin-procedimento-number">
                            04
                        </span>

                        <div class="admin-procedimento-section-info">

                            <small>
                                ORIENTAÇÕES
                            </small>

                            <h2>
                                Cuidados e contraindicações
                            </h2>

                        </div>

                    </div>


                    <div class="admin-procedimento-grid">


                        <!-- CUIDADOS -->

                        <div class="admin-procedimento-field">

                            <label for="cuidados">
                                Cuidados
                            </label>

                            <textarea
                                id="cuidados"
                                name="cuidados"
                                placeholder="Informe os cuidados necessários..."
                            >{{ old('cuidados') }}</textarea>

                            @error('cuidados')

                                <span class="admin-procedimento-error">
                                    {{ $message }}
                                </span>

                            @enderror

                        </div>


                        <!-- CONTRAINDICAÇÕES -->

                        <div class="admin-procedimento-field">

                            <label for="contraindicacoes">
                                Contraindicações
                            </label>

                            <textarea
                                id="contraindicacoes"
                                name="contraindicacoes"
                                placeholder="Informe as contraindicações..."
                            >{{ old('contraindicacoes') }}</textarea>

                            @error('contraindicacoes')

                                <span class="admin-procedimento-error">
                                    {{ $message }}
                                </span>

                            @enderror

                        </div>

                    </div>

                </section>


                <!-- =================================================
                     STATUS
                     ================================================= -->

                <section class="admin-procedimento-section">

                    <div class="admin-procedimento-section-title">

                        <span class="admin-procedimento-number">
                            05
                        </span>

                        <div class="admin-procedimento-section-info">

                            <small>
                                DISPONIBILIDADE
                            </small>

                            <h2>
                                Status do procedimento
                            </h2>

                        </div>

                    </div>


                    <label class="admin-procedimento-check">

                        <input
                            type="checkbox"
                            name="ativo"
                            value="1"
                            {{ old('ativo', true) ? 'checked' : '' }}
                        >

                        <span>
                            Procedimento ativo
                        </span>

                    </label>

                </section>


                <!-- =================================================
                     BOTÕES
                     ================================================= -->

                <div class="admin-procedimento-actions">

                    <a
                        href="{{ route('admin.procedimentos.index') }}"
                        class="admin-procedimento-back"
                    >
                        Voltar
                    </a>

                    <button
                        type="submit"
                        class="admin-procedimento-save"
                    >
                        Cadastrar procedimento
                    </button>

                </div>


            </form>

        </div>

    </main>


    @include('admin._partials_admin.footer_admin')


    <!-- BOOTSTRAP JS -->

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    ></script>

</body>

</html>