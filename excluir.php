<?php
include "conexao.php";
$id = $_GET['id'];
$dados = $conn->query("SELECT id FROM usuarios where id = $id");
while ($linha = mysqli_fetch_array($dados)) {
    $id  = $linha['id'];
}
mysqli_query($conn, "DELETE FROM usuarios WHERE  id = '$id' ");
echo "Dados Apagados para SEMPRE!!!";
header("refresh:2;url=admin.php");
