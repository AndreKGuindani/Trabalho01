<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Galeria de Fotos</h1>

    <?php
    require_once "src/ClienteDAO.php";
    $clientes = ClienteDAO::listar();

    for ($i=0; $i < count($clientes) ; $i++) { 
        ?>
        Nome: <p><?=$clientes[$i]["nome"]?></p>
        <img src="assets/img/<?=$clientes[$i]["imagem"]?>" style="width: 100px" alt="">
        <?php
    }
    ?>

</body>
</html>