<?php
require_once 'Pessoa.php';
require_once 'Ebook.php';
class Livro implements Ebook{
    
    private $titulo,$autor,$paginas,$pagAtual,$aberto,$leitor;

    public function __construct($t,$a,$tp,$l)
    {
        $this->setTitulo($t);
        $this->setAutor($a);
        $this->setPaginas($tp);
        $this->setAberto(false);
        $this->setLeitor($l);
        $this->setpagAtual(0);
    }
    public function detalhes(){
        if ($this->getAberto()) {
            echo "o livro ".$this->titulo." <br>do autor ".$this->autor."<br> tem ".
        $this->paginas." paginas <br>".$this->getLeitor()->getNome()." esta lendo e esta na  pagina ".$this->pagAtual."<br>o livro esta aberto";
        } else {
            echo "o livro ".$this->titulo."<br> do autor ".$this->autor."<br> tem ".
        $this->paginas." paginas <br>".$this->getLeitor()->getNome()." esta lendo e esta na  pagina ".$this->pagAtual."<br>o livro esta fechado";
        }
    }
    public function getTitulo(){
        return $this->titulo;
    }
    public function getAutor(){
        return $this->autor;
    }
    public function getPaginas(){
        return $this->paginas;
    }
    public function getpagAtual(){
        return $this->pagAtual;
    }
    public function getAberto(){
        return $this->aberto;
    }
    public function getLeitor(){
        return $this->leitor;
    }
    public function setTitulo($t){
        $this->titulo = $t;
    }
    public function setAutor($a){
        $this->autor = $a;
    }
    public function setPaginas($tp){
        $this->paginas = $tp;
    }
    public function setpagAtual($pa){
        $this->pagAtual = $pa;
    }
    public function setAberto($s){
        $this->aberto = $s;
    }
    public function setLeitor($l){
        $this->leitor = $l;
    }
    public function abrir(){
        $this->aberto = true;
    }
    public function fechar(){
        $this->setAberto(false);
    }

    public function folhear($f){
        if ( $this->getAberto()){
            $this->setpagAtual($f);

        }else{
            echo "livro esta fechado";
        }
    }
    public function avançarPagina(){
        if ($this -> getAberto()){
            $this->pagAtual++;
        }else{
            echo "livro esta fechado";
        }
    }
    public function voltarPagina(){
        if ($this -> getAberto()){
            $this->pagAtual--;
        }else{
            echo "livro esta fechado";
        }
    }
}
?>