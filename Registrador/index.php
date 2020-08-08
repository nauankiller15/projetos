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
            <!-- mostrar validação de erros aqui -->
            <?php include('errors.php'); ?>
        </div>
        <div id="fechar">
        <div class="form-box">
            <input class="submit-btn" type="button" value="Fechar" onclick="close_div(1)">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()">Logar</button>
                <button type="button" class="toggle-btn" onclick="register()">Registrar</button>
            </div>
            <div class="social-icons">
                <img src="fb.png">
                <img src="tw.png">
                <img src="gp.png">
            </div>
            <form method="post" action="" id="login" class="input-group">
                <input type="text" class="input-field" name="username" placeholder="Usuário" VALUE="<?php echo $username; ?>">
                <input type="password" class="input-field" name="password" placeholder="Coloque a Senha">
                <input type="checkbox" class="chech-box"><span>Lembar senha</span>
                <button type="Submit" name="login" class="submit-btn">Logar</button>
            </form>
            <form method="post" action="" id="register" class="input-group">
                <input type="text" class="input-field" placeholder="Usuário" name="username" VALUE="<?php echo $username; ?>">
                <input type="email" class="input-field" placeholder="Email" name="email" VALUE="<?php echo $email; ?>">
                <input type="password" class="input-field" name="password_1" placeholder="Coloque a primeira senha" required>
                <input type="password" class="input-field" name="password_2" placeholder="Coloque a segunda senha" required>
                <input type="checkbox" class="chech-box"><span>Eu concordo com os termos & condições</span>
                <button type="Submit" name="register" class="submit-btn">Registrar</button>
            </form>
        </div>
        </div>
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


    </script>


<script type='text/javascript'>

		function close_div(id) {
    if(id === 1) {
        jQuery("fechar").hide();
    }
}

</script>
</body>

</html>