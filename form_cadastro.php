<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <title>Document</title>
</head>

<body class="container">
    <h1 class="text-center px-3">Cadastro de Clientes</h1>
    <form action="cadastro.php" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" name="nome">
        </div>
        <div class="mb-3">
            <label class="form-label">Foto</label>
            <input type="file" name="imagem" class="form-control">
        </div>
        <div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
        </div>
    </form>
</body>

</html>