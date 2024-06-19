<?php
include "conexao.php";

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$tipo_usuario = $_POST['tipo_usuario'];


$emailJaCadastrado = false;
$dados = $conn->query("SELECT email FROM usuarios");

while ($linha = $dados->fetch_assoc()) {
    if ($email == $linha['email']) {
        $emailJaCadastrado = true;
        break;
    }
}

if ($emailJaCadastrado) {
    echo "Email já cadastrado";
} else {
    $conn->query("INSERT INTO usuarios (nome, email, senha, tipo_usuario) VALUES ('$nome', '$email', '$senha', '$tipo_usuario')");
};
if ($conn->affected_rows > 0) {
    echo "Cadastro realizado com sucesso";
    header("refresh:2;url=login.php");
} else {
    echo "Erro ao cadastrar usuário";
};

$conn->close();
?>