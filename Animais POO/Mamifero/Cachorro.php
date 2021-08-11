<?php 
require_once 'Mamifero.php';
class Cachorro extends Mamifero{
    public function reagir_Frase($frase){
        if ($frase == "ola") {
            echo "<p>abanar o rabo</p>";
        }else{
            echo "<p>latir, rosnar</p>";
        }
    }
    public function reagir_HoraDoDia($h){
        if ($h <=10 ) {
            echo "<p>abanar o rabo</p>";
        }elseif ($h <21) {
            echo "<p>Latir</p>";
        }elseif ($h>21) {
            echo "<p>ignorar</p>";
        }
    }
    public function reagir_Dono($d){
        if ($dono = true) {
            echo "<p>abanar o rabo</p>";
        }else{
            echo "<p>Latir</p>";
        }
    }
    public function reagir_IdadePeso($i,$p){
        if ($i <= 5 && $p <= 15) {
            echo "<p>abanar o rabo</p>";
        }elseif ($i <= 10 && $p <= 30) {
            echo "<p>Latir agudo</p>";
        }
        elseif ($i <= 5 && $p <= 30) {
            echo "<p>abanar o rabo</p>";
    }
}
    public function emitirSom(){
        echo "<p>AU AU AU</p>";
    }
}
?>