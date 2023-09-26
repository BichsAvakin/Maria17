<?php
try{
    $banco = new PDO("sqlite:dado.sqlite");
}catch(PDOException $e){
    echo "Erro no momento de acionar o banco!";
}

$criarTabela = "CREATE TABLE IF NOT EXISTS Musica(
    Titulo TEXT,
    Artista TEXT,
    Genero TEXT,
    Duracao TEXT,
    Anodelancamento TEXT,
    primary key (Titulo))";

$banco->query($criarTabela);