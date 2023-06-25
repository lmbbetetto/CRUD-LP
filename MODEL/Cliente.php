<?php
namespace MODEL;


class Cliente {
    private $id;
    private $nome;
    private $telefone;
    private $cpf;
   

    public function __construct()
    {
        
    }

    public function getId(){
        return $this->id;
    }

    public function setId(int $id){
        $this->id = $id;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome(string $nome){
        $this->nome = $nome;
    }

    public function getTelefone(){
        return $this->telefone;
    }

    public function setTelefone(string $telefone){
        $this->telefone = $telefone;
    }

    public function getCpf(){
        return $this->cpf;
    }

    public function setCpf(string $cpf){
        $this->cpf = $cpf;
    }
  
}

?>