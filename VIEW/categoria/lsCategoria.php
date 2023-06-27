<?php

use BLL\bllCategoria;

include_once '../../BLL/bllCategoria.php';

if (isset($_GET['busca']))
    $busca = $_GET['busca'];
else $busca = null;

$bll = new \BLL\bllCategoria();

if ($busca == null)
    $lsCategoria = $bll->Select();
else $lsCategoria = $bll->SelectNome($busca);

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Categorias</title>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/lsfunc.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <?php include_once "../menu/menu.php"; ?>

    <div class="containerFunc">
        <h1>Categoria de produtos</h1>
        <div class="cab">
            <a href="../menuPrincipal/painel.php">Voltar</a>
            <a href="../categoria/addCategoria.php">Adicionar Categoria</a>
        </div>

        <div class="containerSearch">
            <form action="../categoria/lsCategoria.php" method="GET" class="search" id="buscaCategoria">
                <input placeholder="Buscar categoria" class="searchInput" id="txtBusca" name="busca">
                <button class="searchBtn" type="submit" name="action">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </form>
        </div>

        <table class="tabela">
            <tr class="cabecalho">
                <th>ID</th>
                <th>Categoria</th>
                <th>Funções</th>
            </tr>

            <?php
            foreach ($lsCategoria as $categoria) {
            ?>

                <tr class="corpo">
                    <td><?php echo $categoria->getId(); ?></td>
                    <td><?php echo $categoria->getDescricao(); ?></td>
                    <td class="funcoes">
                        <a onclick="JavaScript:location.href='editCategoria.php?id=' + 
                        <?php echo $categoria->getId(); ?>">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                        <a onclick="JavaScript:remover(<?php echo $categoria->getId(); ?>)">
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
        if (confirm('Excluir a Categoria ' + id + '?')) {
            location.href = 'remoCategoria.php?id=' + id;
        }
    }
</script>