<?php include('server.php'); ?>
<!Doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CADASTRA-NET-REGISTRO</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

    <div class="titulo">
        Cadastra-Net
    </div>
    <div class="header">
        <h2>Login</h2>
    </div>

    <form method="post" action="login.php">
        <!-- mostrar validação de erros aqui -->
        <?php include('errors.php'); ?>
        <div class="input-group">
            <label>Usuário:</label>
            <input type="text" name="username" VALUE="<?php echo $username; ?>">
        </div>
        <div class="input-group">
            <label>Senha:</label>
            <input type="password" name="password">
        </div>

        <div class="input-group">
            <button type="Submit" name="login" class="btn">Entrar</button>
        </div>
        <p>Ainda não é um membro? <a href="register.php">Registre-se Aqui!</a></p>
    </form>


</body>

</html>