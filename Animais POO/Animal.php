<?php
abstract class Animal{
    private $peso;
    private $idade;
    private $membros;

    public function locomover(){
        echo "<p>Andando</p>";
    }
    public function alimentar(){
        echo "<p>Comendo</p>";
    }
    public function emitirSom(){
        echo "<p>Emitindo som</p>";
    }
}
?>