<?php
namespace MODEL;


class Categoria {
    private $id;
    private $descricao;

    public function __construct()
    {
        
    }

    public function getId(){
        return $this->id;
    }

    public function setId(int $id){
        $this->id = $id;
    }

    public function getDescricao(){
        return $this->descricao;
    }

    public function setDescricao(string $descricao){
        $this->descricao = $descricao;
    }
}

?>