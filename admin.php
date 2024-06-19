
<?php include "./headerfooter/header.php"; ?>
<!doctype html>
<html lang="pt-br">

<head>
  <title>Listagem</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="css/meu.css">
</head>

<body>
  <table border="1" width="100%">
    <tr>
    <td>id</td>
      <td>Nome</td>
      <td>Email</td>
      <td>Senha</td>
      <td>Tipo</td>
      <td colspan="2">AÇÃO</td>
    </tr>

    <a href="userdash.php" class="butao">Visão usuarios</a>
    <div class="centered-text"><a href='sair.php'>Sair</a></div>

    <?php

    //sessão do admin
    session_start();

   
    if (!isset($_SESSION['login_session'])) {
      header('Location: login.php'); 
      exit();
    }

    include "conexao.php";

    $dados = $conn->query("SELECT * FROM usuarios");
    while ($linha = $dados->fetch_assoc()) {
      $id = $linha['id'];
      $nome = $linha['nome'];
      $email = $linha['email'];
      $senha = $linha['senha'];
      $tipo_usuario = $linha['tipo_usuario'];


      echo "<tr>
            <td>$id</td>
            <td>$nome</td>
            <td>$email</td>
            <td>$senha</td>
            <td>$tipo_usuario</td>
            <td><a href='excluir.php?id=$id'>Excluir</a></td>
            <td><a href='atualizar.php?id=$id'>Alterar</a></td>
            </tr>";
    }
    ?>
  </table>
</body>

</html>
<?php include "./headerfooter/footer.php"; ?>