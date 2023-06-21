<?php
namespace MODEL;


class Fornecedor {
    private $id;
    private $nome;
    private $telefone;
    private $endereco;
    private $cnpj;

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

    public function getEndereco(){
        return $this->endereco;
    }

    public function setEndereco(string $endereco){
        $this->endereco = $endereco;
    }

    public function getCnpj(){
        return $this->cnpj;
    }

    public function setCnpj(string $cnpj){
        $this->cnpj = $cnpj;
    }
}

?>