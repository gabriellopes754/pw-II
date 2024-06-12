<?php
session_start();
session_destroy();
echo "<center><h1>Sessão finalizada</h1><center>";
header("refresh:5, login.html");
