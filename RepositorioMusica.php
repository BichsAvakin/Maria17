<?php
class RepositorioMusica{
  public function cadastrar(Musica $Musica, PDO $pdo){
    
    $codigoSql = "INSERT INTO Musica (titulo,artista,genero,duracao,anodelancamento) VALUES (:t,:a,:g,:d,:n)";

    $titulo = $Musica->exibirTitulo();
    $artista= $Musica->exibirArtista();
    $genero = $Musica->exibirGenero();
    $duracao = $Musica->exibirDuracao();
    $anodeduracao = $Musica->exibiranodelancamento();

    $inserir = $pdo->prepare($codigoSql);
    
    
    $inserir->bindParam(":t",$titulo);
    $inserir->bindParam(":a",$artista);
    $inserir->bindParam(":g",$genero);
    $inserir->bindParam(":d",$duracao);
    $inserir->bindParam(":n",$anodelancamento);

    
    $inserir->execute();
}

public function listar(PDO $banco) {
    $sql = "SELECT * FROM Musica";

     
    $select = $banco->query($sql);

    
    return $select->fetchAll(PDO::FETCH_ASSOC); 
}
}
