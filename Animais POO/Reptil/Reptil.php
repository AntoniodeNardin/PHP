<?php
require_once 'Animal.php';
class Reptil extends Animal{
    private $corEscama;

    public function locomover(){
        echo "<p>Rastejando</p>";
    }
}
?>