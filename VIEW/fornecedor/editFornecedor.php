<?php

include('../../BLL/protect.php');
include_once '../../BLL/bllFornecedor.php';
$id = $_GET['id'];

echo $id;

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
            <form action="recEditFornecedor.php" method="POST">

                <label for="id"></label>
                <input type="hidden" name="txtId" value="<?php echo $fornecedor->getId(); ?>">

                <label for="nome">Nome</label>
                <input id="nome" type="text" name="txtNome" value="<?php echo $fornecedor->getNome(); ?>">

                <label for="telefone">Telefone</label>
                <input id="telefone" type="text" name="txtTelefone" value="<?php echo $fornecedor->getTelefone(); ?>">



                <div class="telCPF">
                    <div>
                        <label for="">Telefone</label>
                        <input id="endereco" type="text" name="txtEndereco" value="<?php echo $fornecedor->getEndereco(); ?>">
                    </div>

                    <div>
                        <label for="">CNPJ</label>
                        <input id="cnpj" type="text" name="txtCnpj" value="<?php echo $fornecedor->getCnpj(); ?>">
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
