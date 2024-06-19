<?php
 include "./headerfooter/header.php";

include "conexao.php";
$id = $_GET['id'];

$dados = $conn->query("SELECT * FROM usuarios where id = $id");
while ($linha = $dados->fetch_assoc()) {

    $nome = $linha['nome'];
    $email = $linha['email'];
    $senha = $linha['senha'];}

?>

<!doctype html>
<html lang="pt-br">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <div class="container">
        <h1>Atualizar Dados</h1>
        <form action="update.php" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="nome" class="form-label">id</label>
                <input type="text" class="form-control" name="id" id="id" aria-describedby="helpId" placeholder=""  value="<?php echo"$id"?>" readonly>
                <small id="helpId" class="form-text text-muted">Não Editável</small>
            </div>
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" name="nome" id="nome" aria-describedby="helpId" placeholder=""  value="<?php echo"$nome"?>">
                <small id="helpId" class="form-text text-muted">Nome Completo</small>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Password</label>
                <input type="password" class="form-control" name="senha" id="senha" placeholder=""  value="<?php echo"$senha"?>">
                <small id="helpId" class="form-text text-muted">altere a senha</small>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelpId" placeholder=""  value="<?php echo"$email"?>">
                <small id="emailHelpId" class="form-text text-muted">Digite seu email @etec.sp.gov.br</small>
            </div>
            <button type="submit">Atualizar</button>
        </form>
    </div>




    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>
<?php include "./headerfooter/footer.php"; ?>