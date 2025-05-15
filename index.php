<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="assets/style.css" />
    <link rel="shortcut icon" href="assets/img/logo.png" type="image/x-icon">
    <title>Filmix - Filmes e Séries</title>
</head>

<body>
    <header class="shadow-sm fixed-top">
        <nav class="container-sm d-flex justify-content-between align-items-center py-3">
            <a href="index.php" class="logo">🎬 <strong>Filmix</strong></a>
            <ul class="d-flex gap-3 mb-0">
                <li><a class="nav-link" href="filmes.php">Filmes</a></li>
                <li><a class="nav-link" href="series.php">Séries</a></li>
            </ul>
        </nav>
    </header>

    <main class="pt-4">
        <section class="banner text-center container-sm mb-5">
            <h3 class="mb-4 text-light">Filmes e Séries em Destaque</h3>

            <div id="carouselExampleCaptions" class="carousel slide rounded overflow-hidden shadow"
                data-bs-ride="carousel">
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
                            <h5>Chico Bento e a Goiabeira Maraviósa</h5>
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
                        <img src="assets/img/filme4.jpg" class="d-block w-100" alt="Shrek 2 Slide 4">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Shrek 2</h5>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="assets/img/filme5.jpg" class="d-block w-100" alt="+Veloses +Furiosos Slide 5">
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


        <section class="container-sm pt-5">
            <h3 class="text-light mb-4">🎬 Últimos Lançamentos</h3>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5 g-4">
                <div class="col">
                    <div class="card bg-dark text-light h-100 shadow-sm">
                        <img src="assets/img/thunderbolts.webp" class="card-img-top" alt="Thunderbolts*">
                        <div class="card-body">
                            <h6 class="card-title mb-1">Thunderbolts*</h6>
                            <p class="card-text small">Anti-heróis da Marvel em uma missão secreta. Nova equipe em ação.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card bg-dark text-light h-100 shadow-sm">
                        <img src="assets/img/homem-com-h.jpg" class="card-img-top" alt="Homem com H">
                        <div class="card-body">
                            <h6 class="card-title mb-1">Homem com H</h6>
                            <p class="card-text small">A trajetória de Ney Matogrosso nos palcos e na vida.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card bg-dark text-light h-100 shadow-sm">
                        <img src="assets/img/a-ultima-ceia.webp" class="card-img-top" alt="A Última Ceia">
                        <div class="card-body">
                            <h6 class="card-title mb-1">A Última Ceia</h6>
                            <p class="card-text small">Drama bíblico que retrata os discípulos antes da cruz.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card bg-dark text-light h-100 shadow-sm">
                        <img src="assets/img/osenforcados.jpg" class="card-img-top" alt="Os Enforcados">
                        <div class="card-body">
                            <h6 class="card-title mb-1">Os Enforcados</h6>
                            <p class="card-text small">Adaptação moderna de Macbeth ambientada no Rio.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card bg-dark text-light h-100 shadow-sm">
                        <img src="assets/img/premonicao.jpg" class="card-img-top" alt="Premonição 6">
                        <div class="card-body">
                            <h6 class="card-title mb-1">Premonição 6</h6>
                            <p class="card-text small">A franquia retorna com novas mortes e visões terríveis.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <footer class="text-center py-4 mt-5 border-top border-secondary">
        <p class="mb-1">© 2025 Filmix.</p>
        <small>Desenvolvido por André Guindani e André Nascimento</small>
    </footer>
</body>

</html>