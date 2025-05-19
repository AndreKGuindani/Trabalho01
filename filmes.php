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
                <li><a class="nav-link" href="#acao">Ação</a></li>
                <li><a class="nav-link" href="#suspense">Supense</a></li>
                <li><a class="nav-link" href="#comedia">Comédia</a></li>
                <li><a class="nav-link" href="#terror">Terror</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <?php
$filmes_acao = [
    ["titulo" => "John Wick", "ano" => 2014, "diretor" => "Chad Stahelski", "atores" => "Keanu Reeves, Michael Nyqvist", "classificacao" => "16 anos", "imagem" => "https://upload.wikimedia.org/wikipedia/pt/1/13/John_wick_ver3.jpg"],
    ["titulo" => "Mad Max: Estrada da Fúria", "ano" => 2015, "diretor" => "George Miller", "atores" => "Tom Hardy, Charlize Theron", "classificacao" => "18 anos", "imagem" => "https://musicart.xboxlive.com/7/eea21900-0000-0000-0000-000000000002/504/image.jpg"],
    ["titulo" => "Duro de Matar", "ano" => 1988, "diretor" => "John McTiernan", "atores" => "Bruce Willis, Alan Rickman", "classificacao" => "16 anos", "imagem" => "https://play-lh.googleusercontent.com/qqUD5CdYWfD7O2r_dVguxkIfogWUvNeeuGJToMFHtpAs8ps_dQp21o0WonAXiMMguQGk8w"],
    ["titulo" => "Batman: O Cavaleiro das Trevas", "ano" => 2008, "diretor" => "Christopher Nolan", "atores" => "Christian Bale, Heath Ledger", "classificacao" => "14 anos", "imagem" => "https://m.media-amazon.com/images/S/pv-target-images/ae8dddd0abc2fac14052f29bc2ae15ddd86374c0d3bd017171ee6473b8933b29.jpg"],
    ["titulo" => "Gladiador", "ano" => 2000, "diretor" => "Ridley Scott", "atores" => "Russell Crowe, Joaquin Phoenix", "classificacao" => "16 anos", "imagem" => "https://upload.wikimedia.org/wikipedia/pt/thumb/4/44/GladiadorPoster.jpg/250px-GladiadorPoster.jpg"],
    ["titulo" => "A Origem", "ano" => 2010, "diretor" => "Christopher Nolan", "atores" => "Leonardo DiCaprio, Joseph Gordon-Levitt", "classificacao" => "14 anos", "imagem" => "https://upload.wikimedia.org/wikipedia/pt/8/84/AOrigemPoster.jpg"],
    ["titulo" => "Missão Impossível", "ano" => 1996, "diretor" => "Brian De Palma", "atores" => "Tom Cruise, Jon Voight", "classificacao" => "12 anos", "imagem" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSwQQ3KvN9W7366QI3e0wpFpY5gVMR135OXfg&s"],
    ["titulo" => "Os Vingadores", "ano" => 2012, "diretor" => "Joss Whedon", "atores" => "Robert Downey Jr., Chris Evans", "classificacao" => "12 anos", "imagem" => "https://br.web.img2.acsta.net/medias/nmedia/18/89/43/82/20052140.jpg"],
    ["titulo" => "O Exterminador do Futuro 2", "ano" => 1991, "diretor" => "James Cameron", "atores" => "Arnold Schwarzenegger, Linda Hamilton", "classificacao" => "14 anos", "imagem" => "https://br.web.img2.acsta.net/medias/nmedia/18/92/91/08/20224693.jpg"],
    ["titulo" => "Viúva Negra", "ano" => 2021, "diretor" => "Cate Shortland", "atores" => "Scarlett Johansson, Florence Pugh", "classificacao" => "14 anos", "imagem" => "https://upload.wikimedia.org/wikipedia/pt/thumb/8/88/Black_Widow_%282020%29.jpg/250px-Black_Widow_%282020%29.jpg"]
];

$total = count($filmes_acao);
$por_slide = 5;
$total_slides =(count($filmes_acao) / $por_slide);
?>

        <section class="container-sm pt-5" id="acao">
            <section>
                <h4 class="text-light mb-3">Filmes de ação</h4>
                <div id="carouselExample" class="carousel slide">
                    <div class="carousel-inner">

                        <?php for ($s = 0; $s < $total_slides; $s++) { ?>
                        <div class="carousel-item <?=($s == 0 ? 'active' : '') ?>">
                            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5 g-4">
                                <?php
                            $inicio = $s * $por_slide;
                            for ($i = $s * $por_slide; $i < ($s + 1) * $por_slide && $i < $total; $i++) {
                            ?>
                                <div class="col">
                                    <div class="card bg-dark text-light h-100 shadow-sm">
                                        <img src="<?= $filmes_acao[$i]["imagem"] ?>" class="card-img-top"
                                            alt="<?= $filmes_acao[$i]["titulo"] ?>">
                                        <div class="card-body">
                                            <h6 class="card-title mb-1"><?= $filmes_acao[$i]["titulo"] ?></h6>
                                            <p class="card-text small"><strong>Ano:</strong>
                                                <?= $filmes_acao[$i]["ano"] ?></p>
                                            <p class="card-text small"><strong>Diretor:</strong>
                                                <?= $filmes_acao[$i]["diretor"] ?></p>
                                            <p class="card-text small"><strong>Atores:</strong>
                                                <?= $filmes_acao[$i]["atores"] ?></p>
                                            <p class="card-text small"><strong>Classificação:</strong>
                                                <?= $filmes_acao[$i]["classificacao"] ?></p>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                        <?php } ?>

                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Anterior</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Próximo</span>
                    </button>
                </div>
            </section>
        </section>

        <?php
$filmes_suspense = [
    ["titulo" => "Seven", "ano" => 1995, "diretor" => "David Fincher", "atores" => "Brad Pitt, Morgan Freeman", "classificacao" => "18 anos", "imagem" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRROBAac4LjCY9YFSUy934ryVCNKW-MCJlY3A&s"],
    ["titulo" => "O Iluminado", "ano" => 1980, "diretor" => "Stanley Kubrick", "atores" => "Jack Nicholson, Shelley Duvall", "classificacao" => "16 anos", "imagem" => "https://br.web.img3.acsta.net/pictures/14/10/10/19/21/152595.jpg"],
    ["titulo" => "O Silêncio dos Inocentes", "ano" => 1991, "diretor" => "Jonathan Demme", "atores" => "Jodie Foster, Anthony Hopkins", "classificacao" => "18 anos", "imagem" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSvn_etn7rqDp2pOzLLs_K1kQD0aRhEPeqIWQ&s"],
    ["titulo" => "Os Outros", "ano" => 2001, "diretor" => "Alejandro Amenábar", "atores" => "Nicole Kidman, Fionnula Flanagan", "classificacao" => "14 anos", "imagem" => "https://m.media-amazon.com/images/I/611tlXI0pwL._AC_UF1000,1000_QL80_.jpg"],
    ["titulo" => "Garota Exemplar", "ano" => 2014, "diretor" => "David Fincher", "atores" => "Ben Affleck, Rosamund Pike", "classificacao" => "16 anos", "imagem" => "https://m.media-amazon.com/images/I/81sSyD75y6L._AC_UF1000,1000_QL80_.jpg"],
    ["titulo" => "Os Suspeitos", "ano" => 1995, "diretor" => "Bryan Singer", "atores" => "Kevin Spacey, Gabriel Byrne", "classificacao" => "16 anos", "imagem" => "https://br.web.img3.acsta.net/pictures/210/509/21050952_20131018203347915.jpg"],
    ["titulo" => "Corra!", "ano" => 2017, "diretor" => "Jordan Peele", "atores" => "Daniel Kaluuya, Allison Williams", "classificacao" => "14 anos", "imagem" => "https://br.web.img3.acsta.net/c_310_420/pictures/17/04/19/21/08/577190.jpg"],
    ["titulo" => "O Sexto Sentido", "ano" => 1999, "diretor" => "M. Night Shyamalan", "atores" => "Bruce Willis, Haley Joel Osment", "classificacao" => "14 anos", "imagem" => "https://play-lh.googleusercontent.com/Z349tbhk9pphjy6y3czs-DUo665ysjhQ_7-k2pSR9pup-_qqn_hhzeujOaohnPH4LVM"],
    ["titulo" => "A Mulher na Janela", "ano" => 2021, "diretor" => "Joe Wright", "atores" => "Amy Adams, Julianne Moore", "classificacao" => "16 anos", "imagem" => "https://br.web.img3.acsta.net/pictures/19/12/19/20/45/2019215.jpg"],
    ["titulo" => "Ilha do Medo", "ano" => 2010, "diretor" => "Martin Scorsese", "atores" => "Leonardo DiCaprio, Mark Ruffalo", "classificacao" => "16 anos", "imagem" => "https://musicart.xboxlive.com/7/b4541100-0000-0000-0000-000000000002/504/image.jpg"],
];

$total_suspense = count($filmes_suspense);
$por_slide = 5;
$total_slides = ($total_suspense / $por_slide);
?>

        <section class="container-sm pt-5" id="suspense">
            <h4 class="text-light mb-3">Filmes de suspense</h4>
            <div id="carouselSuspense" class="carousel slide">
                <div class="carousel-inner">
                    <?php for ($s = 0; $s < $total_slides; $s++) { ?>
                    <div class="carousel-item <?= ($s == 0 ? 'active' : '') ?>">
                        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5 g-4">
                            <?php
                        $inicio = $s * $por_slide;
                        for ($i = $inicio; $i < ($inicio + $por_slide) && $i < $total_suspense; $i++) {
                        ?>
                            <div class="col">
                                <div class="card bg-dark text-light h-100 shadow-sm">
                                    <img src="<?= $filmes_suspense[$i]["imagem"] ?>" class="card-img-top"
                                        alt="<?= $filmes_suspense[$i]["titulo"] ?>">
                                    <div class="card-body">
                                        <h6 class="card-title mb-1"><?= $filmes_suspense[$i]["titulo"] ?></h6>
                                        <p class="card-text small"><strong>Ano:</strong>
                                            <?= $filmes_suspense[$i]["ano"] ?></p>
                                        <p class="card-text small"><strong>Diretor:</strong>
                                            <?= $filmes_suspense[$i]["diretor"] ?></p>
                                        <p class="card-text small"><strong>Atores:</strong>
                                            <?= $filmes_suspense[$i]["atores"] ?></p>
                                        <p class="card-text small"><strong>Classificação:</strong>
                                            <?= $filmes_suspense[$i]["classificacao"] ?></p>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                    <?php } ?>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carouselSuspense"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Anterior</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselSuspense"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Próximo</span>
                </button>
            </div>
        </section>


        <?php
$filmes_comedia = [
    ["titulo" => "O Máskara", "ano" => 1994, "diretor" => "Chuck Russell", "atores" => "Jim Carrey, Cameron Diaz", "classificacao" => "12 anos", "imagem" => "https://br.web.img2.acsta.net/medias/nmedia/18/90/86/15/20116705.jpg"],
    ["titulo" => "Esqueceram de Mim 2", "ano" => 1992, "diretor" => "Chris Columbus", "atores" => "Macaulay Culkin, Joe Pesci", "classificacao" => "Livre", "imagem" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQsj1OMRR2NeDrdKcrlFLIzJrYSG7rZWJy6cg&s"],
    ["titulo" => "Se Beber, Não Case", "ano" => 2009, "diretor" => "Todd Phillips", "atores" => "Bradley Cooper, Ed Helms", "classificacao" => "16 anos", "imagem" => "https://m.media-amazon.com/images/S/pv-target-images/7de3e539b111d5ce87b254329ad0af057a06788d1eec2b6f966f8aa2f9793753.jpg"],
    ["titulo" => "Descompensada", "ano" => 2014, "diretor" => "Ken Marino", "atores" => "Anna Faris, Eugenio Derbez", "classificacao" => "14 anos", "imagem" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQl_QCFlD9P8FOfWrTge7xdhvdRAS5tRkLuPw&s"],
    ["titulo" => "Uma Noite no Museu", "ano" => 2006, "diretor" => "Shawn Levy", "atores" => "Ben Stiller, Robin Williams", "classificacao" => "Livre", "imagem" => "https://images.justwatch.com/poster/246488291/s718/uma-noite-no-museu.jpg"],
    ["titulo" => "As Férias de Mr. Bean", "ano" => 2007, "diretor" => "Steve Bendelack", "atores" => "Rowan Atkinson", "classificacao" => "Livre", "imagem" => "https://br.web.img2.acsta.net/c_310_420/medias/nmedia/18/90/43/12/20096263.jpg"],
    ["titulo" => "Borat", "ano" => 2006, "diretor" => "Larry Charles", "atores" => "Sacha Baron Cohen", "classificacao" => "16 anos", "imagem" => "https://upload.wikimedia.org/wikipedia/pt/f/f7/Borat%21.jpg"],
    ["titulo" => "Click", "ano" => 2006, "diretor" => "Frank Coraci", "atores" => "Adam Sandler, Kate Beckinsale", "classificacao" => "12 anos", "imagem" => "https://upload.wikimedia.org/wikipedia/pt/b/bd/Click_film.jpg"],
    ["titulo" => "As Branquelas", "ano" => 2004, "diretor" => "Keenen Ivory Wayans", "atores" => "Shawn Wayans, Marlon Wayans", "classificacao" => "14 anos", "imagem" => "https://br.web.img3.acsta.net/medias/nmedia/18/97/52/82/20534159.jpg"],
    ["titulo" => "Jumanji", "ano" => 2019, "diretor" => "Jake Kasdan", "atores" => "Dwayne Johnson, Kevin Hart", "classificacao" => "12 anos", "imagem" => "https://upload.wikimedia.org/wikipedia/pt/thumb/0/0d/Jumanji_The_Next_Level.jpg/250px-Jumanji_The_Next_Level.jpg"],
];

$total_comedia = count($filmes_comedia);
$por_slide = 5;
$total_slides = ($total_comedia / $por_slide);
?>

        <section class="container-sm pt-5" id="comedia">
            <h4 class="text-light mb-3">Filmes de comédia</h4>
            <div id="carouselComedia" class="carousel slide">
                <div class="carousel-inner">
                    <?php for ($s = 0; $s < $total_slides; $s++) { ?>
                    <div class="carousel-item <?= ($s == 0 ? 'active' : '') ?>">
                        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5 g-4">
                            <?php
                    $inicio = $s * $por_slide;
                    for ($i = $inicio; $i < ($inicio + $por_slide) && $i < $total_comedia; $i++) {
                    ?>
                            <div class="col">
                                <div class="card bg-dark text-light h-100 shadow-sm">
                                    <img src="<?= $filmes_comedia[$i]["imagem"] ?>" class="card-img-top"
                                        alt="<?= $filmes_comedia[$i]["titulo"] ?>">
                                    <div class="card-body">
                                        <h6 class="card-title mb-1"><?= $filmes_comedia[$i]["titulo"] ?></h6>
                                        <p class="card-text small"><strong>Ano:</strong>
                                            <?= $filmes_comedia[$i]["ano"] ?></p>
                                        <p class="card-text small"><strong>Diretor:</strong>
                                            <?= $filmes_comedia[$i]["diretor"] ?></p>
                                        <p class="card-text small"><strong>Atores:</strong>
                                            <?= $filmes_comedia[$i]["atores"] ?></p>
                                        <p class="card-text small"><strong>Classificação:</strong>
                                            <?= $filmes_comedia[$i]["classificacao"] ?></p>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                    <?php } ?>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carouselComedia"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Anterior</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselComedia"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Próximo</span>
                </button>
            </div>
        </section>


        <?php
$filmes_terror = [
    ["titulo" => "Invocação do Mal", "ano" => 2013, "diretor" => "James Wan", "atores" => "Vera Farmiga, Patrick Wilson", "classificacao" => "16+", "imagem" => "https://br.web.img2.acsta.net/pictures/210/166/21016629_2013062820083878.jpg"],
    ["titulo" => "It: A Coisa", "ano" => 2017, "diretor" => "Andy Muschietti", "atores" => "Bill Skarsgård, Jaeden Martell", "classificacao" => "16+", "imagem" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQhNs9d8KDmPw6UfxmjMpBOZH9szbSt6PE0UA&s"],
    ["titulo" => "Nós", "ano" => 2019, "diretor" => "Jordan Peele", "atores" => "Lupita Nyong'o, Winston Duke", "classificacao" => "16+", "imagem" => "https://br.web.img3.acsta.net/pictures/19/02/07/14/16/5034340.jpg"],
    ["titulo" => "A Bruxa", "ano" => 2015, "diretor" => "Robert Eggers", "atores" => "Anya Taylor-Joy, Ralph Ineson", "classificacao" => "18+", "imagem" => "https://br.web.img3.acsta.net/pictures/16/02/02/11/51/346769.jpg"],
    ["titulo" => "O Chamado", "ano" => 2002, "diretor" => "Gore Verbinski", "atores" => "Naomi Watts, Martin Henderson", "classificacao" => "16+", "imagem" => "https://br.web.img2.acsta.net/pictures/14/12/02/19/31/398428.jpg"],
    ["titulo" => "Corra!", "ano" => 2017, "diretor" => "Jordan Peele", "atores" => "Daniel Kaluuya, Allison Williams", "classificacao" => "16+", "imagem" => "https://br.web.img3.acsta.net/c_310_420/pictures/17/04/19/21/08/577190.jpg"],
    ["titulo" => "Hereditário", "ano" => 2018, "diretor" => "Ari Aster", "atores" => "Toni Collette, Milly Shapiro", "classificacao" => "18+", "imagem" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQSjw7PiW7mPQoRWm4yRUbo2IJL-QykqyVh0Q&s"],
    ["titulo" => "Atividade Paranormal", "ano" => 2007, "diretor" => "Oren Peli", "atores" => "Katie Featherston, Micah Sloat", "classificacao" => "16+", "imagem" => "https://br.web.img3.acsta.net/medias/nmedia/18/87/89/84/20028680.jpg"],
    ["titulo" => "Halloween", "ano" => 2018, "diretor" => "David Gordon Green", "atores" => "Jamie Lee Curtis, Judy Greer", "classificacao" => "18+", "imagem" => "https://br.web.img3.acsta.net/pictures/18/09/05/17/21/5348044.jpg"],
    ["titulo" => "Terror em Silent Hill", "ano" => 2006, "diretor" => "Christophe Gans", "atores" => "Radha Mitchell, Sean Bean", "classificacao" => "16+", "imagem" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTNXzeWMvkpoq_RRDlRy0eOogiUk1P6p_yQQw&s"],
];

$total_terror = count($filmes_terror);
$por_slide = 5;
$total_slides = ($total_terror / $por_slide);
?>

        <section class="container-sm mt-5" id="terror">
            <h4 class="text-light mb-3">Filmes de terror</h4>
            <div id="carouselTerror" class="carousel slide">
                <div class="carousel-inner">
                    <?php for ($s = 0; $s < $total_slides; $s++) { ?>
                    <div class="carousel-item <?= ($s == 0 ? 'active' : '') ?>">
                        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5 g-4">
                            <?php
                    $inicio = $s * $por_slide;
                    for ($i = $inicio; $i < ($inicio + $por_slide) && $i < $total_terror; $i++) {
                    ?>
                            <div class="col">
                                <div class="card bg-dark text-light h-100 shadow-sm">
                                    <img src="<?= $filmes_terror[$i]["imagem"] ?>" class="card-img-top"
                                        alt="<?= $filmes_terror[$i]["titulo"] ?>">
                                    <div class="card-body">
                                        <h6 class="card-title mb-1"><?= $filmes_terror[$i]["titulo"] ?></h6>
                                        <p class="card-text small">
                                            <strong>Direção:</strong> <?= $filmes_terror[$i]["diretor"] ?><br>
                                            <strong>Atores:</strong> <?= $filmes_terror[$i]["atores"] ?><br>
                                            <strong>Ano:</strong> <?= $filmes_terror[$i]["ano"] ?><br>
                                            <strong>Classificação:</strong> <?= $filmes_terror[$i]["classificacao"] ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                    <?php } ?>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carouselTerror"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Anterior</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselTerror"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Próximo</span>
                </button>
            </div>
        </section>

    </main>

    <footer class="text-center py-4">
        <p class="mb-1">© 2025 Filmix.</p>
        <small>Desenvolvido por André Guindani e André Nascimento</small>
    </footer>
</body>

</html>