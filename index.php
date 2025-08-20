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
    <link rel="stylesheet" href="assets/index.css" />
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
<section class="container-sm pt-5" id="destaques">
    <?php
    $destaques = [
        ["titulo" => "Chico Bento e a Goiabeira Maraviósa", "imagem" => "assets/img/filme1.jpeg", "alt" => "Chico Bento Slide 1"],
        ["titulo" => "Breaking Bad", "imagem" => "assets/img/serie1.png", "alt" => "Breaking Bad Slide 2"],
        ["titulo" => "Bad Boys", "imagem" => "assets/img/filme3.webp", "alt" => "Bad Boys Slide 3"],
        ["titulo" => "Shrek 2", "imagem" => "assets/img/filme4.jpg", "alt" => "Shrek 2 Slide 4"],
        ["titulo" => "+Veloses +Furiosos", "imagem" => "assets/img/filme5.jpg", "alt" => "+Veloses +Furiosos Slide 5"]
    ];
    ?>


    <h4 class="text-light mb-3">Filmes e Séries em Destaque</h4>


    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
            <?php
            $activeClass = 'active'; // A primeira imagem será a ativa
            for ($i = 0; $i < count($destaques); $i++) {
                ?>
                <div class="carousel-item <?=$activeClass; ?>">
                    <img src="<?=$destaques[$i]['imagem']; ?>" class="d-block w-100" alt="<?=$destaques[$i]['alt']; ?>">
                    <div class="carousel-caption d-none d-md-block">
                        <h5><?=$destaques[$i]['titulo']; ?></h5>
                    </div>
                </div>
                <?php
                // Só a primeira imagem recebe a classe 'active'
                $activeClass = '';
            }
            ?>
        </div>


        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>


        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Próximo</span>
        </button>
    </div>
</section>

<section class="container-sm pt-5" id="ultimos-lancamentos">
    <?php
    $lancamentos = [
        [
            "titulo" => "Thunderbolts",
            "imagem" => "assets/img/thunderbolts.webp",
            "descricao" => "Anti-heróis da Marvel em uma missão secreta. Nova equipe em ação."
        ],
        [
            "titulo" => "Homem com H",
            "imagem" => "assets/img/homem-com-h.jpg",
            "descricao" => "A trajetória de Ney Matogrosso nos palcos e na vida."
        ],
        [
            "titulo" => "A Última Ceia",
            "imagem" => "assets/img/a-ultima-ceia.webp",
            "descricao" => "Drama bíblico que retrata os discípulos antes da cruz."
        ],
        [
            "titulo" => "Os Enforcados",
            "imagem" => "assets/img/osenforcados.jpg",
            "descricao" => "Adaptação moderna de Macbeth ambientada no Rio."
        ],
        [
            "titulo" => "Premonição 6",
            "imagem" => "assets/img/premonicao.jpg",
            "descricao" => "A franquia retorna com novas mortes e visões terríveis."
        ]
    ];
    ?>
    <h3 class="text-light mb-4">🎬 Últimos Lançamentos</h3>
    <div class="row g-4">
        <?php
        foreach ($lancamentos as $lancamento) {
        ?>
            <div class="col">
                <div class="card bg-dark text-light h-100 shadow-sm">
                    <img src="<?= $lancamento['imagem'] ?>" class="card-img-top" alt="<?= $lancamento['titulo'] ?>">
                    <div class="card-body">
                        <h6 class="card-title mb-1"><?= $lancamento['titulo'] ?></h6>
                        <p class="card-text small"><?= $lancamento['descricao'] ?></p>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</section>


<section class="container-sm pt-5 pb-5" id="filmes-premiados">
    <?php
    $filmes_premiados = [
        [
            "titulo" => "Oppenheimer",
            "imagem" => "assets/img/oppenheimer.webp",
            "descricao" => "A história do criador da bomba atômica. Vencedor de 7 Oscars em 2024."
        ],
        [
            "titulo" => "Tudo em Todo Lugar ao Mesmo Tempo",
            "imagem" => "assets/img/tudo.webp",
            "descricao" => "Uma viagem multiversal insana. Ganhou 7 Oscars em 2023, incluindo Melhor Filme."
        ],
        [
            "titulo" => "Parasita",
            "imagem" => "assets/img/parasite.webp",
            "descricao" => "Thriller sul-coreano premiado como Melhor Filme em 2020. Crítica social afiada."
        ],
        [
            "titulo" => "Nomadland",
            "imagem" => "assets/img/nomadland.jpg",
            "descricao" => "Uma mulher nômade em busca de liberdade. Vencedor de Melhor Filme em 2021."
        ],
        [
            "titulo" => "Green Book",
            "imagem" => "assets/img/green.jpg",
            "descricao" => "Uma jornada de amizade e preconceito. Oscar de Melhor Filme em 2019."
        ]
    ];
    ?>
    <h3 class="text-light mb-4">🏆 Filmes Premiados no Oscar</h3>
    <div class="row g-4">
        <?php
        foreach ($filmes_premiados as $filme) {
        ?>
            <div class="col">
                <div class="card bg-dark text-light h-100 shadow-sm">
                    <img src="<?= $filme['imagem'] ?>" class="card-img-top" alt="<?= $filme['titulo'] ?>">
                    <div class="card-body">
                        <h6 class="card-title mb-1"><?= $filme['titulo'] ?></h6>
                        <p class="card-text small"><?= $filme['descricao'] ?></p>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</section>

    </main>

    <footer class="text-center py-4 border-top border-secondary">
        <p class="mb-1">© 2025 Filmix.</p>
        <small>Desenvolvido por André Guindani e André Nascimento</small>
    </footer>
</body>


</html>
