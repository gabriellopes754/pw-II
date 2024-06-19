<?php

include "conexao.php";

$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

//verificação de e-mail
$checkEmail = $conn->query("SELECT id FROM usuarios WHERE email = '$email' AND id != '$id'");
if ($checkEmail->num_rows > 0) {
    echo "Email já utilizado por outro usuário.";
} else {
    $conn->query("UPDATE usuarios SET nome = '$nome', email = '$email', senha = '$senha' WHERE id = $id");
    echo "Dados Atualizados";
    header("refresh:3;url=admin.php");
}
?>