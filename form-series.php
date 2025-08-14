<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <title>Cadastrar Série</title>
</head>
<body class="container bg-black text-light">
    <h1 class="text-center font-monospace text-danger fw-bold mt-2">Cadastro de Série</h1>
    <form action="cadastro-series.php" class="row" method="POST" enctype="multipart/form-data">
        <div class="mb-3 col-6">
            <label for="nome" class="form-label">Titulo</label>
            <input type="text" class="form-control" name="titulo" placeholder="Digite o Título da Série">
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
            <input type="text" class="form-control" name="elenco" placeholder="Digite o Elenco da Série">
        </div>
        <div class="mb-3">
            <label for="nome" class="form-label">Prêmios</label>
            <input type="text" class="form-control" name="premios" placeholder="Digite os Prêmios da Série">
        </div>
        <div class="mb-3">
            <label for="nome" class="form-label">Temporadas</label>
            <input type="text" class="form-control" name="temporadas" placeholder="Digite o Número de Temporadas">
        </div>
        <div class="mb-3">
            <label for="nome" class="form-label">Episódios</label>
            <input type="text" class="form-control" name="episodios" placeholder="Digite o Número de Episódios">
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
                <option value=<?=$classificacao[$i]["idclassificacao"]?>><?=$classificacao[$i]["nome"]?></option>
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
        <button type="submit" class="btn btn-danger col-12">Cadastrar</button>
        </div>
    </form>
</body>
</html>
