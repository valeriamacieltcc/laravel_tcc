<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Procedimentos & Cuidados</title>
<link rel="stylesheet" href="{{ asset('css/procedimento.css') }}">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display+SC:wght@400;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Parisienne&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600;700&family=Montserrat:wght@400;500;600&display=swap" rel="stylesheet">
</head>
<body>
  <h1>{{ $procedimento->nome }}</h1>

<p>{{ $procedimento->descricao }}</p>

<p>Preço: R$ {{ $procedimento->preco }}</p>

<p>Duração: {{ $procedimento->duracao_minutos }} minutos</p>

<a class="btn" href="{{route('cliente.agendamentos.index')}}">
                AGENDAR PROCEDIMENTO
            </a>

<img src="{{ $procedimento->imagem }}" alt="{{ $procedimento->nome }}">

<h3>Cuidados</h3>
<p>{{ $procedimento->cuidados }}</p>

<h3>Contraindicações</h3>
<p>{{ $procedimento->contraindicacoes }}</p>  
</body>
