<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <title>Cadastrar Filme</title>
</head>
<body class="container">
    <h2 class="text-center">Cadastro de Filmes</h2>
    <form action="cadastro-filme.php" class="row" method="POST" enctype="multipart/form-data">
        <div class="mb-3 col-6">
            <label for="nome" class="form-label">Titúlo</label>
            <input type="text" class="form-control" name="titulo" placeholder="Digite o Titúlo do Filme">
        </div>
        <div class="mb-3 col-6">
            <label class="form-label">Diretor</label>
            <input type="text" name="diretor" class="form-control" placeholder="Digite o nome do Diretor">
        </div>
        <div class="mb-3 ">
            <label for="nome" class="form-label">Ano</label>
            <input type="text" class="form-control" name="ano" placeholder="Digite o Ano de Lançamento">
        </div>
        <div class="mb-3">
            <label for="nome" class="form-label">Elenco</label>
            <input type="text" class="form-control" name="elenco" placeholder="Digite o Elenco do Filme">
        </div>
        <div class="mb-3">
            <label for="nome" class="form-label">Prêmios</label>
            <input type="text" class="form-control" name="premios" placeholder="Digite os Prêmios do Filme">
        </div>
         <div class="mb-3 col-6">
            <label for="idcategoria" class="form-label">Categoria</label>
            <select name="idcategoria" class="form-select">
                <?php
                require_once "src/CategoriaDAO.php";
                $categoria = CategoriaDAO::listarCategoria();
                for ($i=0; $i < count($categoria) ; $i++) { 
                ?>
                <option value=<?=$categoria[$i]["idcategoria"]?>><?=$categoria[$i]["nome"]?></option>
                <?php
                }
                ?>
            </select>
        </div>
        <div class="mb-3 col-6">
            <label for="idclassificacao" class="form-label">Classificação</label>
            <select name="idclassificacao" class="form-select">
                <?php
                require_once "src/ClassificacaoDAO.php";
                $classificacao = ClassificacaoDAO::listarClassificacao();
                for ($i=0; $i < count($classificacao) ; $i++) { 
                ?>
                <option value=<?=$classificacao[$i]["idclassificacao"]?>><?=$classificacao[$i]["idade"]?></option>
                <?php
                }
                ?>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">Foto</label>
            <input type="file" name="imagem" class="form-control">
        </div>
       
        <div>
        <button type="submit" class="btn btn-primary col-12">Cadastrar</button>
        </div>
    </form>
</body>
</html>
