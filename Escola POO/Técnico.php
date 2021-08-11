<?php
class Técnico extends Aluno{
    private $registroProfissional;

    public function __construct($n,$i,$s,$m,$c,$mens,$rp)
    {
        $this->setNome($n);
        $this->setIdade($i);
        $this->setSexo ($s);
        $this->setMatricula($m);
        $this->setCurso($c);
        $this->setMensalidade($mens);
        $this->setRegistro($rp);
    }
    public function getRegistro(){
        return $this->registroProfissional;
    }
    public function setRegistro($rp){
        $this->registroProfissional = $rp;
    }
    public function praticar(){
        echo "estou praticando";
    }
}
?>