<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Novo procedimento</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f6f5e5;
            padding: 30px;
        }

        .container {
            max-width: 700px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 8px;
        }

        label {
            display: block;
            margin-top: 15px;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input,
        textarea,
        select {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
        }

        textarea {
            min-height: 100px;
        }

        .botao {
            margin-top: 20px;
            padding: 12px 20px;
            border: none;
            background: #2c7771;
            color: white;
            cursor: pointer;
            border-radius: 5px;
        }

        .erro {
            color: #b00020;
            font-size: 14px;
        }
    </style>
</head>
<body>

<div class="container">

    <h1>Novo procedimento</h1>

    <form
        action="{{ route('admin.procedimentos.store') }}"
        method="POST"
        enctype="multipart/form-data"
    >
        @csrf

        <label>Categoria</label>

        <select name="categoria_procedimento_id">
            <option value="">Selecione</option>

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

        <label>Nome</label>

        <input
            type="text"
            name="nome"
            value="{{ old('nome') }}"
            required
        >

        @error('nome')
            <div class="erro">{{ $message }}</div>
        @enderror

        <label>Descrição</label>

        <textarea
            name="descricao"
            required
        >{{ old('descricao') }}</textarea>

        @error('descricao')
            <div class="erro">{{ $message }}</div>
        @enderror

        <label>Preço</label>

        <input
            type="number"
            name="preco"
            step="0.01"
            min="0"
            value="{{ old('preco') }}"
        >

        <label>Duração em minutos</label>

        <input
            type="number"
            name="duracao_minutos"
            min="1"
            value="{{ old('duracao_minutos', 60) }}"
            required
        >

        <label>Imagem</label>

        <input
            type="file"
            name="imagem"
            accept="image/*"
        >

        @error('imagem')
            <div class="erro">{{ $message }}</div>
        @enderror

        <label>Cuidados</label>

        <textarea name="cuidados">{{ old('cuidados') }}</textarea>

        <label>Contraindicações</label>

        <textarea name="contraindicacoes">{{ old('contraindicacoes') }}</textarea>

        <label>
            <input
                type="checkbox"
                name="ativo"
                value="1"
                checked
                style="width: auto;"
            >
            Procedimento ativo
        </label>

        <button type="submit" class="botao">
            Cadastrar
        </button>

        <a href="{{ route('admin.procedimentos.index') }}">
            Voltar
        </a>

    </form>

</div>

</body>
</html>