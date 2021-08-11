<?php
require_once 'Pessoa.php';
class Visitante extends Pessoa{

    public function __construct($n,$i,$s)
    {
        $this->setNome($n);
        $this->setIdade($i);
        $this->setSexo ($s);
}
}
?>