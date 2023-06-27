<?php

include('../../BLL/protect.php');
include_once '../../BLL/bllCliente.php';
$id = $_GET['id'];

$bll = new \BLL\bllCliente;
$cliente = $bll->SelectId($id);

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cliente</title>
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
            <h1>Editar cliente</h1>
            <form id="ValidacaoCliente" action="recEditCliente.php" method="POST">


                <label for="id"></label>
                <input type="hidden" name="txtId" value="<?php echo $cliente->getId(); ?>">

                <label for="nome">Nome</label>
                <input id="nome" name="txtNome" value="<?php echo $cliente->getNome(); ?>">

                <div class="telCPF">
                    <div>
                        <label for="telefone">Telefone</label>
                        <input id="telefone" type="text" name="txtTelefone" value="<?php echo $cliente->getTelefone(); ?>">
                    </div>

                    <div>
                        <label for="cpf">CPF</label>
                        <input id="cpf" type="text" name="txtCpf" value="<?php echo $cliente->getCpf(); ?>">
                    </div>
                </div>

                <div class="botao">
                    <button class="btnConf" type="submit">Confirmar</button>
                    <button class="btnCanc" type="button" onclick="JavaScript:location.href='lsCliente.php'">
                        Cancelar</button>
                </div>
            </form>
        </div>
    </div>

    <?php include_once "../footer/footer.php" ?>
    <script src="../validacao/validacaoCliente.js"></script>

</body>

</html>