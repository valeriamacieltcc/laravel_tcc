<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Cadastro | Valéria Maciel Estética</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            font-family: Arial, sans-serif;
            background: #f6f5e5;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 30px 15px;
        }

        .container {
            width: 100%;
            max-width: 600px;
            background: white;
            padding: 35px;
            border-radius: 12px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.10);
        }

        h1 {
            margin-top: 0;
            text-align: center;
            color: #2c7771;
        }

        .subtitulo {
            text-align: center;
            color: #666;
            margin-bottom: 25px;
        }

        .campo {
            margin-bottom: 17px;
        }

        label {
            display: block;
            margin-bottom: 6px;
            font-weight: bold;
            color: #333;
        }

        input {
            width: 100%;
            padding: 12px;
            border: 1px solid #bbb;
            border-radius: 6px;
            font-size: 15px;
        }

        input:focus {
            outline: 2px solid #2c7771;
            border-color: transparent;
        }

        .erro {
            color: #b00020;
            font-size: 14px;
            margin-top: 5px;
        }

        .botao {
            width: 100%;
            border: none;
            border-radius: 6px;
            padding: 13px;
            background: #2c7771;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        .botao:hover {
            background: #24645f;
        }

        .login {
            text-align: center;
            margin-top: 20px;
        }

        .login a {
            color: #2c7771;
            font-weight: bold;
        }
    </style>
</head>

<body>

<div class="container">
    <h1>Criar conta</h1>

    <p class="subtitulo">
        Cadastre-se para acessar os serviços da clínica.
    </p>

    <form
        action="{{ route('cadastro.store') }}"
        method="POST"
    >
        @csrf

        <div class="campo">
            <label for="name">Nome completo</label>

            <input
                type="text"
                id="name"
                name="name"
                value="{{ old('name') }}"
                required
            >

            @error('name')
                <div class="erro">{{ $message }}</div>
            @enderror
        </div>

        <div class="campo">
            <label for="email">E-mail</label>

            <input
                type="email"
                id="email"
                name="email"
                value="{{ old('email') }}"
                required
            >

            @error('email')
                <div class="erro">{{ $message }}</div>
            @enderror
        </div>

        <div class="campo">
            <label for="telefone">Telefone</label>

            <input
                type="text"
                id="telefone"
                name="telefone"
                value="{{ old('telefone') }}"
                placeholder="(15) 99999-9999"
                required
            >

            @error('telefone')
                <div class="erro">{{ $message }}</div>
            @enderror
        </div>

        <div class="campo">
            <label for="data_nascimento">
                Data de nascimento
            </label>

            <input
                type="date"
                id="data_nascimento"
                name="data_nascimento"
                value="{{ old('data_nascimento') }}"
                required
            >

            @error('data_nascimento')
                <div class="erro">{{ $message }}</div>
            @enderror
        </div>

        <div class="campo">
            <label for="cpf">CPF</label>

            <input
                type="text"
                id="cpf"
                name="cpf"
                value="{{ old('cpf') }}"
                placeholder="000.000.000-00"
            >

            @error('cpf')
                <div class="erro">{{ $message }}</div>
            @enderror
        </div>

        <div class="campo">
            <label for="password">Senha</label>

            <input
                type="password"
                id="password"
                name="password"
                minlength="8"
                required
            >

            @error('password')
                <div class="erro">{{ $message }}</div>
            @enderror
        </div>

        <div class="campo">
            <label for="password_confirmation">
                Confirmar senha
            </label>

            <input
                type="password"
                id="password_confirmation"
                name="password_confirmation"
                minlength="8"
                required
            >
        </div>

        <button type="submit" class="botao">
            Criar conta
        </button>
    </form>

    <div class="login">
        Já possui uma conta?

        <a href="{{ route('login') }}">
            Entrar
        </a>
    </div>
</div>

</body>
</html>