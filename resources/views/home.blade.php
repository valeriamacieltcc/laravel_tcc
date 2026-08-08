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
                        <img src="https://i.pinimg.com/1200x/cf/f1/a2/cff1a2994e6447a975c39c4ef6b44abe.jpg"
                             class="d-block w-100"
                             alt="Banner 1">
                    </div>

                    <div class="carousel-item">
                        <img src="https://i.pinimg.com/1200x/a2/ca/36/a2ca365239e8894df6fa487e31d3a89e.jpg"
                             class="d-block w-100"
                             alt="Banner 2">
                    </div>

                    <div class="carousel-item">
                        <img src="https://i.pinimg.com/736x/b5/c2/31/b5c2318a43b336e87875193bf0fc15b5.jpg"
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

                <img src="https://i.pinimg.com/736x/c5/ac/77/c5ac77654151b0712c786a7174c85912.jpg"
                     alt="Perfil">

            </div>

            <div class="about-text">

                <h2>QUEM SOU?</h2>

                <p>
                    Valéria Maciel Estética é um espaço dedicado ao cuidado,
                    bem-estar e autoestima. Com profissionais especializados,
                    oferecemos serviços personalizados para elevar sua beleza
                    natural e proporcionar uma experiência acolhedora.
                </p>

            </div>

        </section>

        <!-- SERVIÇOS -->
        <section class="services">

            <div class="card-home">
                <img src="https://i.pinimg.com/1200x/bb/0d/ff/bb0dff7adbd80c5ae3322f070bc562ed.jpg" alt="Corpo">
                <h3>CORPO</h3>
            </div>

            <div class="card-home">
                <img src="https://i.pinimg.com/736x/3b/93/99/3b93992768d7266d2de4d6fe7054fe63.jpg" alt="Face">
                <h3>FACE</h3>
            </div>

            <div class="card-home">
                <img src="https://i.pinimg.com/736x/85/54/39/85543969a0ca3ff9040745386c4418e9.jpg" alt="Cabelo">
                <h3>CABELO</h3>
            </div>

            <div class="card-home">
                <img src="https://i.pinimg.com/736x/c6/12/e6/c612e651df488d64a48ce23eda24ce18.jpg" alt="Unha">
                <h3>UNHA</h3>
            </div>

        </section>

    </main>

    @include('_partials.footer')

    <!-- JS BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>