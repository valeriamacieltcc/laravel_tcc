<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Cadastro | Valéria Maciel Estética</title>


    <!-- =====================================================
         FONTES
         ===================================================== -->

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


    <!-- =====================================================
         BOOTSTRAP
         ===================================================== -->

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >


    <!-- =====================================================
         CSS PRINCIPAL
         ===================================================== -->

    <link
        rel="stylesheet"
        href="{{ asset('css/home.css') }}"
    >

    <!-- CSS exclusivo desta página -->
    <link
        rel="stylesheet"
        href="{{ asset('css/cadastro.css') }}"
    >

</head>


<body class="cadastro-body">


    {{-- =====================================================
         HEADER PADRÃO DO SITE
         ===================================================== --}}

    @include('_partials.header')


    {{-- =====================================================
         CONTEÚDO PRINCIPAL
         ===================================================== --}}

    <main class="cadastro-main">

        <section class="cadastro-section">


            {{-- =================================================
                 CABEÇALHO
                 FICA FORA DO FORMULÁRIO
                 ================================================= --}}

            <header class="cadastro-heading">

                <h1 class="cadastro-heading-title">
                    Criar conta
                </h1>

                <p class="cadastro-heading-text">
                    Cadastre-se para acessar os serviços da clínica.
                </p>

            </header>


            {{-- =================================================
                 CARD DO FORMULÁRIO
                 ================================================= --}}

            <div class="cadastro-wrapper">


                {{-- =================================================
                     FORMULÁRIO
                     ================================================= --}}

                <form
                    action="{{ route('cadastro.store') }}"
                    method="POST"
                    class="cadastro-form"
                >

                    @csrf


                    {{-- =================================================
                         NOME COMPLETO
                         ================================================= --}}

                    <div class="cadastro-form-group">

                        <label
                            for="name"
                            class="cadastro-form-label"
                        >
                            Nome completo
                        </label>

                        <input
                            type="text"
                            id="name"
                            name="name"
                            value="{{ old('name') }}"
                            class="cadastro-form-input"
                            autocomplete="name"
                            required
                        >

                        @error('name')

                            <span class="cadastro-form-error">
                                {{ $message }}
                            </span>

                        @enderror

                    </div>


                    {{-- =================================================
                         E-MAIL
                         ================================================= --}}

                    <div class="cadastro-form-group">

                        <label
                            for="email"
                            class="cadastro-form-label"
                        >
                            E-mail
                        </label>

                        <input
                            type="email"
                            id="email"
                            name="email"
                            value="{{ old('email') }}"
                            class="cadastro-form-input"
                            autocomplete="email"
                            required
                        >

                        @error('email')

                            <span class="cadastro-form-error">
                                {{ $message }}
                            </span>

                        @enderror

                    </div>


                    {{-- =================================================
                         TELEFONE
                         ================================================= --}}

                    <div class="cadastro-form-group">

                        <label
                            for="telefone"
                            class="cadastro-form-label"
                        >
                            Telefone
                        </label>

                        <input
                            type="text"
                            id="telefone"
                            name="telefone"
                            value="{{ old('telefone') }}"
                            class="cadastro-form-input"
                            placeholder="(15) 99999-9999"
                            autocomplete="tel"
                            required
                        >

                        @error('telefone')

                            <span class="cadastro-form-error">
                                {{ $message }}
                            </span>

                        @enderror

                    </div>


                    {{-- =================================================
                         DATA DE NASCIMENTO
                         ================================================= --}}

                    <div class="cadastro-form-group">

                        <label
                            for="data_nascimento"
                            class="cadastro-form-label"
                        >
                            Data de nascimento
                        </label>

                        <input
                            type="date"
                            id="data_nascimento"
                            name="data_nascimento"
                            value="{{ old('data_nascimento') }}"
                            class="cadastro-form-input"
                            autocomplete="bday"
                            required
                        >

                        @error('data_nascimento')

                            <span class="cadastro-form-error">
                                {{ $message }}
                            </span>

                        @enderror

                    </div>


                    {{-- =================================================
                         CPF
                         ================================================= --}}

                    <div class="cadastro-form-group">

                        <label
                            for="cpf"
                            class="cadastro-form-label"
                        >
                            CPF
                        </label>

                        <input
                            type="text"
                            id="cpf"
                            name="cpf"
                            value="{{ old('cpf') }}"
                            class="cadastro-form-input"
                            placeholder="000.000.000-00"
                            autocomplete="off"
                        >

                        @error('cpf')

                            <span class="cadastro-form-error">
                                {{ $message }}
                            </span>

                        @enderror

                    </div>


                    {{-- =================================================
                         SENHA
                         ================================================= --}}

                    <div class="cadastro-form-group">

                        <label
                            for="password"
                            class="cadastro-form-label"
                        >
                            Senha
                        </label>

                        <input
                            type="password"
                            id="password"
                            name="password"
                            class="cadastro-form-input"
                            minlength="8"
                            autocomplete="new-password"
                            required
                        >

                        @error('password')

                            <span class="cadastro-form-error">
                                {{ $message }}
                            </span>

                        @enderror

                    </div>


                    {{-- =================================================
                         CONFIRMAR SENHA
                         ================================================= --}}

                    <div class="cadastro-form-group">

                        <label
                            for="password_confirmation"
                            class="cadastro-form-label"
                        >
                            Confirmar senha
                        </label>

                        <input
                            type="password"
                            id="password_confirmation"
                            name="password_confirmation"
                            class="cadastro-form-input"
                            minlength="8"
                            autocomplete="new-password"
                            required
                        >

                    </div>


                    {{-- =================================================
                         BOTÃO
                         ================================================= --}}

                    <div class="cadastro-button-area">

                        <button
                            type="submit"
                            class="cadastro-submit"
                        >
                            Criar conta
                        </button>

                    </div>

                </form>


                {{-- =================================================
                     LOGIN
                     ================================================= --}}

                <div class="cadastro-existing-account">

                    <span class="cadastro-existing-text">
                        Já possui uma conta?
                    </span>

                    <a
                        href="{{ route('login') }}"
                        class="cadastro-existing-link"
                    >
                        Entrar
                    </a>

                </div>


            </div>

        </section>

    </main>


    {{-- =====================================================
         FOOTER PADRÃO DO SITE
         ===================================================== --}}

    @include('_partials.footer')


    <!-- =====================================================
         BOOTSTRAP JS
         ===================================================== -->

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
    ></script>

</body>

</html>