<?php

use BLL\bllFornecedor;

include_once '../../BLL/bllFornecedor.php';

$bll = new \BLL\bllFornecedor;
$lsFornecedor = $bll->Select();
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
        <h1>Fornecedores</h1>
        <div class="cab">
            <a href="../menuPrincipal/painel.php">Voltar</a>
            <a href="./addFornecedor.php">Adcionar Fornecedor</a>
        </div>

        <div class="search">
            <input placeholder="Buscar fornecedor" class="searchInput">
            <button class="searchBtn">
                <i class="fa-solid fa-magnifying-glass"></i>
            </button>
        </div>

        <table class="tabela">
            <tr class="cabecalho">
                <th>Nome</th>
                <th>Telefone</th>
                <th>Endereço</th>
                <th>CNPJ</th>
                <th>Funções</th>
            </tr>
            <?php
            foreach ($lsFornecedor as $fornecedor) {
            ?>
                <tr class="corpo">
                    <td><?php echo $fornecedor->getNome(); ?></td>
                    <td><?php echo $fornecedor->getTelefone(); ?></td>
                    <td><?php echo $fornecedor->getEndereco(); ?></td>
                    <td><?php echo $fornecedor->getCnpj(); ?></td>
                    <td class="funcoes">
                        <a onclick="JavaScript:location.href='editFornecedor.php?id=' + 
                        <?php echo $fornecedor->getId(); ?>">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                        <a onclick="JavaScript:remover(<?php echo $fornecedor->getId(); ?>)">
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
            location.href = 'remoFornecedor.php?id=' + id;
        }
    }
</script>