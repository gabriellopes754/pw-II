<?php
session_start();
include "conexao.php";

$login = $_POST['login'];
$senha = $_POST['senha'];

$logar = $conn->query("SELECT * FROM usuarios WHERE (id = '$login' OR email = '$login') AND senha = '$senha'");
$check = mysqli_num_rows($logar);

if ($check == 1) {
    while ($linha = mysqli_fetch_array($logar)) {
        $nome = $linha['nome'];
        $tipo_usuario = $linha['tipo_usuario'];
    }

    $_SESSION['login_session'] = $login;
    $_SESSION['nome_session'] = $nome;

    if ($tipo_usuario == 'administrador') {
        header('Location:admin.php');
    } elseif ($tipo_usuario == 'usuario') {
        header('Location:userdash.php');
    }
    exit();
} else {
    header('Location: erro.php');
    exit();
}
?>
