<h1>{{ $procedimento->nome }}</h1>

<p>{{ $procedimento->descricao }}</p>

<p>Preço: R$ {{ $procedimento->preco }}</p>

<p>Duração: {{ $procedimento->duracao_minutos }} minutos</p>

<img src="{{ $procedimento->imagem }}" alt="{{ $procedimento->nome }}">

<h3>Cuidados</h3>
<p>{{ $procedimento->cuidados }}</p>

<h3>Contraindicações</h3>
<p>{{ $procedimento->contraindicacoes }}</p>