<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous">
    </script>
    <link rel="shortcut icon" href="assets/img/logo.png" type="image/x-icon">
    <title>Filmix - Filmes e Séries</title>
</head>

<body>
    <header>
        <nav class="container-sm d-flex justify-content-between align-items-center">
            <a href="index.php"><label class="logo">🎬 Filmix</label></a>
            <ul class="d-flex mb-0">
                <li><a class="link" href="filmes.php">Filmes</a></li>
                <li><a class="link" href="series.php">Séries</a></li>
            </ul>
        </nav>
    </header>

    <main class="pt-4">
        <section class="banner container-sm text-center">
            <h3 class="text-light">Filmes e Séries em Destaque</h3>

            <div id="carouselExampleCaptions" class="carousel slide pt-3" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"
                        aria-label="Slide 4"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4"
                        aria-label="Slide 5"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="assets/img/filme1.jpeg" class="d-block w-100" alt="Chico Bento Slide 1">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Chico-Bento e a Goiabeira Maraviósa</h5>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="assets/img/serie1.png" class="d-block w-100" alt="Breaking Bad Slide 2">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Breaking Bad</h5>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="assets/img/filme3.webp" class="d-block w-100" alt="Bad Boys Slide 3">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Bad Boys</h5>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="assets/img/filme4.jpg" class="d-block w-100" alt="Shrek 2 Slide 3">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Shrek 2</h5>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="assets/img/filme5.jpg" class="d-block w-100" alt="+Veloses +Furiosos Slide 3">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>+Veloses +Furiosos</h5>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Anterior</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Próximo</span>
                </button>
            </div>

        </section>
        <section>

        <h3 class="text-center text-light">Lançamentos</h3>
        <div class="row">

        <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
            </div>
        </div>

        </div>

        </section>

    </main>

    <footer class="text-center py-4">
        <p class="mb-1">© 2025 Filmix.</p>
        <small>Desenvolvido por André Guindani e André Nascimento</small>
    </footer>
</body>

</html>