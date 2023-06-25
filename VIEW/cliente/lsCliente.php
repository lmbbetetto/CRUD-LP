<?php

use BLL\bllCliente;

include_once '../../BLL/bllCliente.php';

$bll = new \BLL\bllCliente;
$lsCliente = $bll->Select();
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Funcionário</title>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/lsfunc.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <?php include_once "../menu/menu.php"; ?>

    <div class="containerFunc">
        <h1>Clientes</h1>
        <div class="cab">
            <a href="../menuPrincipal/painel.php">Voltar</a>
            <a href="./addCliente.php">Adcionar Clientes</a>
        </div>

        <div class="containerSearch">
            <form action="" method="GET" class="search" id="">
                <input placeholder="Buscar cliente" class="searchInput" id="txtBusca" name="busca">
                <button class="searchBtn" type="submit" name="action">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </form>
        </div>

        <table class="tabela">
            <tr class="cabecalho">
                <th>ID</th>
                <th>Nome</th>
                <th>Telefone</th>
                <th>CPF</th>
                <th>Funções</th>
            </tr>
            <?php
            foreach ($lsCliente as $cliente) {
                ?>
                    <tr class="corpo">
                        <td><?php echo $cliente->getId(); ?></td>
                        <td><?php echo $cliente->getNome(); ?></td>
                        <td><?php echo $cliente->getTelefone(); ?></td>
                        <td><?php echo $cliente->getCpf(); ?></td>
                        <td class="funcoes">
                            <a onclick="JavaScript:location.href='editCliente.php?id=' + 
                            <?php echo $cliente->getId(); ?>">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </a>
                            <a onclick="JavaScript:remover(<?php echo $cliente->getId(); ?>)">
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
    function remover(id){
        if(confirm('Excluir o Fornecedor? ' + id + '?')){
            location.href = 'remoCliente.php?id=' + id;
        }
    }
</script>