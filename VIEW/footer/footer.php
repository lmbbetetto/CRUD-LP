<?php

include('../../BLL/protect.php');

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer</title>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/footer.css">
</head>

<body>
    <div class="containerFooter">
        <div class="rodape">
        <a href="../menuPrincipal/painel.php"><div class="logoIMG"></div></a>
            <div class="link">
                <a>Venda</a>
                <a href="../produto/lsProduto.php">Produto</a>
                <a href="../cliente/lsCliente.php">Cliente</a>
                <a href="../fornecedor/lsFornecedor.php">Fornecedor</a>
                <a href="../funcionario/lsFuncionario.php">Funcionário</a>
                <a href="../categoria/lsCategoria.php">Categoria</a>
            </div>
            <a href="../login/logout.php"><button class="btn">Sair</button></a>
            <div class="copy">
                <small>&copy; <a href="https://github.com/lmbbetetto" target="_blank">Leonardo</a>, <a href="https://github.com/ericksikina" target="_blank">Erick</a> e <a href="https://github.com/Guizaao" target="_blank">Guilherme</a> | Todos os direitos reservados.</small>
            </div>
        </div>
    </div>
</body>

</html>