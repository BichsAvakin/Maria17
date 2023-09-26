<?php
require "Conexao.php";
require "RepositorioMusica.php";

$repositorio = new RepositorioMusica();

$valores = $repositorio->listar($banco);

foreach($valores as $valor){
    echo "Nome: ".$valor['nome'].PHP_EOL;
}