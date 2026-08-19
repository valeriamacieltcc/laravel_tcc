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
        rel="preconnect"
        href="https://fonts.googleapis.com"
    >

    <link
        rel="preconnect"
        href="https://fonts.gstatic.com"
        crossorigin
    >

    <link
        href="https://fonts.googleapis.com/css2?family=Parisienne&family=Playfair+Display+SC:wght@400;600;700&display=swap"
        rel="stylesheet"
    >

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <link
        rel="stylesheet"
        href="{{ asset('css/home.css') }}"
    >

</head>


<body>


{{-- =====================================================
     HEADER / NAVBAR
     ===================================================== --}}

@include('_partials.header')



@if(session('sucesso'))

    <div class="mensagem-sucesso">

        {{ session('sucesso') }}

    </div>

@endif



<main class="perfil-container">


    <!-- =====================================================
         TOPO DO PERFIL
         ===================================================== -->

    <section class="perfil-topo">


        <div class="foto-perfil">

            @if($cliente->foto_perfil)

                <img
                    src="{{ asset('storage/' . $cliente->foto_perfil) }}"
                    alt="{{ $user->name }}"
                >

            @else

                <img
                    src="{{ asset('imagem/perfil-padrao.png') }}"
                    alt="{{ $user->name }}"
                >

            @endif

        </div>


        <div class="info-perfil">

            <h1>
                {{ $user->name }}
            </h1>


            @if($cliente->data_nascimento)

                <h2>
                    {{ $cliente->data_nascimento->age }} anos
                </h2>

            @endif


            <p>
                {{ $user->email }}
            </p>


            <p>
                {{ $cliente->telefone }}
            </p>

        </div>


    </section>



    <!-- =====================================================
         EDITAR MEUS DADOS
         ===================================================== -->

    <section class="bloco-info">


        <div class="titulo-bloco">
            Editar meus dados
        </div>


        <div class="conteudo-bloco">


            <form
                class="form-perfil"
                action="{{ route('cliente.perfil.update') }}"
                method="POST"
                enctype="multipart/form-data"
            >

                @csrf

                @method('PUT')


                <!-- NOME -->

                <div class="form-perfil-group">

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

                        <span class="erro-campo">
                            {{ $message }}
                        </span>

                    @enderror

                </div>



                <!-- E-MAIL -->

                <div class="form-perfil-group">

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

                        <span class="erro-campo">
                            {{ $message }}
                        </span>

                    @enderror

                </div>



                <!-- TELEFONE -->

                <div class="form-perfil-group">

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

                        <span class="erro-campo">
                            {{ $message }}
                        </span>

                    @enderror

                </div>



                <!-- DATA DE NASCIMENTO -->

                <div class="form-perfil-group">

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

                        <span class="erro-campo">
                            {{ $message }}
                        </span>

                    @enderror

                </div>



                <!-- CPF -->

                <div class="form-perfil-group">

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

                        <span class="erro-campo">
                            {{ $message }}
                        </span>

                    @enderror

                </div>



                <!-- CEP -->

                <div class="form-perfil-group">

                    <label for="cep">
                        CEP
                    </label>

                    <input
                        type="text"
                        id="cep"
                        name="cep"
                        value="{{ old('cep', $cliente->cep) }}"
                    >

                    @error('cep')

                        <span class="erro-campo">
                            {{ $message }}
                        </span>

                    @enderror

                </div>



                <!-- ENDEREÇO -->

                <div class="form-perfil-group">

                    <label for="logradouro">
                        Endereço
                    </label>

                    <input
                        type="text"
                        id="logradouro"
                        name="logradouro"
                        value="{{ old('logradouro', $cliente->logradouro) }}"
                    >

                    @error('logradouro')

                        <span class="erro-campo">
                            {{ $message }}
                        </span>

                    @enderror

                </div>



                <!-- NÚMERO -->

                <div class="form-perfil-group">

                    <label for="numero">
                        Número
                    </label>

                    <input
                        type="text"
                        id="numero"
                        name="numero"
                        value="{{ old('numero', $cliente->numero) }}"
                    >

                    @error('numero')

                        <span class="erro-campo">
                            {{ $message }}
                        </span>

                    @enderror

                </div>



                <!-- COMPLEMENTO -->

                <div class="form-perfil-group">

                    <label for="complemento">
                        Complemento
                    </label>

                    <input
                        type="text"
                        id="complemento"
                        name="complemento"
                        value="{{ old('complemento', $cliente->complemento) }}"
                    >

                    @error('complemento')

                        <span class="erro-campo">
                            {{ $message }}
                        </span>

                    @enderror

                </div>



                <!-- BAIRRO -->

                <div class="form-perfil-group">

                    <label for="bairro">
                        Bairro
                    </label>

                    <input
                        type="text"
                        id="bairro"
                        name="bairro"
                        value="{{ old('bairro', $cliente->bairro) }}"
                    >

                    @error('bairro')

                        <span class="erro-campo">
                            {{ $message }}
                        </span>

                    @enderror

                </div>



                <!-- CIDADE -->

                <div class="form-perfil-group">

                    <label for="cidade">
                        Cidade
                    </label>

                    <input
                        type="text"
                        id="cidade"
                        name="cidade"
                        value="{{ old('cidade', $cliente->cidade) }}"
                    >

                    @error('cidade')

                        <span class="erro-campo">
                            {{ $message }}
                        </span>

                    @enderror

                </div>



                <!-- ESTADO -->

                <div class="form-perfil-group">

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

                    @error('estado')

                        <span class="erro-campo">
                            {{ $message }}
                        </span>

                    @enderror

                </div>



                <!-- FOTO DE PERFIL -->

                <div class="form-perfil-group form-foto">

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

                        <span class="erro-campo">
                            {{ $message }}
                        </span>

                    @enderror

                </div>



                <!-- SALVAR -->

                <div class="form-perfil-actions">

                    <button
                        type="submit"
                        class="btn-acao"
                    >
                        Salvar alterações
                    </button>

                </div>


            </form>


        </div>

    </section>



    <!-- =====================================================
         GALERIA ANTES E DEPOIS
         ===================================================== -->

    <section class="galeria-perfil">

        <h3>
            Histórico dos Antes & Depois
        </h3>


        <div class="sem-dados-galeria">

            <p>
                Nenhuma foto cadastrada ainda.
            </p>

        </div>

    </section>



    <!-- =====================================================
         HISTÓRICO DOS PROCEDIMENTOS
         ===================================================== -->

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



    <!-- =====================================================
         FICHA DE ANAMNESE
         ===================================================== -->

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



    <!-- =====================================================
         FAVORITOS
         ===================================================== -->

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



    <!-- =====================================================
         ALTERAR SENHA
         ===================================================== -->

    <section class="bloco-info">

        <div class="titulo-bloco">
            Alterar senha
        </div>


        <div class="conteudo-bloco">


            <form
                class="form-perfil form-senha"
                action="{{ route('cliente.perfil.password') }}"
                method="POST"
            >

                @csrf

                @method('PUT')


                <!-- SENHA ATUAL -->

                <div class="form-perfil-group">

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

                        <span class="erro-campo">
                            {{ $message }}
                        </span>

                    @enderror

                </div>



                <!-- NOVA SENHA -->

                <div class="form-perfil-group">

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

                        <span class="erro-campo">
                            {{ $message }}
                        </span>

                    @enderror

                </div>



                <!-- CONFIRMAR SENHA -->

                <div class="form-perfil-group">

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



                <!-- ALTERAR SENHA -->

                <div class="form-perfil-actions">

                    <button
                        type="submit"
                        class="btn-acao"
                    >
                        Alterar senha
                    </button>

                </div>


            </form>


        </div>

    </section>


</main>



{{-- =====================================================
     FOOTER
     ===================================================== --}}

@include('_partials.footer')



<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
></script>


</body>

</html>