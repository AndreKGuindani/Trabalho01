<?php
require "src/ClienteDAO.php";

ClienteDAO::inserir($_POST);

echo "deu boa!";

//header("location:ok.html");