<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>{{ $procedimento->nome }}</title>
</head>
<body>

<h1>{{ $procedimento->nome }}</h1>

@if($procedimento->imagem)
    <img
        src="{{ asset('storage/' . $procedimento->imagem) }}"
        width="300"
        alt="{{ $procedimento->nome }}"
    >
@endif

<p>
    <strong>Categoria:</strong>
    {{ $procedimento->categoria?->nome ?? 'Sem categoria' }}
</p>

<p>
    <strong>Descrição:</strong>
    {{ $procedimento->descricao }}
</p>

<p>
    <strong>Preço:</strong>

    @if($procedimento->preco)
        R$ {{ number_format($procedimento->preco, 2, ',', '.') }}
    @else
        Consultar
    @endif
</p>

<p>
    <strong>Duração:</strong>
    {{ $procedimento->duracao_minutos }} minutos
</p>

<p>
    <strong>Cuidados:</strong>
    {{ $procedimento->cuidados ?? 'Não informado' }}
</p>

<p>
    <strong>Contraindicações:</strong>
    {{ $procedimento->contraindicacoes ?? 'Não informado' }}
</p>

<a href="{{ route('admin.procedimentos.edit', $procedimento) }}">
    Editar
</a>

<a href="{{ route('admin.procedimentos.index') }}">
    Voltar
</a>

</body>
</html>