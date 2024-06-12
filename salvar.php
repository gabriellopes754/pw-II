<?php

include "conexao.php";

$dados = $conn->query("SELECT * FROM cadastro");

$rm = $_POST['rm'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$avatar = $_FILES['avatar']['name'];
$tipo = $_POST['tipo'];
$pasta = "img/";

$ext = strtolower(pathinfo($avatar, PATHINFO_EXTENSION));
$avatarf = $rm . '.' . $ext;
$avatarbd = $pasta . $avatarf;


$dados = $conn->query("SELECT * FROM cadastro");
while ($linha = $dados->fetch_assoc()) {
    $rmbd = $linha['rm'];
    $emailbd = $linha['email'];
}

if ($rm == $rmbd and $email == $emailbd) {
    echo "RM e Email ja cadastrado";
} elseif ($rm == $rmbd) {
    echo "Rm ja cadastrado";
} elseif ($email == $emailbd) {
    echo "Email ja cadastrado";
} else {
    if (move_uploaded_file($_FILES['avatar']['tmp_name'], $pasta . $avatarf)) {
    } else {
        $result_message = "Não foi possível concluir o upload da imagem.";
    }

    $conn->query("INSERT INTO cadastro (id, rm, nome, email, senha, avatar, tipo)  VALUES (NULL, '$rm', '$nome', '$email', '$senha','$avatarbd', '$tipo' )");
}
