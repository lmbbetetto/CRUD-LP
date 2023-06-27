<?php
session_start();

require_once '../../DAL/conexao.php';

use DAL\Conexao;

$codigoError = $senhaError = $loginError = "";

// Verificar se o formulário foi enviado
if (isset($_POST['codigo']) && isset($_POST['senha'])) {

    // Validar os campos do formulário
    if (strlen($_POST['codigo']) == 0) {
        $codigoError = "Preencha seu login";
    } else if (strlen($_POST['senha']) == 0) {
        $senhaError = "Preencha sua senha";
    } else {
        // Obter os valores do formulário
        $codigo = $_POST['codigo'];
        $senha = md5($_POST['senha']);

        // Criar uma instância da classe de conexão
        $conexao = Conexao::conectar();

        // Evitar SQL Injection
        $codigo = $conexao->quote($codigo);
        $senha = $conexao->quote($senha);

        // Consulta SQL
        $sql = "SELECT * FROM funcionario WHERE id = $codigo AND senha = $senha";

        // Executar a consulta
        $result = $conexao->query($sql);

        // Verificar se a consulta retornou algum resultado
        if ($result->rowCount() == 1) {
            $usuario = $result->fetch(PDO::FETCH_ASSOC);

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

            header("Location: ../menuPrincipal/painel.php");
            exit();
        } else {
            $loginError = "Código ou senha incorretos";
        }

        // Desconectar a conexão
        Conexao::desconectar();
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/login.css" />
    <link rel="stylesheet" href="../css/reset.css">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container">
        <div class="loginCard">
            <h1>Acessar conta</h1>
            <div class="campos">
                <form action="" method="POST">
                    <p class="erro"><?php echo $senhaError; ?></p>
                    <p class="erro"><?php echo $codigoError; ?></p>
                    <p class="erro"><?php echo $loginError; ?></p>

                    <label>Código</label>
                    <input type="text" name="codigo">
                    
                    <label>Senha</label>
                    <div class="senha">
                        <input type="password" name="senha" id="senha">
                        <a id="senhaEye" class="senhaEye"><i class="fa-solid fa-eye"></i></a>
                    </div>

                    <button type="submit" class="btnLogin">Entrar</button>

                </form>
            </div>
        </div>
        <div class="cartoon">

        </div>
    </div>

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