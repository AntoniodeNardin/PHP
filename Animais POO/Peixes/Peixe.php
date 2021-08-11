<?php
require_once 'Animal.php';
class Peixe extends Animal{
    private $corEscama;

    public function locomover(){
        echo "<p>Nadando</p>";
    }
    
    public function soltarBolha(){
        echo "<p>Soltando bolhas</p>";
    }
}
?>