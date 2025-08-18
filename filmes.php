<?php
require_once "src/FilmesDAO.php";
?>
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
            <a href="index.php" class="logo"><strong>Filmix Filmes</strong></a>
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
                <p class="card-text small"><strong>Classificação:</strong> <?= $filmes_acao[$i]["nome"] ?></p>
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
    $filmes_acao = FilmesDAO::listarCategoria(2);

    ?>

    <h4 class="text-light mb-3">Filmes de Suspense</h4>
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
                <p class="card-text small"><strong>Classificação:</strong> <?= $filmes_acao[$i]["nome"] ?></p>
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


<section class="container-sm pb-5" id="comedia">
    <?php
    $filmes_acao = FilmesDAO::listarCategoria(3);

    ?>

    <h4 class="text-light mb-3">Filmes de Comedia</h4>
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
                <p class="card-text small"><strong>Classificação:</strong> <?= $filmes_acao[$i]["nome"] ?></p>
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


        <section class="container-sm pt-5 pb-5" id="terror">
    <?php
    $filmes_acao = FilmesDAO::listarCategoria(4);

    ?>

    <h4 class="text-light mb-3">Filmes de Terror</h4>
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
                <p class="card-text small"><strong>Classificação:</strong> <?= $filmes_acao[$i]["nome"] ?></p>
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


    </main>

    <footer class="text-center py-4">
        <p class="mb-1">© 2025 Filmix.</p>
        <small>Desenvolvido por André Guindani e André Nascimento</small>
    </footer>
</body>

</html>