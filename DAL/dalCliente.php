<?php

namespace DAL;
include_once '../../DAL/conexao.php';
include_once '../../MODEL/Cliente.php';

class dalCliente{
    
    public function Select(){
        $sql = "select * from cliente;";
        
        $con = Conexao::conectar(); 
        $result = $con->query($sql); 
        $con = Conexao::desconectar();
        
        foreach ($result as $linha){
            $cliente = new \MODEL\Cliente;
            
            $cliente->setId($linha['id']);
            $cliente->setNome($linha['nome']);
            $cliente->setTelefone($linha['telefone']);
            $cliente->setCpf($linha['cpf']);
            
            $lsCliente[] = $cliente;
        }
        
        return $lsCliente;
    }
    
    public function SelectID(int $id){
        $sql = "select * from cliente where id=?;";
        $pdo = Conexao::conectar(); 
        $query = $pdo->prepare($sql);
        $query->execute (array($id));
        $linha = $query->fetch(\PDO::FETCH_ASSOC);
        Conexao::desconectar(); 
   
        $cliente = new \MODEL\Cliente(); 
            $cliente->setId($linha['id']);
            $cliente->setNome($linha['nome']);
            $cliente->setTelefone($linha['telefone']);
            $cliente->setCpf($linha['cpf']);
           
   
        return $cliente; 
   
    }

    public function Insert(\MODEL\Cliente $cliente){
        $con = Conexao::conectar(); 
        $sql = "INSERT INTO cliente
               VALUES  ('{$cliente->getId()}','{$cliente->getNome()}','{$cliente->getTelefone()}',
               '{$cliente->getCpf()}');";
 
        $result = $con->query($sql); 
        $con = Conexao::desconectar();
        return $result; 

    }

    public function Update(\MODEL\Cliente $cliente){
        $sql = "UPDATE cliente SET nome=?,telefone=?,cpf=?WHERE id=?";

        $pdo = Conexao::conectar(); 
        $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 
        $query = $pdo->prepare($sql);
        $result = $query->execute(array($cliente->getNome(),$cliente->getTelefone()
        ,$cliente->getCpf(), $cliente->getId()));
        $con = Conexao::desconectar();
        return  $result; 
    }

    public function Delete(int $id){
        $sql = "DELETE from cliente WHERE id=?";

        $pdo = Conexao::conectar(); 
        $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 
        $query = $pdo->prepare($sql);
        $result = $query->execute(array($id));
        $con = Conexao::desconectar();
        return  $result; 
    }
}
