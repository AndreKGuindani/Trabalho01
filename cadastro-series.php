<?php
require "src/SeriesDAO.php";

SeriesDAO::inserir($_POST);

echo "deu boa!";

header("location:cadastro-series.php");