<?php 
require_once 'Pessoa.php';
class Professor extends Pessoa{
    private $especialidade;
    private $salario;

    public function __construct($n,$i,$s,$e,$sal)
    {
        $this->setNome($n);
        $this->setIdade($i);
        $this->setSexo ($s);
        $this->setEspecialidade($e);
        $this->setSalario($sal);
    }

    public function ReceberAumento($a){
        
        $this->setSalario($this->salario += $a);
    }
    public function getEspecialidade(){
        return $this->especialidade;
    }
    public function getSalario(){
        return $this->salario;
    }
    public function setEspecialidade($e){
        $this->especialidade = $e;
    }
    public function setSalario($s){
        $this->salario= $s;
    }
}
?>