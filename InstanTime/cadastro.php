<?php
require_once "banco.php";

// var_dump($_GET);
// die;

$email = $_POST['email'];
$nome = $_POST['nome'];
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
if (isset($_POST['concordo']))
  $concordo = $_POST['concordo'];
//verificação
if (empty($email)) {
  die("E-mail obrigatório");
}
if (empty($nome)) {
  die("Nome obrigatório");
}
if (empty($usuario)) {
  die("Usuário obrigatório");
}
if (empty($senha)) {
  die("Senha obrigatória");
}
if (!isset($concordo)){
  die("Você precisa aceitar os termos para se cadastrar...");
}

try{
  $sql = "INSERT INTO usuarios(nome, email, usuario, senha) VALUES (:nome, :email, :usuario,:senha)";
  $stmt = getConnection()->prepare($sql);
  $stmt->bindParam(':nome', $nome);
  $stmt->bindParam(':usuario', $usuario);
  $stmt->bindParam(':email', $email);
  $stmt->bindParam(':senha', $senha);
  if ($stmt->execute())
    echo "Tudo certo";
  else
    echo "Falhou";
}catch(PDOException $e) {
  echo 'Erro: ' . $e->getMessage();
}

?>
