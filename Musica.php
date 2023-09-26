<?php

  class Musica {
    
    private $titulo;

    private $artista;

    private $genero;

    private $duracao;

    private $anodelancamento;

   public function __construct ( string $titulo,string $artista, string $genero, string $duracao,string $anodelancamento) {
   
    $this->definirTitulo($titulo);
    $this->definirArtista($artista);
    $this->definirGenero($genero);
    $this->definirDuracao($duracao);
    $this->definirAnodelancamento($anodelancamento);
}
public function definirTitulo(string $titulo){
    $this-> titulo = $titulo;
}
public function definirArtista(string $artista){
    $this-> artista = $artista;
}
public function definirGenero(string $genero){
    $this-> genero = $genero;
}
public function definirDuracao(string $duracao){
    $this-> duracao = $duracao;
}
public function definirAnodelancamento(string $anodelancamento){
    $this-> anodelancamento = $anodelancamento;
}
public function exibirTitulo(){
    return $this->titulo;
}

public function exibirArtista(){
    return $this->artista;
}

public function exibirgenero(){
    return $this->genero;
}
public function exibirduracao(){
    return $this->duracao;
}

public function exibirAnodelancamento(){
    return $this->anodelancamento;
}
  }
