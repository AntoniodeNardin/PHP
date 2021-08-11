<?php
class Album extends Musica {
    private $nome;
    private $numDeMusicas;
    private $estilo;
    private $banda;
    private $ano;
    private $duracao;
    private $musicas = [];
    private $status;
    private $like;

    public function __construct($nome,$duracao,$estilo,$banda,$ano,$musicas)
    {
        $this->setNome($nome);
        $this->setDuracao($duracao);
        $this->setEstilo($estilo);
        $this->setBanda($banda);
        $this->setAno($ano);
        $this->setStatus('pause');
        $this->like = 0;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }
    public function setDuracao($duracao){
        $this->duracao = $duracao;
    }
    public function setEstilo($estilo){
        $this->estilo = $estilo;
    }
    public function setBanda($banda){
        $this->banda  = $banda;
    }
    public function setAno($ano){
        $this->ano = $ano;
    }
    public function setStatus($status){
        $this->status = $status;
    }
    public function setLike(){
        $this->like++;
    }
    public function getNome(){
       return $this->nome;
    }
    public function getDuracao(){
       return $this->duracao;
    }
    public function getEstilo(){
        return $this->estilo;
    }
    public function getBanda(){
        return $this->banda;
    }
    public function getAno(){
        return $this->ano;
    }
    public function getStatus(){
        return $this->status;
    }
    public function getLike(){
        return $this->like;
    }
}
?>