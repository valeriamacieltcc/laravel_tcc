<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Login | Valéria Maciel Estética</title>

    <!-- FONTES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600&family=Parisienne&family=Playfair+Display+SC:wght@400&display=swap"
        rel="stylesheet"
    >

    <!-- BOOTSTRAP -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <!-- CSS PRINCIPAL -->
    <link
        rel="stylesheet"
        href="{{ asset('css/home.css') }}"
    >

    <!-- CSS DO LOGIN -->
    <link
        rel="stylesheet"
        href="{{ asset('css/login.css') }}"
    >

</head>

<body class="login-body">

    @include('_partials.header')

    <main class="login-page">

    <h1 class="login-titulo">Entrar</h1>

    <p class="login-subtitulo">
        Seja bem-vindo de volta!
    </p>

<div class="login-container">

    @if(session('sucesso'))

        <div class="login-sucesso">
            {{ session('sucesso') }}
        </div>

    @endif

    <form
        action="{{ route('login.store') }}"
        method="POST"
    >

        @csrf

        <!-- E-MAIL -->

        <div class="login-campo">

            <label for="email">
                E-mail
            </label>

            <input
                type="email"
                id="email"
                name="email"
                value="{{ old('email') }}"
                required
                autofocus
            >

            @error('email')
                <div class="login-erro">
                    {{ $message }}
                </div>
            @enderror

        </div>


        <!-- SENHA -->

        <div class="login-campo">

            <label for="password">
                Senha
            </label>

            <input
                type="password"
                id="password"
                name="password"
                required
            >

            @error('password')
                <div class="login-erro">
                    {{ $message }}
                </div>
            @enderror

        </div>


        <!-- LEMBRAR -->

        <label class="login-lembrar">

            <input
                type="checkbox"
                name="remember"
                value="1"
            >

            <span>
                Lembrar de mim
            </span>

        </label>


        <!-- BOTÃO -->

        <button
            type="submit"
            class="login-botao"
        >
            Entrar
        </button>

    </form>


    <!-- CADASTRO -->

    <div class="login-cadastro">

        Ainda não possui uma conta?

        <a href="{{ route('cadastro') }}">
            Cadastre-se
        </a>

    </div>

</div>

</main>
    @include('_partials.footer')


</body>
</html>