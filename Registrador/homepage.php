<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastra-NET 2.0</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="hero">
        <div class="titulo">
            Cadastra-Net 2.0
        </div>
        <div class="showerror">
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
        <div class="form-box">
            <?php if (isset($_SESSION['sucess'])) : ?>

            <?php endif ?>
            <?php if (isset($_SESSION["username"])) : ?>
                <p>Bem-vindo: <strong><?php echo $_SESSION['username']; ?></strong> /
                    <a href="index.php?logout='1'">Sair</a></p>
            <?php endif ?>

        </div>

        <script>
            var x = document.getElementById("login");
            var y = document.getElementById("register");
            var z = document.getElementById("btn");


            function register() {
                x.style.left = "-400px";
                y.style.left = "50px";
                z.style.left = "110px";
            }

            function login() {
                x.style.left = "50px";
                y.style.left = "450px";
                z.style.left = "0";
            }

            document.addEventListener("keydown", keyDownTextField, false);

            function keyDownTextField(e) {
                var keyCode = e.keyCode;
                if (keyCode == 39) {
                    register();
                } else if (keyCode == 37) {
                    login();
                }
            }
        </script>
</body>

</html>