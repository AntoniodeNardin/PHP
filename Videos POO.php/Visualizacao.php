<?php
require_once 'Video.php';
class Visualizacao{
    private $espectador;
    private $filme;

    public function __construct($e,$f)
    {
    $this->espectador = $e;
    $this->filme = $f;
    $this->espectador->setTotAssistido(1);
    $this->filme->setViews(1);
    }

    public function avaliar(){
        $this->filme->setAvaliacao(5);
    }
    public function avaliarNota($n){
        $this->filme->setAvaliacao($n);
    }
    public function avaliarPorc($porc){
        if ($porc <= 20) {
            $nota = 3;
        }elseif ($porc <=50) {
            $nota = 5;
        }elseif ($porc <=90) {
            $nota = 8;
        }else{
            $nota = 10;
        }
        $this->filme->setAvaliacao($nota);
    }
}
?>