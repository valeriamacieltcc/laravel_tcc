<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Valéria Maciel Estética</title>

    <!-- CSS -->
   

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display+SC:wght@400;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Parisienne&display=swap" rel="stylesheet">
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
</head>



<body>

    @include('_partials.header')

    <main class="home-container">

        <!-- BANNER -->
        <section class="hero">

            <div id="carouselExampleAutoplaying"
                 class="carousel slide"
                 data-bs-ride="carousel">

                <div class="carousel-inner">

                    <div class="carousel-item active">
                    <img src="{{ $home->banner_1 }}"
     class="d-block w-100"
     alt="Banner 1">
                    </div>

                    <div class="carousel-item">
                    <img src="{{ $home->banner_2 }}"
     class="d-block w-100"
     alt="Banner 2">
                    </div>

                    <div class="carousel-item">
                    <img src="{{ $home->banner_3 }}"
     class="d-block w-100"
     alt="Banner 3">
                    </div>

                </div>

                <button class="carousel-control-prev"
                        type="button"
                        data-bs-target="#carouselExampleAutoplaying"
                        data-bs-slide="prev">

                    <span class="carousel-control-prev-icon"></span>

                </button>

                <button class="carousel-control-next"
                        type="button"
                        data-bs-target="#carouselExampleAutoplaying"
                        data-bs-slide="next">

                    <span class="carousel-control-next-icon"></span>

                </button>

            </div>

        </section>

        <!-- SOBRE -->
        <section class="about">

            <div class="about-image">

            <img src="{{ $home->sobre_imagem }}"
            alt="Perfil">

            </div>

            <div class="about-text">

            <h2>{{ $home->sobre_titulo }}</h2>

            <p>
    {{ $home->sobre_texto }}
</p>

            </div>

        </section>

        <!-- SERVIÇOS -->
        <section class="services">

            <div class="card-home">
            <img src="{{ $home->categoria_1_imagem }}"
     alt="{{ $home->categoria_1_nome }}">

<h3>{{ $home->categoria_1_nome }}</h3>
            </div>

            <div class="card-home">
            <img src="{{ $home->categoria_2_imagem }}"
     alt="{{ $home->categoria_2_nome }}">

<h3>{{ $home->categoria_2_nome }}</h3>
            </div>

            <div class="card-home">
            <img src="{{ $home->categoria_3_imagem }}"
     alt="{{ $home->categoria_3_nome }}">

<h3>{{ $home->categoria_3_nome }}</h3>
            </div>

            <div class="card-home">
            <img src="{{ $home->categoria_4_imagem }}"
     alt="{{ $home->categoria_4_nome }}">

<h3>{{ $home->categoria_4_nome }}</h3>
            </div>

        </section>

    </main>

    @include('_partials.footer')

    <!-- JS BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>