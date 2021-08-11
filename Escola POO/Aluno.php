<?php 
require_once 'Pessoa.php';
class Aluno extends Pessoa{
    private $matricula;
    private $curso;
    private $mensalidade;


    public function __construct($n,$i,$s,$m,$c,$mens)
    {
        $this->setNome($n);
        $this->setIdade($i);
        $this->setSexo ($s);
        $this->setMatricula($m);
        $this->setCurso($c);
        $this->setMensalidade($mens);
    }
    public function pagarMensalidade(){
        echo "mensalidade de".$this->getMensalidade()."paga com sucesso";
    }
    public function cancelarMatricula(){
        
        $this->setMatricula(false);
    }
    public function getMatricula(){
        return $this->matricula;
    }
    public function getCurso(){
        return $this->curso;
    }
    public function setMatricula($m){
        $this->matricula = $m;
    }
    public function setCurso($c){
        $this->curso= $c;
    }
    public function getMensalidade(){
        return $this->mensalidade;
    }
    public function setMensalidade($mens){
        $this->mensalidade = $mens;
    }
}
?>