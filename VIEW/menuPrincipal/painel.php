<?php

include('../../BLL/protect.php');

?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Principal</title>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/menuPrincipal.css">
</head>

<body>
    <?php include_once "../menu/menu.php"; ?>

    <div class="fundo">
        <div class="escrita">
            <h2>Bem vindo ao Menu Principal, <?php echo $_SESSION['nome']; ?>.</h2>
        </div>
    </div>
</body>

</html>