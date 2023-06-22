<?php

namespace DAL;

include_once '../../DAL/conexao.php';
include_once '../../MODEL/Categoria.php';

class dalCategoria
{

    public function Select()
    {
        $sql = "select * from categoria;";

        $con = Conexao::conectar();
        $result = $con->query($sql);
        $con = Conexao::desconectar();

        foreach ($result as $linha) {
            $categoria = new \MODEL\Categoria;

            $categoria->setId($linha['id']);
            $categoria->setDescricao($linha['descricao']);

            $lsCategoria[] = $categoria;
        }

        return $lsCategoria;
    }

    public function SelectID(int $id)
    {
        $sql = "select * from categoria where id=?;";
        $pdo = Conexao::conectar();
        $query = $pdo->prepare($sql);
        $query->execute(array($id));
        $linha = $query->fetch(\PDO::FETCH_ASSOC);
        Conexao::desconectar();

        $categoria = new \MODEL\Categoria();
        $categoria->setId($linha['id']);
        $categoria->setDescricao($linha['descricao']);

        return $categoria;
    }

    public function SelectNome(string $descricao)
    {

        $sql = "select * from categoria WHERE descricao like  '%" . $descricao .  "%' order by descricao;";

        $pdo = Conexao::conectar();
        $query = $pdo->prepare($sql);
        $result = $pdo->query($sql);

        foreach ($result as $linha) {

            $categoria = new \MODEL\Categoria;

            $categoria->setId($linha['id']);
            $categoria->setDescricao($linha['descricao']);

            $lsCategoria[] = $categoria;
        }
        return  $lsCategoria;
    }

    public function Insert(\MODEL\Categoria $categoria)
    {
        $con = Conexao::conectar();
        $sql = "INSERT INTO categoria (descricao) 
               VALUES  ('{$categoria->getDescricao()}');";

        $result = $con->query($sql);
        $con = Conexao::desconectar();
        return $result;
    }

    public function Update(\MODEL\Categoria $categoria)
    {
        $sql = "UPDATE categoria SET descricao=? WHERE id=?";

        $pdo = Conexao::conectar();
        $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        $query = $pdo->prepare($sql);
        $result = $query->execute(array($categoria->getDescricao(), $categoria->getId()));
        $con = Conexao::desconectar();
        return  $result;
    }

    public function Delete(int $id)
    {
        $sql = "DELETE from categoria WHERE id=?";

        $pdo = Conexao::conectar();
        $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        $query = $pdo->prepare($sql);
        $result = $query->execute(array($id));
        $con = Conexao::desconectar();
        return  $result;
    }
}
