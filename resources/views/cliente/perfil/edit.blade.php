<!DOCTYPE html>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Perfil da Cliente</title>

    <link
        rel="stylesheet"
        href="{{ asset('css/perfil.css') }}"
    >

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
        href="https://fonts.googleapis.com/css2?family=Parisienne&display=swap"
        rel="stylesheet"
    >

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <style>
        .mensagem-sucesso {
            max-width: 1000px;
            margin: 20px auto;
            padding: 15px;
            border-radius: 8px;
            background: #d4edda;
            color: #155724;
        }

        .formulario-perfil {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 18px;
        }

        .campo {
            display: flex;
            flex-direction: column;
            gap: 6px;
        }

        .campo-completo {
            grid-column: 1 / -1;
        }

        .campo input {
            width: 100%;
            padding: 10px;
            border: 1px solid #bbb;
            border-radius: 6px;
        }

        .erro {
            color: #b00020;
            font-size: 14px;
        }

        .botao-perfil {
            border: none;
            background: #2c7771;
            color: white;
            padding: 11px 20px;
            border-radius: 6px;
            cursor: pointer;
        }

        .foto-atual {
            width: 150px;
            height: 150px;
            object-fit: cover;
            border-radius: 50%;
        }

        .sem-dados {
            color: #777;
        }

        @media (max-width: 700px) {
            .formulario-perfil {
                grid-template-columns: 1fr;
            }

            .campo-completo {
                grid-column: auto;
            }
        }
    </style>
</head>

<body>

@if(session('sucesso'))
    <div class="mensagem-sucesso">
        {{ session('sucesso') }}
    </div>
@endif

<main class="perfil-container">

    <section class="perfil-topo">

        <div class="foto-perfil">

            @if($cliente->foto_perfil)
                <img
                    src="{{ asset('storage/' . $cliente->foto_perfil) }}"
                    alt="{{ $user->name }}"
                    class="foto-atual"
                >
            @else
                <img
                    src="{{ asset('imagem/perfil-padrao.png') }}"
                    alt="{{ $user->name }}"
                    class="foto-atual"
                >
            @endif

        </div>

        <div class="info-perfil">

            <h1>{{ $user->name }}</h1>

            @if($cliente->data_nascimento)
                <h2>
                    {{ $cliente->data_nascimento->age }} anos
                </h2>
            @endif

            <p>{{ $user->email }}</p>

            <p>{{ $cliente->telefone }}</p>

        </div>

    </section>

    <section class="bloco-info">

        <div class="titulo-bloco">
            Editar meus dados
        </div>

        <div class="conteudo-bloco">

            <form
                action="{{ route('cliente.perfil.update') }}"
                method="POST"
                enctype="multipart/form-data"
                class="formulario-perfil"
            >
                @csrf
                @method('PUT')

                <div class="campo">
                    <label for="name">
                        Nome completo
                    </label>

                    <input
                        type="text"
                        id="name"
                        name="name"
                        value="{{ old('name', $user->name) }}"
                        required
                    >

                    @error('name')
                        <span class="erro">
                            {{ $message }}
                        </span>
                    @enderror
                </div>

                <div class="campo">
                    <label for="email">
                        E-mail
                    </label>

                    <input
                        type="email"
                        id="email"
                        name="email"
                        value="{{ old('email', $user->email) }}"
                        required
                    >

                    @error('email')
                        <span class="erro">
                            {{ $message }}
                        </span>
                    @enderror
                </div>

                <div class="campo">
                    <label for="telefone">
                        Telefone
                    </label>

                    <input
                        type="text"
                        id="telefone"
                        name="telefone"
                        value="{{ old('telefone', $cliente->telefone) }}"
                        required
                    >

                    @error('telefone')
                        <span class="erro">
                            {{ $message }}
                        </span>
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
                        value="{{ old(
                            'data_nascimento',
                            optional($cliente->data_nascimento)->format('Y-m-d')
                        ) }}"
                        required
                    >

                    @error('data_nascimento')
                        <span class="erro">
                            {{ $message }}
                        </span>
                    @enderror
                </div>

                <div class="campo">
                    <label for="cpf">
                        CPF
                    </label>

                    <input
                        type="text"
                        id="cpf"
                        name="cpf"
                        value="{{ old('cpf', $cliente->cpf) }}"
                    >

                    @error('cpf')
                        <span class="erro">
                            {{ $message }}
                        </span>
                    @enderror
                </div>

                <div class="campo">
                    <label for="cep">
                        CEP
                    </label>

                    <input
                        type="text"
                        id="cep"
                        name="cep"
                        value="{{ old('cep', $cliente->cep) }}"
                    >
                </div>

                <div class="campo campo-completo">
                    <label for="logradouro">
                        Endereço
                    </label>

                    <input
                        type="text"
                        id="logradouro"
                        name="logradouro"
                        value="{{ old('logradouro', $cliente->logradouro) }}"
                    >
                </div>

                <div class="campo">
                    <label for="numero">
                        Número
                    </label>

                    <input
                        type="text"
                        id="numero"
                        name="numero"
                        value="{{ old('numero', $cliente->numero) }}"
                    >
                </div>

                <div class="campo">
                    <label for="complemento">
                        Complemento
                    </label>

                    <input
                        type="text"
                        id="complemento"
                        name="complemento"
                        value="{{ old('complemento', $cliente->complemento) }}"
                    >
                </div>

                <div class="campo">
                    <label for="bairro">
                        Bairro
                    </label>

                    <input
                        type="text"
                        id="bairro"
                        name="bairro"
                        value="{{ old('bairro', $cliente->bairro) }}"
                    >
                </div>

                <div class="campo">
                    <label for="cidade">
                        Cidade
                    </label>

                    <input
                        type="text"
                        id="cidade"
                        name="cidade"
                        value="{{ old('cidade', $cliente->cidade) }}"
                    >
                </div>

                <div class="campo">
                    <label for="estado">
                        Estado
                    </label>

                    <input
                        type="text"
                        id="estado"
                        name="estado"
                        maxlength="2"
                        value="{{ old('estado', $cliente->estado) }}"
                        placeholder="SP"
                    >
                </div>

                <div class="campo">
                    <label for="foto_perfil">
                        Foto de perfil
                    </label>

                    <input
                        type="file"
                        id="foto_perfil"
                        name="foto_perfil"
                        accept="image/*"
                    >

                    @error('foto_perfil')
                        <span class="erro">
                            {{ $message }}
                        </span>
                    @enderror
                </div>

                <div class="campo campo-completo">
                    <button
                        type="submit"
                        class="botao-perfil"
                    >
                        Salvar alterações
                    </button>
                </div>

            </form>

        </div>

    </section>

    <section class="galeria">

        <h3>Histórico dos Antes & Depois</h3>

        <div class="galeria-grid">

            <p class="sem-dados">
                Nenhuma foto cadastrada ainda.
            </p>

        </div>

    </section>

    <section class="bloco-info">

        <div class="titulo-bloco">
            Histórico dos Procedimentos
        </div>

        <div class="conteudo-bloco">

            <p class="sem-dados">
                Nenhum procedimento realizado ainda.
            </p>

        </div>

    </section>

    <section class="bloco-info">

        <div class="titulo-bloco">
            Ficha de Anamnese
        </div>

        <div class="conteudo-bloco">

            <p class="sem-dados">
                A ficha de anamnese ainda não foi preenchida.
            </p>

        </div>

    </section>

    <section class="bloco-info">

        <div class="titulo-bloco">
            Favoritos
        </div>

        <div class="conteudo-bloco">

            <p class="sem-dados">
                Nenhum produto favoritado ainda.
            </p>

        </div>

    </section>

    <section class="bloco-info">

        <div class="titulo-bloco">
            Alterar senha
        </div>

        <div class="conteudo-bloco">

            <form
                action="{{ route('cliente.perfil.password') }}"
                method="POST"
                class="formulario-perfil"
            >
                @csrf
                @method('PUT')

                <div class="campo campo-completo">
                    <label for="senha_atual">
                        Senha atual
                    </label>

                    <input
                        type="password"
                        id="senha_atual"
                        name="senha_atual"
                        required
                    >

                    @error('senha_atual')
                        <span class="erro">
                            {{ $message }}
                        </span>
                    @enderror
                </div>

                <div class="campo">
                    <label for="password">
                        Nova senha
                    </label>

                    <input
                        type="password"
                        id="password"
                        name="password"
                        minlength="8"
                        required
                    >

                    @error('password')
                        <span class="erro">
                            {{ $message }}
                        </span>
                    @enderror
                </div>

                <div class="campo">
                    <label for="password_confirmation">
                        Confirmar nova senha
                    </label>

                    <input
                        type="password"
                        id="password_confirmation"
                        name="password_confirmation"
                        minlength="8"
                        required
                    >
                </div>

                <div class="campo campo-completo">
                    <button
                        type="submit"
                        class="botao-perfil"
                    >
                        Alterar senha
                    </button>
                </div>
<a href="{{ route('cliente.perfil.show') }}">
    Cancelar e voltar
</a>
            </form>

        </div>

    </section>

</main>

<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
></script>

</body>
</html>