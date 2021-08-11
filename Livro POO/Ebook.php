<?php 
interface Ebook{
    public function abrir();
    public function fechar();
    public function folhear($f);
    public function avançarPagina();
    public function voltarPagina();
}
?>