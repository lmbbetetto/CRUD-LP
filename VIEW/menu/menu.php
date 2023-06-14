<?php

include('../../BLL/protect.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="../css/menu.css">
    <link rel="stylesheet" href="../css/reset.css">
</head>

<body>
    <div class="container">
        <div class="menu">
            <a href="../menuPrincipal/painel.php"><div class="logo"></div></a>

            <div class="itens">
                <a>Venda</a>
                <a href="../produto/lsProduto.php">Produto</a>
                <a href="../cliente/lsCliente.php">Cliente</a>
                <a href="../fornecedor/lsFornecedor.php">Fornecedor</a>
                <a href="../funcionario/lsFuncionario.php">Funcionário</a>
                <a href="../categoria/lsCategoria.php">Categoria</a>
                <a href="../login/logout.php"><button class="btn">Sair</button></a>
            </div>
        </div>
    </div>
</body>

</html>