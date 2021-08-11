<?php
require_once 'Animal.php';
class Ave extends Animal{
    private $corPena;

    public function locomover(){
        echo "<p>Voando</p>";
    }

    public function fazerNinho(){
        echo "<p>Fazendo ninho</p>";
}
}
?>