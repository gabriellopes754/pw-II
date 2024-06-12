<?php
include "conexao.php";

$rm = $_POST['rm'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

// fazer a validacao do email, se for meu atualizar se for de outra nao atualizar


$vemail = $conn->query("SELECT * FROM cadastro WHERE email = '$email' AND rm = '$rm'");
$check = mysqli_num_rows($vemail);

//echo "$check";

if($check == 1){
    echo "OI";

}





/* $conn->query("UPDATE cadastro SET nome = '$nome', email = '$email', senha ='$senha' WHERE rm = $rm");
    echo "Dados Atualizados"; */
   // header("refresh:3;url=listar.php");