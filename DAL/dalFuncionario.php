<?php

namespace DAL;
include_once '../../DAL/conexao.php';
include_once '../../MODEL/Funcionario.php';

class dalFuncionario{
    
    public function Select(){
        $sql = "select * from funcionario;";
        
        $con = Conexao::conectar(); 
        $result = $con->query($sql); 
        $con = Conexao::desconectar();
        
        foreach ($result as $linha){
            $funcionario = new \MODEL\Funcionario;
            
            $funcionario->setId($linha['id']);
            $funcionario->setNome($linha['nome']);
            $funcionario->setSenha($linha['senha']);
            $funcionario->setEmail($linha['email']);
            $funcionario->setTelefone($linha['telefone']);
            $funcionario->setCpf($linha['cpf']);
            
            $lsfuncionario[] = $funcionario;
        }
        
        return $lsfuncionario;
    }
    
    public function SelectID(int $id){
        $sql = "select * from funcionario where id=?;";
        $pdo = Conexao::conectar(); 
        $query = $pdo->prepare($sql);
        $query->execute (array($id));
        $linha = $query->fetch(\PDO::FETCH_ASSOC);
        Conexao::desconectar(); 
   
        $funcionario = new \MODEL\Funcionario(); 
        $funcionario->setId($linha['id']);
        $funcionario->setNome($linha['nome']);
        $funcionario->setSenha($linha['senha']);
        $funcionario->setEmail($linha['email']);
        $funcionario->setTelefone($linha['telefone']);
        $funcionario->setCpf($linha['cpf']);
   
        return $funcionario;
   
    }

    public function Insert(\MODEL\Funcionario $funcionario){
        $con = Conexao::conectar(); 
        $sql = "INSERT INTO funcionario (nome, senha, email, telefone, cpf) 
               VALUES  ('{$funcionario->getNome()}', '{$funcionario->getSenha()}', '{$funcionario->getEmail()}',
                        '{$funcionario->getTelefone()}', '{$funcionario->getCpf()}');";
 
        $result = $con->query($sql); 
        $con = Conexao::desconectar();
        return $result; 

    }

    public function Update(\MODEL\Funcionario $funcionario){
        $sql = "UPDATE funcionario SET nome=?, senha=?, email=?, telefone=?, cpf=? WHERE id=?";

        $pdo = Conexao::conectar(); 
        $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 
        $query = $pdo->prepare($sql);
        $result = $query->execute(array($funcionario->getNome(), $funcionario->getSenha(), $funcionario->getEmail(),
                                        $funcionario->getTelefone(), $funcionario->getCpf(), $funcionario->getId()));
        $con = Conexao::desconectar();
        return  $result;
    }

    public function Delete(int $id){
        $sql = "DELETE from funcionario WHERE id=?";

        $pdo = Conexao::conectar(); 
        $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 
        $query = $pdo->prepare($sql);
        $result = $query->execute(array($id));
        $con = Conexao::desconectar();
        return  $result; 
    }
}
