<?php
  require_once 'Pessoa.php';
class Gafanhoto extends Pessoa{

    private $login;
    private $totAssistido;

    public function __construct($n,$i,$s,$l)
    {
        parent::__construct($n,$i,$s);
        $this->login  = $l;
        $this->totAssistido = 0;
    }
    public function assistiuVideo(){
        $this->totAssistido++;
    }
    public function getTotAssistido(){
        return $this->totAssistido;
    }
    public function setTotAssistido($ta){
        $this->totAssistido  += $ta;
    }

}
?>