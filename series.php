<?php
require_once "src/SeriesDAO.php";
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
    <link rel="stylesheet" href="assets/styles.css" />
    <link rel="shortcut icon" href="assets/img/logo.png" type="image/x-icon">
    <title>Filmix - Séries</title>
</head>

<body>
    <header class="shadow-sm fixed-top">
        <nav class="container-sm d-flex justify-content-between align-items-center py-3">
            <a href="index.php" class="logo">🎬 <strong>Filmix</strong></a>
            <ul class="d-flex gap-3 mb-0">
                <li><a class="nav-link" href="#acao">Ação</a></li>
                <li><a class="nav-link" href="#suspense">Suspense</a></li>
                <li><a class="nav-link" href="#comedia">Comédia</a></li>
                <li><a class="nav-link" href="#terror">Terror</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="container-sm pt-5 pb-5" id="acao">
            <?php $series_acao = SeriesDAO::listarCategoria(1); ?>
            <h4 class="text-light mb-3">Séries de Ação</h4>
            <div class="scroll-carousel px-2">
                <?php
                for ($i = 0; $i < count($series_acao); $i++) {
                    $modalId = "modal_acao_" . $i;
                ?>
                <div class="card bg-dark text-light shadow-sm">
                    <img src="assets/uploads/<?= $series_acao[$i]["imagem"] ?>" class="card-img-top" alt="<?= $series_acao[$i]["titulo"] ?>">
                    <div class="card-body cardFilm">
                        <h6 class="card-title"><?= $series_acao[$i]["titulo"] ?></h6>
                        <p class="card-text small"><strong>Ano:</strong> <?= $series_acao[$i]["ano"] ?></p>
                        <p class="card-text small"><strong>Diretor:</strong> <?= $series_acao[$i]["diretor"] ?></p>
                        <p class="card-text small"><strong>Atores:</strong> <?= $series_acao[$i]["elenco"] ?></p>
                        <p class="card-text small"><strong>Temporadas:</strong> <?= $series_acao[$i]["temporadas"] ?></p>
                        <p class="card-text small"><strong>Episódios:</strong> <?= $series_acao[$i]["episodios"] ?></p>
                        <p class="card-text small"><strong>Classificação:</strong> <?= $series_acao[$i]["nome"] ?></p>
                        <button type="button" class="btn btn-sm mt-2 btnModal" data-bs-toggle="modal" data-bs-target="#<?= $modalId ?>">Ver Prêmios</button>
                    </div>
                </div>

                <div class="modal fade" id="<?= $modalId ?>" tabindex="-1" aria-labelledby="<?= $modalId ?>Label" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content text-dark">
                            <div class="modal-header">
                                <h5 class="modal-title" id="<?= $modalId ?>Label">Prêmios - <?= $series_acao[$i]["titulo"] ?></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                            </div>
                            <div class="modal-body">
                                <?= $series_acao[$i]["premios"] ?>
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
            <?php $series_suspense = SeriesDAO::listarCategoria(2); ?>
            <h4 class="text-light mb-3">Séries de Suspense</h4>
            <div class="scroll-carousel px-2">
                <?php
                for ($i = 0; $i < count($series_suspense); $i++) {
                    $modalId = "modal_suspense_" . $i;
                ?>
                <div class="card bg-dark text-light shadow-sm">
                    <img src="assets/uploads/<?= $series_suspense[$i]["imagem"] ?>" class="card-img-top" alt="<?= $series_suspense[$i]["titulo"] ?>">
                    <div class="card-body cardFilm">
                        <h6 class="card-title"><?= $series_suspense[$i]["titulo"] ?></h6>
                        <p class="card-text small"><strong>Ano:</strong> <?= $series_suspense[$i]["ano"] ?></p>
                        <p class="card-text small"><strong>Diretor:</strong> <?= $series_suspense[$i]["diretor"] ?></p>
                        <p class="card-text small"><strong>Atores:</strong> <?= $series_suspense[$i]["elenco"] ?></p>
                        <p class="card-text small"><strong>Temporadas:</strong> <?= $series_suspense[$i]["temporadas"] ?></p>
                        <p class="card-text small"><strong>Episódios:</strong> <?= $series_suspense[$i]["episodios"] ?></p>
                        <p class="card-text small"><strong>Classificação:</strong> <?= $series_suspense[$i]["nome"] ?></p>
                        <button type="button" class="btn btn-sm mt-2 btnModal" data-bs-toggle="modal" data-bs-target="#<?= $modalId ?>">Ver Prêmios</button>
                    </div>
                </div>

                <div class="modal fade" id="<?= $modalId ?>" tabindex="-1" aria-labelledby="<?= $modalId ?>Label" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content text-dark">
                            <div class="modal-header">
                                <h5 class="modal-title" id="<?= $modalId ?>Label">Prêmios - <?= $series_suspense[$i]["titulo"] ?></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                            </div>
                            <div class="modal-body">
                                <?= $series_suspense[$i]["premios"] ?>
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

        <section class="container-sm pt-5 pb-5" id="comedia">
            <?php $series_comedia = SeriesDAO::listarCategoria(3); ?>
            <h4 class="text-light mb-3">Séries de Comédia</h4>
            <div class="scroll-carousel px-2">
                <?php
                for ($i = 0; $i < count($series_comedia); $i++) {
                    $modalId = "modal_comedia_" . $i;
                ?>
                <div class="card bg-dark text-light shadow-sm">
                    <img src="assets/uploads/<?= $series_comedia[$i]["imagem"] ?>" class="card-img-top" alt="<?= $series_comedia[$i]["titulo"] ?>">
                    <div class="card-body cardFilm">
                        <h6 class="card-title"><?= $series_comedia[$i]["titulo"] ?></h6>
                        <p class="card-text small"><strong>Ano:</strong> <?= $series_comedia[$i]["ano"] ?></p>
                        <p class="card-text small"><strong>Diretor:</strong> <?= $series_comedia[$i]["diretor"] ?></p>
                        <p class="card-text small"><strong>Atores:</strong> <?= $series_comedia[$i]["elenco"] ?></p>
                        <p class="card-text small"><strong>Temporadas:</strong> <?= $series_comedia[$i]["temporadas"] ?></p>
                        <p class="card-text small"><strong>Episódios:</strong> <?= $series_comedia[$i]["episodios"] ?></p>
                        <p class="card-text small"><strong>Classificação:</strong> <?= $series_comedia[$i]["nome"] ?></p>
                        <button type="button" class="btn btn-sm mt-2 btnModal" data-bs-toggle="modal" data-bs-target="#<?= $modalId ?>">Ver Prêmios</button>
                    </div>
                </div>

                <div class="modal fade" id="<?= $modalId ?>" tabindex="-1" aria-labelledby="<?= $modalId ?>Label" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content text-dark">
                            <div class="modal-header">
                                <h5 class="modal-title" id="<?= $modalId ?>Label">Prêmios - <?= $series_comedia[$i]["titulo"] ?></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                            </div>
                            <div class="modal-body">
                                <?= $series_comedia[$i]["premios"] ?>
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
            <?php $series_terror = SeriesDAO::listarCategoria(4); ?>
            <h4 class="text-light mb-3">Séries de Terror</h4>
            <div class="scroll-carousel px-2">
                <?php
                for ($i = 0; $i < count($series_terror); $i++) {
                    $modalId = "modal_terror_" . $i;
                ?>
                <div class="card bg-dark text-light shadow-sm">
                    <img src="assets/uploads/<?= $series_terror[$i]["imagem"] ?>" class="card-img-top" alt="<?= $series_terror[$i]["titulo"] ?>">
                    <div class="card-body cardFilm">
                        <h6 class="card-title"><?= $series_terror[$i]["titulo"] ?></h6>
                        <p class="card-text small"><strong>Ano:</strong> <?= $series_terror[$i]["ano"] ?></p>
                        <p class="card-text small"><strong>Diretor:</strong> <?= $series_terror[$i]["diretor"] ?></p>
                        <p class="card-text small"><strong>Atores:</strong> <?= $series_terror[$i]["elenco"] ?></p>
                        <p class="card-text small"><strong>Temporadas:</strong> <?= $series_terror[$i]["temporadas"] ?></p>
                        <p class="card-text small"><strong>Episódios:</strong> <?= $series_terror[$i]["episodios"] ?></p>
                        <p class="card-text small"><strong>Classificação:</strong> <?= $series_terror[$i]["nome"] ?></p>
                        <button type="button" class="btn btn-sm mt-2 btnModal" data-bs-toggle="modal" data-bs-target="#<?= $modalId ?>">Ver Prêmios</button>
                    </div>
                </div>

                <div class="modal fade" id="<?= $modalId ?>" tabindex="-1" aria-labelledby="<?= $modalId ?>Label" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content text-dark">
                            <div class="modal-header">
                                <h5 class="modal-title" id="<?= $modalId ?>Label">Prêmios - <?= $series_terror[$i]["titulo"] ?></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                            </div>
                            <div class="modal-body">
                                <?= $series_terror[$i]["premios"] ?>
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
        <p class="mb-1">© 2025 Filmix Séries.</p>
        <small>Desenvolvido por André Guindani e André Nascimento</small>
        <a href="cadastro-series.php"><p>Cadastre Séries</p></a>
    </footer>
</body>

</html>
