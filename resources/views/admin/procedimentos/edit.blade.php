
<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Editar procedimento | Admin</title>

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


<body class="vm-procedimento-body">

    @include('admin._partials_admin.header_admin')


    <main class="vm-procedimento-page">

        <div class="vm-procedimento-container">


            <!-- =====================================================
                 CABEÇALHO
                 ===================================================== -->

            <header class="vm-procedimento-header">

                <span class="vm-procedimento-subtitle">
                    Administração
                </span>

                <h1 class="vm-procedimento-title">
                    Editar procedimento
                </h1>

                <p class="vm-procedimento-description">
                    Atualize as informações do procedimento cadastrado.
                </p>

            </header>


            <!-- =====================================================
                 ERROS
                 ===================================================== -->

            @if($errors->any())

                <div class="vm-procedimento-alert vm-procedimento-alert-erro">

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


            <!-- =====================================================
                 FORMULÁRIO
                 ===================================================== -->

            <form
                action="{{ route('admin.procedimentos.update', $procedimento) }}"
                method="POST"
                enctype="multipart/form-data"
                class="vm-procedimento-form"
            >

                @csrf
                @method('PUT')


                <!-- =================================================
                     SEÇÃO 01
                     ================================================= -->

                <section class="vm-procedimento-section">


                    <div class="vm-procedimento-section-title">

                        <span class="vm-procedimento-number">
                            01
                        </span>


                        <div class="vm-procedimento-section-info">

                            <small>
                                Informações principais
                            </small>

                            <h2>
                                Dados do procedimento
                            </h2>

                        </div>

                    </div>


                    <div class="vm-procedimento-grid">


                        <!-- CATEGORIA -->

                        <div class="vm-procedimento-field">

                            <label for="categoria_procedimento_id">
                                Categoria
                            </label>

                            <select
                                id="categoria_procedimento_id"
                                name="categoria_procedimento_id"
                            >

                                <option value="">
                                    Selecione
                                </option>

                                @foreach($categorias as $categoria)

                                    <option
                                        value="{{ $categoria->id }}"
                                        @selected(
                                            old(
                                                'categoria_procedimento_id',
                                                $procedimento->categoria_procedimento_id
                                            ) == $categoria->id
                                        )
                                    >
                                        {{ $categoria->nome }}
                                    </option>

                                @endforeach

                            </select>

                        </div>


                        <!-- NOME -->

                        <div class="vm-procedimento-field">

                            <label for="nome">
                                Nome
                            </label>

                            <input
                                id="nome"
                                type="text"
                                name="nome"
                                value="{{ old('nome', $procedimento->nome) }}"
                                required
                            >

                            @error('nome')

                                <span class="vm-procedimento-error">
                                    {{ $message }}
                                </span>

                            @enderror

                        </div>


                        <!-- DESCRIÇÃO -->

                        <div class="vm-procedimento-field vm-procedimento-field-full">

                            <label for="descricao">
                                Descrição
                            </label>

                            <textarea
                                id="descricao"
                                name="descricao"
                                required
                            >{{ old('descricao', $procedimento->descricao) }}</textarea>

                            @error('descricao')

                                <span class="vm-procedimento-error">
                                    {{ $message }}
                                </span>

                            @enderror

                        </div>


                        <!-- PREÇO -->

                        <div class="vm-procedimento-field">

                            <label for="preco">
                                Preço
                            </label>

                            <input
                                id="preco"
                                type="number"
                                name="preco"
                                step="0.01"
                                min="0"
                                value="{{ old('preco', $procedimento->preco) }}"
                            >

                            @error('preco')

                                <span class="vm-procedimento-error">
                                    {{ $message }}
                                </span>

                            @enderror

                        </div>


                        <!-- DURAÇÃO -->

                        <div class="vm-procedimento-field">

                            <label for="duracao_minutos">
                                Duração em minutos
                            </label>

                            <input
                                id="duracao_minutos"
                                type="number"
                                name="duracao_minutos"
                                min="1"
                                value="{{ old('duracao_minutos', $procedimento->duracao_minutos) }}"
                                required
                            >

                            @error('duracao_minutos')

                                <span class="vm-procedimento-error">
                                    {{ $message }}
                                </span>

                            @enderror

                        </div>


                    </div>

                </section>


                <!-- =================================================
                     SEÇÃO 02
                     ================================================= -->

                <section class="vm-procedimento-section">


                    <div class="vm-procedimento-section-title">

                        <span class="vm-procedimento-number">
                            02
                        </span>


                        <div class="vm-procedimento-section-info">

                            <small>
                                Imagem
                            </small>

                            <h2>
                                Foto do procedimento
                            </h2>

                        </div>

                    </div>


                    <div class="vm-procedimento-grid">


                        <div class="vm-procedimento-field vm-procedimento-field-full">

                            <label for="imagem">
                                Nova imagem
                            </label>

                            <input
                                id="imagem"
                                type="file"
                                name="imagem"
                                accept="image/*"
                            >

                            <span class="vm-procedimento-help">
                                Selecione uma nova imagem somente se desejar substituir a atual.
                            </span>

                            @error('imagem')

                                <span class="vm-procedimento-error">
                                    {{ $message }}
                                </span>

                            @enderror

                        </div>


                    </div>

                </section>


                <!-- =================================================
                     SEÇÃO 03
                     ================================================= -->

                <section class="vm-procedimento-section">


                    <div class="vm-procedimento-section-title">

                        <span class="vm-procedimento-number">
                            03
                        </span>


                        <div class="vm-procedimento-section-info">

                            <small>
                                Orientações
                            </small>

                            <h2>
                                Cuidados e contraindicações
                            </h2>

                        </div>

                    </div>


                    <div class="vm-procedimento-grid">


                        <!-- CUIDADOS -->

                        <div class="vm-procedimento-field vm-procedimento-field-full">

                            <label for="cuidados">
                                Cuidados
                            </label>

                            <textarea
                                id="cuidados"
                                name="cuidados"
                            >{{ old('cuidados', $procedimento->cuidados) }}</textarea>

                            @error('cuidados')

                                <span class="vm-procedimento-error">
                                    {{ $message }}
                                </span>

                            @enderror

                        </div>


                        <!-- CONTRAINDICAÇÕES -->

                        <div class="vm-procedimento-field vm-procedimento-field-full">

                            <label for="contraindicacoes">
                                Contraindicações
                            </label>

                            <textarea
                                id="contraindicacoes"
                                name="contraindicacoes"
                            >{{ old('contraindicacoes', $procedimento->contraindicacoes) }}</textarea>

                            @error('contraindicacoes')

                                <span class="vm-procedimento-error">
                                    {{ $message }}
                                </span>

                            @enderror

                        </div>


                    </div>

                </section>


                <!-- =================================================
                     SEÇÃO 04
                     ================================================= -->

                <section class="vm-procedimento-section">


                    <div class="vm-procedimento-section-title">

                        <span class="vm-procedimento-number">
                            04
                        </span>


                        <div class="vm-procedimento-section-info">

                            <small>
                                Disponibilidade
                            </small>

                            <h2>
                                Status do procedimento
                            </h2>

                        </div>

                    </div>


                    <label class="vm-procedimento-check">

                        <input
                            type="checkbox"
                            name="ativo"
                            value="1"
                            @checked(old('ativo', $procedimento->ativo))
                        >

                        <span>
                            Procedimento ativo
                        </span>

                    </label>


                </section>


                <!-- =================================================
                     BOTÕES
                     ================================================= -->

                <div class="vm-procedimento-actions">

                    <a
                        href="{{ route('admin.procedimentos.index') }}"
                        class="vm-procedimento-back"
                    >
                        Voltar
                    </a>


                    <button
                        type="submit"
                        class="vm-procedimento-save"
                    >
                        Salvar alterações
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

