<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Login | Valéria Maciel Estética</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            background: #f6f5e5;
            font-family: Arial, sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .container {
            width: 100%;
            max-width: 450px;
            background: white;
            padding: 35px;
            border-radius: 12px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.10);
        }

        h1 {
            color: #2c7771;
            text-align: center;
            margin-top: 0;
        }

        .campo {
            margin-bottom: 18px;
        }

        label {
            display: block;
            margin-bottom: 6px;
            font-weight: bold;
        }

        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 12px;
            border: 1px solid #bbb;
            border-radius: 6px;
            font-size: 15px;
        }

        .lembrar {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 18px;
        }

        .botao {
            width: 100%;
            padding: 13px;
            border: none;
            border-radius: 6px;
            background: #2c7771;
            color: white;
            cursor: pointer;
            font-size: 16px;
        }

        .erro {
            color: #b00020;
            font-size: 14px;
            margin-top: 6px;
        }

        .sucesso {
            background: #d4edda;
            color: #155724;
            padding: 12px;
            margin-bottom: 18px;
            border-radius: 6px;
        }

        .cadastro {
            text-align: center;
            margin-top: 20px;
        }

        a {
            color: #2c7771;
            font-weight: bold;
        }
    </style>
</head>

<body>

<div class="container">
    <h1>Entrar</h1>

    @if(session('sucesso'))
        <div class="sucesso">
            {{ session('sucesso') }}
        </div>
    @endif

    <form
        action="{{ route('login.store') }}"
        method="POST"
    >
        @csrf

        <div class="campo">
            <label for="email">E-mail</label>

            <input
                type="email"
                id="email"
                name="email"
                value="{{ old('email') }}"
                required
                autofocus
            >

            @error('email')
                <div class="erro">{{ $message }}</div>
            @enderror
        </div>

        <div class="campo">
            <label for="password">Senha</label>

            <input
                type="password"
                id="password"
                name="password"
                required
            >

            @error('password')
                <div class="erro">{{ $message }}</div>
            @enderror
        </div>

        <label class="lembrar">
            <input
                type="checkbox"
                name="remember"
                value="1"
            >

            Lembrar de mim
        </label>

        <button type="submit" class="botao">
            Entrar
        </button>
    </form>

    <div class="cadastro">
        Ainda não possui uma conta?

        <a href="{{ route('cadastro') }}">
            Cadastre-se
        </a>
    </div>
</div>

</body>
</html>