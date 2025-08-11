<?php
require_once "ConexaoBD.php";
class ClassificacaoDAO{
    public static function listarClassificacao(){
        $conexao = ConexaoBD::conectar();
        $sql = "select * from classificacao";
        $resultado = $conexao->query($sql);
        return $resultado->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>