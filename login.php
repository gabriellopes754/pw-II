
<?php include "./headerfooter/header.php"; ?>
<!doctype html>
<html lang="en">


<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <div class="container">
        <h1>Login</h1>
        <form action="logar.php" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="login" class="form-label">Email</label>
                <input type="text" class="form-control" name="login" id="login" aria-describedby="login" placeholder=""
                    required>
                <small id="login" class="form-text text-muted">Digite o seu Email</small>
            </div>
            <div class="mb-3">
                <label for="senha" class="form-label">Password</label>
                <input type="password" class="form-control" name="senha" id="senha" placeholder="">
                <small id="helpId" class="form-text text-muted">Digite sua senha</small>
            </div>

            <button type="submit" class="btn btn-outline-secondary ms-2">Entrar</button>
            <a href="cadastro.html" class="btn btn-outline-secondary ms-2">Cadastre-se</a>
        </form>
    </div>




    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>
<?php include "./headerfooter/footer.php"; ?>