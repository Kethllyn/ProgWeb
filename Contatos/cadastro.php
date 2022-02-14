<!DOCTYPE html>
<html lang="pt" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"/>
  </head>
  <body>

<?php
require_once "banco.php";

$email = $_POST['email'];
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$apelido = $_POST['apelido'];

if (empty($email)) {
  die("E-mail obrigatório");
}
if (empty($nome)) {
  die("Nome obrigatório");
}
if (empty($telefone)) {
  die("Número de telefone obrigatório");
}
try{
  $sql = "INSERT INTO usuarios(nome, email, apelido, telefone) VALUES (:nome, :email, :apelido, :telefone)";
  $stmt = getConnection()->prepare($sql);
  $stmt->bindParam(':nome', $nome);
  $stmt->bindParam(':apelido', $apelido);
  $stmt->bindParam(':email', $email);
  $stmt->bindParam(':telefone', $telefone);
  if ($stmt->execute())
      echo "Formulário enviado";

  else
      echo "Ocorreu um erro";
}catch(PDOException $e) {
  echo 'Erro: ' . $e->getMessage();
}

?>
    <br>
    <a href="listar.php"  class="button button-novo" >Ver a lista de Contatos</a><br><br><br>
    <a href="contato.html"  class="button button-novo" >Registrar novo contato</a>
  </body>
</html>
