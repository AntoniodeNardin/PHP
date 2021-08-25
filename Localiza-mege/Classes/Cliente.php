<?php
class Cliente{

    private $nome;
    private $cpf;
    private $email;
    private $telefone;
    private $cupom;

    public function __construct($nome,$cpf,$email,$telefone,$cupom)
    {
        $this->setNome($nome);
        $this->setCPF($cpf);
        $this->setEmail($email);
        $this->setTelefone($telefone);
        $this->setCupom($cupom);
    }

    public function getNome(){
        return $this->nome;
    }
    public function getCPF(){
        return $this->cpf;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getTelefone(){
        return $this->telefone;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }
    public function setCPF($cpf){
        $this->cpf = $cpf;
    }
    public function setEmail($email){
        $this->email = $email;
    }
    public function setTelefone($telefone){
        $this->telefone = $telefone;
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
}
?>