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
    <section class="container-sm pt-5 pb-5" id="acao">
    <?php
    require_once "src/FilmesDAO.php";
    $filmes_acao = FilmesDAO::listarCategoria(1);

    ?>

    <h4 class="text-light mb-3">Filmes de ação</h4>
    <div class="scroll-carousel px-2">
        <?php
        for ($i = 0; $i < count($filmes_acao); $i++) {
            $modalId = "modal_" . $i;
        ?>
        <div class="card bg-dark text-light shadow-sm">
            <img src="assets/img/<?= $filmes_acao[$i]["imagem"] ?>" class="card-img-top" alt="<?= $filmes_acao[$i]["titulo"] ?>">
            <div class="card-body cardFilm">
                <h6 class="card-title"><?= $filmes_acao[$i]["titulo"] ?></h6>
                <p class="card-text small"><strong>Ano:</strong> <?= $filmes_acao[$i]["ano"] ?></p>
                <p class="card-text small"><strong>Diretor:</strong> <?= $filmes_acao[$i]["diretor"] ?></p>
                <p class="card-text small"><strong>Atores:</strong> <?= $filmes_acao[$i]["elenco"] ?></p>
                <p class="card-text small"><strong>Classificação:</strong> <?= $filmes_acao[$i]["idcategoria"] ?></p>
                <button type="button" class="btn btn-sm mt-2 btnModal" data-bs-toggle="modal" data-bs-target="#<?= $modalId ?>">Ver Prêmios</button>
            </div>
        </div>

        <div class="modal fade" id="<?= $modalId ?>" tabindex="-1" aria-labelledby="<?= $modalId ?>Label" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content text-dark">
                    <div class="modal-header">
                        <h5 class="modal-title" id="<?= $modalId ?>Label">Prêmios - <?= $filmes_acao[$i]["titulo"] ?></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                    </div>
                    <div class="modal-body">
                        <?= $filmes_acao[$i]["premios"] ?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</section>

<section class="container-sm pt-5 pb-5" id="suspense">
    <?php
    $filmes_suspense = [
        ["titulo" => "Seven", "ano" => 1995, "diretor" => "David Fincher", "atores" => "Brad Pitt, Morgan Freeman", "classificacao" => "18 anos", "imagem" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRROBAac4LjCY9YFSUy934ryVCNKW-MCJlY3A&s", "premios" => "3 Oscars, 5 Prêmios BAFTA"],
        ["titulo" => "O Iluminado", "ano" => 1980, "diretor" => "Stanley Kubrick", "atores" => "Jack Nicholson, Shelley Duvall", "classificacao" => "16 anos", "imagem" => "https://cinemateca.org.br/wp-content/uploads/2024/09/cbs_o_iluminado.jpg", "premios" => "Indicado a 2 Oscars"],
        ["titulo" => "O Silêncio dos Inocentes", "ano" => 1991, "diretor" => "Jonathan Demme", "atores" => "Jodie Foster, Anthony Hopkins", "classificacao" => "18 anos", "imagem" => "https://m.media-amazon.com/images/M/MV5BMTBlY2FjM2EtMWIxYy00NWE2LWE0MWUtMjI2NjZjZDE2YWYwXkEyXkFqcGc@._V1_FMjpg_UX1000_.jpg", "premios" => "5 Oscars, incluindo Melhor Filme"],
        ["titulo" => "Os Outros", "ano" => 2001, "diretor" => "Alejandro Amenábar", "atores" => "Nicole Kidman, Fionnula Flanagan", "classificacao" => "14 anos", "imagem" => "https://m.media-amazon.com/images/I/611tlXI0pwL._AC_UF1000,1000_QL80_.jpg", "premios" => "Vencedor do Goya de Melhor Filme Estrangeiro"],
        ["titulo" => "Garota Exemplar", "ano" => 2014, "diretor" => "David Fincher", "atores" => "Ben Affleck, Rosamund Pike", "classificacao" => "16 anos", "imagem" => "https://m.media-amazon.com/images/I/81sSyD75y6L._AC_UF1000,1000_QL80_.jpg", "premios" => "Indicado ao Globo de Ouro"],
        ["titulo" => "Os Suspeitos", "ano" => 1995, "diretor" => "Bryan Singer", "atores" => "Kevin Spacey, Gabriel Byrne", "classificacao" => "16 anos", "imagem" => "https://br.web.img3.acsta.net/pictures/210/509/21050952_20131018203347915.jpg", "premios" => "Prêmio do Festival de Cannes"],
        ["titulo" => "Corra!", "ano" => 2017, "diretor" => "Jordan Peele", "atores" => "Daniel Kaluuya, Allison Williams", "classificacao" => "14 anos", "imagem" => "https://br.web.img3.acsta.net/c_310_420/pictures/17/04/19/21/08/577190.jpg", "premios" => "Oscar de Melhor Roteiro Original"],
        ["titulo" => "O Sexto Sentido", "ano" => 1999, "diretor" => "M. Night Shyamalan", "atores" => "Bruce Willis, Haley Joel Osment", "classificacao" => "14 anos", "imagem" => "https://play-lh.googleusercontent.com/Z349tbhk9pphjy6y3czs-DUo665ysjhQ_7-k2pSR9pup-_qqn_hhzeujOaohnPH4LVM", "premios" => "6 indicações ao Oscar"],
    ];

    ?>

    <h4 class="text-light mb-3">Filmes de suspense</h4>
    <div class="scroll-carousel px-2">
        <?php
        for ($i = 0; $i < count($filmes_suspense); $i++) {
            $modalId = "modal_suspense_" . $i;
        ?>
        <div class="card bg-dark text-light shadow-sm">
            <img src="<?= $filmes_suspense[$i]["imagem"] ?>" class="card-img-top" alt="<?= $filmes_suspense[$i]["titulo"] ?>">
            <div class="card-body cardFilm">
                <h6 class="card-title"><?= $filmes_suspense[$i]["titulo"] ?></h6>
                <p class="card-text small"><strong>Ano:</strong> <?= $filmes_suspense[$i]["ano"] ?></p>
                <p class="card-text small"><strong>Diretor:</strong> <?= $filmes_suspense[$i]["diretor"] ?></p>
                <p class="card-text small"><strong>Atores:</strong> <?= $filmes_suspense[$i]["atores"] ?></p>
                <p class="card-text small"><strong>Classificação:</strong> <?= $filmes_suspense[$i]["classificacao"] ?></p>
                <button type="button" class="btn btn-sm mt-2 btnModal" data-bs-toggle="modal" data-bs-target="#<?= $modalId ?>">Ver Prêmios</button>
            </div>
        </div>

        <div class="modal fade" id="<?= $modalId ?>" tabindex="-1" aria-labelledby="<?= $modalId ?>Label" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content text-dark">
                    <div class="modal-header">
                        <h5 class="modal-title" id="<?= $modalId ?>Label">Prêmios - <?= $filmes_suspense[$i]["titulo"] ?></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                    </div>
                    <div class="modal-body">
                        <?= $filmes_suspense[$i]["premios"] ?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</section>


<section class="container-sm pb-5" id="comedia">
    <?php
    $filmes_comedia = [
        ["titulo" => "O Máskara", "ano" => 1994, "diretor" => "Chuck Russell", "atores" => "Jim Carrey, Cameron Diaz", "classificacao" => "12 anos", "imagem" => "https://br.web.img2.acsta.net/medias/nmedia/18/90/86/15/20116705.jpg", "premios" => "Indicado ao MTV Movie Awards"],
        ["titulo" => "Esqueceram de Mim 2", "ano" => 1992, "diretor" => "Chris Columbus", "atores" => "Macaulay Culkin, Joe Pesci", "classificacao" => "Livre", "imagem" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQsj1OMRR2NeDrdKcrlFLIzJrYSG7rZWJy6cg&s", "premios" => "Prêmio Kids' Choice Award"],
        ["titulo" => "Se Beber, Não Case", "ano" => 2009, "diretor" => "Todd Phillips", "atores" => "Bradley Cooper, Ed Helms", "classificacao" => "16 anos", "imagem" => "https://m.media-amazon.com/images/S/pv-target-images/7de3e539b111d5ce87b254329ad0af057a06788d1eec2b6f966f8aa2f9793753.jpg", "premios" => "Vencedor do MTV Movie Award de Melhor Comédia"],
        ["titulo" => "Descompensada", "ano" => 2014, "diretor" => "Ken Marino", "atores" => "Anna Faris, Eugenio Derbez", "classificacao" => "14 anos", "imagem" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQl_QCFlD9P8FOfWrTge7xdhvdRAS5tRkLuPw&s", "premios" => "Sem informações de prêmios"],
        ["titulo" => "Uma Noite no Museu", "ano" => 2006, "diretor" => "Shawn Levy", "atores" => "Ben Stiller, Robin Williams", "classificacao" => "Livre", "imagem" => "https://images.justwatch.com/poster/246488291/s718/uma-noite-no-museu.jpg", "premios" => "Indicado ao Kids' Choice Awards"],
        ["titulo" => "As Férias de Mr. Bean", "ano" => 2007, "diretor" => "Steve Bendelack", "atores" => "Rowan Atkinson", "classificacao" => "Livre", "imagem" => "https://br.web.img2.acsta.net/c_310_420/medias/nmedia/18/90/43/12/20096263.jpg", "premios" => "Prêmio BAFTA de Comédia"],
        ["titulo" => "Borat", "ano" => 2006, "diretor" => "Larry Charles", "atores" => "Sacha Baron Cohen", "classificacao" => "16 anos", "imagem" => "https://upload.wikimedia.org/wikipedia/pt/f/f7/Borat%21.jpg", "premios" => "Indicado ao Globo de Ouro"],
        ["titulo" => "Click", "ano" => 2006, "diretor" => "Frank Coraci", "atores" => "Adam Sandler, Kate Beckinsale", "classificacao" => "12 anos", "imagem" => "https://upload.wikimedia.org/wikipedia/pt/b/bd/Click_film.jpg", "premios" => "Sem informações"],
    ];

    ?>

    <h4 class="text-light mb-3">Filmes de comédia</h4>
    <div class="scroll-carousel px-2">
        <?php for ($i = 0; $i < count($filmes_comedia); $i++) {
            $modalId = "modal_comedia_" . $i;
        ?>
        <div class="card bg-dark text-light shadow-sm">
            <img src="<?= $filmes_comedia[$i]["imagem"] ?>" class="card-img-top" alt="<?= $filmes_comedia[$i]["titulo"] ?>">
            <div class="card-body cardFilm">
                <h6 class="card-title"><?= $filmes_comedia[$i]["titulo"] ?></h6>
                <p class="card-text small"><strong>Ano:</strong> <?= $filmes_comedia[$i]["ano"] ?></p>
                <p class="card-text small"><strong>Diretor:</strong> <?= $filmes_comedia[$i]["diretor"] ?></p>
                <p class="card-text small"><strong>Atores:</strong> <?= $filmes_comedia[$i]["atores"] ?></p>
                <p class="card-text small"><strong>Classificação:</strong> <?= $filmes_comedia[$i]["classificacao"] ?></p>
                <button type="button" class="btn btn-sm mt-2 btnModal" data-bs-toggle="modal" data-bs-target="#<?= $modalId ?>">Ver Prêmios</button>
            </div>
        </div>

        <div class="modal fade" id="<?= $modalId ?>" tabindex="-1" aria-labelledby="<?= $modalId ?>Label" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content text-dark">
                    <div class="modal-header">
                        <h5 class="modal-title" id="<?= $modalId ?>Label">Prêmios - <?= $filmes_comedia[$i]["titulo"] ?></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                    </div>
                    <div class="modal-body">
                        <?= $filmes_comedia[$i]["premios"] ?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</section>


        <section class="container-sm pt-5 pb-5" id="terror">
    <?php
    $filmes_terror = [
        ["titulo" => "Invocação do Mal", "ano" => 2013, "diretor" => "James Wan", "atores" => "Vera Farmiga, Patrick Wilson", "classificacao" => "16+", "imagem" => "https://br.web.img2.acsta.net/pictures/210/166/21016629_2013062820083878.jpg", "premios" => "Indicado ao Saturn Awards"],
        ["titulo" => "It: A Coisa", "ano" => 2017, "diretor" => "Andy Muschietti", "atores" => "Bill Skarsgård, Jaeden Martell", "classificacao" => "16+", "imagem" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQhNs9d8KDmPw6UfxmjMpBOZH9szbSt6PE0UA&s", "premios" => "Vencedor do MTV Movie & TV Awards"],
        ["titulo" => "Nós", "ano" => 2019, "diretor" => "Jordan Peele", "atores" => "Lupita Nyong'o, Winston Duke", "classificacao" => "16+", "imagem" => "https://br.web.img3.acsta.net/pictures/19/02/07/14/16/5034340.jpg", "premios" => "Prêmio NAACP Image Awards"],
        ["titulo" => "A Bruxa", "ano" => 2015, "diretor" => "Robert Eggers", "atores" => "Anya Taylor-Joy, Ralph Ineson", "classificacao" => "18+", "imagem" => "https://br.web.img3.acsta.net/pictures/16/02/02/11/51/346769.jpg", "premios" => "Indicado ao Independent Spirit Awards"],
        ["titulo" => "O Chamado", "ano" => 2002, "diretor" => "Gore Verbinski", "atores" => "Naomi Watts, Martin Henderson", "classificacao" => "16+", "imagem" => "https://br.web.img2.acsta.net/pictures/14/12/02/19/31/398428.jpg", "premios" => "Prêmio MTV Movie Award de Melhor Performance Assustadora"],
        ["titulo" => "Corra!", "ano" => 2017, "diretor" => "Jordan Peele", "atores" => "Daniel Kaluuya, Allison Williams", "classificacao" => "16+", "imagem" => "https://br.web.img3.acsta.net/c_310_420/pictures/17/04/19/21/08/577190.jpg", "premios" => "Vencedor do Critics' Choice Movie Award"],
        ["titulo" => "Hereditário", "ano" => 2018, "diretor" => "Ari Aster", "atores" => "Toni Collette, Milly Shapiro", "classificacao" => "18+", "imagem" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQSjw7PiW7mPQoRWm4yRUbo2IJL-QykqyVh0Q&s", "premios" => "Indicado ao Saturn Awards"],
        ["titulo" => "Atividade Paranormal", "ano" => 2007, "diretor" => "Oren Peli", "atores" => "Katie Featherston, Micah Sloat", "classificacao" => "16+", "imagem" => "https://br.web.img3.acsta.net/medias/nmedia/18/87/89/84/20028680.jpg", "premios" => "Vencedor do MTV Movie Award de Melhor Filme de Terror"],
    ];

    ?>

    <h4 class="text-light mb-3">Filmes de terror</h4>
    <div class="scroll-carousel px-2">
        <?php for ($i = 0; $i < count($filmes_terror); $i++) {
            $modalId = "modal_terror_" . $i;
        ?>
        <div class="card bg-dark text-light shadow-sm">
            <img src="<?= $filmes_terror[$i]["imagem"] ?>" class="card-img-top" alt="<?= $filmes_terror[$i]["titulo"] ?>">
            <div class="card-body cardFilm">
                <h6 class="card-title"><?= $filmes_terror[$i]["titulo"] ?></h6>
                <p class="card-text small"><strong>Ano:</strong> <?= $filmes_terror[$i]["ano"] ?></p>
                <p class="card-text small"><strong>Diretor:</strong> <?= $filmes_terror[$i]["diretor"] ?></p>
                <p class="card-text small"><strong>Atores:</strong> <?= $filmes_terror[$i]["atores"] ?></p>
                <p class="card-text small"><strong>Classificação:</strong> <?= $filmes_terror[$i]["classificacao"] ?></p>
                <button type="button" class="btn btn-sm mt-2 btnModal" data-bs-toggle="modal" data-bs-target="#<?= $modalId ?>">Ver Prêmios</button>
            </div>
        </div>

        <div class="modal fade" id="<?= $modalId ?>" tabindex="-1" aria-labelledby="<?= $modalId ?>Label" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content text-dark">
                    <div class="modal-header">
                        <h5 class="modal-title" id="<?= $modalId ?>Label">Prêmios - <?= $filmes_terror[$i]["titulo"] ?></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                    </div>
                    <div class="modal-body">
                        <?= $filmes_terror[$i]["premios"] ?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</section>


    </main>

    <footer class="text-center py-4">
        <p class="mb-1">© 2025 Filmix.</p>
        <small>Desenvolvido por André Guindani e André Nascimento</small>
    </footer>
</body>

</html>