<?php
class Carro{
    private $modelo;
    private $marca;
    private $cor;
    private $potencia;
    private $ar_condicionado;
    private $aluguel;
    private $grupo;

    public function __construct($modelo,$marca,$cor,$potencia,$ar_condicionado,$aluguel,$grupo)
    {
        $this->setModelo($modelo);
        $this->setMarca($marca);
        $this->setCor($cor);
        $this->setPotencia($potencia);
        $this->setAr_condicionado($ar_condicionado);
        $this->setAluguel($aluguel);
        $this->setGrupo($grupo);
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

    public function getAluguel()
    {
        return $this->aluguel;
    }
    public function setAluguel($aluguel)
    {
        $this->aluguel = $aluguel;
    }

    /**
     * Get the value of grupo
     */
    public function getGrupo()
    {
        return $this->grupo;
    }

    /**
     * Set the value of grupo
     *
     * @return  self
     */
    public function setGrupo($grupo)
    {
        $this->grupo = $grupo;

        return $this;
    }
}
?>