<?php
require_once "ConexaoBD.php";
require "src/Util.php";

class FilmesDAO
{
    public static function inserir($dados)
    {
        $conexao = ConexaoBD::conectar();

        $titulo = $dados['titulo'];
        $diretor = $dados['diretor'];
        $ano = $dados['ano'];
        $elenco = $dados['elenco'];
        $premios = $dados['premios'];
        $imagem = Util::salvarArquivo();
        $idcategoria = $dados['idcategoria'];
        $idclassificacao = $dados['idclassificacao'];

        $sql = "INSERT INTO filme 
                (titulo, diretor, ano, elenco, premios, imagem, idcategoria, idclassificacao) 
                VALUES 
                (:titulo, :diretor, :ano, :elenco, :premios, :imagem, :idcategoria, :idclassificacao)";

        $stmt = $conexao->prepare($sql);
        $stmt->bindParam(':titulo', $titulo);
        $stmt->bindParam(':diretor', $diretor);
        $stmt->bindParam(':ano', $ano);
        $stmt->bindParam(':elenco', $elenco);
        $stmt->bindParam(':premios', $premios);
        $stmt->bindParam(':imagem', $imagem);
        $stmt->bindParam(':idcategoria', $idcategoria);
        $stmt->bindParam(':idclassificacao', $idclassificacao);

        $stmt->execute();
    }

    public static function listar()
    {
        $conexao = ConexaoBD::conectar();
        $sql = "SELECT * FROM filme";
        $stmt = $conexao->prepare($sql);
        $stmt->execute();
        $filmes = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $filmes;
    }
}
