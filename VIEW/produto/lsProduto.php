<?php

use BLL\bllCategoria;
use BLL\bllProduto;

include_once '../../BLL/bllProduto.php';
include_once '../../BLL/bllCategoria.php';
include_once '../../BLL/bllFornecedor.php';

if (isset($_GET['busca']))
    $busca = $_GET['busca'];
else $busca = null;

$bll = new BLL\bllProduto;
$bllCategoria = new BLL\bllCategoria;
$bllFornecedor = new BLL\bllFornecedor;

if ($busca == null)
    $lsProduto = $bll->Select();
else $lsProduto= $bll->SelectNome($busca);

?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Produtos</title>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/lsfunc.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <?php include_once "../menu/menu.php"; ?>

    <div class="containerFunc">
        <h1>Produtos</h1>
        <div class="cab">
            <a href="../menuPrincipal/painel.php">Voltar</a>
            <a href="../produto/addProduto.php">Adcionar Produtos</a>
        </div>

        <div class="containerSearch">
            <form action="../produto/lsProduto.php" method="GET" class="search" id="buscaProduto">
                <input placeholder="Buscar produto" class="searchInput" id="txtBusca" name="busca">
                <button class="searchBtn" type="submit" name="action">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </form>
        </div>

        <table class="tabela">
            <tr class="cabecalho">
                <th>ID</th>
                <th>Nome</th>
                <th>Categoria</th>
                <th>Fornecedor</th>
                <th>Qtde em Estoque</th>
                <th>Valor Unitário</th>
                <th>Funções</th>
            </tr>

            <?php
            foreach ($lsProduto as $produto) {
            ?>

                <tr class="corpo2">
                    <td><?php echo $produto->getId(); ?></td>
                    <td><?php echo $produto->getNome(); ?></td>
                    <td>
                        <?php $categoria = $bllCategoria->SelectID($produto->getIdCategoria());
                        echo $categoria->getDescricao();
                        ?>
                    </td>
                    <td>
                        <?php $fornecedor = $bllFornecedor->SelectID($produto->getIdFornecedor());
                        echo $fornecedor->getNome();
                        ?>
                    </td>
                    <td><?php echo $produto->getQtdeEstoque(); ?></td>
                    <td><?php echo $produto->getValorUnitario(); ?></td>
                    <td class="funcoes">
                        <a onclick="JavaScript:location.href='editProduto.php?id=' + 
                            <?php echo $produto->getId(); ?>">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                        <a onclick="JavaScript:remover(<?php echo $produto->getId(); ?>)">
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
        if (confirm('Excluir a Produto ' + id + '?')) {
            location.href = 'remoProduto.php?id=' + id;
        }
    }
</script>