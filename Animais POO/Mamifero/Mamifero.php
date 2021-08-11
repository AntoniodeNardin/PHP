<?php
require_once 'Animal.php';
class Mamifero extends Animal{
    private $corPelo;
    public function emitirSom(){
        echo "<p>Emitindo som de mamifero</p>";
    }
}
?>