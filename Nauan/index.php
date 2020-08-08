<?php include('server.php');

// Se o usuário não estiver logado, ele não poderá acessar está página
if (empty ($_SESSION['username'])){
    header ('location: login.php');
}

?>

<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastra-Net-Página Inicial</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class='logintop'>
        <?php if (isset($_SESSION["username"])) : ?>
            <p>Bem-vindo: <strong><?php echo $_SESSION['username']; ?></strong> /
                <a href="index.php?logout='1'">Sair</a></p>
        <?php endif ?>
    </div>
    <div target="_blank"></div>
    <div class="titulo">
        Cadastra-Net
    </div>
    <div class="content">
        <?php if (isset($_SESSION['sucess'])) : ?>
            <div class="errorsucess">
                <h3>
                    <?php
                    echo $_SESSION['sucess'];
                    unset($_SESSION['sucess']);
                    ?>
                    <div target="_blank"></div>
                    <strong>Você está logado como: <?php echo $_SESSION['username']; ?>.</strong>
                </h3>
            </div>
        <?php endif ?>
    </div>
    <div class="inicio">
        <h2>Você está em: Página Inicial</h2>
        <h2><a href='register.php'>Voltar para o Registro</a></h2>
    </div>
    <div class='inicio2'>
        <a href=''>
            <span>
                <h2>Ver Notícias </h2>
            </span></a>
        <a href=''>
            <span>
                <h2>Ver Email</h2>
            </span>
        </a>
        <a href=''>
            <span>
                <h2>Ver Mensagens</h2>
            </span>
        </a>
    </div>

</body>

</html>