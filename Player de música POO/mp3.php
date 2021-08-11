<?php
require_once 'player.php';

class mp3 implements player{
    private $numeroDeMusicas;
    private $musica = [];
    private $status;
    private $musicaAtual;
    private $proximaMusica;
    private $musicaAnterior;
    public $i = 1;

    public function __construct()
    {
        $this->status = 'on';
        $this->numeroDeMusicas = 0;
        
    }

    public function play(){
        $this->getMusica($this->i)->setStatus('play');
    }
    public function pause(){
        $this->getMusica($this->i)->setStatus('pause');
    }
    public function skip(){
        $this->i++;
    }
    public function return(){
        $this->i--;
    }
    public function repeat(){
    }
    public function like(){
        $this->getMusica($this->i)->setLike();
    }
    public function getMusica($n){
        return $this->musica[$n];
    }
    public function adicionarMusica($musica,$n){
        $this->musica[$n] = $musica;
        $this->numeroDeMusicas++;
    }
    public function status(){
        $this->musicaAtual = $this->getMusica($this->i)->getNome();
        $this->proximaMusica = $this->getMusica($this->i+1)->getNome();
        $this->musicaAnterior = $this->getMusica($this->i-1)->getNome();
    }
   
}
?>