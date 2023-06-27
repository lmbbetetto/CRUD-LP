<?php

include('../../BLL/protect.php');

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Fornecedor</title>
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
            <h1>Cadastro de fornecedor</h1>
            <form id="validacaoFornecedor" method="POST" action="recAddFornecedor.php">
                <label for="nome">Nome</label>
                <input type="text" name="txtNome">


                <label for="endereco">Endereço</label>
                <input type="text" name="txtEndereco">

                <div class="telCPF">
                    <div>
                        <label for="telefone">Telefone</label>
                        <input type="text" name="txtTelefone">
                    </div>

                    <div>
                        <label for="cnpj">CNPJ</label>
                        <input type="text" name="txtCnpj">
                    </div>
                </div>

                <div class="botao">
                    <button class="btnConf" type="submit">Cadastrar</button>
                    <button class="btnCanc" type="button" onclick="JavaScript:location.href='lsFornecedor.php'">
                        Cancelar</button>
                </div>
            </form>
        </div>
    </div>

    <?php include_once "../footer/footer.php" ?>
    <script src="../validacao/validacaoFornecedor.js"></script>
    
</body>

</html>