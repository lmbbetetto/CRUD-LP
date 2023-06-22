<?php

include('../../BLL/protect.php');
include_once '../../BLL/bllFuncionario.php';
$id = $_GET['id'];

$bll = new \BLL\bllFuncionario;
$funcionario = $bll->SelectId($id);

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
            <h1>Editar funcionário</h1>
            <form action="recEditFuncionario.php" method="POST">
                <label for="id"></label>
                <input type="hidden" name="txtId" value="<?php echo $funcionario->getId(); ?>">

                <label for="">Nome</label>
                <input type="text" id="nome" name="txtNome" value="<?php echo $funcionario->getNome(); ?>">


                <label for="">E-mail</label>
                <input type="text" id="email" name="txtEmail" value="<?php echo $funcionario->getEmail(); ?>">

                <div class="telCPF">
                    <div>
                        <label for="">Telefone</label>
                        <input type="text" id="telefone" name="txtTelefone" value="<?php echo $funcionario->getTelefone(); ?>">
                    </div>

                    <div>
                        <label for="">CPF</label>
                        <input type="text" id="cpf" name="txtCpf" value="<?php echo $funcionario->getCpf(); ?>">
                    </div>
                </div>
                <label>Senha</label>
                <div class="senha">
                    <input type="password" name="txtSenha" id="senha" value="<?php echo $funcionario->getSenha(); ?>">
                    <a id="senhaEye" class="senhaEye"><i class="fa-solid fa-eye"></i></a>
                </div>

                <div class="botao">
                    <button class="btnConf" type="submit">Confirmar</button>
                    <button class="btnCanc" type="button" onclick="JavaScript:location.href='lsFuncionario.php'">
                        Cancelar</button>
                </div>
            </form>
        </div>
    </div>

    <?php include_once "../footer/footer.php" ?>

    <script>
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