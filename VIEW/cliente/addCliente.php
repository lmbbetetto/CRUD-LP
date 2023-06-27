<?php

include('../../BLL/protect.php');

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Cliente</title>
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
            <h1>Cadastro de cliente</h1>
            <form id="ValidacaoCliente" method="POST" action="recAddCliente.php">

                <label for="">Nome</label>
                <input type="text" name="txtNome">

                <div class="telCPF">
                    <div>
                        <label for="">Telefone</label>
                        <input type="text" name="txtTelefone">
                    </div>

                    <div>
                        <label for="">CPF</label>
                        <input type="text" name="txtCpf">
                    </div>
                </div>

                <div class="botao">
                <button class="btnConf" type="submit">Cadastrar</button>
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