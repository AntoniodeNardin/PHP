<?php 
require_once 'Pessoa.php';
class Funcionario extends Pessoa{
    private $setor;
    private $trabalhando;

    public function __construct($n,$i,$s,$set,$t)
    {
        $this->setNome($n);
        $this->setIdade($i);
        $this->setSexo ($s);
        $this->setSetor($set);
        $this->setTrabalhando($t);
    }

    public function MudarTrabalho($s){
        
        $this->setSetor($s);
    }
    public function getSetor(){
        return $this->setor;
    }
    public function getTrabalhando(){
        return $this->trabalhando;
    }
    public function setSetor($s){
        $this->setor = $s;
    }
    public function setTrabalhando($t){
        $this->trabalhando= $t;
    }
}
?>