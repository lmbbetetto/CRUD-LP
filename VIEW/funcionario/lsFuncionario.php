<?php

use BLL\bllFuncionario;

include_once '../../BLL/bllFuncionario.php';

$bll = new \BLL\bllFuncionario();
$lsFuncionarios = $bll->Select();

if (isset($_GET['busca']))
    $busca = $_GET['busca'];
else $busca = null;

if ($busca == null)
    $lsFuncionarios = $bll->Select();
else $lsFuncionarios = $bll->SelectNome($busca);
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
        <h1>Funcionários</h1>
        <div class="cab">
            <a href="../menuPrincipal/painel.php">Voltar</a>
            <a href="./addFuncionario.php">Adcionar Funcionário</a>
        </div>

        <div class="containerSearch">
            <form action="../funcionario/lsFuncionario.php" method="GET" class="search" id="frmBuscaFuncionario">
                <input placeholder="Buscar funcionário" class="searchInput" id="txtBusca" name="busca">
                <button class="searchBtn" type="submit" name="action">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </form>
        </div>

        <table class="tabela">
            <tr class="cabecalho">
                <th>ID</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Telefone</th>
                <th>CPF</th>
                <th>Funções</th>
            </tr>

            <?php
            foreach ($lsFuncionarios as $funcionario) {
            ?>

                <tr class="corpo">
                    <td><?php echo $funcionario->getId(); ?></td>
                    <td><?php echo $funcionario->getNome(); ?></td>
                    <td><?php echo $funcionario->getEmail(); ?></td>
                    <td><?php echo $funcionario->getTelefone(); ?></td>
                    <td><?php echo $funcionario->getCpf(); ?></td>
                    <td class="funcoes">
                        <a onclick="JavaScript:location.href='editFuncionario.php?id=' + 
                        <?php echo $funcionario->getId(); ?>">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                        <a onclick="JavaScript:remover(<?php echo $funcionario->getId(); ?>)">
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
        if (confirm('Você deseja realmente excluir?')) {
            location.href = 'remoFuncionario.php?id=' + id;
        }
    }
</script>