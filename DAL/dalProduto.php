<?php

namespace DAL;
include_once '../../DAL/conexao.php';
include_once '../../MODEL/Produto.php';

class dalProduto{
    
    public function Select(){
        $sql = "select * from produto;";
        
        $con = Conexao::conectar(); 
        $result = $con->query($sql); 
        $con = Conexao::desconectar();
        
        foreach ($result as $linha){
            $produto = new \MODEL\Produto;
            
            $produto->setId($linha['id']);
            $produto->setNome($linha['nome']);
            $produto->setIdCategoria($linha['categoria']);
            $produto->setIdFornecedor($linha['fornecedor']);
            $produto->setQtdeEstoque($linha['qtde_estoque']);
            $produto->setValorUnitario($linha['valor_unitario']);
            
            $lsProduto[] = $produto;
        }
        
        return $lsProduto;
    }
    
    public function SelectID(int $id){
        $sql = "select * from produto where id=?;";
        $pdo = Conexao::conectar(); 
        $query = $pdo->prepare($sql);
        $query->execute (array($id));
        $linha = $query->fetch(\PDO::FETCH_ASSOC);
        Conexao::desconectar(); 
   
        $produto = new \MODEL\Produto(); 
        $produto->setId($linha['id']);
        $produto->setNome($linha['nome']);
        $produto->setIdCategoria($linha['categoria']);
        $produto->setIdFornecedor($linha['fornecedor']);
        $produto->setQtdeEstoque($linha['qtde_estoque']);
        $produto->setValorUnitario($linha['valor_unitario']);
   
        return $produto; 
   
    }

    public function Insert(\MODEL\Produto $produto){
        $con = Conexao::conectar(); 
        $sql = "INSERT INTO produto (nome, categoria, fornecedor, qtde_estoque, valor_unitario) 
               VALUES  ('{$produto->getNome()}', '{$produto->getIdCategoria()}', '{$produto->getIdFornecedor()}',
               '{$produto->getQtdeEstoque()}', '{$produto->getValorUnitario()}');";
 
        $result = $con->query($sql); 
        $con = Conexao::desconectar();
        return $result; 

    }

    public function Update(\MODEL\Produto $produto){
        $sql = "UPDATE produto SET nome=?, categoria=?, fornecedor=?, qtde_estoque=?, valor_unitario = ? WHERE id=?";

        $pdo = Conexao::conectar(); 
        $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 
        $query = $pdo->prepare($sql);
        $result = $query->execute(array($produto->getNome(), $produto->getIdCategoria(),$produto->getIdFornecedor(),
                                    $produto->getQtdeEstoque(), $produto->getValorUnitario(), $produto->getId()));
        $con = Conexao::desconectar();
        return  $result; 
    }

    public function Delete(int $id){
        $sql = "DELETE from produto WHERE id=?";

        $pdo = Conexao::conectar(); 
        $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 
        $query = $pdo->prepare($sql);
        $result = $query->execute(array($id));
        $con = Conexao::desconectar();
        return  $result; 
    }
}
?>