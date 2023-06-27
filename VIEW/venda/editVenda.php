<?php

include('../../BLL/protect.php');
include_once '../../BLL/bllVenda.php';

$id = $_GET['id'];

$bll = new BLL\bllVenda;
$venda = $bll->SelectID($id);

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar venda</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/funcionario.css">

    <script src="http://code.jquery.com/jquery-1.11.1.js"></script>
    <script src="http://jqueryvalidation.org/files/dist/jquery.validate.js"></script>

</head>

<body>
    <?php include_once "../menu/menu.php"; ?>

    <div class="containerFunc">
        <div class="card">
            <h1>Editar Venda</h1>
            <form id="validacaoVenda" action="recEditVenda.php" method="POST">

                <label for="id"></label>
                <input id="id" type="hidden" name="txtId" value="<?php echo $venda->getId(); ?>">

                <div class="telCPF">
                    <div>
                        <label for="idProduto">ID do Produto</label>
                        <input id="idProduto" type="text" name="txtIdProduto" value="<?php echo $venda->getIdProduto(); ?>">
                    </div>
                </div>

                <div class="telCPF">
                    <div>
                        <label for="idFuncionario">ID do Funcionario</label>
                        <input id="idFuncionario" type="text" name="txtIdFuncionario" value="<?php echo $venda->getIdFuncionario(); ?>">
                    </div>

                    <div>
                        <label for="idCliente">ID do Cliente</label>
                        <input id="idCliente" type="text" name="txtIdCliente" value="<?php echo $venda->getIdCliente(); ?>">
                    </div>
                </div>

                <div class="telCPF">
                    <div>
                        <label for="qtdeVendida">Quantidade</label>
                        <input id="qtdeVendida" type="text" name="txtQtdeVendida" value="<?php echo $venda->getQtdeVendida(); ?>">
                    </div>

                    <div>
                        <label for="valorUnitario"></label>
                        <input id="valorUnitario" type="hidden" name="txtValorUnitario" value="
                            <?php
                            echo ($venda->getValorTotal()) / $venda->getQtdeVendida();
                            ?>">
                    </div>
                </div>

                <label for="dataVenda">Data da Venda</label>
                <input id="dataVenda" type="date" name="txtDataVenda" value="<?php echo $venda->getDataVenda(); ?>">

                <div class="botao">
                    <button class="btnConf" type="submit">Confirmar</button>
                    <button class="btnCanc" type="button" onclick="JavaScript:location.href='lsVenda.php'">Cancelar</button>
                </div>
            </form>
        </div>
    </div>

    <?php include_once "../footer/footer.php" ?>

    <script src="../validacao/validacaoVenda.js"></script>
</body>

</html>