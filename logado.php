<?php
session_start();

if (!isset($_SESSION['login_session']) and !isset($_SESSION['nome_session']) and !isset($_SESSION['avatar_session'])) {
  echo "<center><h1>Favor efetuar Login</h1><center>";
  header("refresh:5, login.html");
  session_destroy();
}
else{

$username = $_SESSION['login_session'];
$nome = $_SESSION['nome_session'];
$avatar = $_SESSION['avatar_session'];


$html = <<<HTML
<!doctype html>
<html lang="pt-br">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="css/admin.css">

</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-md-11">
        <h1 class="center-text">
          <div class="centered-text">Olá $nome</div><br>
          <div class="centered-text"><a href='sair.php'>Sair</a></div>
        </h1>
        </h1>
      </div>
      <div class="col-md-1 text-center">
        <img src='$avatar' class='imgava'>
      </div>
    </div>
    <div class="parabens-box">
      <h2>Parabéns, você pesca muito</h2>
    </div>
  </div>

  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>

HTML;
echo "$html";
};
