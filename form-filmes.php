<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <title>Cadastrar Filme</title>
    <style>
        body {
            background-color: #121212;
            color: #f1f1f1;
        }
        .card {
            background-color: #1e1e1e;
            border: 1px solid #333;
        }
        label {
            font-weight: 500;
        }
        .form-control, .form-select {
            background-color: #2c2c2c;
            border: none;
            color: #fff;
        }
        .form-control::placeholder {
            color: #aaa;
        }
        footer {
            border-top: 1px solid #333;
        }
    </style>
</head>
<body>
    <div class="container py-5">
        <div class="card shadow-lg mx-auto" style="max-width: 800px;">
            <div class="card-body p-4 text-light">
                <h1 class="text-center text-danger fw-bold mb-4">Cadastro de Filmes</h1>
                
                <form action="cadastro-filme.php" method="POST" enctype="multipart/form-data" class="row g-3">
                    <div class="col-md-6">
                        <label for="titulo" class="form-label">Título</label>
                        <input type="text" class="form-control" name="titulo" placeholder="Digite o Título do Filme">
                    </div>
                    <div class="col-md-6">
                        <label for="diretor" class="form-label">Diretor</label>
                        <input type="text" class="form-control" name="diretor" placeholder="Digite o nome do Diretor">
                    </div>
                    <div class="col-md-4">
                        <label for="ano" class="form-label">Ano</label>
                        <input type="text" class="form-control" name="ano" placeholder="Ano de Lançamento">
                    </div>
                    <div class="col-md-8">
                        <label for="elenco" class="form-label">Elenco</label>
                        <input type="text" class="form-control" name="elenco" placeholder="Digite o Elenco do Filme">
                    </div>
                    <div class="col-12">
                        <label for="premios" class="form-label">Prêmios</label>
                        <input type="text" class="form-control" name="premios" placeholder="Digite os Prêmios do Filme">
                    </div>
                    <div class="col-md-6">
                        <label for="idcategoria" class="form-label">Categoria</label>
                        <select name="idcategoria" class="form-select">
                            <?php
                            require_once "src/CategoriaDAO.php";
                            $categoria = CategoriaDAO::listarCategoria();
                            foreach ($categoria as $cat) {
                                echo "<option value='{$cat["idcategoria"]}'>{$cat["nome"]}</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="idclassificacao" class="form-label">Classificação</label>
                        <select name="idclassificacao" class="form-select">
                            <?php
                            require_once "src/ClassificacaoDAO.php";
                            $classificacao = ClassificacaoDAO::listarClassificacao();
                            foreach ($classificacao as $cla) {
                                echo "<option value='{$cla["idclassificacao"]}'>{$cla["nome"]}</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="col-12">
                        <label class="form-label">Foto</label>
                        <input type="file" name="imagem" class="form-control">
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-danger w-100 fw-bold text-dark">Cadastrar Filme</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <footer class="text-center py-4 mt-5">
        <p class="mb-1">© 2025 <strong>Filmix</strong></p>
        <small>Desenvolvido por André Guindani e André Nascimento</small>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
