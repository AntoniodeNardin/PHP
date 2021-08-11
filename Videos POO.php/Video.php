<?php
class Video implements Player{

    private $titulo;
    private $avaliação;
    private $views;
    private $curtidas;
    private $reproduzindo;
    public function __construct($t)
    {
        $this->titulo = $t;
        $this->avaliação = 0;
        $this->views = 0;
        $this->curtidas = 0;
        $this->reproduzindo = false;
    }

    public function play(){
        $this->reproduzindo = true;

    }
    public function pause(){
        $this->reproduzindo = false;

    }
    public function like(){
        $this->curtidas++;

    }
    public function setViews($v){
        $this->views += $v;
    }
    public function setAvaliacao($a){
        $media = $this->avaliação += $a/$this->views;
        $this-> avaliação = $media;
    }

}
?>