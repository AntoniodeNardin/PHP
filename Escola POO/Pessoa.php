<?php 
abstract class Pessoa {
    private $nome;
    private $idade;
    private $sexo;
    
    public function __construct($n,$i,$s)
    {
        $this->setNome($n);
        $this->setIdade($i);
        $this->setSexo($s);
    }
    public function fazerAniversário(){
        $this->setIdade($this->getIdade()+1);
    }
    public function getNome(){
        return $this->nome;
    }
    public function getIdade(){
        return $this->idade;
    }
    public function getSexo(){
        return $this->sexo;
    }
    public function setNome($n){
        $this->nome = $n;
    }
    public function setIdade($i){
        $this->idade = $i;
    }
    public function setSexo($s){
        $this->sexo = $s;
    }
}
?>