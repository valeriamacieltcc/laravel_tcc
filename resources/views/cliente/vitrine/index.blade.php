
@include('_partials.header')


<title>vitrine</title>
<link rel="stylesheet" href="{{ asset('css/procedimento.css') }}">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display+SC:wght@400;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Parisienne&display=swap" rel="stylesheet">



<section class="produtos">

@foreach($vitrine as $produto)

<div class="produto-card">

    <img src="{{ asset('imagem/'.$produto->imagem) }}" alt="{{ $produto->nome }}">

    <div class="produto-body">

        <h3>{{ $produto->nome }}</h3>

        <p>{{ $produto->descricao }}</p>

        <h2>R$ {{ number_format($produto->preco, 2, ',', '.') }}</h2>

        <div class="produto-footer">
            <button>CONTATO</button>
        </div>

    </div>

</div>

@endforeach

@include('_partials.footer')

    <!-- JS BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>