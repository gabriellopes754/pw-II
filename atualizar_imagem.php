<?php
include "conexao.php";
$rm = $_POST['rm'];
$avatar = $_FILES['avatar']['name'];
$pasta = "img/";
$ext = strtolower(pathinfo($avatar, PATHINFO_EXTENSION));
$avatarf = $rm . '.' . $ext;
$avatarbd = $pasta . $avatarf;

$dados = $conn->query("SELECT avatar FROM cadastro where rm = $rm");
while ($linha = mysqli_fetch_array($dados)) {
    $avatarbdo  = $linha['avatar'];
}

unlink("$avatarbdo");

if (move_uploaded_file($_FILES['avatar']['tmp_name'], $pasta . $avatarf)) {
} else {
    $result_message = "Não foi possível concluir o upload da imagem.";
}

$conn->query("UPDATE cadastro SET avatar = '$avatarbd' WHERE rm = $rm");
echo "$avatarbd";