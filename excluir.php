<?php
include "conexao.php";
$rm = $_GET['rm'];
$dados = $conn->query("SELECT avatar FROM cadastro where rm = $rm");
while ($linha = mysqli_fetch_array($dados)) {
    $avatar  = $linha['avatar'];
}
unlink("$avatar");
mysqli_query($conn, "DELETE FROM cadastro WHERE  rm = '$rm' ");
echo "Dados Apagados para SEMPRE!!!";
header("refresh:5;url=listar.php");
