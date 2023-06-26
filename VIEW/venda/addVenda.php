<?php

include('../../BLL/protect.php');

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar produto</title>
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
            <h1>Nova Venda</h1>
            <form id="validacaoProduto" action="recAddProduto.php" method="POST">

                <div class="telCPF">
                    <div>
                        <label for="nome">ID do Produto</label>
                        <input id="nome" type="text" name="txtNome">
                    </div>

                    <div>
                        <label for="nome">Produto</label>
                        <input id="nome" type="text" name="txtNome">
                    </div>
                </div>

                <div class="telCPF">
                    <div>
                        <label for="idCategoria">Categoria</label>
                        <input id="idCategoria" type="text" name="txtIdCategoria">
                    </div>

                    <div>
                        <label for="idFornecedor">Fornecedor</label>
                        <input id="idFornecedor" type="text" name="txtIdFornecedor">
                    </div>
                </div>

                <div class="telCPF">
                    <div>
                        <label for="qtdeEstoque">Quantidade</label>
                        <input id="qtdeEstoque" type="text" name="txtQtdeEstoque">
                    </div>

                    <div>
                        <label for="valorUnitario">Valor Unitário</label>
                        <input id="valorUnitario" type="text" name="txtValorUnitario">
                    </div>
                </div>

                <label for="valorUnitario">Valor Total</label>
                <input id="valorUnitario" type="text" name="txtValorUnitario">

                <div class="botao">
                    <button class="btnConf" type="submit">Cadastrar</button>
                    <button class="btnCanc" type="button" onclick="JavaScript:location.href='lsVenda.php'">Cancelar</button>
                </div>
            </form>
        </div>
    </div>

    <?php include_once "../footer/footer.php" ?>

    <script src="../validacao/validacaoProduto.js">
        document.getElementById('senhaEye').addEventListener('click', function() {
            let passowerInput = document.getElementById('senha')
            if (passowerInput.type == 'password') {
                passowerInput.type = 'text'
                this.innerHTML = '<i class="fa-solid fa-eye-slash"></i>'
            } else {
                passowerInput.type = 'password';
                this.innerHTML = '<i class="fa-solid fa-eye"></i>'
            }
        })
    </script>
</body>

</html>