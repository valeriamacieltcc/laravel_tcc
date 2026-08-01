<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar procedimento</title>
</head>
<body>

<h1>Editar procedimento</h1>

<form
    action="{{ route('admin.procedimentos.update', $procedimento) }}"
    method="POST"
    enctype="multipart/form-data"
>
    @csrf
    @method('PUT')

    <label>Categoria</label>

    <select name="categoria_procedimento_id">
        <option value="">Selecione</option>

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

    <br><br>

    <label>Nome</label>

    <input
        type="text"
        name="nome"
        value="{{ old('nome', $procedimento->nome) }}"
        required
    >

    <br><br>

    <label>Descrição</label>

    <textarea name="descricao" required>{{ old('descricao', $procedimento->descricao) }}</textarea>

    <br><br>

    <label>Preço</label>

    <input
        type="number"
        name="preco"
        step="0.01"
        value="{{ old('preco', $procedimento->preco) }}"
    >

    <br><br>

    <label>Duração</label>

    <input
        type="number"
        name="duracao_minutos"
        value="{{ old('duracao_minutos', $procedimento->duracao_minutos) }}"
        required
    >

    <br><br>

    <label>Nova imagem</label>

    <input
        type="file"
        name="imagem"
        accept="image/*"
    >

    <br><br>

    <label>Cuidados</label>

    <textarea name="cuidados">{{ old('cuidados', $procedimento->cuidados) }}</textarea>

    <br><br>

    <label>Contraindicações</label>

    <textarea name="contraindicacoes">{{ old('contraindicacoes', $procedimento->contraindicacoes) }}</textarea>

    <br><br>

    <label>
        <input
            type="checkbox"
            name="ativo"
            value="1"
            @checked(old('ativo', $procedimento->ativo))
        >
        Procedimento ativo
    </label>

    <br><br>

    <button type="submit">
        Salvar alterações
    </button>

</form>

<a href="{{ route('admin.procedimentos.index') }}">
    Voltar
</a>

</body>
</html>