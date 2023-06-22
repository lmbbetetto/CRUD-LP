<?php

namespace MODEL;

class Produto
{
    private $id;
    private $nome;
    private $idCategoria;
    private $idFornecedor;
    private $qtdeEstoque;
    private $valorUnitario;

    public function getId()
    {
        return $this->id;
    }

    public function setId(int $id)
    {
        return $this->id = $id;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome(string $nome)
    {
        return $this->nome = $nome;
    }

    public function getIdCategoria()
    {
        return $this->idCategoria;
    }

    public function setIdCategoria(int $idCategoria)
    {
        return $this->idCategoria = $idCategoria;
    }

    public function getIdFornecedor()
    {
        return $this->idFornecedor;
    }

    public function setIdFornecedor(int $idFornecedor)
    {
        return $this->idFornecedor = $idFornecedor;
    }

    public function getQtdeEstoque()
    {
        return $this->qtdeEstoque;
    }

    public function setQtdeEstoque(int $qtdeEstoque)
    {
        return $this->qtdeEstoque = $qtdeEstoque;
    }

    public function getValorUnitario()
    {
        return $this->valorUnitario;
    }

    public function setValorUnitario(float $valorUnitario)
    {
        return $this->valorUnitario = $valorUnitario;
    }
}
