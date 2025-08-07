<?php
class ConexaoBD{
    public static function conectar():PDO{
        $conexao = new PDO("pgsql:host=localhost;dbname=imagens","postgres","postgres");
        return $conexao;
    }
}