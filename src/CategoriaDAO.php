<?php
require_once "ConexaoBD.php";
class CategoriaDAO{
    public static function listarCategoria(){
        $conexao = ConexaoBD::conectar();
        $sql = "select * from categoria";
        $resultado = $conexao->query($sql);
        return $resultado->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>