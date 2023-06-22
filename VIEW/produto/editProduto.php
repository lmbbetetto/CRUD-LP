<?php

include('../../BLL/protect.php');
include_once '../../BLL/bllProduto.php';
$id = $_GET['id'];

$bll = new \BLL\bllProduto;
$produto = $bll->SelectId($id);

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar produto</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/funcionario.css">
</head>

<body>
    <?php include_once "../menu/menu.php"; ?>

    <div class="containerFunc">
        <div class="card">
            <h1>Alterar produto</h1>
            <form action="recEditProduto.php" method="POST">

                <label for="id"></label>
                <input type="hidden" name="txtId" value="<?php echo $produto->getId(); ?>">

                <label for="nome">Produto</label>
                <input id="nome" type="text" name="txtNome" value="<?php echo $produto->getNome(); ?>">

                <label for="idCategoria">Categoria</label>
                <input id="idCategoria" type="text" name="txtIdCategoria" value="<?php echo $produto->getIdCategoria(); ?>">


                <label for="ifFornecedor">Fornecedor</label>
                <input id="ifFornecedor" type="text" name="txtIdFornecedor" value="<?php echo $produto->getIdFornecedor(); ?>">

                <div class="telCPF">
                    <div>
                        <label for="qtdeEstoque">Qtde em Estoque</label>
                        <input id="qtdeEstoque" type="text" name="txtQtdeEstoque" value="<?php echo $produto->getQtdeEstoque(); ?>">
                    </div>

                    <div>
                        <label for="valorUnitario">Valor Unitário</label>
                        <input id="valorUnitario" type="text" name="txtValorUnitario" value="<?php echo $produto->getValorUnitario(); ?>">
                    </div>
                </div>

                <div class="botao">
                    <button class="btnConf" type="submit">Confirmar</button>
                    <button class="btnCanc" type="button" onclick="JavaScript:location.href='lsProduto.php'">Cancelar</button>
                </div>
            </form>
        </div>
    </div>

    <?php include_once "../footer/footer.php" ?>

</body>

</html>