<?php

namespace DAL;
include_once '../../DAL/conexao.php';
include_once '../../MODEL/Fornecedor.php';

class dalFornecedor{
    
    public function Select(){
        $sql = "select * from fornecedor;";
        
        $con = Conexao::conectar(); 
        $result = $con->query($sql); 
        $con = Conexao::desconectar();
        
        foreach ($result as $linha){
            $fornecedor = new \MODEL\Fornecedor;
            
            $fornecedor->setId($linha['id']);
            $fornecedor->setNome($linha['nome']);
            $fornecedor->setTelefone($linha['telefone']);
            $fornecedor->setEndereco($linha['endereco']);
            $fornecedor->setCnpj($linha['cnpj']);
            
            $lsFornecedor[] = $fornecedor;
        }
        
        return $lsFornecedor;
    }
    
    public function SelectID(int $id){
        $sql = "select * from fornecedor where id=?;";
        $pdo = Conexao::conectar(); 
        $query = $pdo->prepare($sql);
        $query->execute (array($id));
        $linha = $query->fetch(\PDO::FETCH_ASSOC);
        Conexao::desconectar(); 
   
        $fornecedor = new \MODEL\Fornecedor(); 
            $fornecedor->setId($linha['id']);
            $fornecedor->setNome($linha['nome']);
            $fornecedor->setTelefone($linha['telefone']);
            $fornecedor->setEndereco($linha['endereco']);
            $fornecedor->setCnpj($linha['cnpj']);
   
        return $fornecedor; 
   
    }

    public function Insert(\MODEL\Fornecedor $fornecedor){
        $con = Conexao::conectar(); 
        $sql = "INSERT INTO fornecedor
               VALUES  ('{$fornecedor->getId()}','{$fornecedor->getNome()}','{$fornecedor->getTelefone()}',
               '{$fornecedor->getEndereco()}','{$fornecedor->getCnpj()}');";
 
        $result = $con->query($sql); 
        $con = Conexao::desconectar();
        return $result; 

    }

    public function Update(\MODEL\Fornecedor $fornecedor){
        $sql = "UPDATE fornecedor SET descricao=? WHERE id=?";

        $pdo = Conexao::conectar(); 
        $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 
        $query = $pdo->prepare($sql);
        $result = $query->execute(array($fornecedor->getId(), $fornecedor->getNome(),$fornecedor->getTelefone(),
        $fornecedor->getEndereco(),$fornecedor->getCnpj()));
        $con = Conexao::desconectar();
        return  $result; 
    }

    public function Delete(int $id){
        $sql = "DELETE from fornecedor WHERE id=?";

        $pdo = Conexao::conectar(); 
        $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 
        $query = $pdo->prepare($sql);
        $result = $query->execute(array($id));
        $con = Conexao::desconectar();
        return  $result; 
    }
}
