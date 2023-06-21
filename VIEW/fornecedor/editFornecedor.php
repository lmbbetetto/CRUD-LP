<?php

include('../../BLL/protect.php');
include_once '../../BLL/bllFornecedor.php';
$id = $_GET['id'];

$bll = new \BLL\bllFornecedor;
$fornecedor = $bll->SelectId($id);

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcionário</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/funcionario.css">
</head>

<body>
    <?php include_once "../menu/menu.php"; ?>

    <div class="containerFunc">
        <div class="card">
            <h1>Editar fornecedor</h1>
            <form action="">
                <label for="">Nome</label>
                <input type="text">


                <label for="">Endereço</label>
                <input type="text">

                <div class="telCPF">
                    <div>
                        <label for="">Telefone</label>
                        <input type="text">
                    </div>

                    <div>
                        <label for="">CNPJ</label>
                        <input type="text">
                    </div>
                </div>

                <div class="botao">
                    <button class="btnConf">Confirmar</button>
                    <a href="./lsFuncionario.php"><button class="btnCanc">Cancelar</button></a>
                </div>
            </form>
        </div>
    </div>

    <?php include_once "../footer/footer.php" ?>

</body>

</html>