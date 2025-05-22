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
    <link rel="stylesheet" href="assets/style.css"/>
    <link rel="shortcut icon" href="assets/img/logo.png" type="image/x-icon">
    <title>Filmix - Filmes e Séries</title>
</head>

<body>
    <header class="shadow-sm fixed-top">
        <nav class="container-sm d-flex justify-content-between align-items-center py-3">
            <a href="index.php" class="logo">🎬 <strong>Filmix</strong></a>
            <ul class="d-flex gap-3 mb-0">
                <li><a class="nav-link" href="#acao">Ação</a></li>
                <li><a class="nav-link" href="#suspense">Supense</a></li>
                <li><a class="nav-link" href="#comedia">Comédia</a></li>
                <li><a class="nav-link" href="#terror">Terror</a></li>
            </ul>
        </nav>
    </header>

    <main>
    <section class="container-sm pt-5" id="acao">
        <?php
$series_acao = [
    ["titulo" => "Jack Ryan", "imagem" => "https://upload.wikimedia.org/wikipedia/pt/b/b6/Jack_Ryan_s%C3%A9rie.jpg", "atores" => "John Krasinski, Wendell Pierce, Abbie Cornish", "diretor" => "Carlton Cuse", "classificacao" => "16", "episodios" => 30, "temporadas" => 4],
    ["titulo" => "The Boys", "imagem" => "https://br.web.img3.acsta.net/c_310_420/pictures/19/07/09/14/34/1532536.jpg?coixp=57&coiyp=52", "atores" => "Karl Urban, Jack Quaid, Antony Starr", "diretor" => "Eric Kripke", "classificacao" => "18", "episodios" => 24, "temporadas" => 3],
    ["titulo" => "24 Horas", "imagem" => "https://images.justwatch.com/poster/300810936/s166/24-horas.avif", "atores" => "Kiefer Sutherland, Mary Lynn Rajskub, Carlos Bernard", "diretor" => "Jon Cassar", "classificacao" => "16", "episodios" => 204, "temporadas" => 9],
    ["titulo" => "Reacher", "imagem" => "https://imusic.b-cdn.net/images/item/original/195/5056453207195.jpg?reacher-season-2-2024-reacher-season-two-dvd&class=scaled&v=1726227063", "atores" => "Alan Ritchson", "Willa Fitzgerald", "Malcolm Goodwin", "diretor" => "Nick Santora", "classificacao" => "16", "episodios" => 16, "temporadas" => 2],
    ["titulo" => "Vikings", "imagem" => "https://br.web.img2.acsta.net/c_310_420/pictures/19/12/04/22/35/3436063.jpg", "atores" => "Travis Fimmel, Katheryn Winnick, Clive Standen", "diretor" => "Michael Hirst", "classificacao" => "18", "episodios" => 89, "temporadas" => 6]
];
?>
    <h4 class="text-light mb-3">Séries de ação</h4>
        <div id="carouselExample" class="carousel slide">
             <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row g-4">
                        <?php
                        for ($i=0;$i<count($series_acao); $i++) {
                        ?>
                            <div class="col">
                                <div class="card bg-dark text-light h-100 shadow-sm">
                                    <img src="<?= $series_acao[$i]["imagem"] ?>" class="card-img-top" alt="<?= $series_acao[$i]["titulo"] ?>">
                                        <div class="card-body">
                                            <h6 class="card-title mb-1"><?= $series_acao[$i]["titulo"] ?></h6>
                                            <p class="card-text small"><strong>Diretor:</strong>
                                                <?= $series_acao[$i]["diretor"] ?></p>
                                            <p class="card-text small"><strong>Atores:</strong>
                                                <?= $series_acao[$i]["atores"] ?></p>
                                            <p class="card-text small"><strong>Classificação:</strong>
                                                <?= $series_acao[$i]["classificacao"] ?></p>
                                            <p class="card-text small"><strong>Episódios:</strong>
                                                <?= $series_acao[$i]["episodios"] ?></p>
                                            <p class="card-text small"><strong>Temporadas:</strong>
                                                <?= $series_acao[$i]["temporadas"] ?></p>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
        </section>

        <section class="container-sm pt-5" id="suspense">
        <?php
$series_suspense = [
    ["titulo" => "Mindhunter", "imagem" => "https://br.web.img3.acsta.net/c_310_420/pictures/19/08/07/17/01/2286697.jpg", "atores" => "Jonathan Groff, Holt McCallany, Anna Torv", "diretor" => "David Fincher", "classificacao" => "16", "episodios" => 19, "temporadas" => 2],
    ["titulo" => "You", "imagem" => "https://br.web.img2.acsta.net/c_310_420/pictures/18/12/31/02/49/2373131.jpg", "atores" => "Penn Badgley, Victoria Pedretti, Elizabeth Lail", "diretor" => "Greg Berlanti", "classificacao" => "18", "episodios" => 40, "temporadas" => 4],
    ["titulo" => "Dark", "imagem" => "https://upload.wikimedia.org/wikipedia/pt/thumb/f/f6/Dark_%28s%C3%A9rie%29.jpg/250px-Dark_%28s%C3%A9rie%29.jpg", "atores" => "Louis Hofmann, Karoline Eichhorn, Lisa Vicari", "diretor" => "Baran bo Odar", "classificacao" => "16", "episodios" => 26, "temporadas" => 3],
    ["titulo" => "The Sinner", "imagem" => "https://m.media-amazon.com/images/I/71Bhgm9ml+L._SY466_.jpg", "atores" => "Bill Pullman, Jessica Biel, Carrie Coon", "diretor" => "Derek Simonds", "classificacao" => "16", "episodios" => 32, "temporadas" => 4],
    ["titulo" => "True Detective", "imagem" => "https://m.media-amazon.com/images/I/81dEbr7mJCL._AC_SY741_.jpg", "atores" => "Matthew McConaughey, Woody Harrelson, Mahershala Ali", "diretor" => "Nic Pizzolatto", "classificacao" => "18", "episodios" => 28, "temporadas" => 4]
];
?>
    <h4 class="text-light mb-3">Séries de suspense</h4>
        <div id="carouselSuspense" class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row g-4">
                        <?php
                        for ($i = 0; $i < count($series_suspense); $i++) {
                        ?>
                            <div class="col">
                                <div class="card bg-dark text-light h-100 shadow-sm">
                                    <img src="<?= $series_suspense[$i]["imagem"] ?>" class="card-img-top" alt="<?= $series_suspense[$i]["titulo"] ?>">
                                    <div class="card-body">
                                        <h6 class="card-title mb-1"><?= $series_suspense[$i]["titulo"] ?></h6>
                                        <p class="card-text small"><strong>Diretor:</strong>
                                            <?= $series_suspense[$i]["diretor"] ?></p>
                                        <p class="card-text small"><strong>Atores:</strong>
                                            <?= $series_suspense[$i]["atores"] ?></p>
                                        <p class="card-text small"><strong>Classificação:</strong>
                                            <?= $series_suspense[$i]["classificacao"] ?></p>
                                        <p class="card-text small"><strong>Episódios:</strong>
                                                <?= $series_acao[$i]["episodios"] ?></p>
                                        <p class="card-text small"><strong>Temporadas:</strong>
                                                <?= $series_acao[$i]["temporadas"] ?></p>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="container-sm pt-5" id="comedia">
        <?php
$series_comedia = [
    ["titulo" => "Brooklyn Nine-Nine", "imagem" => "https://upload.wikimedia.org/wikipedia/pt/thumb/5/53/Brooklyn_Nine-Nine-4.jpg/250px-Brooklyn_Nine-Nine-4.jpg", "atores" => "Andy Samberg, Terry Crews, Andre Braugher", "diretor" => "Dan Goor", "classificacao" => "12", "episodios" => 153, "temporadas" => 8],
    ["titulo" => "The Office", "imagem" => "https://s2-globo-play.glbimg.com/HomxwhkLrDhwT6sFt5RXgcgx96A=/362x536/https://s2-globo-play.glbimg.com/in6oR4M41TejLgIJ94tqwLxeTJ4=/https://s2.glbimg.com/3LTM2R5PA0QJcvgIQCouS8fEas4=/i.s3.glbimg.com/v1/AUTH_c3c606ff68e7478091d1ca496f9c5625/internal_photos/bs/2024/R/M/99jt5YRRW66h3YKXahdA/2024-4590-the-office-poster.jpg", "atores" => "Steve Carell", "John Krasinski", "Rainn Wilson", "diretor" => "Greg Daniels", "classificacao" => "12", "episodios" => 201, "temporadas" => 9],
    ["titulo" => "Friends", "imagem" => "https://br.web.img2.acsta.net/c_310_420/pictures/21/05/19/19/32/3752763.jpg", "atores" => "Jennifer Aniston, Courteney Cox, Matthew Perry", "diretor" => "David Crane", "classificacao" => "12", "episodios" => 236, "temporadas" => 10],
    ["titulo" => "How I Met Your Mother", "imagem" => "https://m.media-amazon.com/images/I/81XmuItZwyL.__AC_SX300_SY300_QL70_ML2_.jpg", "atores" => "Josh Radnor, Jason Segel, Cobie Smulders", "diretor" => "Pamela Fryman", "classificacao" => "14", "episodios" => 208, "temporadas" => 9],
    ["titulo" => "The Big Bang Theory", "imagem" => "https://m.media-amazon.com/images/I/81ksNXITStL._AC_UF1000,1000_QL80_.jpg", "atores" => "Jim Parsons, Johnny Galecki, Kaley Cuoco", "diretor" => "Chuck Lorre", "classificacao" => "12", "episodios" => 279, "temporadas" => 12]
];
?>
    <h4 class="text-light mb-3">Séries de comédia</h4>
        <div id="carouselComedia" class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row g-4">
                        <?php
                        for ($i = 0; $i < count($series_comedia); $i++) {
                            ?>
                            <div class="col">
                                <div class="card bg-dark text-light h-100 shadow-sm">
                                    <img src="<?= $series_comedia[$i]["imagem"] ?>" class="card-img-top"
                                        alt="<?= $series_comedia[$i]["titulo"] ?>">
                                    <div class="card-body">
                                        <h6 class="card-title mb-1"><?= $series_comedia[$i]["titulo"] ?></h6>
                                        <p class="card-text small"><strong>Diretor:</strong>
                                            <?= $series_comedia[$i]["diretor"] ?></p>
                                        <p class="card-text small"><strong>Atores:</strong>
                                            <?= $series_comedia[$i]["atores"] ?></p>
                                        <p class="card-text small"><strong>Classificação:</strong>
                                            <?= $series_comedia[$i]["classificacao"] ?></p>
                                        <p class="card-text small"><strong>Episódios:</strong>
                                                <?= $series_acao[$i]["episodios"] ?></p>
                                        <p class="card-text small"><strong>Temporadas:</strong>
                                                <?= $series_acao[$i]["temporadas"] ?></p>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="container-sm pb-5 mt-5" id="terror">
        <?php
$series_terror = [
    ["titulo" => "The Haunting of Hill House", "imagem" => "https://upload.wikimedia.org/wikipedia/pt/thumb/c/cd/The_Haunting_of_Hill_House_poster.jpg/250px-The_Haunting_of_Hill_House_poster.jpg", "atores" => "Victoria Pedretti, Oliver Jackson-Cohen, Carla Gugino", "diretor" => "Mike Flanagan", "classificacao" => "16", "episodios" => 10, "temporadas" => 1],
    ["titulo" => "Marianne", "imagem" => "https://br.web.img3.acsta.net/c_310_420/pictures/19/09/09/15/42/0355057.jpg", "atores" => "Victoire Du Bois, Lucie Boujenah, Tiphaine Daviot", "diretor" => "Samuel Bodin", "classificacao" => "18", "episodios" => 8, "temporadas" => 1],
    ["titulo" => "American Horror Story", "imagem" => "https://m.media-amazon.com/images/I/A183TI+4+6L._AC_SY741_.jpg", "atores" => "Sarah Paulson, Evan Peters, Jessica Lange", "diretor" => "Ryan Murphy", "classificacao" => "18", "episodios" => 130, "temporadas" => 12],
    ["titulo" => "Archive 81", "imagem" => "https://br.web.img3.acsta.net/c_310_420/pictures/21/12/14/17/35/4889759.jpg", "atores" => "Mamoudou Athie, Dina Shihabi, Evan Jonigkeit", "diretor" => "Rebecca Sonnenshine", "classificacao" => "16", "episodios" => 8, "temporadas" => 1],
    ["titulo" => "Channel Zero", "imagem" => "https://m.media-amazon.com/images/I/813mpVeksGL._AC_SY741_.jpg", "atores" => "Paul Schneider, Fiona Shaw, Amy Forsyth", "diretor" => "Nick Antosca", "classificacao" => "18", "episodios" => 24, "temporadas" => 4]
];
?>
    <h4 class="text-light mb-3">Séries de terror</h4>
        <div id="carouselTerror" class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row g-4">
                        <?php
                        for ($i = 0; $i < count($series_terror); $i++) {
                        ?>
                        <div class="col">
                            <div class="card bg-dark text-light h-100 shadow-sm">
                                <img src="<?= $series_terror[$i]["imagem"] ?>" class="card-img-top" alt="<?= $series_terror[$i]["titulo"] ?>">
                                    <div class="card-body">
                                        <h6 class="card-title mb-1"><?= $series_terror[$i]["titulo"] ?></h6>
                                        <p class="card-text small"><strong>Direção:</strong> <?= $series_terror[$i]["diretor"] ?></p>
                                        <p class="card-text small"><strong>Atores:</strong> <?= $series_terror[$i]["atores"] ?></p>
                                        <p class="card-text small"><strong>Classificação:</strong> <?= $series_terror[$i]["classificacao"] ?></p>
                                        <p class="card-text small"><strong>Episódios:</strong> <?= $series_terror[$i]["episodios"] ?></p>
                                        <p class="card-text small"><strong>Temporadas:</strong> <?= $series_terror[$i]["temporadas"] ?></p>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
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