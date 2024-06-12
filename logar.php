<?php
session_start();
include "conexao.php";

$login = $_POST['login'];
$senha = $_POST['senha'];
$logar = $conn->query("SELECT * FROM cadastro WHERE (rm = '$login' OR email = '$login') AND senha = '$senha' ");
$check = mysqli_num_rows($logar);
while ($linha = mysqli_fetch_array($logar)) {
    $avatar = $linha['avatar'];
    $nome = $linha['nome'];
    $tipo = $linha['tipo'];
}
if($check == 1){
    $_SESSION['login_session'] = $login;
    $_SESSION['nome_session'] = $nome;
    $_SESSION['avatar_session']  = $avatar;
    header('Location: logado.php');
}

else{
    header('Location: erro.php');
}