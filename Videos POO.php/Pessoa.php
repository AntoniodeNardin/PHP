<?php
abstract Class Pessoa{
    private $nome;
    private $idade;
    private $sexo;
    private $experiencia;

    public function __construct($n,$i,$s)
    {
        $this->nome = $n;
        $this->idade = $i;
        $this->sexo = $s;
        $this->experiencia = 0;
    }

    public function ganharXP($xp){
        
        $this->experiencia = $xp;

    }
    public function getExperiencia(){
        return $this->experiencia;
    }
    public function setExperiencia($e){
        $this->experiencia += $e;
    }
}
?>