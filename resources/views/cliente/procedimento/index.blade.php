<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title> procedimentos- Valéria Maciel</title>

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
        href="{{ asset('css/procedimento.css') }}"
    >
    

</head>


<body>
   @include('_partials.header')


<!-- TOPO -->
<section class="logo-section">


    <div class="titulo">
        <h1>PROCEDIMENTOS &<br> CUIDADOS</h1>
    </div>

</section>

<!-- CARDS -->

<section class="cards">
    @foreach($procedimentos as $procedimento)

    <div class="card">

    <img src="{{ asset('storage/' . $procedimento->imagem) }}">

        <div class="card-body">

            <h3>{{ $procedimento->nome }}</h3>

            <p>{{ $procedimento->descricao }}</p> 

            <a class="btn" href="http://localhost:8000/procedimento/{{ $procedimento->id }}">
                VER MAIS
            </a>

        </div>

    </div>

    @endforeach
    
</section>
<div class="paginacao">
    {{ $procedimentos->links() }}

</div>

  
@include('_partials.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>