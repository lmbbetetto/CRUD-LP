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
                <a>Produto</a>
                <a>Cliente</a>
                <a>Fornecedor</a>
                <a href="../funcionario/funcionario.php">Funcionário</a>
                <a>Categoria</a>
                <a href="../login/logout.php"><button class="btn">Sair</button></a>
            </div>
        </div>
    </div>
</body>

</html>