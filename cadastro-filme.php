<?php
require "src/FilmesDAO.php";

FilmesDAO::inserir($_POST);

echo "deu boa!";

header("location:cadastro-filmes.php");