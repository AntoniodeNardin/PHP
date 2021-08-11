<?php
class Bolsista extends Aluno{
    private $bolsa;

    public function __construct($n,$i,$s,$m,$c,$mens,$bolsa)
    {
        $this->setNome($n);
        $this->setIdade($i);
        $this->setSexo ($s);
        $this->setMatricula($m);
        $this->setCurso($c);
        $this->setMensalidade($mens);
        $this->setBolsa($bolsa);
    }
    public function renovarBolsa(){
        if ($this->getBolsa()!=null && $this->getMatricula()!= null){
            echo " Bolsa renovada </p>";
        }
    }
    public function pagarMensalidade(){
        echo "mensalidade de ".($this->getMensalidade()*$this->getBolsa())." paga com sucesso";
        echo "<br>";
    }
    public function getBolsa(){
        return $this->bolsa;
    }
    public function setBolsa($b){
        $this->bolsa = $b;
    }
}
?>