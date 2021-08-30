<?php
require_once 'Carro.php';
class Reserva{

    private $local_retirada;
    private $data_retirada;
    private $hora_retirada;
    private $local_devolução;
    private $data_devolução;
    private $hora_devolução;
    private $carro;
    private $pessoa;
    private $total;

    public function __construct($local_retirada,$data_retirada,$hora_retirada,$local_devolução,$data_devolução,$hora_devolução,$carro,$pessoa)
    {
        $this->setLocalRetirada($local_retirada);
        $this->setDataRetirada($data_retirada);
        $this->setHoraRetirada($hora_retirada);
        $this->setLocalDevolução($local_devolução);
        $this->setDataDevolução($data_devolução);
        $this->setHoraDevolução($hora_devolução);
        $this->setCarro($carro);
        $this->setPessoa($pessoa);
    }
    
    public function getLocalRetirada()
    {
        return $this->local_retirada;
    }
    public function setLocalRetirada($local_retirada)
    {
        $this->local_retirada = $local_retirada;

        return $this;
    }
    public function getPreço()
    {
        return $this->carro->getDiaria();
    }
    public function setPreço()
    {
    }
    public function getDataRetirada()
    {
        return $this->data_retirada;
    }
    public function setDataRetirada($data_retirada)
    {
        $this->data_retirada = $data_retirada;

        return $this;
    }
    public function getHoraRetirada()
    {
        return $this->hora_retirada;
    }
    public function setHoraRetirada($hora_retirada)
    {
        $this->hora_retirada = $hora_retirada;

        return $this;
    }
    public function getLocalDevolução()
    {
        return $this->local_devolução;
    }
    public function setLocalDevolução($local_devolução)
    {
        $this->local_devolução = $local_devolução;

        return $this;
    }
    public function getDataDevolução()
    {
        return $this->data_devolução;
    }
    public function setDataDevolução($data_devolução)
    {
        $this->data_devolução = $data_devolução;

        return $this;
    }
    public function getHoraDevolução()
    {
        return $this->hora_devolução;
    }
    public function setHoraDevolução($hora_devolução)
    {
        $this->hora_devolução = $hora_devolução;

        return $this;
    }
    public function getCarro()
    {
        return $this->carro;
    }
    public function setCarro($carro)
    {
        $this->carro = $carro;

        return $this;
    }
    public function getPessoa()
    {
        return $this->pessoa;
    }
    public function setPessoa($pessoa)
    {
        $this->pessoa = $pessoa;

        return $this;
    }
    public function getTotal()
    {
        return $this->total;
    }

    public function total($preco){
        $dias = $this->diasDatas($this->getDataRetirada(),$this->getDataDevolução());
        $total = $dias * $preco;
        if($this->getLocalRetirada() != $this->getLocalDevolução()){
            $total = $total +30;
        }
        if($dias >= 7 && $dias <14){
            $total *= 0.9;
            return $total;
        }
        if($dias >= 14 && $dias <28){
            $total *= 0.8;
            return $total;
        }
        if($dias >= 28){
            $total *= 0.75;
            return $total;

    }
    return $total;
}
    public function diasDatas($data_inicial,$data_final) {
        $diferenca = strtotime($data_final) - strtotime($data_inicial);
        $dias = floor($diferenca / (60 * 60 * 24)); 
        return $dias;
    }
    public function inverteData($data){
        if(count(explode("/",$data)) > 1){
            return implode("-",array_reverse(explode("/",$data)));
        }elseif(count(explode("-",$data)) > 1){
            return implode("/",array_reverse(explode("-",$data)));
        }
    }
    public function desconto($dias){
        if ($dias >= 7 && $dias <14){
            echo 'Desconto semanal aplicado de 10%';
        }
        if ($dias >= 14 && $dias < 28){
            echo 'Desconto quinzenal aplicado de 20%';
        }
        if ($dias >= 28){
            echo 'Desconto mensal aplicado de 25%';
        }
    }
    public function teste_local_taxa(){
        if($this->getLocalRetirada() != $this->getLocalDevolução()){
            echo 'Taxa de distância entre agências cobrada';
        }
    }
}