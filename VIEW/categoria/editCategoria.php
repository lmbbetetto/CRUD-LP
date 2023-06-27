<?php

include('../../BLL/protect.php');
include_once '../../BLL/bllCategoria.php';
$id = $_GET['id'];

$bll = new \BLL\bllCategoria;
$categoria = $bll->SelectId($id);

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Categoria</title>
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
            <h1>Editar Categoria</h1>
            <form id="validacaoCategoria" action="recEditCategoria.php" method="POST">

                <label for="id"></label>
                <input type="hidden" name="txtId" value="<?php echo $categoria->getId(); ?>">

                <label for="descricao">Categoria</label>
                <input id="descricao" type="text" name="txtDescricao" value="<?php echo $categoria->getDescricao(); ?>">

                <div class="botao">
                    <button class="btnConf" type="submit">Confirmar</button>
                    <button class="btnCanc" type="button" onclick="JavaScript:location.href='lsCategoria.php'">
                    Cancelar</button>
                </div>
            </form>
        </div>
    </div>

    <?php include_once "../footer/footer.php" ?>

    <script src="../validacao/validacaoCategoria.js"></script>

</body>

</html>