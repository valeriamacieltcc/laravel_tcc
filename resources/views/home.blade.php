<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Valéria Maciel Estética</title>


    <!-- CSS DA HOME -->
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">


    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>


    <link href="https://fonts.googleapis.com/css2?family=Parisienne&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display+SC&display=swap" rel="stylesheet">


    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">


</head>


<body>


@include('_partials.navbar&topo')


<!-- SEU CONTEÚDO AQUI -->

<section class="hero">

    <div id="carouselExampleAutoplaying"
         class="carousel slide"
         data-bs-ride="carousel">

        <div class="carousel-inner">

            @foreach($home['banner'] as $index => $banner)

                <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">

                    <img src="{{ asset($banner['imagem']) }}"
                         class="d-block w-100"
                         alt="Banner">

                </div>

            @endforeach

        </div>

    </div>

</section>


<section class="about">

    <div class="about-image">

        <img src="{{ asset($home['sobre']['imagem']) }}"
             class="foto-perfil"
             alt="Valéria Maciel">

    </div>


    <div class="about-text">

        <h2>
            {{ $home['sobre']['titulo'] }}
        </h2>


        <p>
            {{ $home['sobre']['texto'] }}
        </p>

    </div>

</section>



<section class="services">


@foreach($home['categorias'] as $categoria)


<div class="card">

    <img src="{{ asset($categoria['imagem']) }}"
         alt="{{ $categoria['titulo'] }}">


    <h3>
        {{ $categoria['titulo'] }}
    </h3>


</div>


@endforeach


</section>



@include('_partials.footer')



<!-- BOOTSTRAP JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>