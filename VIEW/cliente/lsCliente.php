<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Funcionário</title>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/lsfunc.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <?php include_once "../menu/menu.php"; ?>

    <div class="containerFunc">
        <h1>Clientes</h1>
        <div class="cab">
            <a href="../menuPrincipal/painel.php">Voltar</a>
            <a href="./addCliente.php">Adcionar Clientes</a>
        </div>

        <div class="search">
            <input placeholder="Buscar cliente" class="searchInput">
            <button class="searchBtn">
                <i class="fa-solid fa-magnifying-glass"></i>
            </button>
        </div>

        <table class="tabela">
            <tr class="cabecalho">
                <th>Nome</th>
                <th>Telefone</th>
                <th>CPF</th>
                <th>Funções</th>
            </tr>
            <tr class="corpo">
                <td>Teste</td>
                <td>Teste</td>
                <td>Teste</td>
                <td class="funcoes">
                    <a href="./editCliente.php"><i class="fa-solid fa-pen-to-square"></i></a>
                    <i class="fa-solid fa-trash"></i>
                </td>
            </tr>
        </table>

    </div>

    <?php include_once "../footer/footer.php" ?>
</body>

</html>