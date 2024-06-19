<?php
 include "./headerfooter/header.php";
session_start();
session_destroy();
echo "<center><h1>Sessão finalizada</h1><center>";
header("refresh:3, login.php");
include "./headerfooter/footer.php"; ?>