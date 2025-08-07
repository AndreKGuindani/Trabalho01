<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Filme</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body class="p-4">
    <div class="container">
        <h1>Cadastro de Filme</h1>
        <form action="salvar_filme.php" method="POST" class="mt-4">

            <div class="mb-3">
                <label class="form-label">Título</label>
                <input type="text" name="titulo" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Diretor</label>
                <input type="text" name="diretor" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Ano</label>
                <input type="number" name="ano" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Elenco</label>
                <input type="text" name="elenco" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Prêmios</label>
                <input type="text" name="premios" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Imagem (URL)</label>
                <input type="text" name="imagem" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Categoria</label>
                <select name="idcategoria" class="form-select" required>
                    <option value="">Selecione</option>
                    <?php
                    require_once "src/Filme.dao";
                    for ($i = 0; $i < count($categorias); $i++) {
                        $cat = $categorias[$i];
                        echo "<option value='{$cat['idcategoria']}'>{$cat['nome']}</option>";
                    }
                    ?>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Classificação</label>
                <select name="idclassificacao" class="form-select" required>
                    <option value="">Selecione</option>
                    <?php
                    for ($i = 0; $i < count($classificacoes); $i++) {
                        $cla = $classificacoes[$i];
                        echo "<option value='{$cla['idclassificacao']}'>{$cla['descricao']}</option>";
                    }
                    ?>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>
</body>
</html>
