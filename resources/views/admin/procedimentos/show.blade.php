<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Detalhes do Procedimento Admin - Valéria Maciel</title>

<link
    rel="preconnect"
    href="https://fonts.googleapis.com"
>

<link
    rel="preconnect"
    href="https://fonts.googleapis.com"
    crossorigin
>

<link
    href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600;700&family=Parisienne&family=Playfair+Display+SC:wght@400;600&display=swap"
    rel="stylesheet"
>

<!-- BOOTSTRAP -->
<link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css"
    rel="stylesheet"
>

<link
    rel="stylesheet"
    href="{{ asset('css/adminprocedimentos.css') }}"
>

</head>
<body>

<h1>{{ $procedimento->nome }}</h1>



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

@if($procedimento->imagem)
    <img
        src="{{ asset('storage/' . $procedimento->imagem) }}"
        width="300"
        alt="{{ $procedimento->nome }}"
    >
@endif
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