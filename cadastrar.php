<?php
require "Conexao.php";
require "Musica.php";
require "RepositorioMusica.php";

$Musica1 = new Musica("Maria Jeans","Gabriel","feminino","40","2000");


$repositorioMusica = new RepositorioMusica();

$repositorioMusica->cadastrar($Musica1,$banco);