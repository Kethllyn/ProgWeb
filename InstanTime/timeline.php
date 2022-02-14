<?php
require_once "app/util.php";
session_start();
$user = $_SESSION["autenticado"];
if (!isset($user)){
  header("Location: login.php");
  exit();
}
?>
<html>
<body>
    <h1>Bem vindo <?=$user["nome"]?></h1>

</body>
</html>
