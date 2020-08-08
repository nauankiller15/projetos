<?php
session_start();
$username = "";
$email = "";
$errors = array();


// Conectar no banco de dados

$db = mysqli_connect('localhost', 'root', '', 'registration');
if (isset($_POST['register'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
    $email = mysqli_real_escape_string($db, $_POST['email']);

    if (empty($username)) {
        array_push($errors, "Usuário requerido.");
    }
    if (empty($email)) {
        array_push($errors, "Email requerido.");
    }
    if (empty($password_1)) {
        array_push($errors, "Senha inválida.");
    }

    if ($password_1 != $password_2) {
        array_push($errors, "As duas senhas não condizem.");
    }
    if (count($errors) == 0) {

        $password = md5($password_1);
        $sql = "INSERT INTO usuarios (usuario, email, senha) 
            values ('$username', '$email', '$password')";

        $resultado = mysqli_query($db, $sql);
        $_SESSION['username'] = $username;
        $_SESSION['sucess'] = "Você está conectado!";
        header('location: index.php'); //redirecionar para home page
    }
}

// Logar o usuário na página inicial

if (isset($_POST['login'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);


    if (empty($username)) {
        array_push($errors, "Usuário requerido.");
    }
    if (empty($password)) {
        array_push($errors, "Senha requerida.");
    }

    if (count($errors) == 0) {
        $password = md5($password); // Chave de segurança da senha pelo conexão do banco de dados
        $query = "SELECT * FROM usuarios WHERE usuario ='$username' AND senha ='$password'";
        $result = mysqli_query($db, $query);
        if (mysqli_num_rows($result) == 1) {
            // logar usuário em
            $_SESSION['username'] = $username;
            $_SESSION['sucess'] = "Você está conectado!";
            header('location: index.php'); //redirecionar para home page
        } else {
            array_push($errors, "A combinação da senha/usuário estão erradas.");
        }
    }
}
// Logout da página

if (isset($_GET['logout'])) {
    session_destroy();
    unset($SESSION['username']);
    header('location: login.php');
}
