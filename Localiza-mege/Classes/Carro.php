<?php
class Carro{

    private $modelo;
    private $marca;
    private $cor;
    private $potencia;
    private $ar_condicionado;
    private $Diaria;
    private $grupo;
    private $cupom;

    public function __construct($modelo,$marca,$cor,$potencia,$ar_condicionado,$Diaria,$grupo,$cupom)
    {
        $this->setModelo($modelo);
        $this->setMarca($marca);
        $this->setCor($cor);
        $this->setPotencia($potencia);
        $this->setAr_condicionado($ar_condicionado);
        $this->setDiaria($Diaria);
        $this->setGrupo($grupo);
        $this->setCupom($cupom);
    }

    public function getModelo(){
        return $this->modelo;
    }
    public function getMarca(){
        return $this->marca;
    }
    public function getCor(){
        return $this->cor;
    }
    public function getPotencia(){
        return $this->potencia;
    }
    public function getAr_condiconado(){
        return $this->ar_condicionado;
    }
    public function setModelo($modelo){
        $this->modelo = $modelo;
    }
    public function setMarca($marca){
        $this->marca = $marca;
    }
    public function setCor($cor){
        $this->cor = $cor;
    }
    public function setPotencia($potencia){
        $this->potencia = $potencia;
    }
    public function setAr_condicionado($ar_condicionado){
        $this->ar_condicionado = $ar_condicionado;
    }
    public function getDiaria()
    {
        return $this->Diaria;
    }
    public function setDiaria($Diaria)
    {
        $this->Diaria = $Diaria;
    }
    public function getGrupo()
    {
        return $this->grupo;
    }
    public function setGrupo($grupo)
    {
        $this->grupo = $grupo;

        return $this;
    }
    public function getCupom()
    {
        return $this->cupom;
    }
    public function setCupom($cupom)
    {
        $this->cupom = $cupom;

        return $this;
    }
    public function testeCupom($cupom){
        if($cupom == 'MEGE'){
            $this->setDiaria($this->getDiaria()-15);
            return $this->getDiaria();
        }
        else{
            return $this->getDiaria();
        }
    }
    public function desconto($cupom){
        if($cupom == 'MEGE'){
            echo '<p>Desconto de 15 reais aplicado na diária</p>';
        }
    }
}
?>