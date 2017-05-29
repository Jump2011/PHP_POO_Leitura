<?php

require_once 'Publicacao.php';

class Livro implements Publicacao{
    private $titulo, $autor, $totPaginas;
    private $pagAtual,$aberto, $leitor;
    
    public function detalhes(){
        echo "<hr> LIVRO DE " . $this->getTitulo() . " ESCRITO POR " . $this->getAutor();
        echo "<br> TOTAL DE PÁGINAS " .$this->getTotPaginas() . " ATUAL " . $this->getPagAtual();
        echo "<br> SENDO LIDO POR " . $this->leitor->getNome();
    }
    

    public function __construct($titulo, $autor, $totPaginas, $leitor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->totPaginas = $totPaginas;
        $this->pagAtual = false;
        $this->aberto = 0;
        $this->leitor = $leitor;
    }
    public function getTitulo() {
        return $this->titulo;
    }

    public function getAutor() {
        return $this->autor;
    }

    public function getTotPaginas() {
        return $this->totPaginas;
    }

    public function getPagAtual() {
        return $this->pagAtual;
    }

    public function getAberto() {
        return $this->aberto;
    }

    public function getLeitor() {
        return $this->leitor;
    }

    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    public function setAutor($autor) {
        $this->autor = $autor;
    }

    public function setTotPaginas($totPaginas) {
      $this->setTotPaginas= $totPaginas;
    }

    public function setPagAtual($pagAtual) {
        $this->pagAtual = $pagAtual;
    }

    public function setAberto($aberto) {
        $this->aberto = $aberto;
    }

    public function setLeitor($leitor) {
        $this->leitor = $leitor;
    }

    public function abrir() {
        $this->aberto = true;
    }

    public function avancarPag() {
        $this->pagAtual ++;
    }

    public function fechar() {
        $this->fechar=FALSE;
    }

    public function folhear($p) {
        if($p > $this->totPaginas){
            $this->pagAtual = 0;
        }else{
            $this->pagAtual = $p;
        }
    }

    public function voltarPag() {
        $this->pagAtual --;
    }

}
