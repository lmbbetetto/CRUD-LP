<?php

use BLL\bllVenda;

include('../../BLL/protect.php');
include_once '../../BLL/bllVenda.php';
include_once '../../BLL/bllProduto.php';
include_once '../../BLL/bllFuncionario.php';
include_once '../../BLL/bllCliente.php';

if (isset($_GET['busca']))
    $busca = $_GET['busca'];
else $busca = null;

$bll = new BLL\bllVenda;
$bllProduto = new BLL\bllProduto;
$bllFuncionario = new BLL\bllFuncionario;
$bllCliente = new BLL\bllCliente;

if ($busca == null)
    $lsVenda = $bll->Select();
else
    $lsVenda = $bll->SelectDataVenda($busca);
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Vendas</title>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/lsfunc.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <?php include_once "../menu/menu.php"; ?>

    <div class="containerFunc">
        <h1>Vendas</h1>
        <div class="cab">
            <a href="../menuPrincipal/painel.php">Voltar</a>
            <a href="../venda/addVenda.php">Nova Venda</a>
        </div>

        <div class="containerSearch">
            <form action="../venda/lsVenda.php" method="GET" class="search" id="buscaVenda">
                <input placeholder="Buscar Data da Venda" class="searchInput" id="txtBusca" name="busca">
                <button class="searchBtn" type="submit" name="action">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </form>
        </div>

        <table class="tabela">
            <tr class="cabecalho">
                <th>ID</th>
                <th>Produto</th>
                <th>Funcionario</th>
                <th>Cliente</th>
                <th>Data</th>
                <th>Qtde Vendida</th>
                <th>Valor</th>
                <th>Funções</th>
            </tr>

            <?php
            foreach ($lsVenda as $venda) {
            ?>

                <tr class="corpo2">
                    <td><?php echo $venda->getId(); ?></td>
                    <td>
                        <?php 
                            $produto = $bllProduto->SelectID($venda->getIdProduto());
                            echo $produto->getNome();
                        ?>
                    </td>
                    <td>
                        <?php 
                            $funcionario = $bllFuncionario->SelectID($venda->getIdFuncionario());
                            echo $funcionario->getNome();
                        ?>
                    </td>
                    <td>
                        <?php 
                            $cliente = $bllCliente->SelectID($venda->getIdCliente());
                            echo $cliente->getNome();
                        ?>
                    </td>
                    <td><?php echo $venda->getDataVenda(); ?></td>
                    <td><?php echo $venda->getQtdeVendida(); ?></td>
                    <td><?php echo "R$ " . $venda->getValorTotal(); ?></td>
                    <td class="funcoes">
                        <a onclick="JavaScript:location.href='editVenda.php?id=' + 
                        <?php echo $venda->getId(); ?>">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                        <a onclick="JavaScript:remover(<?php echo $venda->getId(); ?>)">
                            <i class="fa-solid fa-trash"></i>
                        </a>
                    </td>
                </tr>

            <?php
            }
            ?>

        </table>

    </div>

    <?php include_once "../footer/footer.php" ?>
</body>

</html>

<script>
    function remover(id) {
        if (confirm('Excluir a Venda ' + id + '?')) {
            location.href = 'remoVenda.php?id=' + id;
        }
    }
</script>