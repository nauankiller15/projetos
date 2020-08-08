<?php include('server.php'); ?>
<!Doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CADASTRA-NET-LOGIN</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

    <div class="titulo">Cadastra-Net</div>
    <div class="header">
        <h2>Registrar-se</h2>
    </div>

    <form method="post" action="register.php">
        <!-- mostrar validação de erros aqui -->
        <?php include('errors.php'); ?>
        <div class="input-group">
            <label>Usuário:</label>
            <input type="text" name="username" VALUE="<?php echo $username; ?>">
        </div>

        <div class="input-group">
            <label>Email:</label>
            <input type="email" name="email" VALUE="<?php echo $email; ?>">
        </div>

        <div class="input-group">
            <label>Senha:</label>
            <input type="password" name="password_1">
        </div>

        <div class="input-group">
            <label>Confirme a senha:</label>
            <input type="password" name="password_2">
        </div>

        <div class="input-group">
            <button type="Submit" name="register" class="btn">Registrar</button>
        </div>
        <p>Já é um usuário cadastrado? <a href="login.php">Entre Aqui!</a></p>
    </form>

</body>
</html>