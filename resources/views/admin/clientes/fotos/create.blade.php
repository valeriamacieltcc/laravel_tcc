<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Adicionar Fotos | Admin</title>


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

    <link
        rel="stylesheet"
        href="{{ asset('css/adicionar-fotos.css') }}"
    >

</head>


<body class="admin-fotos-body">


{{-- HEADER DO ADMIN --}}

@include('admin._partials_admin.header_admin')



<!-- =========================
     PÁGINA
========================= -->

<main class="admin-fotos-page">

    <div class="admin-fotos-container">


        <!-- =========================
             CABEÇALHO
        ========================= -->

        <header class="admin-fotos-header">

            <span class="admin-fotos-subtitle">
                ACOMPANHAMENTO
            </span>

            <h1 class="admin-fotos-title">
                ADICIONAR FOTOS
            </h1>

            <p class="admin-fotos-description">
                Adicione fotos de antes e depois para acompanhar
                a evolução dos procedimentos da cliente.
            </p>

        </header>



        <!-- =========================
             ERROS
        ========================= -->

        @if($errors->any())

            <div class="admin-fotos-alert admin-fotos-alert-erro">

                <strong>
                    Não foi possível salvar as fotos
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



        <!-- =========================
             FORMULÁRIO
        ========================= -->

        <form
            method="POST"
            action="{{ route('admin.clientes.fotos.store', $cliente) }}"
            enctype="multipart/form-data"
            class="admin-fotos-form"
        >

            @csrf



            <!-- =========================
                 INFORMAÇÕES
            ========================= -->

            <section class="admin-fotos-section">


                <div class="admin-fotos-section-title">

                    <div class="admin-fotos-number">
                        01
                    </div>

                    <div class="admin-fotos-section-info">

                        <small>
                            CLIENTE
                        </small>

                        <h2>
                            Informações do procedimento
                        </h2>

                    </div>

                </div>



                <div class="admin-fotos-grid">


                    <!-- PROCEDIMENTO -->

                    <div class="admin-fotos-field">

                        <label for="procedimento">
                            Procedimento
                        </label>

                        <input
                            type="text"
                            id="procedimento"
                            name="procedimento"
                            value="{{ old('procedimento') }}"
                            placeholder="Ex: Limpeza de pele"
                        >

                    </div>



                    <!-- DATA -->

                    <div class="admin-fotos-field">

                        <label for="data">
                            Data
                        </label>

                        <input
                            type="date"
                            id="data"
                            name="data"
                            value="{{ old('data') }}"
                        >

                    </div>


                </div>

            </section>



            <!-- =========================
                 FOTOS
            ========================= -->

            <section class="admin-fotos-section">


                <div class="admin-fotos-section-title">

                    <div class="admin-fotos-number">
                        02
                    </div>

                    <div class="admin-fotos-section-info">

                        <small>
                            REGISTRO
                        </small>

                        <h2>
                            Fotos do procedimento
                        </h2>

                    </div>

                </div>



                <div class="admin-fotos-grid">


                    <!-- FOTO ANTES -->

                    <div class="admin-fotos-field">

                        <label for="foto_antes">
                            Foto Antes
                        </label>

                        <input
                            type="file"
                            id="foto_antes"
                            name="foto_antes"
                            accept="image/*"
                        >

                        <span class="admin-fotos-help">
                            Selecione a foto registrada antes do procedimento.
                        </span>

                    </div>



                    <!-- FOTO DEPOIS -->

                    <div class="admin-fotos-field">

                        <label for="foto_depois">
                            Foto Depois
                        </label>

                        <input
                            type="file"
                            id="foto_depois"
                            name="foto_depois"
                            accept="image/*"
                        >

                        <span class="admin-fotos-help">
                            Selecione a foto registrada após o procedimento.
                        </span>

                    </div>



                    <!-- OBSERVAÇÃO -->

                    <div class="admin-fotos-field admin-fotos-field-full">

                        <label for="observacao">
                            Observação
                        </label>

                        <textarea
                            id="observacao"
                            name="observacao"
                            placeholder="Ex: Resultado após 3 sessões..."
                        >{{ old('observacao') }}</textarea>

                    </div>


                </div>

            </section>



            <!-- =========================
                 BOTÕES
            ========================= -->

            <div class="admin-fotos-actions">


                <a
                    href="{{ route('admin.clientes.show', $cliente) }}"
                    class="admin-fotos-back"
                >
                    Voltar
                </a>


                <button
                    type="submit"
                    class="admin-fotos-save"
                >
                    Salvar Fotos
                </button>


            </div>


        </form>

    </div>

</main>



{{-- FOOTER DO ADMIN --}}

@include('admin._partials_admin.footer_admin')



<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js">
</script>


</body>

</html>