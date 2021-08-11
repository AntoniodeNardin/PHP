<?php
 class Musica{
    private $nome;
    private $duracao;
    private $estilo;
    private $album;
    private $banda;
    private $ano;
    private $status;
    private $like;

    public function __construct($nome,$duracao,$estilo,$album,$banda,$ano)
    {
        $this->setNome($nome);
        $this->setDuracao($duracao);
        $this->setEstilo($estilo);
        $this->setAlbum($album);
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
    public function setAlbum($album){
        $this->album = $album;
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
    public function getAlbum(){
        return $this->album;
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