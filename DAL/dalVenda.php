<?php

namespace DAL;

include_once '../../DAL/conexao.php';
include_once '../../MODEL/Venda.php';

class dalVenda
{

    public function Select()
    {
        $sql = "select * from venda;";

        $con = Conexao::conectar();
        $result = $con->query($sql);
        $con = Conexao::desconectar();

        foreach ($result as $linha) {
            $venda = new \MODEL\Venda;

            $venda->setId($linha['id']);
            $venda->setIdProduto($linha['produto']);
            $venda->setIdFuncionario($linha['funcionario']);
            $venda->setIdCliente($linha['cliente']);
            $venda->setQtdeVendida($linha['qtde_vendida']);
            $venda->setValorTotal($linha['valor']);
            
            $data = date_create($linha['data_venda']);
            $venda->setDataVenda(date_format($data, 'd/m/Y')); 

            $lsVenda[] = $venda;
        }

        return $lsVenda;
    }

    public function SelectID(int $id)
    {
        $sql = "select * from venda where id=?;";
        $pdo = Conexao::conectar();
        $query = $pdo->prepare($sql);
        $query->execute(array($id));
        $linha = $query->fetch(\PDO::FETCH_ASSOC);
        Conexao::desconectar();

        $venda = new \MODEL\Venda;

            $venda->setId($linha['id']);
            $venda->setIdProduto($linha['produto']);
            $venda->setIdFuncionario($linha['funcionario']);
            $venda->setIdCliente($linha['cliente']);
            $venda->setQtdeVendida($linha['qtde_vendida']);
            $venda->setValorTotal($linha['valor']);
            $venda->setDataVenda($linha['data_venda']);

        return $venda;
    }

    public function SelectDataVenda(string $dataVenda)
    {

        $sql = "select * from venda WHERE data_venda like  '%" . $dataVenda .  "%' order by data_venda;";

        $pdo = Conexao::conectar();
        $query = $pdo->prepare($sql);
        $result = $pdo->query($sql);

        foreach ($result as $linha) {

            $venda = new \MODEL\Venda;

            $venda->setId($linha['id']);
            $venda->setIdProduto($linha['produto']);
            $venda->setIdFuncionario($linha['funcionario']);
            $venda->setIdCliente($linha['cliente']);
            $venda->setQtdeVendida($linha['qtde_vendida']);
            $venda->setValorTotal($linha['valor']);

            $data = date_create($linha['data_venda']);
            $venda->setDataVenda(date_format($data, 'd/m/Y')); 

            $lsVenda[] = $venda;
        }
        return  $lsVenda;
    }

    public function Insert(\MODEL\Venda $venda)
    {
        $con = Conexao::conectar();
        $sql = "INSERT INTO venda (produto, funcionario, cliente, qtde_vendida, valor, data_venda) 
               VALUES  ('{$venda->getIdProduto()}', '{$venda->getIdFuncionario()}', '{$venda->getIdCliente()}',
               '{$venda->getQtdeVendida()}', '{$venda->getValorTotal()}', '{$venda->getDataVenda()}');";

        $result = $con->query($sql);
        $con = Conexao::desconectar();
        return $result;
    }

    public function Update(\MODEL\Venda $venda)
    {
        $sql = "UPDATE venda SET funcionario=?, cliente=?, produto=?, 
                    qtde_vendida=?, valor = ?, data_venda = ? WHERE id=?";

        $pdo = Conexao::conectar();
        $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        $query = $pdo->prepare($sql);
        $result = $query->execute(array(
            $venda->getIdFuncionario(), $venda->getIdCliente(),$venda->getIdProduto(),
            $venda->getQtdeVendida(), $venda->getValorTotal(), $venda->getDataVenda(), $venda->getId()
        ));
        $con = Conexao::desconectar();
        return  $result;
    }

    public function Delete(int $id)
    {
        $sql = "DELETE from venda WHERE id=?";

        $pdo = Conexao::conectar();
        $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        $query = $pdo->prepare($sql);
        $result = $query->execute(array($id));
        $con = Conexao::desconectar();
        return  $result;
    }
}
